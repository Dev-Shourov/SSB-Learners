@extends('backend.layout.template')

@section('body')
      <div class="br-pagetitle">
        <i class="icon ion-ios-photos-outline"></i>
        <div>
          <h4>Add New Branch</h4>
          <p class="mg-b-0">Add a new branch in SSB Commerce.</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row row-sm">
          <div class="col-sm-12">
            <div class="card shadow-base card-body pd-25 bd-0">
              <form action="{{ route('branch.store' )}}" method="POST" class="form-layout form-layout-1">
                @csrf
                <div class="row mg-b-25">
                  <!-- from element start -->
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="form-control-label label-color">Branch Name (English) <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="name">
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="form-control-label label-color">Branch Name (Bangla) <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="banglaName">
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="form-control-label label-color">Phone No (use <span class="text-bold">,</span> to input multiple numbers) <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="phone">
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label label-color">Address (House No/Road No) <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="address1">
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label label-color">Address (Area) <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="address2">
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