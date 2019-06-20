<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Event;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function list()
    {
        $events = Event::get();
        return view('event_list',compact('events'));
    }
    public function info($id)
    {
        $event = Event::find($id);
        return view('event_info', compact('event'));
    }
}