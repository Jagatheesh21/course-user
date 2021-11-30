@include('layouts.header')

<!--Registration One Start-->
        <section class="registration-one jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%">
            <div class="registration-one__bg"
                style="background-image: url(https://d1jnx9ba8s6j9r.cloudfront.net/img/optimized/edureka-business.png);"></div>
            <div class="container">
                <div class="row">
                    <!--Start Registration One Left-->
                    <div class="col-xl-7 col-lg-7">
                        <div class="registration-one__left">
                            <div class="section-title">

                                <h2 class="section-title__title">Login your Account<br> Get free Access to <span
                                        class="odometer" data-count="66000">00</span> <br>Online Courses</h2>
                            </div>
                            <p class="registration-one__left-text">There are many variations of passages of lorem ipsum
                                available but the majority have suffered alteration in some form.</p>
                            <div class="registration-one__left-transform-box">
                                <div class="registration-one__left-transform-box-icon">
                                    <span class="icon-online-course"></span>
                                </div>
                                <div class="registration-one__left-transform-box-text">
                                    <h3><a href="#">Transform Access To Education</a></h3>
                                    <p>Discover creative projects limited editions of 100 <br>from artists, designers,
                                        and more.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Registration One Left-->

                    <!--Start Registration One Right-->
                    <div class="col-xl-5 col-lg-5">

                        <div class="registration-one__right wow slideInRight" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="registration-one__right-form">
                                <div class="title-box">
                                    <h4>Login</h4>
                                </div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (\Session::has('message'))
                                <p style="color:red;">{!! \Session::get('message') !!}</p>
                                @endif
                                <div class="form-box">
                                     <form method="POST" action="{{ route('login.custom') }}">
                                     @csrf

                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email Address" required="">
                                             @if ($errors->has('email'))
				                                <span class="text-danger">{{ $errors->first('email') }}</span>
				                              @endif
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="password" placeholder="Password" required="">
                                             @if ($errors->has('password'))
                                             <span class="text-danger">{{ $errors->first('password') }}</span>
                                              @endif
                                        </div>


                                        <button  class="registration-one__right-form-btn" type="submit"
                                            name="submit-form">
                                            <span class="thm-btn">Login</span>
                                        </button>
                                        <!-- <p style="color: blue;" class="my-1">Forgot Password <a style="color:orange;" href="{{route('resend_code')}}">Click Here</a></p> -->
                                        <p class="mt-1">Don't have an account? <a style="color:orange;" href="{{route('register-user')}}"> Sign up</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Registration One Right-->
                </div>
            </div>
        </section>
        <!--Registration One End-->

@include('layouts.footer')
