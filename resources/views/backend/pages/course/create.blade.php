@extends('backend.layout.template')

@section('body')
      <div class="br-pagetitle">
        <i class="icon ion-ios-bookmarks-outline"></i>
        <div>
          <h4>Add New Course</h4>
          <p class="mg-b-0">Add a new course from here.</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row row-sm">
          <div class="col-sm-12">
            <div class="card shadow-base card-body pd-25 bd-0">
                <form action="{{ route('course.store' )}}" method="POST" class="form-layout form-layout-1" enctype="multipart/form-data">
                    @csrf
                    <div class="row mg-b-25">
                    <!-- from element start -->
                      <div class="col-sm-6 pd-r-40">
                        <div class="form-layout">
                            <div class="row">
                                <label class="col-sm-4 form-control-label">Course Name: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="eng_title" class="form-control" placeholder="Course Name">
                                </div>
                                </div><!-- row -->
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Intro Video URL: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="into_video" class="form-control" placeholder="URL">
                                </div>
                                </div>
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Course Duration (Month): <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="course_duration" class="form-control" placeholder="Course Duration">
                                </div>
                                </div>
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Total Graduates: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="graduate_num" class="form-control" placeholder="Total Graduates">
                                </div>
                                </div>
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Course Thumbnail: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <div class="custom-file">
                                        <input type="file" name="course_img" id="file" class="custom-file-input">
                                        <label class="custom-file-label"></label>
                                    </div>
                                </div>
                                </div>
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Course Requirements: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <textarea rows="4" class="form-control" name="course_requirements" placeholder="Course Requirements"></textarea>
                                </div>
                                <label class="col-sm-4 form-control-label mg-t-20">Curriculumn description: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-20">
                                    <textarea rows="4" class="form-control" name="curriculumn_desc" placeholder="Curriculumn description"></textarea>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-sm-6 pd-l-40">
                        <div class="form-layout">
                            <div class="row">
                                <label class="col-sm-4 form-control-label">Price: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" name="price" placeholder="Price">
                                </div>
                                </div><!-- row -->
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Total Lectures: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="number" class="form-control" name="total_lecture" placeholder="Total Lecture Number">
                                </div>
                                </div>
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Total Class Hour: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="number" class="form-control" name="class_hour" placeholder="Total Class Hour">
                                </div>
                                </div>
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Course Status: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control select2" name="course_status">
                                        <option value="1" disabled selected>Please Select Course Status</option>
                                        <option value="2">Active</option>
                                        <option value="1">Inactive</option>
                                    </select>
                                </div>
                                </div>
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Coupon Status: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control select2" name="coupon_status">
                                        <option value="1" disabled selected>Please Select Coupon Status</option>
                                        <option value="2">Active</option>
                                        <option value="1">Inactive</option>
                                    </select>
                                </div>
                                </div>
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Course Opportunity: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <textarea rows="4" class="form-control" name="course_opportunity" placeholder="Course Opportunity"></textarea>
                                </div>
                                </div>
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Course Motivation: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <textarea rows="4" class="form-control" name="motivational_content" placeholder="Course Motivation"></textarea>
                                </div>
                                </div>
                            </div><!-- form-layout-footer -->
                        </div>
                      </div>
                      <div class="form-layout-footer">
                        <input type="submit" class="btn btn-info" value="Add New Course">
                      </div>
                    <!-- form element ends -->
                    </div>
                    
                </form>
                </div>
            </div>
        </div>
      </div>
@endsection