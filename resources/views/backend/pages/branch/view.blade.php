@extends('backend.layout.template')

@section('body')
      <div class="br-pagetitle">
        <i class="icon ion-ios-photos-outline"></i>
        <div>
          <h4>Manage Branch</h4>
          <p class="mg-b-0">Manage all the branches of SSB Commerce.</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row row-sm">
          <div class="col-sm-12">
            <div class="card shadow-base card-body pd-25 bd-0">
              <div class="bd rounded table-responsive">
                <table class="table table-hover mg-b-0">
                  <thead class="thead-colored thead-info">
                    <tr>
                      <th scope="col">Sl</th>
                      <th scope="col">Branch Name</th>
                      <th scope="col">Address</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Meta Tags</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @php $i = 1 @endphp
                  @foreach($branches as $branch)
                    <tr>
                      <td class="ver-align-md" scope="row">{{ $i++ }}</td>
                      <td class="ver-align-md tx-bold">{{ $branch->name }}</td>
                      <td class="ver-align-md tx-bold">
                        <ul class="add-list">
                          <li>{{ $branch->address_1 }}</li>
                          <li>{{ $branch->address_2 }}</li>
                        </ul>
                      </td>
                      <td class="ver-align-md tx-bold">{{ $branch->phone }}</td>
                      <td class="ver-align-md tx-bold">{{ $branch->slug }}</td>
                      <!-- status query -->
                      @if($branch->status == 1)
                      <td class="ver-align-md"><p class="badge badge-dark badge-pd mg-t-5 mg-b-5">Inactive</p></td>
                      @elseif ($branch->status == 2) 
                      <td class="ver-align-md"><p class="badge badge-info badge-pd mg-t-5 mg-b-5">&nbsp; Active &nbsp;</p></td>
                      @endif 
                      <!-- status query -->
                      <td>
                      <div class="btn-group mg-t-5 mg-b-5" role="group" aria-label="Basic example">
                        <a href="{{ route('branch.edit', $branch->id) }}" class="btn btn-warning btn-grouped">
                          <i class="fa fa-edit"></i>
                        </a>
                        <a href="" class="btn btn-info btn-grouped">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a href="" class="btn btn-danger btn-grouped" data-toggle="modal" data-target="#branch{{ $branch->id }}">
                          <i class="fa fa-trash"></i>
                        </a>
                      </div>
                      <!-- Modal -->
                      <div class="modal fade" id="branch{{ $branch->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Branch</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Are you sure you want to delete this branch?
                            </div>
                            <form action="{{ route('branch.delete', $branch->id) }}" method="POST" class="modal-footer">
                              @csrf
                              <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                              <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                          </div>
                        </div>
                      </div>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                @if($branches->count()==0)
                  <div>Sorry No Branches found. Please Create a New Branch</div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection