<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institute;
use App\Country;

class MainController extends Controller
{
    public function _construct(){

    }
    public function index( Request $request){
        return view( 'mainlanding')->with( ['pagename' => 'Redefining education']);
    }
}
