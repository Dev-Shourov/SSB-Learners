@extends('backend.layout.template')

@section('body')
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Dashboard</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
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
                            <th>Coupon Code</th>
                            <th>Coupon type</th>
                            <th>Course type</th>
                            <th>Fixed Amount</th>
                            <th>Percent Off</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i = 1 @endphp
                        @foreach($coupons as $coupon)
                        <tr>
                            <td class="ver-align-md" scope="row">{{ $i++ }}</td>

                            <td class="ver-align-md  tx-bold">{{ $coupon->code }}</td>

                            <td class="ver-align-md">
                                <!-- discount type -->
                                @if($coupon->discount_type == 1)
                                <p class="badge badge-info badge-pd mg-t-5 mg-b-5">&nbsp;Fixed&nbsp;</p>
                                @else
                                <p class="badge badge-success pd-5 mg-t-5 mg-b-5">Percentage</p>
                                @endif
                                <!-- discount type -->
                            </td>
                            
                            <td class="ver-align-md">
                                <!-- course type -->
                                @if($coupon->course_type == 1)
                                <p class="badge badge-info badge-pd mg-t-5 mg-b-5">Online</p>
                                @else
                                <p class="badge badge-success badge-pd mg-t-5 mg-b-5">Offline</p>
                                @endif
                                <!-- course type -->
                            </td>

                            <td class="ver-align-md">
                                @if(!is_null($coupon->fixed_value))
                                <p class="mg-b-0 tx-bold">{{ $coupon->fixed_value }}</p>
                                @else
                                <p  class="mg-b-0 tx-bold">--/--</p>
                                @endif
                            </td>

                            <td class="ver-align-md">
                                @if(!is_null($coupon->percentage_value))
                                <p class="mg-b-0 tx-bold">{{ $coupon->percentage_value }}</p>
                                @else
                                <p class="mg-b-0 tx-bold">--/--</p>
                                @endif
                            </td>

                            <td class="ver-align-md">
                                <!-- coupon status -->
                                @if($coupon->status == 1)
                                <p class="badge badge-dark badge-pd mg-t-5 mg-b-5">Inactive</p>
                                @else
                                <p class="badge badge-success badge-pd mg-t-5 mg-b-5">&nbsp;Active&nbsp;</p>
                                @endif
                                <!-- coupon status -->
                            </td>
                            <td class="ver-align-md td-width">
                                <div class="btn-group mg-t-5 mg-b-5" role="group" aria-label="Basic example">
                                    <a href="{{ route('coupon.edit', $coupon->id) }}" class="btn btn-warning btn-grouped">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-info btn-grouped">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('coupon.delete', $coupon->id) }}" class="btn btn-danger btn-grouped" data-toggle="modal" data-target="#coupon{{ $coupon->id }}">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                                <!-- modal -->
                                <div class="modal fade" id="coupon{{ $coupon->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">coupon</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this coupon?
                                    </div>
                                    <form action="{{ route('coupon.delete', $coupon->id) }}" method="POST" class="modal-footer">
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
                    @if($coupons->count() == 0)
                        <div class="alert alert-info text-center mg-b-0">
                            No coupon generated. Please generate a new coupon
                        </div>
                    @endif
                </div>
            </div>
          </div>
        </div>
      </div>
@endsection