<?php

namespace App\Http\Controllers\backend;

use App\Models\backend\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Toastr;
use File;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderby('id', 'asc')->get();
        return view('backend.pages.course.view', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course();
        
        $course->eng_title              = $request->eng_title;
        $course->slug                   = Str::slug($request->eng_title);
        $course->into_video             = $request->into_video;
        $course->price                  = $request->price;
        $course->graduate_num           = $request->graduate_num;
        $course->class_hour             = $request->class_hour;
        $course->total_lecture          = $request->total_lecture;
        $course->course_duration        = $request->course_duration;
        $course->motivational_content   = $request->motivational_content;
        $course->course_opportunity     = $request->course_opportunity;
        $course->course_requirements    = $request->course_requirements;
        $course->curriculumn_desc       = $request->curriculumn_desc;
        $course->coupon_status          = $request->coupon_status;
        $course->course_status          = $request->course_status;
        
        if ($request->course_img) {
            $courseImg  = $request->file('course_img');
            $randCourse = rand(). '.' .$courseImg->getClientOriginalExtension();
            $location   = public_path('backend/img/course/' . $randCourse);
            Image::make($courseImg)->save($location);
            $course->course_img = $randCourse;
        }

        $course->save();
        Toastr::success('New Course Added Successfully :)','Success');
        return redirect()->route('course.view');

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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        return view('backend.pages.course.edit', compact('course'));
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
        $course = Course::find($id);

        $course->eng_title              = $request->eng_title;
        $course->slug                   = Str::slug($request->eng_title);
        $course->into_video             = $request->into_video;
        $course->price                  = $request->price;
        $course->graduate_num           = $request->graduate_num;
        $course->class_hour             = $request->class_hour;
        $course->total_lecture          = $request->total_lecture;
        $course->course_duration        = $request->course_duration;
        $course->motivational_content   = $request->motivational_content;
        $course->course_opportunity     = $request->course_opportunity;
        $course->course_requirements    = $request->course_requirements; 
        $course->curriculumn_desc       = $request->curriculumn_desc;
        $course->coupon_status          = $request->coupon_status;
        $course->course_status          = $request->course_status;

        if (!empty($request->course_img)) {
            if (File::exists('backend/img/course/' . $course->course_img)) {
                File::delete('backend/img/course/' . $course->course_img);
            }
            $courseImg  = $request->file('course_img');
            $randCourse = rand(). '.' .$courseImg->getClientOriginalExtension();
            $location   = public_path('backend/img/course/' . $randCourse);
            Image::make($courseImg)->save($location);
            $course->course_img = $randCourse;
        }
        
        $course->save();
        Toastr::info('Course Information Updated :)','Update');
        return redirect()->route('course.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        if (!is_null($course)) {
            if (!empty($course->course_img)) {
               File::delete('backend/img/course/' . $course->course_img);
            }
            $course->delete();
            Toastr::info('Deleted Course Successfully','Delete');
            return redirect()->route('course.view');
        } else {
            Toastr::error('Operation failed :(','Error');
            return redirect()->route('course.view');
        }
    }
}
