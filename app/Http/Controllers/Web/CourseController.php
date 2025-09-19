<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Api\ApiCourseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CourseController extends Controller
{
public function CourseMaster()
{
    $api      = new ApiCourseController();
    $response = $api->Course(request());          // This returns JsonResponse
    $courses  = $response->getData()->responseData; // Extract the collection from JSON

 
    return view('admin.courses', compact('courses'));
}


public function AddCourse(Request $request){

        $api      = new ApiCourseController();
        $response = $api->Add_Course(request());

      return redirect()->back();
}

}