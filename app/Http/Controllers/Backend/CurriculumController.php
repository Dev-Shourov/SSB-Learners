<?php

namespace App\Http\Controllers\Backend;

use App\Models\Backend\Curriculum;
use App\Models\Backend\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Toastr;
use File;

class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curriculums = Curriculum::orderby('id', 'asc')->get();
        return view('backend.pages.curriculum.view', compact('curriculums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.curriculum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curriculum = new Curriculum();

        //check course id value
        $curriculum->curriculum_name    = $request->curriculum_name;
        $curriculum->curriculum_status  = $request->curriculum_status;
        $curriculum->one_en             = $request->one_en;
        $curriculum->one_desc           = $request->one_desc;
        $curriculum->two_en             = $request->two_en;
        $curriculum->two_desc           = $request->two_desc;
        $curriculum->three_en           = $request->three_en;
        $curriculum->three_desc         = $request->three_desc;
        $curriculum->four_en            = $request->four_en;
        $curriculum->four_desc          = $request->four_desc;
        $curriculum->five_en            = $request->five_en;
        $curriculum->five_desc          = $request->five_desc;
        $curriculum->save();
        Toastr::success('New Curriculum Added Successfully :)','Success');
        return redirect()->route('curriculum.view');
        
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
        $curriculum = Curriculum::find($id);
        return view('backend.pages.curriculum.edit', compact('curriculum'));
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
        $curriculum = Curriculum::find($id);
        $curriculum->curriculum_name    = $request->curriculum_name;
        $curriculum->curriculum_status  = $request->curriculum_status;
        $curriculum->one_en             = $request->one_en;
        $curriculum->one_desc           = $request->one_desc;
        $curriculum->two_en             = $request->two_en;
        $curriculum->two_desc           = $request->two_desc;
        $curriculum->three_en           = $request->three_en;
        $curriculum->three_desc         = $request->three_desc;
        $curriculum->four_en            = $request->four_en;
        $curriculum->four_desc          = $request->four_desc;
        $curriculum->five_en            = $request->five_en;
        $curriculum->five_desc          = $request->five_desc;
        $curriculum->save();
        Toastr::info('Curriculum info updated :)','Success');
        return redirect()->route('curriculum.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curriculum = Curriculum::find($id);
        if (!is_null($curriculum)) {
            $curriculum->delete();
            Toastr::info('One Curriculum Deleted :)','Success');
            return redirect()->route('curriculum.view');
        } else {
            Toastr::error('Opereation Failed :)','Failed');
            return redirect()->route('curriculum.view');
        }
    }
}
