<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Sell_car;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        return view('frontend.index');
    }
    public function about() {
        return view('frontend.about');
    }
    public function car() {
        return view('frontend.car');
    }
    public function cardetail($slug) {
        return view('frontend.car_detail');
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
