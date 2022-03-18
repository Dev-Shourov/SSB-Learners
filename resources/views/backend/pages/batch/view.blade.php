@extends('backend.layout.template')

@section('body')
      <div class="br-pagetitle">
        <i class="icon ion-ios-paper-outline"></i>
        <div>
          <h4>Manage All Current Batch</h4>
          <p class="mg-b-0">Here you can manage all the running batch.</p>
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
                            <th>Mentor Name</th>
                            <th>Admission Status</th>
                            <th>Course Name</th>
                            <th>Mentor Name</th>
                            <th>Branch Name</th>
                            <th>Course Type</th>
                            <th>Starting Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i = 1 @endphp
                        @foreach($batches as $batch)
                        <tr>
                            <td class="ver-align-md" scope="row">{{ $i++ }}</td>
                            <td class="ver-align-md  tx-bold">{{ $batch->batch_name }}</td>
                            <!-- addmission type -->
                            <td class="ver-align-md">
                            @if($batch->admission_status == 1)
                            <p class="badge badge-dark pd-5 mg-t-5 mg-b-5">Addmission Ended</p>
                            @else
                            <p class="badge badge-success pd-5 mg-t-5 mg-b-5">Addmission On</p>
                            @endif
                            </td>
                            <!-- addmission type -->
                            <td class="ver-align-md  tx-bold">{{ $batch->course->eng_title }}</td>
                            <td class="ver-align-md  tx-bold">{{ $batch->mentor->fullname }}</td>
                            <td class="ver-align-md  tx-bold">{{ $batch->branch->name }}</td>
                            <!-- course type -->
                            <td class="ver-align-md">
                                @if($batch->batch_type == 1)
                                    <p class="badge badge-info badge-pd mg-t-5 mg-b-5">Online</p>
                                @else
                                    <p class="badge badge-warning badge-pd mg-t-5 mg-b-5">Offline</p>
                                @endif
                            </td>
                            <td class="ver-align-md  tx-bold">{{ $batch->starting_date }}</td>
                            <td class="ver-align-md">
                                <div class="btn-group mg-t-5 mg-b-5" role="group" aria-label="Basic example">
                                    <a href="{{ route('batch.edit', $batch->id) }}" class="btn btn-warning btn-grouped">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-info btn-grouped">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('batch.delete', $batch->id) }}" class="btn btn-danger btn-grouped" data-toggle="modal" data-target="#batch{{ $batch->id }}">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                                <!-- modal -->
                                <div class="modal fade" id="batch{{ $batch->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this batch?
                                    </div>
                                    <form action="{{ route('batch.delete', $batch->id) }}" method="POST" class="modal-footer">
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
                    @if($batches->count() == 0)
                        <div class="alert alert-info text-center mg-b-0">
                            No batch found. Please Create a new batch
                        </div>
                    @endif
                </div>
            </div>
          </div>
        </div>
      </div>
@endsection