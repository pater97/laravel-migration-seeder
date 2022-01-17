<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pack;
class PageController extends Controller
{
    public function index(){        //index si riferisce alla rotta
        $travels =Pack::all();     //creare una variabile nella quale inserire i dati del db
        return view('welcome',compact('travels'));   //creazione della rotta
    }
}
