@extends('backend.layout.template')

@section('body')
      <div class="br-pagetitle">
        <i class="icon ion-ios-book-outline"></i>
        <div>
          <h4>Curriculum</h4>
          <p class="mg-b-0">Manage Course Curriculum From here.</p>
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
                            <th>Course Title</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i = 1 @endphp
                        @foreach($curriculums as $curriculum)
                        <tr>
                            <td class="ver-align-md" scope="row">{{ $i++ }}</td>
                            <td class="ver-align-md tx-bold">{{ $curriculum->curriculum_name }}</td>
                            <td class="ver-align-md">
                                <!-- curriculum status -->
                                @if($curriculum->curriculum_status == 1)
                                <p class="badge badge-dark pd-5 mg-t-5 mg-b-5">Inactive</p>
                                @else
                                <p class="badge badge-info pd-5 mg-t-5 mg-b-5">&nbsp;Active&nbsp;</p>
                                @endif
                                <!-- curriculum status -->
                            </td>
                            <td class="ver-align-md td-width">
                                <div class="btn-group mg-t-5 mg-b-5" role="group" aria-label="Basic example">
                                    <a href="{{ route('curriculum.edit', $curriculum->id) }}" class="btn btn-warning btn-grouped">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-info btn-grouped">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('curriculum.delete', $curriculum->id) }}" class="btn btn-danger btn-grouped" data-toggle="modal" data-target="#curriculum{{ $curriculum->id }}">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                                <!-- modal -->
                                <div class="modal fade" id="curriculum{{ $curriculum->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">curriculum</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this curriculum?
                                    </div>
                                    <form action="{{ route('curriculum.delete', $curriculum->id) }}" method="POST" class="modal-footer">
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
                    @if($curriculums->count() == 0)
                        <div class="alert alert-info text-center mg-b-0">
                            No curriculum inserted. Please add new Curriculum
                        </div>
                    @endif
                </div>
            </div>
          </div>
        </div>
      </div>
@endsection