<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Event;
use Illuminate\Support\Facades\Auth;

class Create extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $event = [
        'event_title', 'represetative_name', 'date', 'area', 'category', 'event_info',
    ];
    public function user()
    {
        return $this->belongsTomany('App\User');
    }
    public function create()
    {
        return view('event_create', compact('user'));
    }


}
