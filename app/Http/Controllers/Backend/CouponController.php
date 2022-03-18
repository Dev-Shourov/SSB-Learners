<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Coupon;
use Toastr;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::orderby('code', 'asc')->get();
        return view('backend.pages.coupon.view', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coupon = new Coupon();

        // coupon code validation
        if (is_null($request->code)) {
            Toastr::error('Please Select a Coupon Code :(','Failed');
            return redirect()->route('coupon.create');
        } else {
            $coupon->code = $request->code;
        }
        // discount type validation
        if ($request->discount_type == 0) {
            Toastr::error('Please Select a Discount Type :(','Failed');
            return redirect()->route('coupon.create');
        } else {
            $coupon->discount_type = $request->discount_type;
        }
        // course type validation
        if ($request->discount_type == 0) {
            Toastr::error('Please Select a Course Type :(','Failed');
            return redirect()->route('coupon.create');
        } else {
            $coupon->course_type = $request->course_type;
        }
        // coupon value validation
        if ($request->discount_type == 1) {
            $coupon->fixed_value = $request->fixed_value;
        } else {
            $coupon->percentage_value = $request->percentage_value;
        }

        $coupon->status             = $request->status;
        $coupon->save();
        Toastr::success('Coupon Created Successfully :)','Success');
        return redirect()->route('coupon.view');
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
        $coupon = Coupon::find($id);
        return view('backend.pages.coupon.edit', compact('coupon'));
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
        $coupon = Coupon::find($id);
        // coupon code validation
        if (is_null($request->code)) {
            Toastr::error('Please Select a Valid Coupon Code :(','Failed');
            return redirect()->route('coupon.edit', $request->id);
        } else {
            $coupon->code = $request->code;
        }

        $coupon->discount_type  = $request->discount_type;
        $coupon->course_type    = $request->course_type;
        $coupon->status         = $request->status;

        // coupon value validation
        if ($request->discount_type == 1) {
            $coupon->fixed_value = $request->fixed_value;
        } else {
            $coupon->percentage_value = $request->percentage_value;
        }

        $coupon->save();
        Toastr::info('Coupon info updated :)','Success');
        return redirect()->route('coupon.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupon = Coupon::find($id);
        if (!is_null($coupon)) {
            $coupon->delete();
            Toastr::info('Coupon Deleted Successfully :)','Success');
            return redirect()->route('coupon.view');
        }
    }
}
