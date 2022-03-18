@extends('backend.layout.template')

@section('body')
      <div class="br-pagetitle">
        <i class="icon ion-ios-people-outline"></i>
        <div>
          <h4>Add New Mentor</h4>
          <p class="mg-b-0">Add a new mentor for SSB Commerce.</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row row-sm">
          <div class="col-sm-12">
            <div class="card shadow-base card-body pd-25 bd-0">
              <form action="{{ route('mentor.store' )}}" method="POST" class="form-layout form-layout-1" enctype="multipart/form-data">
                @csrf
                <div class="row mg-b-25">
                  <!-- from element start -->
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="form-control-label label-color">Mentor's Name<span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="fullName">
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="form-control-label label-color">Email<span class="tx-danger">*</span></label>
                      <input class="form-control" type="email" name="email">
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="form-control-label label-color">Phone No<span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="phone">
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label label-color">Designation<span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="designation">
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label label-color">Address<span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="address">
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group  mg-b-10-force">
                      <label for="inputState" class="label-color">Status</label>
                      <select id="inputState" class="form-control" name="status">
                        <option value="1" selected>Please Choose a Status</option>
                        <option value="2">Active</option>
                        <option value="1">Inactive</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group mg-b-25-force mg-t-10-force">
                      <label class="form-control-label label-color">Profile Pic<span class="tx-danger">*</span></label>
                      <div class="custom-file">
                        <input type="file" id="file" class="custom-file-input" name="profileImg">
                        <label class="custom-file-label custom-file-label-primary"></label>
                      </div>
                    </div>
                    <div class="form-group mg-b-25-force">
                      <label class="form-control-label label-color">Facebook URL<span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="facebook">
                    </div>

                    <div class="form-group mg-b-25-force">
                      <label class="form-control-label label-color">Fiverr Logo<span class="tx-danger">*</span></label>
                      <div class="custom-file">
                        <input type="file" id="file" class="custom-file-input" name="fiverrImg">
                        <label class="custom-file-label custom-file-label-primary"></label>
                      </div>
                    </div>
                    <div class="form-group mg-b-25-force">
                      <label class="form-control-label label-color">Fiverr URL<span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="fiverr">
                    </div>

                    <div class="form-group mg-b-25-force">
                      <label class="form-control-label label-color">Upwork Logo<span class="tx-danger">*</span></label>
                      <div class="custom-file">
                        <input type="file" id="file" class="custom-file-input" name="upworkImg">
                        <label class="custom-file-label custom-file-label-primary"></label>
                      </div>
                    </div>
                    <div class="form-group mg-b-25-force">
                      <label class="form-control-label label-color">Upwork Logo<span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="upwork">
                    </div>
                  </div>

                  
                  <div class="col-sm-8">
                    <div class="form-group mg-b-10-force">
                        <label for="inputState" class="label-color">Description</label>
                        <textarea class="form-control" name="description" aria-label="With textarea" rows="25"></textarea>
                    </div>
                  </div>

                  <!-- form element ends -->
                </div>
                <div class="form-layout-footer">
                  <input type="submit" class="btn btn-info" value="Add New Branch">
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
@endsection