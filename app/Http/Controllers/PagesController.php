<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to Tukang Kita";
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $data = array(
            'title' => 'About Page',
            'about' => ['Elektronik','Otomotif', 'Landing']
        );
        return view('pages.about')->with($data);
    }
}
