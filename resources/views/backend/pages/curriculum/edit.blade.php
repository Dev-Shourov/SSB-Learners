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
                <form action="{{ route('curriculum.update', $curriculum->id )}}" method="POST" class="form-layout form-layout-1" enctype="multipart/form-data">
                    @csrf
                    <!-- form element starts here -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-layout pd-r-40">
                                <h6 class="br-section-label pd-b-20">Curriculum</h6>
                                
                                <div class="row">
                                <label class="col-sm-4 form-control-label">Curriculum Name: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" name="curriculum_name" value="{{ $curriculum->curriculum_name }}" placeholder="Enter English Title">
                                </div>
                                </div><!-- row -->

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-layout pd-l-40">
                                <h6 class="br-section-label pd-b-20">Curriculum Status</h6>
                                
                                <div class="row">
                                <label class="col-sm-4 form-control-label">Status: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <select class="form-control select2" name="curriculum_status">
                                        <option @if($curriculum->curriculum_status == 2) selected @endif value="2">Active</option>
                                        <option @if($curriculum->curriculum_status == 1) selected @endif value="1">Inactive</option>
                                    </select>
                                </div>
                                </div><!-- row -->

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-layout pd-r-40">
                                <h6 class="br-section-label pd-b-20">First Step</h6>
                                
                                <div class="row">
                                <label class="col-sm-4 form-control-label">Title: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" name="one_en" value="{{ $curriculum->one_en }}" placeholder="Enter English Title">
                                </div>
                                </div><!-- row -->

                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Curriculum Description: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <textarea rows="2" class="form-control" name="one_desc" placeholder="Description">{{ $curriculum->one_desc }}</textarea>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-layout pd-l-40">
                                <h6 class="br-section-label pd-b-20">Second Step</h6>
                                
                                <div class="row">
                                <label class="col-sm-4 form-control-label">Title: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" name="two_en" value="{{ $curriculum->two_en }}" placeholder="Enter English Title">
                                </div>
                                </div><!-- row -->
                                
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Curriculum Description: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <textarea rows="2" class="form-control" name="two_desc" placeholder="Description">{{ $curriculum->two_desc }}</textarea>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-layout pd-r-40">
                                <h6 class="br-section-label pd-b-20">Third Step</h6>
                                
                                <div class="row">
                                <label class="col-sm-4 form-control-label">Title: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" name="three_en" value="{{ $curriculum->three_en }}" placeholder="Enter English Title">
                                </div>
                                </div><!-- row -->
                                
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Curriculum Description: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <textarea rows="2" class="form-control" name="three_desc" placeholder="Description">{{ $curriculum->three_desc }}</textarea>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-layout pd-l-40">
                                <h6 class="br-section-label pd-b-20">Fourth Step</h6>
                                
                                <div class="row">
                                <label class="col-sm-4 form-control-label">Title: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" name="four_en" value="{{ $curriculum->four_en }}" placeholder="Enter English Title">
                                </div>
                                </div><!-- row -->
                                
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Curriculum Description: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <textarea rows="2" class="form-control" name="four_desc" placeholder="Description">{{ $curriculum->four_desc }}</textarea>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-layout pd-r-40">
                                <h6 class="br-section-label pd-b-20">Fourth Step</h6>
                                
                                <div class="row">
                                <label class="col-sm-4 form-control-label">Title: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" name="five_en" value="{{ $curriculum->five_en }}" placeholder="Enter English Title">
                                </div>
                                </div><!-- row -->
                                
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Curriculum Description: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <textarea rows="2" class="form-control" name="five_desc" placeholder="Description">{{ $curriculum->five_desc }}</textarea>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-layout-footer pd-t-40">
                        <input type="submit" class="btn btn-info" value="Update Curriculum Info">
                    </div>
                    <!-- form element ends here -->
                </form>
            </div>
          </div>
        </div>
      </div>
@endsection