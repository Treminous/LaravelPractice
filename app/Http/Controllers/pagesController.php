<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{  //Passing value
    public  function index()
    {   
        $title="WELCOME TO LARAVEL!";
        return view('pages.index',compact('title'));
    }
    public function about()
    {
        return view('pages.about');

    }
    public function service()
    {
        return view('pages.service');
    }
}
