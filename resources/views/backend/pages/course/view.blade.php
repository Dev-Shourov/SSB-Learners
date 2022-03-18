@extends('backend.layout.template')

@section('body')
      <div class="br-pagetitle">
        <i class="icon ion-ios-bookmarks-outline"></i>
        <div>
          <h4>Manage All Courses</h4>
          <p class="mg-b-0">Edit & Manage all courses from here.</p>
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
                      <th>Thumbnail</th>
                      <th>Course Name</th>
                      <th>Regular Price</th>
                      <th>Course Duration</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $i = 1 @endphp
                    @foreach($courses as $course)
                    <tr>
                      <td class="ver-align-md" scope="row">{{ $i++ }}</td>
                      <td class="ver-align-md">
                        <!-- course thumbnail -->
                        @if(!empty($course->course_img))
                        <img class="course-img" src="{{ asset('backend/img/course/' . $course->course_img) }}">
                        @else
                        <img class="course-img" src="{{ asset('backend/img/course/ssb-learning-demo.png') }}">
                        @endif
                        <!-- course thumbnail -->
                      </td>
                      <td class="ver-align-md tx-bold">{{ $course->eng_title }}</td>
                      <td class="ver-align-md tx-bold">{{ $course->price }}</td>
                      <td class="ver-align-md tx-bold">{{ $course->course_duration }}</td>
                      <td class="ver-align-md">
                        <!-- course status -->
                        @if($course->course_status == 1)
                        <p class="badge badge-dark badge-pd mg-t-5 mg-b-5">Inactive</p>
                        @else
                        <p class="badge badge-info badge-pd mg-t-5 mg-b-5">&nbsp;Active&nbsp;</p>
                        @endif
                        <!-- course status -->
                      </td>
                      <td class="ver-align-md">
                        <div class="btn-group mg-t-5 mg-b-5" role="group" aria-label="Basic example">
                          <a href="{{ route('course.edit', $course->id) }}" class="btn btn-warning btn-grouped">
                            <i class="fa fa-edit"></i>
                          </a>
                          <a href="#" class="btn btn-info btn-grouped">
                            <i class="fa fa-eye"></i>
                          </a>
                          <a href="{{ route('course.delete', $course->id) }}" class="btn btn-danger btn-grouped" data-toggle="modal" data-target="#course{{ $course->id }}">
                            <i class="fa fa-trash"></i>
                          </a>
                        </div>
                        <!-- modal -->
                        <div class="modal fade" id="course{{ $course->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">course</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Are you sure you want to delete this course?
                              </div>
                              <form action="{{ route('course.delete', $course->id) }}" method="POST" class="modal-footer">
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
                @if($course->count() == 0)
                  <div class="alert alert-info text-center mg-b-0">
                      No course found. Please add new course
                  </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection