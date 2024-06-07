<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
         {
            return view('index');
         }
    public function about()
    {   $name = "Be";
        $names = array('Anh','Beta','xa','herry','bimbim');
        return view('about',['names'=>$names]);
    }

}
