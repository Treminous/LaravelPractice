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
    //Passing value
    public function about()
    {   
        $title="About Us";
        return view('pages.about')->with('title',$title);

    }
    //Passing multiple values
    public function service()
    {
        $data=array(
            'title'=>"SERVICES!"
        );
        return view('pages.service')->with($data);
    }
}
