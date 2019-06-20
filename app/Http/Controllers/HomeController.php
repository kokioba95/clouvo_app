<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Create;
use App\Event;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
    public function index()
    {
        return view('my_profile');
    }

    public function create()
    {
        return view('event_create', compact('user'));
    }

    public function post(Request $request)
    {
        // Auth::user()->events()->create()
        $event = new Event;
        // dd($event);
        $event->user_id = Auth::user()->id;
        $event->event_title = $request->input('event_title');
        $event->representative_name = $request->input('representative_name');
        $event->date = $request->input('event_date');
        $event->area = $request->input('area');
        $event->category = $request->input('Category');
        $event->event_info = $request->input('event_info');
        $event->image = 'image';
        $event->save();
        //Auth::user()->events()->save($event);
        return redirect('/event_list');
    }

}
