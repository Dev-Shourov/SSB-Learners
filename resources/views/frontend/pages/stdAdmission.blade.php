@extends('frontend.layout.template')

@section('style')
<link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
@endsection

@section('body')
    <section class="banner-bg" background>
        <!-- Banner Section Start -->
        <div class="container pd-t-150">
            <div class="row">
				<div class="col-md-6 si-left">
					<h3 class="ad-txt pd-b-20">Student Information</h3>
                    <form action="{{ route('admission.pay') }}" method="POST" class="information-form">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token" />
                    @csrf
						<div class="form-group">
							<input type="text" name="fullname" class="form-control border-gr" placeholder="Enter Your Full Name" required="required" autocomplete="off" 
                            value="@if(Auth::check()) {{ Auth::user()->name }} @else {{ old('name') }} @endif">
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" name="address" class="form-control border-gr" placeholder="Enter Your Address" 
                                    value="@if(Auth::check()) {{ Auth::user()->address }} @else {{ old('address') }} @endif" required="required" autocomplete="off">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<input type="text" name="country" class="form-control border-gr" placeholder="Country" 
                                    value="@if(Auth::check()) {{ Auth::user()->country }} @else {{ old('country') }} @endif" required="required" autocomplete="off">
								</div>
							</div>
							<div class="col-md-4 no-left-padding">
								<div class="form-group">
									<input type="text" name="city" class="form-control border-gr" placeholder="City / District" 
                                    value="@if(Auth::check()) {{ Auth::user()->city }} @else {{ old('city') }} @endif" required="required" autocomplete="off">
								</div>
							</div>

							<div class="col-md-4 no-left-padding">
								<div class="form-group">
									<input type="text" name="zipcode" class="form-control border-gr" placeholder="ZIP Code" 
                                    value="@if(Auth::check()) {{ Auth::user()->zip_code }} @else {{ old('zip_code') }} @endif" required="required" autocomplete="off">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="phone" class="form-control border-gr" placeholder="Phone Number" 
                                    value="@if(Auth::check()) {{ Auth::user()->phone }} @else {{ old('phone') }} @endif" required="required" autocomplete="off">
								</div>
							</div>

							<div class="col-md-6 no-left-padding">
								<div class="form-group">
									<input type="email" name="email" class="form-control border-gr" placeholder="Email Address" 
                                    value="@if(Auth::check()) {{ Auth::user()->email }} @else {{ old('email') }} @endif" required="required" autocomplete="off">
								</div>
							</div>
						</div>

						<input type="hidden" name="course_id" value="{{ $batch->Course->id }}">
						<input type="hidden" name="batch_id" value="{{ $batch->id }}">
						<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
						
						<div class="form-group">
							<input type="submit" name="payment" class="btn std-btn" value="Make Payment">
						</div>
					</form>

					


				</div>

				<div class="col-md-5 offset-md-1 payment-summary">
					<h4 class="ad-txt">Purchase Summary</h4>

					<ul class="list-group">
						<li class="list-group-item pd-ts border-no d-flex justify-content-between align-items-center">
						Advanced Graphic Design
						<span class="badge-pill">BDT 20000</span>
						</li>
					</ul>

					<hr>

						<form action="" method="POST" class="coupon-form">
							@csrf							
                            <div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<input type="hidden" name="batchId" value="2">
										<input type="text" name="code" id="code" placeholder="Apply Coupon Code" required="required" class="form-control border-gr" autocomplete="off" value="">
									</div>
								</div>

								<div class="col-md-4 no-left-padding">
									<div class="form-group">
										<input type="submit" name="applycoupon" id="coupon_btn" value="Apply" class="btn btn-block btn-coupon">
									</div>
								</div>
							</div>
						</form>

					<hr>
						<ul class="list-group">
                            <li class="list-group-item pd-ts border-no d-flex justify-content-between align-items-center">
                            <strong>Sub Total</strong>
                            <span class="badge-pill">BDT 20000</span>
                            </li>
                            <li class="list-group-item pd-ts border-no d-flex justify-content-between align-items-center">
                            <strong>Discount</strong>
                            <span class="badge-pill">(BDT <span id="discount">
                                0
                            </span>)</span>
                            </li>
                        </ul>
                    <hr>
                        <ul class="list-group">
                            <li class="list-group-item pd-ts border-no d-flex justify-content-between align-items-center">
                            <strong>Total</strong>
                            <span class="badge-pill"><strong>BDT 20000</strong></span>
                            </li>
                        </ul>			
				</div>
			</div>
        </div>
        <!-- Banner Section End -->
    </section>
@endsection