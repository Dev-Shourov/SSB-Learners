<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Batch;
use App\Models\Backend\Course;
use App\Models\Backend\Branch;
use App\Models\Backend\Mentor;
use App\Models\Backend\Curriculum;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\contactMail;
use Toastr;
use File;
use Image;
use Mail;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function course()
    {
        $batches = Batch::orderby('id', 'desc')->get();
        return view('frontend.pages.course', compact('batches'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function course_details($slug)
    {
        $batch      = Batch::orderby('id', 'asc')->where('slug', $slug)->first();
        // $curriculum = Curriculum::where('course_id', $batch->course_id)->first();
        if (!empty($batch)) {
            return view('frontend.pages.course-details', compact('batch'));
        } else{
            return redirect()->route('course.page');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function std_dashboard()
    {
        return view('frontend.pages.stdDashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_student(Request $request, $id)
    {
        $user           = User::find($id);
        $user->name     = $request->name;
        $user->phone    = $request->phone;
        $user->address  = $request->address;
        $user->city     = $request->city;
        $user->country  = $request->country;
        $user->zip_code = $request->zipcode;
        if (!is_null($request->image)) {
            if (File::exists('backend/img/user/'.$user->image)) {
                File::delete('backend/img/user/'.$user->image);
            }
            $image = $request->file('image');
            $std_img = time(). '.' .$image->getClientOriginalExtension();
            $location = public_path('backend/img/user/'.$std_img);
            Image::make($image)->save($location);
            $user->image = $std_img;
        }
        $user->save();
        Toastr::success('Your Information has been Updated :)','Success');
        return redirect()->route('std.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function std_admission($slug)
    {
        $batch = Batch::orderby('id', 'asc')->where('slug', $slug)->first();
        if (!empty($batch)) {
            return view('frontend.pages.stdAdmission', compact('batch'));
        } else{
            return redirect()->route('course.page');
        }
    }

    /**
     * Contact-us page redirection
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('frontend.pages.contact');
    }

    /**
     * Contact Message sending process
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contact_send(Request $request)
    {
        $emailData = [
            'name'      => $request->name,
            'email'     => $request->email,
            'address'   => $request->address,
            'phone'     => $request->phone,
            'message'   => $request->message
        ];
        Mail::to('appDevelopment4me2@gmail.com')->send(new contactMail($emailData));
        return back()->with('success_msg', 'Thank you for contacting us. Our executive will contact you soon');
    }

}
