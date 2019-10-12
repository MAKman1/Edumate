<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institute;
use App\Course;

class CourseController extends Controller
{
    public function searchCourses(Request $request){
        if($request->ajax()){
            $courseSlug = Institute::where('id', $request->institute_id)->first()->slug;
            $output="";
            $found = false;
            $courses = Course::where([['course_code','LIKE','%'.$request->search."%"], ['institute_id', $request->institute_id]])->get();
            if($courses){
                foreach ($courses as $key => $course) {
                    $found = true;
                    $output.="<tr>".
                    '<td><a class="search-link" href="'. url("/" . $courseSlug . "/" . strtolower($course->course_code) . "/peers") .'">'. $course->course_code.'</a></td>'.
                    '<td><i>'. $course->name .'</i></td>'.
                    '</tr>';
                }
                if( $found == false){
                    $output = "<tr><td><a class='search-link'><i>Course not found... wanna add it?<i></a></td><tr>";
                }
                // $output .= "</table>";
                return Response($output);
            }
            else{
                $output = "<tr><td><i>Course not found... wanna add it?<i></td><tr>";
                return Response($output);
            }
        }
    }

    public function popularCourses(Request $request){
        if($request->ajax()){
            $output="";
            $elementCount = 0;
            $courses = Course::where('institute_id', $request->institute_id)->take(6)->get();
            if($courses){
                foreach ($courses as $key => $course) {
                    $output .= '<div class="team-member"><div class="member-pic"><img src="../assets/images/team/1.png" alt=""></div>'.
                    '<div class="member-data"><div class="name">'.
                    '<h4 class="title">'. $course->course_code.'</h4>'.
                    '<p class="position">'. $course->name .'</p>'.
                    '</div></div></div>';
                    $elementCount += 1;
                }
                return Response(['html' => $output, 'size' => $elementCount]);
            }
            else{
                $output = "";
                return Response(['html' => $output, 'size' => $elementCount]);
            }
        }
    }
    public function showPeers( $institute, $course){
        $currentInstitute = Institute::where('slug', $institute)->first();
        $currentCourse = Course::where('course_code', 'like', $course)->first();
        if( $currentInstitute != null && $currentCourse != null){
            return view('peers')->with(['pagename' => 'Peers in ' . $currentInstitute->name, 'institute' => $currentInstitute]);
        } 
    }
}
