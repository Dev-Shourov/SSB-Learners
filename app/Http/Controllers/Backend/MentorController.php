<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Mentor;
use Illuminate\Support\Str;
use Toastr;
use File;
use Image;

class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mentors = Mentor::orderby('id', 'asc')->get();
        return view('backend.pages.mentor.view', compact('mentors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.mentor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mentor = new Mentor();

        $mentor->fullname       = $request->fullName;
        $mentor->designation    = $request->designation;
        $mentor->slug           = Str::slug($request->fullName);
        $mentor->description    = $request->description;
        $mentor->phone          = $request->phone;
        $mentor->email          = $request->email;
        $mentor->address        = $request->address;
        $mentor->fiverr_url     = $request->fiverr;
        $mentor->upwork_url     = $request->upwork;
        $mentor->facebook_url   = $request->facebook;
        $mentor->status         = $request->status;

        if ($request->fiverrImg) {
            $fiverrImg  = $request->file('fiverrImg');
            $newFiverr  = rand(). '.' .$fiverrImg->getClientOriginalExtension();
            $location   = public_path('backend/img/mentor/badge/' . $newFiverr);
            Image::make($fiverrImg)->save($location);
            $mentor->fiverr_img = $newFiverr;

        }
        if ($request->upworkImg) {
            $upworkImg  = $request->file('upworkImg');
            $newUpwork  = rand(). '.' . $upworkImg->getClientOriginalExtension();
            $location   = public_path('backend/img/mentor/badge/' . $newUpwork);
            Image::make($upworkImg)->save($location);
            $mentor->upwork_img = $newUpwork;

        }
        if ($request->profileImg) {
            $profileImg = $request->file('profileImg');
            $newProfile = time(). '.' .$profileImg->getClientOriginalExtension();
            $location   = public_path('backend/img/mentor/' . $newProfile);
            Image::make($profileImg)->save($location);
            $mentor->profile_img = $newProfile;
        }

        $mentor->save();
        return redirect()->route('mentor.view');

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
        $mentor = Mentor::find($id);
        if (!is_Null($mentor)) {
            return view('backend.pages.mentor.edit', compact('mentor'));
        } else {
            return redirect()->route('mentor.view');
        }
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
        $mentor = Mentor::find($id);
        $mentor->fullname       = $request->fullName;
        $mentor->designation    = $request->designation;
        $mentor->slug           = Str::slug($request->fullName);
        $mentor->description    = $request->description;
        $mentor->phone          = $request->phone;
        $mentor->email          = $request->email;
        $mentor->address        = $request->address;
        $mentor->fiverr_url     = $request->fiverr;
        $mentor->upwork_url     = $request->upwork;
        $mentor->facebook_url   = $request->facebook;
        $mentor->status         = $request->status;

        if (!empty($request->profileImg)) {
            if (File::exists('backend/img/mentor/' . $mentor->profileImg)) {
                File::delete('backend/img/mentor/' . $mentor->profileImg);
            }
            $profileImg = $request->file('profileImg');
            $newProfile = time(). '.' .$profileImg->getClientOriginalExtension();
            $location   = public_path('backend/img/mentor/' . $newProfile);
            Image::make($profileImg)->save($location);
            $mentor->profile_img = $newProfile;
        }

        if (!empty($request->fiverrImg)) {
            if (File::exists('backend/img/mentor/badge/' . $mentor->fiverrImg)) {
                File::delete('backend/img/mentor/badge/' . $mentor->fiverrImg);
            }
            $fiverrImg  = $request->file('fiverrImg');
            $newFiverr  = rand(). '.' .$fiverrImg->getClientOriginalExtension();
            $location   = public_path('backend/img/mentor/badge/' . $newFiverr);
            Image::make($fiverrImg)->save($location);
            $mentor->fiverr_img = $newFiverr;
        }
        
        if (!empty($request->upworkImg)) {
            if (File::exists('backend/img/mentor/badge/' . $mentor->upworkImg)) {
                File::delete('backend/img/mentor/badge/' . $mentor->upworkImg);
            }
            $upworkImg  = $request->file('upworkImg');
            $newUpwork  = rand(). '.' . $upworkImg->getClientOriginalExtension();
            $location   = public_path('backend/img/mentor/badge/' . $newUpwork);
            Image::make($upworkImg)->save($location);
            $mentor->upwork_img = $newUpwork;
        }
        $mentor->save();
        Toastr::info('Mentor Information Updated :)','Update');
        return redirect()->route('mentor.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mentor = Mentor::find($id);
        if (!is_null($mentor)) {
            if (!empty($mentor->profile_img)) {
                File::delete('backend/img/mentor/' . $mentor->profile_img);
            }
            if (!empty($mentor->fiverr_img)) {
                File::delete('backend/img/mentor/badge/' . $mentor->fiverr_img);
            }
            if (!empty($mentor->upwork_img)) {
                File::delete('backend/img/mentor/badge/' . $mentor->upwork_img);
            }
            $mentor->delete();
            Toastr::info('Deleted Branch Successfully','Delete');
            return redirect()->route('mentor.view');
        } else {
            Toastr::danger('Operation failed :(','Error');
            return redirect()->route('branch.view');
        }
    }
}
