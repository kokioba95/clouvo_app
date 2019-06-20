<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\CreateController;

use Illuminate\Http\Request;
use App\User;
use App\Create;
use Illuminate\Support\Facades\Auth;

class CreateController extends Controller
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
    
    protected function validator(array $event)
    {
        return Validator::make($event, [
            'event_title' => ['required', 'string', 'max:255'],
            'representative_name' => ['required', 'string', 'max:255'],
            'date' => ['required', 'string', 'date'],
            'area' => ['required', 'string'],
            'category' => ['required', 'string'],
            'event_info' => ['required', 'string', 'max:255'],
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $event
     * @return \App\Event
     */



}
