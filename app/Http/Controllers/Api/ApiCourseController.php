<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CourseModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ApiCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Course()
    {

        $course = CourseModel::where('is_active', 0)->get();

        return response()->json([
            'responseStatus'  => true,
            'responseMessage' => 'Data retrived successfully',
            'responseData'    => $course,
        ]);
    }
    public function Add_Course(Request $request)
    {

        Log::info($request->all());
        $validated = validator::make($request->all(), [
            'course_name'        => 'required|string',
            'course_description' => 'required|string',
            'course_price'       => 'required|numeric',
        ]);

        if ($validated->fails()) {
            return response()->json([
                'responseStatus' => 422, 'responseMessage' => 'Validation Error', 'responseData' => $validated->errors(),
            ], 422);
        }
            
            $course                     = new CourseModel();
            $course->course_name        =$request->input('course_name');
            $course->course_description = $request->input('course_description');
            $course->course_price       = $request->input('course_price');
            $course->save();

        return response()->json([
            'responseStatus'  => true,
            'responseMessage' => 'Course Added Successfully',
            'responseCode'    => 200,
        ]);

    }

    public function courseEdit(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'course_id'          => 'required|exists:course,id',
            'course_name'        => 'required|string|max:255',
            'course_description' => 'required|string|max:255',
            'course_price'       => 'required',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'responseStatus'  => 422,
                'responseMessage' => 'Validation Error',
                'responseData'    => $validate->errors(),
            ], 422);
        }

        $course                     = CourseModel::find($request->course_id);
        $course->course_name        = $request->course_name;
        $course->course_description = $request->course_description;
        $course->course_price       = $request->course_price;

        if ($course->save()) {
            return response()->json([
                'responseStatus'  => true,
                'responseMessage' => 'Course updated successfully',
                'responseData'    => $course,
                'responseCode   ' => 200,
            ]);
        }else{

            return response()->json([
                'responseStatus'  => false,
                'responseMessage' => 'Course updated failed',
                'responseData'    => [],
                'responseCode   ' => 500,
            ]);
            
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
