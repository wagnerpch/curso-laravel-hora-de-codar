<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        
        $events = Event::all(); //Chama todos os eventos do banco para a View

        return view('home',['events' => $events]);
    }

    public function create(){
        return view('events.create');
    }

}
