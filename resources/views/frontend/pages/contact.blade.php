@extends('frontend.layout.template')

@section('style')
<link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
@endsection

@section('body')
<section class="contact-us">
		<div class="container pd-t-150">
			<div class="row">
				<div class="col-md-4">
					<div class="contact-info">
						<!-- <h2>Contact Info</h2> -->

						<h4>Head Office - Banani</h4>

						<div class="row">
							<div class="col-md-2">
								<i class="fa fa-map-o"></i>
							</div>

							<div class="col-md-10">
								<p>House# 74 Road# 7, Block# H, Banani, Dhaka-1213</p>
							</div>
						</div>

						<div class="row">
							<div class="col-md-2">
								<i class="fa fa-phone"></i>
							</div>

							<div class="col-md-10">
								<p>01758066329, 01758066325, 01872650686, 01872657169</p>
							</div>
						</div>

						<h4>Branch Office - Mirpur</h4>

						<div class="row">
							<div class="col-md-2">
								<i class="fa fa-map-o"></i>
							</div>

							<div class="col-md-10">
								<p>HB Enterprise Bhaban. Plot-9, Road-4, Section -7, Mirpur-Dhaka 1216</p>
							</div>
						</div>

						<div class="row">
							<div class="col-md-2">
								<i class="fa fa-phone"></i>
							</div>

							<div class="col-md-10">
								<p>01872650688, 01872657167, 01872650685</p>
							</div>
						</div>

						<div class="social-media">
							<ul>
								<li><a href="https://www.facebook.com/ShikhbeShobai" targer="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/shikhbeshobai?lang=en" targer="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.linkedin.com/company/shikhbeshobai?originalSubdomain=bd" targer="_blank"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="https://www.instagram.com/explore/locations/1859879487620221/shikhbe-shobai-/" targer="_blank"><i class="fa fa-instagram"></i></a></li>
								<li><a href="https://www.youtube.com/c/ShikhbeShobai" targer="_blank"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
						
					</div>
				</div>


				<div class="col-md-8 contact-page">
					<span class="divder"> Have any Queries? </span>
					@if(Session::has('success_msg'))
					<div class="alert alert-success">{{ Session::get('success_msg') }}</div>
					@endif
					<form action="{{ route('send_msg') }}" method="POST" class="contactus-form">
                        @csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>First Name</label>
									<input type="text" name="name" class="form-control border-gr" required="required" autocomplete="off">
								</div>

								<div class="form-group">
									<label>Phone Number</label>
									<input type="text" name="phone" class="form-control border-gr" required="required" autocomplete="off">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label>Email Address</label>
									<input type="email" name="email" class="form-control border-gr" required="required" autocomplete="off">
								</div>

								<div class="form-group">
									<label>Address</label>
									<input type="text" name="address" class="form-control border-gr">
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label>Write Your Message Here</label>
									<textarea class="form-control border-gr" name="message" rows="5"></textarea>
								</div>
							</div>

							<div class="col-md-12">
								<input type="submit" name="send" class="btn std-btn" value="Send">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection