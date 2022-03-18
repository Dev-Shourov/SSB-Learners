<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Batch;
use App\Models\Backend\Course;
use App\Models\Backend\Branch;
use App\Models\Backend\Mentor;
use App\Models\Backend\Curriculum;
use Illuminate\Support\Str;
use Toastr;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batches = Batch::orderby('id', 'asc')->get();
        return view('backend.pages.batch.view', compact('batches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses    = Course::orderby('id', 'asc')->get();
        $branches   = Branch::orderby('id', 'asc')->get();
        $curriculums = Curriculum::orderby('id', 'asc')->get();
        $mentors    = Mentor::orderby('id', 'asc')->get();
        return view('backend.pages.batch.create', compact('courses', 'branches', 'mentors', 'curriculums'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $batch = new Batch();

        if ($request->course_id == 0 || $request->branch_id == 0 || $request->mentor_id == 0 || $request->curriculum_id == 0) {
            Toastr::error('Please fillup all the form :(','Failed');
            return redirect()->route('batch.create');
        } else {
            $batch->course_id       = $request->course_id;
            $batch->branch_id       = $request->branch_id;
            $batch->mentor_id       = $request->mentor_id;
            $batch->curriculum_id   = $request->curriculum_id;
        }
        $batch->batch_name          = $request->batch_name;
        $batch->slug                = Str::slug($request->batch_name);
        $batch->starting_date       = $request->starting_date;
        $batch->class_day           = $request->class_day;
        $batch->class_timing        = $request->class_timing;
        $batch->fb_group            = $request->fb_group;
        $batch->sit_number          = $request->sit_number;
        $batch->batch_type          = $request->batch_type;
        $batch->admission_status    = $request->admission_status;
        $batch->save();
        Toastr::success('New Batch Created Successfully :)','Success');
        return redirect()->route('batch.view');
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
        $batch          = Batch::find($id);
        $courses        = Course::orderby('id', 'asc')->get();
        $curriculums    = Curriculum::orderby('id', 'asc')->get();
        $branches       = Branch::orderby('id', 'asc')->get();
        $mentors        = Mentor::orderby('id', 'asc')->get();
        return view('backend.pages.batch.edit', compact('batch', 'courses', 'branches', 'mentors', 'curriculums'));
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
        $batch                      = Batch::find($id);
        $batch->batch_name          = $request->batch_name;
        $batch->slug                = Str::slug($request->batch_name);
        $batch->course_id           = $request->course_id;
        $batch->branch_id           = $request->branch_id;
        $batch->mentor_id           = $request->mentor_id;
        $batch->curriculum_id       = $request->curriculum_id;
        $batch->starting_date       = $request->starting_date;
        $batch->class_day           = $request->class_day;
        $batch->class_timing        = $request->class_timing;
        $batch->fb_group            = $request->fb_group;
        $batch->sit_number          = $request->sit_number;
        $batch->batch_type          = $request->batch_type;
        $batch->admission_status    = $request->admission_status;
        $batch->save();
        Toastr::info('Batch Info Updated Successfully :)','Success');
        return redirect()->route('batch.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $batch = Batch::find($id);
        if (!is_null($batch)) {
            $batch->delete();
            Toastr::info('Batch Deleted Successfully :)','Success');
            return redirect()->route('batch.view');
        } else {
            Toastr::error('Operation failed :)','error');
            return redirect()->route('batch.view');
        }
    }
}
