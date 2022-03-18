@extends('frontend.layout.template')

@section('body')
    <!-- :::::::::: Course Banner Section Start :::::::: -->
    <section class="course-banner">
      <div class="banner-wraper">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="banner-box">
                 <h1 class="text-center">Find The Right Course For you</h1>
                 <div class="search-box">
                   <div class="search-wrapper">
                      <input type="text" class="input" 
                      placeholder="What are you looking for?">
                     <div class="searchbtn"><i class="fas fa-search"></i></div>
                   </div>
                 </div>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- :::::::::: Course Banner Section End :::::::: -->

    <!-- :::::::::: Course Body Section Start :::::::: -->
    <section class="course-body">
      <div class="container">
        <!-- banani branch -->
        <div class="branch-box">
          <div class="row">
          <div class="col-12">
            <h3 class="text-center pt-4 pd-b-40">Banani Campus Offered Courses</h3>
          </div>
          </div>
          <div class="row">
           @foreach($batches as $batch)
           @if($batch->branch_id == 2)
           <div class="col-4">
            <div class="course-box">
              <div class="course-card">
                @if(!empty($batch->Course->course_img))
                <img class="card-img" src="{{ asset('backend/img/course/' . $batch->Course->course_img) }}" alt="">
                @else
                <img class="card-img" src="{{ asset('frontend/img/ssb-learning-thumbnail.png') }}" alt="">
                @endif
                <div class="card-info">
                  @if($batch->batch_type == 1)
                  <p class="badge badge-info">Online Course</p>
                  @else
                  <p class="badge badge-warning">Offline Course</p>
                  @endif
                  <a href=""><h5>{{ $batch->Course->eng_title }}</h5></a>
                  <p class="mentor">Mentor: <span>{{ $batch->Mentor->fullname }}</span></p>
                  <div class="row mt-n-10">
                    <div class="col-sm-4">
                      <p class="class-text">Class: <span class="class-num">{{ $batch->Course->total_lecture }}</span></p>
                    </div>
                    <div class="col-sm-8">
                      <p class="class-text ml-n-30">Hours: <span class="class-num">{{ $batch->Course->class_hour }}</span></p>
                    </div>
                  </div>
                  <p class="class-text mt-n-10">Seats Left: <span class="class-num">14</span></p>
                  <a class="card-btn" id="card-btn1" href="{{ route('course-details.page', $batch->slug) }}">Enroll Now</a>
                </div>
              </div>
            </div>
           </div>
           @endif
           @endforeach
          </div>
        </div>
        <!-- banani branch -->
        <!-- mirpur branch -->
        <div class="branch-box">
          <div class="row">
           <div class="col-12">
             <h3 class="text-center pt-4 pd-b-40">Mirpur Campus Offered Courses</h3>
           </div>
          </div>
          <div class="row">
          @foreach($batches as $batch)
           @if($batch->branch_id == 1)
           <div class="col-4">
            <div class="course-box">
              <div class="course-card">
                @if(!empty($batch->Course->course_img))
                <img class="card-img" src="{{ asset('backend/img/course/' . $batch->Course->course_img) }}" alt="">
                @else
                <img class="card-img" src="{{ asset('frontend/img/ssb-learning-thumbnail.png') }}" alt="">
                @endif
                <div class="card-info">
                  @if($batch->batch_type == 1)
                  <p class="badge badge-info">Online Course</p>
                  @else
                  <p class="badge badge-warning">Offline Course</p>
                  @endif
                  <a href=""><h5>{{ $batch->Course->eng_title }}</h5></a>
                  <p class="mentor">Mentor: <span>{{ $batch->Mentor->fullname }}</span></p>
                  <div class="row mt-n-10">
                    <div class="col-sm-4">
                      <p class="class-text">Class: <span class="class-num">{{ $batch->Course->total_lecture }}</span></p>
                    </div>
                    <div class="col-sm-8">
                      <p class="class-text ml-n-30">Hours: <span class="class-num">{{ $batch->Course->class_hour }}</span></p>
                    </div>
                  </div>
                  <p class="class-text mt-n-10">Seats Left: <span class="class-num">14</span></p>
                  <a class="card-btn" id="card-btn1" href="{{ route('course-details.page', $batch->slug) }}">Enroll Now</a>
                </div>
              </div>
            </div>
           </div>
           @endif
          @endforeach
          </div>
        </div>
        <!-- mirpur branch -->
        <!-- Online branch -->
        <div class="branch-box">
          <div class="row">
           <div class="col-12">
             <h3 class="text-center pt-4 pd-b-40">Our Online Offered Courses</h3>
           </div>
          </div>
          <div class="row">
          @foreach($batches as $batch)
           @if($batch->batch_type == 1)
           <div class="col-4">
            <div class="course-box">
              <div class="course-card">
                @if(!empty($batch->Course->course_img))
                <img class="card-img" src="{{ asset('backend/img/course/' . $batch->Course->course_img) }}" alt="">
                @else
                <img class="card-img" src="{{ asset('frontend/img/ssb-learning-thumbnail.png') }}" alt="">
                @endif
                <div class="card-info">
                  <p class="badge badge-info">Online Course</p>
                  <a href=""><h5>{{ $batch->Course->eng_title }}</h5></a>
                  <p class="mentor">Mentor: <span>{{ $batch->Mentor->fullname }}</span></p>
                  <div class="row mt-n-10">
                    <div class="col-sm-4">
                      <p class="class-text">Class: <span class="class-num">{{ $batch->Course->total_lecture }}</span></p>
                    </div>
                    <div class="col-sm-8">
                      <p class="class-text ml-n-30">Hours: <span class="class-num">{{ $batch->Course->class_hour }}</span></p>
                    </div>
                  </div>
                  <p class="class-text mt-n-10">Seats Left: <span class="class-num">14</span></p>
                  <a class="card-btn" id="card-btn1" href="">Enroll Now</a>
                </div>
              </div>
            </div>
           </div>
           @endif
          @endforeach
          </div>
        </div>
        <!-- Online branch -->
      </div>
    </section>
    <!-- :::::::::: Course Body Section End :::::::: -->
@endsection