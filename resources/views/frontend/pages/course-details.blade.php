@extends('frontend.layout.template')

@section('body')
    <section class="banner-bg">
        <!-- Banner Section Start -->
        <div class="container landing-banner">
            <div class="row mg-t-200">
            <!-- Banner Left Content Start -->
            <div class="col-md-5 col-sm-12 col-12">
                <!-- Banner Heading Text -->
                <h1>{{ $batch->Course->eng_title }}</h1>

                <!-- Banner Course Short Info Text -->
                <div class="ln-course-info">
                <ul>
                    <li>Course Duration : <span>{{ $batch->Course->course_duration }}</span></li>
                    <li>Course Fee : <span>{{ $batch->Course->price }}</span></li>
                    <li>Class Time : <span>{{ $batch->class_timing }}</span></li>
                    <li>Class Starting Date : <span>{{ $batch->class_day }}*</span></li>
                </ul>
                </div>

                <!-- Banner Paragraph Text -->
                <p>{{ $batch->Course->motivational_content }}</p>

                <!-- Banner Button Content -->
                <div class="ln-banner-btn">
                <ul>
                    <li>
                    <a href="{{ route('std.admission', $batch->slug ) }}" class="btn-banner-one">Enorll Now</a>
                    </li>
                    <li>
                    <a href="" class="btn-banner-two"><i class="fa fa-download"></i> Curriculum</a>
                    </li>
                </ul>
                </div>
            </div>
            <!-- Banner Left Content End -->

            <!-- Banner Right Content Start -->
            <div class="col-md-7 col-sm-12 col-12">
                <img src="{{ asset('frontend/assets/img/banner-bg.png') }}" class="img-fluid">
            </div>
            <!-- Banner Right Content End -->
            </div>
        </div>
        <!-- Banner Section End -->
    </section>

    <!-- Landing Page Tab Area Section Start -->
    <section class="ln-tab-area" id="course-details">
      <div class="container">
        <div class="row">
          <!-- Left Side Tab Panel Start -->
          <div class="col-md-3">
            <div class="ln-tab-panel" id="sticky">
              <!-- Tab Logo -->
              <img src="{{ asset('frontend/assets/img/logo.png') }}" class="tab-logo">

              <!-- Tab Options Start -->
              <div class="ln-tab-options">
                <ul>
                  <li><a class="js-scroll-trigger" href="#course-details">Course Details</a></li>
                  <li><a class="js-scroll-trigger" href="#course-curriculum">Course Curriculum</a></li>
                  <li><a class="js-scroll-trigger" href="#course-for-you">Is This Course For You?</a></li>
                  <li><a class="js-scroll-trigger" href="#support-mentor">Support Center</a></li>
                  <li><a class="js-scroll-trigger" href="#student-work">What Our Graduates Are Doing?</a></li>
                  <li><a class="js-scroll-trigger" href="#course-mentor">Course Mentor</a> </li>
                  <li><a class="js-scroll-trigger" href="#news-coverage">News Coverage</a> </li>
                  <li><a class="js-scroll-trigger" href="#how-to-get-start">How Do I Start?</a></li>
                  <li><a class="js-scroll-trigger" href="#contact-us">Contact Us</a></li>
                </ul>
              </div>

              <!-- Tab Button -->
              <a href="#" class="tab-btn btn-block" data-toggle="modal" data-target="#admission">Enroll Now</a>
              <!-- Tab Options End -->
            </div>
          </div>
          <!-- Left Side Tab Panel End -->


          <!-- Right Side Tab Content Start -->
          <div class="col-md-8 offset-md-1 ln-course-details" >
            <!-- Section Title -->
            <h2>{{ $batch->Course->eng_title }}</h2>

            <!-- Section paragraph -->
            <p>{{ $batch->Course->course_opportunity }}</p>

            <div class="row">
              <!-- Course Details Video -->
              <div class="col-md-8">
                <div class="ln-course-details-video">
                  <!-- Video Thumbnail -->
                  <img src="{{ asset('frontend/assets/img/course-details-video.png') }}" class="img-fluid">
                  <!-- Hover Content -->
                  <div class="ln-course-details-video-hover">
                    <p><i class="fa fa-play"></i>Course Details Video</p>
                  </div>
                </div>
              </div>

              <!-- Course Details Summary -->
              <div class="col-md-4 mt-50">
                <div class="ln-course-details-summary">
                  <h2>{{ $batch->Course->graduate_num }}+</h2>
                  <h4>Graduates</h4>

                  <h2>{{ $batch->Course->class_hour }}h</h2>
                  <h4>Class Hours</h4>

                  <h2>{{ $batch->Course->total_lecture }}</h2>
                  <h4>Lectures</h4>

                  <h2>24/7</h2>
                  <h4>Online Support</h4>
                </div>
              </div>
            </div>
          </div>
          <!-- Right Side Tab Content End -->
        </div>
      </div>
    </section>
    <!-- Landing Page Tab Area Section End -->


    <!-- Course Details Section Start -->
    <section class="ln-course-curriculum-section" id="course-curriculum">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-4 col-sm-12 col-12">
            <!-- Section Title -->
            <h2>Our Course Curriculum</h2>

            <!-- Section paragraph -->
            <p>{{ $batch->Course->course_requirements }}</p>

            <!-- Step Process Wrapper Start -->
            <div class="process-wrapper">
              <!-- Progress Bar Container Start -->
              <div id="progress-bar-container">
                <!-- Step Heading Start -->
                <ul>
                  <li class="step step01 active">
                    <p>1 month</p>
                  </li>

                  <li class="step step02">
                    <p>2 month</p>
                  </li>

                  <li class="step step03">
                    <p>3 month</p>
                  </li>

                  <li class="step step04">
                    <p>4 month</p>
                  </li>

                  <li class="step step05">
                    <p>5 month</p>
                  </li>
                </ul>
                <!-- Step Heading End -->
                <div id="line">
                  <div id="line-progress"></div>
                </div>
              </div>
              <!-- Progress Bar Container End -->

              <!-- Progress Bar Percent Counter Start -->
              <div class="progress-percent-counter">
                <ul>
                  <li>0%</li>
                  <li>25%</li>
                  <li>50%</li>
                  <li>75%</li>
                  <li>100%</li>
                </ul>
              </div>
              <!-- Progress Bar Percent Counter End -->

              <!-- Progress Content Section Start -->
              <div id="progress-content-section">
                <!-- Step One Content -->
                <div class="section-content content01 active">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                      <h3>{{ $batch->Curriculum->one_en }}</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique justo eget dapibus tempor. Morbi iaculis lectus varius sapien aliquam volutpat. Suspendisse neque sem, scelerisque at sollicitudin sit amet, sodales ut enim. Aenean sagittis sem ac ultricies cursus. In hac habitasse platea dictumst. Donec tortor mauris, malesuada ac fermentum condimentum, porttitor a leo.</p>
                    </div>
                  </div>
                </div>


                <!-- Step Two Content -->
                <div class="section-content content02">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                      <h3>{{ $batch->Curriculum->two_en }}</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique justo eget dapibus tempor. Morbi iaculis lectus varius sapien aliquam volutpat. Suspendisse neque sem, scelerisque at sollicitudin sit amet, sodales ut enim. Aenean sagittis sem ac ultricies cursus. In hac habitasse platea dictumst. Donec tortor mauris, malesuada ac fermentum condimentum, porttitor a leo.</p>
                    </div>
                  </div>
                </div>

                <!-- Step Three Content -->
                <div class="section-content content03">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                      <h3>{{ $batch->Curriculum->three_en }}</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique justo eget dapibus tempor. Morbi iaculis lectus varius sapien aliquam volutpat. Suspendisse neque sem, scelerisque at sollicitudin sit amet, sodales ut enim. Aenean sagittis sem ac ultricies cursus. In hac habitasse platea dictumst. Donec tortor mauris, malesuada ac fermentum condimentum, porttitor a leo.</p>
                    </div>
                  </div>
                </div>

                <!-- Step Four Content-->
                <div class="section-content content04">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                      <h3>{{ $batch->Curriculum->four_en }}</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique justo eget dapibus tempor. Morbi iaculis lectus varius sapien aliquam volutpat. Suspendisse neque sem, scelerisque at sollicitudin sit amet, sodales ut enim. Aenean sagittis sem ac ultricies cursus. In hac habitasse platea dictumst. Donec tortor mauris, malesuada ac fermentum condimentum, porttitor a leo.</p>
                    </div>
                  </div>
                </div>

                <!-- Step Five Content -->
                <div class="section-content content05">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                      <h3>{{ $batch->Curriculum->five_en }}</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique justo eget dapibus tempor. Morbi iaculis lectus varius sapien aliquam volutpat. Suspendisse neque sem, scelerisque at sollicitudin sit amet, sodales ut enim. Aenean sagittis sem ac ultricies cursus. In hac habitasse platea dictumst. Donec tortor mauris, malesuada ac fermentum condimentum, porttitor a leo.</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Progress Content Section End -->

            </div>
            <!-- Step Process Wrapper End -->
          </div>
        </div>
      </div>
    </section>
    <!-- Course Details Section End -->


    <!-- Course For Whoom Section Start -->
    <section class="course-for-whoom" id="course-for-you">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-4">
            <!-- Section Title -->
            <h2>Is This Course <span class="blue-shadow"> Perfect For You? </span></h2>

            <!-- Section paragraph -->
            <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। </p>

            <div class="row">
              <!-- Left Side Images -->
              <div class="col-md-6">
                <img src="{{ asset('frontend/assets/img/Students.png') }}" class="image-one">
              </div>
              <!-- Right Side Content -->
              <div class="col-md-6">
                <!-- FAQ One -->
                <div class="faq-qa">
                  <h3>Are You A Student?</h3>
                  <p>There is no doubt that practical education in IT work along with studies will brighten the present and future of a student and provide various opportunities or job opportunities. Rather, in addition to studying, many students want to work part-time. If IT is proficient in a job, a student can work in the international market as well as study and bear the cost of his / her own tuition.</p>
                </div>
              </div>
            </div>

            <div class="row">
              <!-- Left Side Images -->
              <div class="col-md-6">
                <img src="{{ asset('frontend/assets/img/housewife.png') }}" class="image-one">
              </div>
              <!-- Right Side Content -->
              <div class="col-md-6">
                <!-- FAQ Two -->
                <div class="faq-qa">
                  <h3>Are You A Housewife?</h3>
                  <p>Many educated housewives want to earn a living by doing household chores as well. But even if they want to, they can't get involved in any job or business due to various problems. Freelancing may be the most suitable medium for them. A housewife can gain IT skills and earn an income and create an identity of her own by working every day or at a time like convenience.</p>
                </div>
              </div>
            </div>

            <div class="row">
              <!-- Left Side Images -->
              <div class="col-md-6">
                <img src="{{ asset('frontend/assets/img/Job-holder.png') }}" class="image-one">
              </div>
              <!-- Right Side Content -->
              <div class="col-md-6">
                <!-- FAQ Three -->
                <div class="faq-qa">
                  <h3>Are You A Job Holder?</h3>
                  <p>Many who are now employed may be struggling to make ends meet. Many may not want to work, they want to do something on their own. Many may want to use the time after work. If you spend 3/4 hours every day, everyone will learn to work through any IT course. It is possible to meet the demand of your extra income by freelancing.</p>
                </div>
              </div>
            </div>

            <div class="row">
              <!-- Left Side Images -->
              <div class="col-md-6">
                <img src="{{ asset('frontend/assets/img/Enterprenure.png') }}" class="image-one">
              </div>
              <!-- Right Side Content -->
              <div class="col-md-6">
                <!-- FAQ Four -->
                <div class="faq-qa">
                  <h3>Are You A Entrepreneur?</h3>
                  <p>No matter what business you do, you will need different IT jobs. If you have a good work idea of your own, you can do it successfully through others. But if you do not have any IT skills, then it will be very difficult to achieve success by working with any business or any new idea at present.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- Course For Whoom Section End -->


    <!-- Student Support System Section Start -->
    <section class="std-support-system" id="support-mentor">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-4">
            <!-- Section Title -->
            <h2>Special Support <span class="blue-shadow"> For Our Students </span></h2>

            <!-- Section paragraph -->
            <p>Students want to know more details even after different topic classes at different times. Can get stuck somewhere while doing class assignments. With a little support this time they can complete the work successfully. At the end of the course, support is also required while the client is working. So everyone will learn that he has arranged special support system for all his students. This support lifetime will be provided completely free.</p>

            <!-- Support Content Start -->
            <div class="row">
              <div class="col-md-3 std-support-system-content">
                <img src="{{ asset('frontend/assets/img/online-support.jpg') }}" class="img-fluid std-support-system-img">
              </div>
              <div class="col-md-9 std-support-system-content">
                <h3>Online Live Support </h3>
                <p>Everyone will learn whether it is an online live course or an offline course. Everyone will learn to come to any of its campuses from 9 am to 5 pm for support. The work can be understood directly from the mentor sitting in the support center on campus.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 std-support-system-content">
                <img src="{{ asset('frontend/assets/img/offline-support.jpg') }}" class="img-fluid std-support-system-img">
              </div>
              <div class="col-md-9 std-support-system-content">
                <h3>Offline Live Support </h3>
                <p>Everyone will learn whether it is an online live course or an offline course. Everyone will learn to come to any of its campuses from 9 am to 5 pm for support. The work can be understood directly from the mentor sitting in the support center on campus.</p>
              </div>
            </div>
            <!-- Support Content End -->
          </div>
        </div>
      </div>
    </section>
    <!-- Student Support System Section End -->


    <!-- Student Success Stories Section Start -->
    <section class="ln-std-success-stories" id="student-work">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-4">
            <!-- Section Title -->
            <h2>Success <span class="green-shadow"> Stories Of Our Students </span></h2>

            <!-- Section paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique justo eget dapibus tempor. Morbi iaculis lectus varius sapien aliquam volutpat. Suspendisse neque sem, scelerisque at sollicitudin sit amet, sodales ut enim. Aenean sagittis sem ac ultricies cursus. In hac habitasse platea dictumst. Donec tortor mauris, malesuada ac fermentum condimentum, porttitor a leo.</p>

            <!-- Student Success Slider Start -->
            <div class="success-slider owl-carousel owl-theme">
              <!-- Slider Item One -->
              <div class="item">
                <div class="row">
                  <div class="col-md-5">
                    <img src="{{ asset('frontend/assets/img/std-slider.png') }}" class="img-fluid">
                  </div>
                  <div class="col-md-7">
                    <div class="slider-content">
                      <h2>সাদিয়া জামান ফারাহ</h2>
                      <h3>ফুল স্ট্যাক ওয়েব ডেভেলপার</h3>
                      <h3>ফাইভার <span>লেভেল ২ সেলার</span></h3>

                      <p><i class="fa fa-quote-left"></i> অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও।  অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও।</p>

                      <a href="#" class="btn-slider">See Proves</a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slider Item Two -->
              <div class="item">
                <div class="row">
                  <div class="col-md-5">
                    <img src="{{ asset('frontend/assets/img/std-slider.png') }}" class="img-fluid">
                  </div>
                  <div class="col-md-7">
                    <div class="slider-content">
                      <h2>সাদিয়া জামান ফারাহ</h2>
                      <h3>ফুল স্ট্যাক ওয়েব ডেভেলপার</h3>
                      <h3>ফাইভার <span>লেভেল ২ সেলার</span></h3>

                      <p><i class="fa fa-quote-left"></i> অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও।  অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও।</p>

                      <a href="#" class="btn-slider">প্রমাণ দেখুন</a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Slider Item Three -->
              <div class="item">
                <div class="row">
                  <div class="col-md-5">
                    <img src="{{ asset('frontend/assets/img/std-slider.png') }}" class="img-fluid">
                  </div>
                  <div class="col-md-7">
                    <div class="slider-content">
                      <h2>সাদিয়া জামান ফারাহ</h2>
                      <h3>ফুল স্ট্যাক ওয়েব ডেভেলপার</h3>
                      <h3>ফাইভার <span>লেভেল ২ সেলার</span></h3>

                      <p><i class="fa fa-quote-left"></i> অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও।  অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও।</p>

                      <a href="#" class="btn-slider">প্রমাণ দেখুন</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Student Success Slider End -->
          </div>
        </div>
      </div>
    </section>
    <!-- Student Success Stories Section End -->


    <!-- Where Student Works Section Start -->
    <section class="where-students-worked">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-4">
            <!-- Section Title -->
            <h2>Where do our <span class="blue-shadow"> students work? </span></h2>

            <!-- Section paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique justo eget dapibus tempor. Morbi iaculis lectus varius sapien aliquam volutpat. Suspendisse neque sem, scelerisque at sollicitudin sit amet, sodales ut enim. Aenean sagittis sem ac ultricies cursus. In hac habitasse platea dictumst. Donec tortor mauris, malesuada ac fermentum condimentum, porttitor a leo.</p>

            <!-- Working At Fiverr -->
            <div class="row mt-35">
              <div class="col-md-3">
                <img src="{{ asset('frontend/assets/img/fiverr.png') }}" class="img-fluid std-working-at-img">
              </div>
              <div class="col-md-9 std-working-at">
                <h3>Fiverr</h3>
                <p>Fiverr Marketplace is very popular for new students. Because here newcomers can easily start their own freelancing career with small tasks. There are specific job packages or gigs that are convenient for both clients and freelancers.</p>
              </div>
            </div>

            <!-- Working At Upwork -->
            <div class="row mt-35">
              <div class="col-md-3">
                <img src="{{ asset('frontend/assets/img/upwork.png') }}" class="img-fluid std-working-at-img">
              </div>
              <div class="col-md-9 std-working-at">
                <h3>UpWork</h3>
                <p>Upwork is a large international job market. Here the big companies work by outsourcing. Many of our students are working as top rated freelancers in this market. The price of work here is a little higher in comparison.</p>
              </div>
            </div>

            <!-- Working At Remote Job -->
            <div class="row mt-35">
              <div class="col-md-3">
                <img src="{{ asset('frontend/assets/img/remote.png') }}" class="img-fluid std-working-at-img">
              </div>
              <div class="col-md-9 std-working-at">
                <h3>Remote Jobs</h3>
                <p>Providing good quality work in different marketplaces results in better client relationship with our students. Our students also work for many clients through social media outside the marketplace. As a result, many clients work on a monthly contract, which is like a job.</p>
              </div>
            </div>

            <!-- Working At Remote Job -->
            <div class="row mt-35">
              <div class="col-md-3">
                <img src="{{ asset('frontend/assets/img/remote1.png') }}" class="img-fluid std-working-at-img">
              </div>
              <div class="col-md-9 std-working-at">
                <h3>Local Jobs</h3>
                <p>Apart from the international market, Bangladesh also has various IT jobs. Domestic small and medium businesses are mainly outsourced. Many of our students do a lot of local work like this. Now payment can be taken easily through mobile banking. Many locals are working on various projects even if they want to speak directly. The advantage here is that one does not have to pay any commission which is applicable to all the above means.</p>
              </div>
            </div>

          </div>
        </div>        
      </div>
    </section>
    <!-- Where Student Works Section End -->


    <!-- News Coverage Section Start -->
    <section class="ln-news-coverage" id="news-coverage">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-4">
            <!-- Section Title -->
            <h2>News <span class="blue-shadow"> Coverage </span></h2>

            <!-- Section paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique justo eget dapibus tempor. Morbi iaculis lectus varius sapien aliquam volutpat. Suspendisse neque sem, scelerisque at sollicitudin sit amet, sodales ut enim. Aenean sagittis sem ac ultricies cursus. In hac habitasse platea dictumst. Donec tortor mauris, malesuada ac fermentum condimentum, porttitor a leo.</p>

            <!-- Student Success Slider Start -->
            <div class="news-slider owl-carousel owl-theme">
              <!-- Slider Item One -->
              <div class="item">
                <div class="row">
                  <div class="col-md-11">
                    <img src="{{ asset('frontend/assets/img/Prothom-Alo.png') }}" class="newspaper-logo">
                    <div class="news-coverage-thumbnail">
                      <img src="{{ asset('frontend/assets/img/prothom-alo-news.png') }}" class="img-fluid">
                      <div class="news-coverage-thumbnail-hover">
                        <h2>In our new campus</h2>
                        <a href="#" class="btn-news">Read More</a>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>

              <!-- Slider Item Two -->
              <div class="item">
                <div class="row">
                  <div class="col-md-11">
                    <img src="{{ asset('frontend/assets/img/jugantor.png') }}" class="newspaper-logo">
                    <div class="news-coverage-thumbnail">
                      <img src="{{ asset('frontend/assets/img/jugantor-news.png') }}" class="img-fluid">
                      <div class="news-coverage-thumbnail-hover">
                        <h2>৩ হাজারের বেশি শিক্ষার্থীকে...</h2>
                        <a href="#" class="btn-news">Read More</a>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>

              <!-- Slider Item Three -->
              <div class="item">

                <div class="row">
                  <div class="col-md-11">
                    <img src="{{ asset('frontend/assets/img/Prothom-Alo.png') }}" class="newspaper-logo">
                    <div class="news-coverage-thumbnail">
                      <img src="{{ asset('frontend/assets/img/prothom-alo-news.png') }}" class="img-fluid">
                      <div class="news-coverage-thumbnail-hover">
                        <h2>নতুন ক্যাম্পাসে শিখবে সবাই</h2>
                        <a href="#" class="btn-news">Read More</a>
                      </div>
                    </div>
                  </div>                  
                </div>

              </div>
            </div>
            <!-- Student Success Slider End -->
          </div>
        </div>
      </div>
    </section>
    <!-- News Coverage Section End -->


    <!-- Landing Page Course Mentor Section Start -->
    <section class="ln-course-mentor" id="course-mentor">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-4">
            <!-- Section Title -->
            <h2>Course Mentor</span></h2>
            <div class="ln-course-mentor-info">
              <!-- Mentor Image -->
              @if(!is_null($batch->mentor->profile_img))
              <img src="{{ asset('backend/img/mentor/'.$batch->mentor->profile_img) }}" class="img-fluid">
              @else
              <img src="{{ asset('frontend/assets/img/mentor.png') }}" class="img-fluid">
              @endif
              
              <!-- Course Mentor Content Start -->
              <div class="ln-course-mentor-content">
                <div class="row">
                  <div class="col-md-8">
                    <h2>{{ $batch->mentor->fullname }}</h2>
                    <h4>Mentor - {{ $batch->mentor->designation }} </h4>
                    <h4>Trained :  <span>2000 students</span></h4>
                  </div>

                  <div class="col-md-4">
                    <div class="marketplace-badge">
                      <ul>
                        <li><img src="{{ asset('frontend/assets/img/Level-2-Fiverr-Badge.jpg') }}"></li>
                        <li><img src="{{ asset('frontend/assets/img/trs-badge.png') }}"></li>
                      </ul>
                    </div>
                  </div>
                </div>

                <p>{{ $batch->mentor->description }}</p>

                <!-- Mentor Social Media Links Start -->
                <div class="mentor-social-media">
                  <ul>
                    <li>
                      <a href="">
                        <i class="fa fas-linkedin" data-toggle="tooltip" data-placement="bottom" title="Linkedin"></i>
                      </a>
                    </li>
                    <li>
                      <a href="">
                        <i class="fa fas-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="">
                        <i class="fa fas-twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="">
                        <i class="fa fas-instagram" data-toggle="tooltip" data-placement="bottom" title="Instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="">
                        <i class="fa fas-youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- Mentor Social Media Links End -->
              </div>
              <!-- Course Mentor Content End -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Landing Page Course Mentor Section End -->


    <!-- How To Start Section Start -->
    <section class="ln-how-to-start" id="how-to-get-start">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-4">
            <!-- Section Title -->
            <h2>How can you <span class="green-shadow"> Get Start? </span></h2>

            <!-- Section paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique justo eget dapibus tempor. Morbi iaculis lectus varius sapien aliquam volutpat. Suspendisse neque sem, scelerisque at sollicitudin sit amet, sodales ut enim. Aenean sagittis sem ac ultricies cursus. In hac habitasse platea dictumst. Donec tortor mauris, malesuada ac fermentum condimentum, porttitor a leo.</p>

            <!-- Course Payment -->
            <div class="row mt-35">
              <div class="col-md-3">
                <img src="{{ asset('frontend/assets/img/payment.jpg') }}" class="img-fluid how-to-start-img">
              </div>
              <div class="col-md-9 how-to-start-content">
                <h2>Pay for the course of your choice </h2>
                <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন</p>
              </div>
            </div>

            <!-- Class Link at Email -->
            <div class="row mt-35">
              <div class="col-md-3">
                <img src="{{ asset('frontend/assets/img/email-link.jpg') }}" class="img-fluid how-to-start-img">
              </div>
              <div class="col-md-9 how-to-start-content">
                <h2>See the class link in your email</h2>
                <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন</p>
              </div>
            </div>

            <!-- Attend The Class -->
            <div class="row mt-35">
              <div class="col-md-3">
                <img src="{{ asset('frontend/assets/img/classes.jpg') }}" class="img-fluid how-to-start-img">
              </div>
              <div class="col-md-9 how-to-start-content">
                <h2>Take classes on time</h2>
                <p>অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন</p>
              </div>
            </div>

            <!-- Computer Requirement Start -->
            <div class="computer-requirements">
              <h2>Minimum computer requirements </h2>
              <p>You can join our online live class from almost any device such as desktop computer, laptop, mobile or tab. But you have to have a computer to work. With a minimum of 4 GB RAM and Core i3 processor you can do the course work. But a computer with a higher speed will help you to work, but not compulsorily.</p>
            </div>
            <!-- Computer Requirement End -->

          </div>
        </div>
      </div>
    </section>
    <!-- How To Start Section End -->


    <!-- Landing Page Contact Us Section Start -->
    <section class="ln-contact-us" id="contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-4">
            <!-- Section Title -->
            <h2><span class="blue-shadow"> যোগাযোগ করুন </span></h2>

            <!-- Section paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique justo eget dapibus tempor. Morbi iaculis lectus varius sapien aliquam volutpat. Suspendisse neque sem, scelerisque at sollicitudin sit amet, sodales ut enim. Aenean sagittis sem ac ultricies cursus. In hac habitasse platea dictumst. Donec tortor mauris, malesuada ac fermentum condimentum, porttitor a leo.</p>

          
            <!-- Contact Us Form Start -->
            <div class="row">
              <div class="col-md-8">
                <div class="ln-contact-us-form">
                  <!-- Form Start -->
                  <form action="" method="">

                    <div class="form-group">
                      <label class="sr-only" for="message">Name</label>
                      <div class="input-group">
                        <div class="input-group-addon-textarea">
                          <span>আপনার বার্তা লেখুন</span>
                        </div>                        
                      </div>
                      <textarea name="message" class="form-control" id="message" placeholder="Type something..." required="required" rows="5"></textarea>
                    </div>
                    
                    <div class="form-group">
                      <label class="sr-only" for="name">Name</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <span>আপনার নাম</span>
                        </div>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Required Field" required="required" autocomplete="off">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="sr-only" for="address">Address</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <span>আপনার ঠিকানা</span>
                        </div>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Required Field" required="required" autocomplete="off">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="sr-only" for="mobile">Mobile</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <span>মোবাইল নাম্বার</span>
                        </div>
                        <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Required Field" required="required" autocomplete="off">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="sr-only" for="email">Email</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <span>আপনার ইমেইল</span>
                        </div>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Required Field" required="required" autocomplete="off">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="sr-only" for="course">Course</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <span>আপনার ইমেইল</span>
                        </div>
                        <select name="course" class="form-control" id="course" placeholder="Required Field" required="required">
                          <option>Select an Option</option>
                          <option>PHP and Laravel</option>
                          <option>Full Stack Web Development</option>
                          <option>Responsive Web Design</option>
                          <option>Graphic Design</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <input type="submit" name="send" class="btn-send" value="পাঠিয়ে দিন">
                    </div>

                  </form>
                  <!-- Form End --> 
                </div>
              </div>
            </div>            
            <!-- Contact Us Form End -->
          </div>
        </div>
      </div>
    </section>
    <!-- Landing Page Contact Us Section End -->


    <!-- Footer Section Start -->
    <section class="ln-footer" id="footer">
      <div class="container">
        <div class="row">
          <!-- Footer Page Nav Start -->
          <div class="col-md-10 col-sm-12 cl-12">
            <div class="ln-footer-nav">
              <ul>
                <li>
                  <a href="">আমাদের ক্যাম্পাস</a>
                </li>
                <li>
                  <a href="">কোর্স সমূহ</a>
                </li>
                <li>
                  <a href="">যোগাযোগ করুন</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Footer Page Nav End -->

          <!-- Footer Social Media Start -->
          <div class="col-md-2 col-sm-12 cl-12">
            <div class="ln-footer-social">
              <ul>
                <li>
                  <a href="" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a href="" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Footer Social Media End -->
        </div>
      </div>

      <!-- Back To Top Button Start -->
      <div class="scroll-top">
        <i class="fa fa-angle-double-up"></i>
      </div>
      <!-- Back To Top Button End -->
    </section>
    <!-- Footer Section End -->

    <!-- Mobile Footer Sticky Admission Button -->
    
      <a href="" data-toggle="modal" data-target="#admission">
        <div class="get-admission">
          Enroll Now
        </div>
      </a>
    
    <!-- Admission Modal -->

    <div class="modal fade" id="admission" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="modal-logo text-center">
              <img src="img/logo.png">
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" method="">

              <div class="form-group">
                <label class="modal-label">Full Name</label>
                <input type="text" name="name" class="form-control" required="required" autocomplete="off" placeholder="Required">
              </div>

              <div class="form-group">
                <label class="modal-label">Email Address</label>
                <input type="email" name="email" class="form-control" required="required" autocomplete="off" placeholder="Required"> 
              </div>

              <div class="form-group">
                <label class="modal-label">Contact No</label>
                <input type="text" name="phone" class="form-control" required="required" autocomplete="off" placeholder="Required"> 
              </div>

              <div class="form-group">
                <label class="modal-label">Gender</label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                  <label class="form-check-label" for="inlineCheckbox1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                  <label class="form-check-label" for="inlineCheckbox2">Female</label>
                </div>
              </div>

              <div class="form-group">
                <label class="modal-label">Address</label>
                <textarea class="form-control" name="address" required="required" placeholder="Required"></textarea>
              </div>

              <div class="form-group">
                <input type="submit" name="getAdmission" class="btn-send" value="Get Admission"> 
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
@endsection