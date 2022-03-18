@extends('backend.layout.template')

@section('body')
      <div class="br-pagetitle">
        <i class="icon ion-ios-people-outline"></i>
        <div>
          <h4>Manage Mentors</h4>
          <p class="mg-b-0">Manage All Mentors of SSB Commerce.</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row row-sm">
          <div class="col-sm-12">
            <div class="card shadow-base card-body pd-25 bd-0">
                <div class="bd rounded table-responsive">
                    <table class="table table-hover mg-b-0">
                        <thead class="thead-colored thead-teal">
                          <tr>
                              <th>#SL</th>
                              <th>Profile</th>
                              <th>Mentor Name</th>
                              <th>Designation</th>
                              <th>Email</th>
                              <th>Address</th>
                              <th>Phone Number</th>
                              <th>Status</th>
                              <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                         @php $i = 1 @endphp
                         @foreach($mentors as $mentor)
                          <tr>
                            <td class="ver-align-md" scope="row">{{ $i++ }}</td>
                            <td class="ver-align-md">
                              <!-- course thumbnail -->
                              @if($mentor->profile_img == NULL)
                              <img src="{{ asset('backend/img/mentor/shourov.jpg') }}" alt="" class="mentor-img">
                              @else
                              <img src="{{ asset('backend/img/mentor/' . $mentor->profile_img) }}" alt="" class="mentor-img">
                              @endif
                              <!-- course thumbnail -->
                            </td>
                            <td class="ver-align-md  tx-bold">{{ $mentor->fullname }}</td>
                            <td class="ver-align-md  tx-bold">{{ $mentor->designation }}</td>
                            <td class="ver-align-md  tx-bold">{{ $mentor->email }}</td>
                            <td class="ver-align-md  tx-bold">{{ $mentor->address }}</td>
                            <td class="ver-align-md  tx-bold">{{ $mentor->phone }}</td>
                            <td class="ver-align-md">
                                <!-- mentor status -->
                                @if($mentor->status == 1)
                                    <p class="badge badge-dark badge-pd mg-t-5 mg-b-5">Inactive</p>
                                @else
                                    <p class="badge badge-success badge-pd mg-t-5 mg-b-5">&nbsp;Active&nbsp;</p>
                                @endif
                                <!-- mentor status -->
                            </td>
                            <td class="ver-align-md">
                                <div class="btn-group mg-t-5 mg-b-5" role="group" aria-label="Basic example">
                                    <a href="{{ route('mentor.edit', $mentor->id) }}" class="btn btn-warning btn-grouped">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-info btn-grouped">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-grouped" data-toggle="modal" data-target="#mentor{{ $mentor->id }}">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                                <!-- modal -->
                                <div class="modal fade" id="mentor{{ $mentor->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Mentors</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    Are you sure you want to remove this mentor?
                                    </div>
                                    <form action="{{ route('mentor.delete', $mentor->id) }}" method="POST" class="modal-footer">
                                        @csrf
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    </div>
                                </div>
                                </div>
                                <!-- modal -->
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>
      </div>
@endsection