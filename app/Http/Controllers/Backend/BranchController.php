<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Branch;
use Illuminate\Support\Str;
use Toastr;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::orderby('id', 'asc')->get();
        return view ('backend.pages.branch.view', compact('branches'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.pages.branch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $branch = new Branch();

        $branch->name           = $request->name;
        $branch->bangla_name    = $request->banglaName;
        $branch->slug           = str::slug($request->name);
        $branch->address_1      = $request->address1;
        $branch->address_2      = $request->address2;
        $branch->phone          = $request->phone;
        $branch->status         = $request->status;

        $branch->save();
        Toastr::success('New Branch Added Successfully :)','Success');
        return redirect()->route('branch.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branch = Branch::find($id);
        if (!is_null($branch)) {
            return view('backend.pages.branch.edit', compact('branch'));
        } else {
            return route('branch.view');
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
        $branch = Branch::find($id);
        $branch->name           = $request->name;
        $branch->bangla_name    = $request->banglaName;
        $branch->slug           = str::slug($request->name);
        $branch->address_1      = $request->address1;
        $branch->address_2      = $request->address2;
        $branch->phone          = $request->phone;
        $branch->status         = $request->status;

        $branch->save();
        Toastr::info('Branch Information Updated :)','Update');
        return redirect()->route('branch.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branch = Branch::find($id);
        if (!is_null($branch)) {
            $branch->delete();
            Toastr::info('Deleted Branch Successfully','Delete');
            return redirect()->route('branch.view');
        } else {
            Toastr::danger('Operation failed :(','Error');
            return route('branch.view');
        }
    }
}
