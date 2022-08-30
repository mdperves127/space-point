<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Car;
use App\Models\Contact;
use App\Models\Sell_car;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        return view('frontend.index', [
            'banners' => Banner::latest()->get(),
            'cars' => Car::take(12)->get()
        ]);
    }
    public function about() {
        return view('frontend.about');
    }
    public function car() {
        return view('frontend.car', [
            'cars' => Car::latest()->get()
        ]);
    }
    public function cardetails($slug) {
        
        $details = Car::where('slug', $slug)->firstOrFail();
        return view('frontend.car_detail', compact('details'));
    }
    public function sellcar() {
        return view('frontend.sell_car');
    }
    public function contact() {
        return view('frontend.contact');
    }
    
    public function contactpost(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required|max:500'
        ]);
        Contact::insert($request->except('_token'));
        return back()->with('contact_message', '✔️ Successfully send your message.');
    }
    public function sellcarpost(Request $request) {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'plate_number' => 'required',
            'message' => 'required',
            'attach' => 'required'
        ]);
        $sell_id = Sell_car::insertGetId($request->except('_token'));
        if($request->hasFile('attach')){
            $path = $request->file('attach')->store('sell_car');
            Sell_car::find($sell_id)->update([
                'attach' => $path
            ]);
        }
        return back()->with('contact_message', '✔️ Successfully send your message.');
    }
}
