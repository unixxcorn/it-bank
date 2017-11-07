<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
use App\payment;

class EventController extends Controller
{
    public function page(){
        $dataset = Events::find(1);
        return view('event')->with('dataset', $dataset);
    }
}
