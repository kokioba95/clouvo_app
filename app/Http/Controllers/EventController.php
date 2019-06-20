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
        return view('event_list');
    }
    public function info()
    {
        return view('event_info');
    }
}