@extends('backend.layout.template')

@section('body')
      <div class="br-pagetitle">
        <i class="icon ion-ios-paper-outline"></i>
        <div>
          <h4>Edit Batch</h4>
          <p class="mg-b-0">Add a new batch from here.</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row row-sm">
          <div class="col-sm-12">
            <div class="card shadow-base card-body pd-25 bd-0">
                <form action="{{ route('batch.update', $batch->id )}}" method="POST" class="form-layout form-layout-1" enctype="multipart/form-data">
                    @csrf
                    <!-- form element starts here -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-layout pd-r-40">
                                <div class="row">
                                <label class="col-sm-4 form-control-label">Batch Name: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" name="batch_name" value="{{ $batch->batch_name }}" placeholder="Enter Batch Name">
                                </div>
                                </div><!-- row -->

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-layout pd-l-40">
                                <div class="row">
                                <label class="col-sm-4 form-control-label">Course Name: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control select2" name="course_id">
                                        @foreach($courses as $course)
                                        <option value="{{ $course->id }}" @if($course->id == $batch->course_id) selected @endif>{{ $course->eng_title }}</option>
                                        @endforeach
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
                                    <label class="col-sm-4 form-control-label">Branch Name: <span class="tx-danger">*</span></label>
                                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                        <select class="form-control select2" name="branch_id">
                                            @foreach($branches as $branch)
                                            <option value="{{ $branch->id }}" @if($branch->id == $batch->branch_id) selected @endif>{{ $branch->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Mentor Name: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control select2" name="mentor_id">
                                        @foreach($mentors as $mentor)
                                        <option value="{{ $mentor->id }}" @if($mentor->id == $batch->mentor_id) selected @endif>{{ $mentor->fullname }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                </div>
                                
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Class Day: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" name="class_day" value="{{ $batch->class_day }}" placeholder="Enter Class Day">
                                </div>
                                </div>

                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Starting Date: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" name="starting_date" value="{{ $batch->starting_date }}" placeholder="Enter Batch Starting Date">
                                </div>
                                </div>

                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Total Seat No: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" name="sit_number" value="{{ $batch->sit_number }}" placeholder="Enter Total Seat Number">
                                </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-layout pd-l-40">
                                
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Curriculum Name: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control select2" name="curriculum_id">
                                        @foreach($curriculums as $curriculum)
                                        <option value="{{ $curriculum->id }}" @if($curriculum->id == $curriculum->curriculum_id) selected @endif>{{ $curriculum->curriculum_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                </div>

                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Class Time: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" name="class_timing" value="{{ $batch->class_timing }}" placeholder="Enter Class Time">
                                </div>
                                </div>

                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Facebook Group URL: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" name="fb_group" value="{{ $batch->fb_group }}" placeholder="Enter Batch Facebook Group Url">
                                </div>
                                </div>

                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Batch Type: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control select2" name="batch_type">
                                        <option value="2" @if($batch->batch_type == 2) selected @endif>Offline</option>
                                        <option value="1" @if($batch->batch_type == 1) selected @endif>Online</option>
                                    </select>
                                </div>
                                </div>

                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Admission Status: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control select2" name="admission_status">
                                        <option value="2" @if($batch->admission_status == 2) selected @endif>Admission On</option>
                                        <option value="1" @if($batch->admission_status == 1) selected @endif>Admission Off</option>
                                    </select>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-layout-footer pd-t-40">
                        <input type="submit" class="btn btn-info" value="Update Batch Info">
                      </div>
                    <!-- form element ends here -->
                </form>
            </div>
          </div>
        </div>
      </div>
@endsection