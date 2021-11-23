@include('layouts.header')
 <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content">

            </div>
            <!-- /.sticky-header__content -->
        </div>
        <!-- /.stricky-header -->
<!--Page Header Start-->
    <section class="page-header clearfix" style="background-image: url(assets/images/backgrounds/course.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-header__wrapper clearfix">
                        <div class="page-header__title">
                            <h2>{{$slot->course->name}}</h2>
                        </div>
                        <div class="page-header__menu">
                            <ul class="page-header__menu-list list-unstyled clearfix">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">{{$slot->course->name}}</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Page Header End-->


    <!--Start Teaching One-->
    <section class="teaching-one">
        <div class="container">
            <div class="row">


                <!--Start Teaching One Content-->
                <div class="col-xl-6 col-lg-7">
                    <div class="teaching-one__content">
                        <h2 class="teaching-one__content-title">{{$slot->course->name}}</h2>
                        <p class="teaching-one__content-text1">{{$slot->course->description}}</p>
                        <div class="teaching-one__content-img">
                            <img src="{{asset('assets/images/backgrounds/about.jpg')}}" alt=""/>
                        </div>
                        <p class="teaching-one__content-text2">{{$slot->descrpition}}</p>
                        <p class="teaching-one__content-text2"> Course Starts From {{\Carbon\Carbon::parse($slot->start_date)->format('M d Y')}} To {{\Carbon\Carbon::parse($slot->end_date)->format('M d Y')}}</p>
                        <p class="teaching-one__content-text2"> Total Seats: {{$slot->seats}}</p>
                    </div>
                </div>
                <!--End Teaching One Content-->
                <!--Start Teaching One Apply Form-->
                <div class="col-xl-6 col-lg-5">
                    <div class="teaching-one__apply-form">
                        <div class="title-box">
                            <h4>Apply for {{$slot->course->name}}</h4>
                        </div>
                        <div class="form-box">
                            <form method="post" action="{{route('enrollment.store')}}">
                              @csrf
                              <input type="hidden" name="student_id" value="{{auth()->user()->id}}">
                              <input type="hidden" name="slot_id" placeholder="slot" value="{{$slot->id}}" required="">
                              <input type="hidden" name="course_id" value="{{$slot->course->id}}" required="">
                              <input type="hidden" name="amount" placeholder="price" value="{{$slot->price}}" required="">
                              <div class="form-group">
                                <input type="text" name="student_name" class="form-control" value="{{auth()->user()->name}}" readonly required="">
                              </div>
                                <div class="form-group">
                                  <input type="text" name="course_name" value="{{$slot->course->name}}" readonly required="">
                                </div>

                                <div class="form-group">
                                  <input type="text" name="slot_name" placeholder="slot" value="{{$slot->name}}" readonly required="">
                                </div>
                                <div class="form-group">
                                  <select class="form-control" name="course_type" required >
                                    <option value="">Select Course Type</option>
                                    <option value="1">Purchase Online Learning</option>
                                    <option value="2">Purchase Video Package</option>
                                  </select>
                                </div>

                                <button class="registration-one__right-form-btn" type="submit">
                                    <span class="thm-btn">Pay &#36; {{$slot->price}}</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--End Teaching One Apply Form-->
            </div>
        </div>
    </section>
    <!--End Teaching One-->
    <br>
@include('layouts.footer')
