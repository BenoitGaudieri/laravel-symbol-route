<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecapController extends Controller
{
    //recap page
    public function index(){
        // show the recap page
        return view("recap");
    }}
