<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institute;
use App\Country;

class InstituteController extends Controller
{
    public function _construct(){

    }
    public function index( Request $request, $institute){
        $currentInstitute = Institute::where( 'slug', $institute)->first();
        if( $currentInstitute != null){
            return view('institutehome')->with(['pagename' => $currentInstitute->name, 'institute' => $currentInstitute]);
        }
        else{
            abort(404);
        }
    }
    public function peerindex( Request $request, $institute){
        $currentInstitute = Institute::where( 'slug', $institute)->first();
        if( $currentInstitute != null){
            return view('peersearch')->with(['pagename' => 'Peers in ' . $currentInstitute->name, 'institute' => $currentInstitute]);
        }
        else{
            abort(404);
        }
    }
    public function searchInstitutes(Request $request){
        if($request->ajax()){
            $output="";
            $found = false;
            $institutes = Institute::where('name','LIKE','%'.$request->search."%")->get();
            if($institutes){
                foreach ($institutes as $key => $institute) {
                    $found = true;
                    $output.="<tr>".
                    '<td><a class="search-link" href="'. url("/" . $institute->slug).'">'.$institute->name.'</a></td>'.
                    '<td><i>'. Country::find( $institute->country_id)->name.'</i></td>'.
                    '</tr>';
                }
                if( $found == false){
                    $output = "<tr><td><a class='search-link'><i>Institute not found.. What next?<i></a></td><tr>";
                }
                // $output .= "</table>";
                return Response($output);
            }
            else{
                $output = "<tr><td><i>Institute not found.. What next?<i></td><tr>";
                return Response($output);
            }
        }
    }

}
