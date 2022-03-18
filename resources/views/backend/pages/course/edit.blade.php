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
                <form action="{{ route('course.update', $course->id)}}" method="POST" class="form-layout form-layout-1" enctype="multipart/form-data">
                    @csrf
                    <div class="row mg-b-25">
                    <!-- from element start -->
                      <div class="col-sm-6 pd-r-40">
                        <div class="form-layout">
                            <div class="row">
                                <label class="col-sm-4 form-control-label">Course Name: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="eng_title" class="form-control" placeholder="Course Name" value="{{ $course->eng_title }}">
                                </div>
                                </div><!-- row -->
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Intro Video URL: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="into_video" class="form-control" placeholder="URL" value="{{ $course->into_video }}">
                                </div>
                                </div>
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Course Duration (Month): <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="course_duration" class="form-control" placeholder="Course Duration" value="{{ $course->course_duration }}">
                                </div>
                                </div>
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Total Graduates: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" name="graduate_num" class="form-control" placeholder="Total Graduates" value="{{ $course->graduate_num }}">
                                </div>
                                </div>
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Course Thumbnail: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <div class="custom-file">
                                        <input type="file" name="course_img" id="file" class="custom-file-input" value="{{ $course->course_img }}">
                                        <label class="custom-file-label">{{ $course->course_img }}</label>
                                    </div>
                                </div>
                                </div>
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Course Requirements: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <textarea rows="4" class="form-control" name="course_requirements" placeholder="Course Requirements">{{ $course->course_requirements }}</textarea>
                                </div>
                                <label class="col-sm-4 form-control-label mg-t-20">Curriculumn description: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-20">
                                    <textarea rows="4" class="form-control" name="curriculumn_desc" placeholder="Curriculumn description">{{ $course->curriculumn_desc }}</textarea>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-sm-6 pd-l-40">
                        <div class="form-layout">
                            <div class="row">
                                <label class="col-sm-4 form-control-label">Price: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="number" class="form-control" name="price" placeholder="Price" value="{{ $course->price }}">
                                </div>
                                </div><!-- row -->
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Total Lectures: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="number" class="form-control" name="total_lecture" placeholder="Total Lecture Number" value="{{ $course->total_lecture }}">
                                </div>
                                </div>
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Total Class Hour: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="number" class="form-control" name="class_hour" placeholder="Total Class Hour" value="{{ $course->class_hour }}">
                                </div>
                                </div>
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Course Status: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control select2" name="course_status">
                                        <option value="2" @if($course->course_status == 2) selected @endif>Active</option>
                                        <option value="1" @if($course->course_status == 1) selected @endif>Inactive</option>
                                    </select>
                                </div>
                                </div>
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Coupon Status: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control select2" name="coupon_status">
                                        <option value="2" @if($course->coupon_status == 2) selected @endif>Active</option>
                                        <option value="1" @if($course->coupon_status == 1) selected @endif>Inactive</option>
                                    </select>
                                </div>
                                </div>
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Course Opportunity: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <textarea rows="4" class="form-control" name="course_opportunity" placeholder="Course Opportunity">{{ $course->course_opportunity }}</textarea>
                                </div>
                                </div>
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Course Motivation: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <textarea rows="4" class="form-control" name="motivational_content" placeholder="Course Motivation">{{ $course->motivational_content }}</textarea>
                                </div>
                                </div>
                            </div><!-- form-layout-footer -->
                        </div>
                      </div>
                      <div class="form-layout-footer">
                        <input type="submit" class="btn btn-info" value="Update Course Info">
                      </div>
                    <!-- form element ends -->
                    </div>
                    
                </form>
                </div>
            </div>
        </div>
      </div>
@endsection