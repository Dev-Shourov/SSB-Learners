@extends('frontend.layout.template')

@section('style')
<link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
@endsection

@section('body')
    <section class="banner-bg" background>
        <!-- Banner Section Start -->
        <div class="container landing-banner pd-t-150">
            <div class="col-12">
                <h2 class="dash-text pd-b-20">Welcome, {{Auth::user()->name}}</h2>
                <div class="bg-white shadow rounded-lg d-block d-sm-flex">
				
				<!-- Tab Panel Head -->
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
                            @if(!is_null(Auth::user()->image))
                            <img class="img-std-profile" src="{{ asset('backend/img/user/'.Auth::user()->image) }}" alt="Profile Picture">
                            @else
							<img class="img-std-profile" src="https://shikhbeshobai.com/public/frontend/assets/images/avater.png" alt="Profile Picture">
                            @endif 							
						</div>
						<h4 class="text-center">{{Auth::user()->name}} </h4>
					</div>

					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active show" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i> 
							Profile
						</a>
						<a class="nav-link show" id="security-tab" data-toggle="pill" href="#security" role="tab" aria-controls="security" aria-selected="false">
							<i class="fa fa-tv text-center mr-1"></i> 
							Course Purchase History
						</a>
						<a class="nav-link show" id="application-tab" data-toggle="pill" href="#application" role="tab" aria-controls="application" aria-selected="false">
							<i class="fa fa-bell text-center mr-1"></i> 
							Notice Board
						</a>
                        <form method="POST" action="{{ route('logout') }}">
                        @csrf
						<a class="nav-link" aria-selected="false" href="{{ route('logout') }}"onclick="event.preventDefault(); this.closest('form').submit();">
							<i class="fa fa-sign-out-alt text-center mr-1"></i> 
							Logout
						</a>
                        </form>
					</div>

				</div>


				<!-- Tab Panel Body -->
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<!-- Profile Information -->
					<div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3>Your Profile</h3>
                        <form action="{{ route('std.edit', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                    <div class="col-md-6">										
                                            <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" class="form-control border-gr" value="{{ Auth::user()->name }}" required="required" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="text" class="form-control border-gr" value="{{ Auth::user()->email }}" required="required" readonly="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control border-gr" value="{{ Auth::user()->phone }}" required="required" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control border-gr" placeholder="Address" value="{{ Auth::user()->address }}" required="required" name="address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control border-gr" placeholder="City" value="{{ Auth::user()->city }}" required="required" name="city">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input type="text" class="form-control border-gr" placeholder="Country" value="{{ Auth::user()->country }}" required="required" name="country">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Zip Code</label>
                                            <input type="text" class="form-control border-gr" placeholder="Zip Code" value="{{ Auth::user()->zip_code }}" required="required" name="zipcode">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                            <label>Profile Image</label>
                                            <input type="file" name="image" value="{{ Auth::user()->image }}" class="form-control-file">
                                    </div>
                                
                                
                            </div>
                            <div>
                                <input type="hidden" name="stdID" value="">
                                <button type="submit" class="btn std-btn">Update</button>
                            </div>
                        </form>
					</div>

					<div class="tab-pane fade tab-heading" id="security" role="tabpanel" aria-labelledby="security-tab">
						<h3 class="mb-4">Course Purchase History</h3>
						<h4>Change Your Life with <span>Shikhbe Shobai</span></h4>
						<p>Shikhbe Shobai teaches you the skills you need to thrive and earn online - now and in the future.</p>
						<div class="row">
							<div class="col-md-12">
                                <!-- No Course Purchased -->
                                <div class="no-course-purchased">
                                    <div class="course-alert">
                                        <p><span>You Doesn't Choose Any Skill Development Course For Your Life Yet.</span> To grow with us please purchase now</p>
                                        <a href="https://shikhbeshobai.com/courses" class="btn std-btn">Our All Courses</a>
                                    </div>
                                </div>	
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
						<h3 class="mb-4">Notice Board</h3>
						<div class="row">
							<div class="col-md-12">
								<div class="notice-board">
								<h3>No Notice Found</h3>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
            </div>
        </div>
        <!-- Banner Section End -->
    </section>
@endsection