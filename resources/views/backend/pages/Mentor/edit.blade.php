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
              <form action="{{ route('mentor.update', $mentor->id )}}" method="POST" class="form-layout form-layout-1" enctype="multipart/form-data">
                @csrf
                <div class="row mg-b-25">
                  <!-- from element start -->
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="form-control-label label-color">Mentor's Name<span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="fullName" value="{{ $mentor->fullname }}">
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="form-control-label label-color">Email<span class="tx-danger">*</span></label>
                      <input class="form-control" type="email" name="email" value="{{ $mentor->email }}">
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="form-control-label label-color">Phone No<span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="phone" value="{{ $mentor->phone }}">
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label label-color">Designation<span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="designation" value="{{ $mentor->designation }}">
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label label-color">Address<span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="address" value="{{ $mentor->address }}">
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group  mg-b-10-force">
                      <label for="inputState" class="label-color">Status</label>
                      <select id="inputState" class="form-control" name="status">
                        <option @if($mentor->status == 2) selected @endif value="2">Active</option>
                        <option @if($mentor->status == 1) selected @endif value="1">Inactive</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group mg-b-25-force mg-t-10-force">
                      <label class="form-control-label label-color">Profile Pic<span class="tx-danger">*</span></label>
                      <div class="custom-file">
                        <input type="file" id="file" class="custom-file-input" name="profileImg"  value="{{ $mentor->profile_img }}">
                        <label class="custom-file-label custom-file-label-primary"></label>
                      </div>
                    </div>
                    <div class="form-group mg-b-25-force">
                      <label class="form-control-label label-color">Facebook URL<span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="facebook"  value="{{ $mentor->facebook_url }}">
                    </div>

                    <div class="form-group mg-b-25-force">
                      <label class="form-control-label label-color">Fiverr Logo<span class="tx-danger">*</span></label>
                      <div class="custom-file">
                        <input type="file" id="file" class="custom-file-input" name="fiverrImg" value="{{ $mentor->fiverr_img }}">
                        <label class="custom-file-label custom-file-label-primary"></label>
                      </div>
                    </div>
                    <div class="form-group mg-b-25-force">
                      <label class="form-control-label label-color">Fiverr URL<span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="fiverr" value="{{ $mentor->fiverr_url }}">
                    </div>

                    <div class="form-group mg-b-25-force">
                      <label class="form-control-label label-color">Upwork Logo<span class="tx-danger">*</span></label>
                      <div class="custom-file">
                        <input type="file" id="file" class="custom-file-input" name="upworkImg" value="{{ $mentor->upwork_img }}">
                        <label class="custom-file-label custom-file-label-primary"></label>
                      </div>
                    </div>
                    <div class="form-group mg-b-25-force">
                      <label class="form-control-label label-color">Upwork url<span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="upwork" value="{{ $mentor->upwork_url }}">
                    </div>
                  </div>

                  
                  <div class="col-sm-8">
                    <div class="form-group mg-b-10-force">
                        <label for="inputState" class="label-color">Description</label>
                        <textarea class="form-control" name="description" aria-label="With textarea" rows="25">{{ $mentor->description }}</textarea>
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