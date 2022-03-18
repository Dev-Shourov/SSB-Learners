@extends('backend.layout.template')

@section('body')
      <div class="br-pagetitle">
        <i class="icon ion-ios-bookmarks-outline"></i>
        <div>
          <h4>Add New Curriculum</h4>
          <p class="mg-b-0">Add a new course curriculum from here.</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row row-sm">
          <div class="col-sm-12">
            <div class="card shadow-base card-body pd-25 bd-0">
                <form action="{{ route('curriculum.store' )}}" method="POST" class="form-layout form-layout-1" enctype="multipart/form-data">
                    @csrf
                    <!-- form element starts here -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-layout pd-r-40">
                                <h6 class="br-section-label pd-b-20">Curriculum Name</h6>
                                
                                <div class="row">
                                <label class="col-sm-4 form-control-label">Curriculum Name: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" name="curriculum_name" placeholder="Enter Curriculum Name">
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
                                        <option value="1" disabled selected>Please Select Curriculum Status</option>
                                        <option value="2">Active</option>
                                        <option value="1">Inactive</option>
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
                                    <input type="text" class="form-control" name="one_en" placeholder="Enter Title">
                                </div>
                                </div><!-- row -->                              

                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Curriculum Description: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <textarea rows="2" class="form-control" name="one_desc" placeholder="Description"></textarea>
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
                                    <input type="text" class="form-control" name="two_en" placeholder="Enter Title">
                                </div>
                                </div><!-- row -->
                                
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Curriculum Description: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <textarea rows="2" class="form-control" name="two_desc" placeholder="Description"></textarea>
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
                                    <input type="text" class="form-control" name="three_en" placeholder="Enter Title">
                                </div>
                                </div><!-- row -->
                                
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Curriculum Description: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <textarea rows="2" class="form-control" name="three_desc" placeholder="Description"></textarea>
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
                                    <input type="text" class="form-control" name="four_en" placeholder="Enter Title">
                                </div>
                                </div><!-- row -->
                                
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Curriculum Description: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <textarea rows="2" class="form-control" name="four_desc" placeholder="Description"></textarea>
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
                                    <input type="text" class="form-control" name="five_en" placeholder="Enter Title">
                                </div>
                                </div><!-- row -->
                                
                                <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Curriculum Description: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <textarea rows="2" class="form-control" name="five_desc" placeholder="Description"></textarea>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-layout-footer pd-t-40">
                        <input type="submit" class="btn btn-info" value="Add New Curriculum">
                      </div>
                    <!-- form element ends here -->
                </form>
            </div>
          </div>
        </div>
      </div>
@endsection