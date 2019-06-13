<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function list()
    {
        return view('event_list');
    }
<<<<<<< Updated upstream
}
=======
    public function info()
    {
        return view('event_info');
    }
}
>>>>>>> Stashed changes
