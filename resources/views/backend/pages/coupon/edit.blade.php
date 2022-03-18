@extends('backend.layout.template')

@section('body')
      <div class="br-pagetitle">
        <i class="icon ion-ios-bookmarks-outline"></i>
        <div>
          <h4>Add New Coupon</h4>
          <p class="mg-b-0">Add a new course coupon from here.</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row row-sm">
          <div class="col-sm-12">
            <div class="card shadow-base card-body pd-25 bd-0">
                <form action="{{ route('coupon.update', $coupon->id )}}" method="POST" class="form-layout form-layout-1" enctype="multipart/form-data">
                    @csrf
                    <!-- form element starts here -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-layout pd-r-40">
                                <h6 class="br-section-label pd-b-20">Coupon</h6>
                                
                                <div class="row">
                                <label class="col-sm-4 form-control-label">Coupon Code: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" name="code" value="{{ $coupon->code }}">
                                </div>
                                </div><!-- row -->

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-layout pd-l-40">
                                <h6 class="br-section-label pd-b-20">Select Either  fixed  or  percentage  value for coupon</h6>
                                
                                <div class="row">
                                <label class="col-sm-4 form-control-label">Discount Type: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control select2" name="discount_type">
                                        <option @if($coupon->discount_type == 2) selected @endif value="2">Percentage</option>
                                        <option @if($coupon->discount_type == 1) selected @endif value="1">Fixed</option>
                                    </select>
                                </div>
                                </div><!-- row -->

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-layout pd-r-40">

                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Course Type: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control select2" name="course_type">
                                        <option @if($coupon->course_type == 2) selected @endif value="2">Offline</option>
                                        <option @if($coupon->course_type == 1) selected @endif value="1">Online</option>
                                    </select>
                                </div>
                                </div>
                                
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Coupon Status: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control select2" name="status">
                                        <option @if($coupon->status == 2) selected @endif value="2">Active</option>
                                        <option @if($coupon->status == 1) selected @endif value="1">Inactive</option>
                                    </select>
                                </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-layout pd-l-40">
                                
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Fixed Amount: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" name="fixed_value" value="{{ $coupon->fixed_value }}">
                                </div>
                                </div><!-- row -->

                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Percent Amount [%]: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" name="percentage_value" value="{{ $coupon->percentage_value }}">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-layout-footer pd-t-40">
                        <input type="submit" class="btn btn-info" value="Update Coupon Info">
                      </div>
                    <!-- form element ends here -->
                </form>
            </div>
          </div>
        </div>
      </div>
@endsection