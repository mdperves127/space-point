<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Sell_car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('backend.dashboard.index');
    }
    public function contact() {
        return view('backend.contact.index', [
            'messages' => Contact::latest()->get(),
        ]);
    }
    public function contactdelete($id) {
        Contact::find($id)->delete();
        return back()->with('contact_delete', 'Delete Successful');
    }
    public function sellcar() {
        return view('backend.sell_car.index', [
            'cars' => Sell_car::latest()->get()
        ]);
    }
    public function sellcardownload($id) {
        return Storage::download(Sell_car::find($id)->attach);
    }
    public function sellcardelete($id){
        if (Sell_car::find($id)->attach) {
            Storage::delete(Sell_car::find($id)->attach);
        }
        Sell_car::find($id)->delete();
        return back()->with('delete_sellcar', "Successfully Delete.");
    }
}
