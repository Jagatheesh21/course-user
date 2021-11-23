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
                                <span class="section-title__tagline">Get Free Registration</span>
                                <h2 class="section-title__title">Register your Account<br> Get free Access to <span
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
                        <div class="registration-one__right wow">
                            <div class="registration-one__right-form">
                                <div class="title-box">
                                    <h4>Fill your Registration</h4>
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
                                @if (Session::has('success'))
                                    <div class="alert alert-success">
                                        <ul>
                                            <li>{{ Session::get('success') }}</li>
                                        </ul>
                                    </div>
                                    @endif
                                    @if (Session::has('error'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            <li>{{ Session::get('error') }}</li>
                                        </ul>
                                    </div>
                                    @endif
                                <div class="form-box">
                                    <form action="{{ route('register.custom') }}" method="POST" >
                                     @csrf
                                        <div class="form-group">
                                            <input type="text" name="username" id="username" placeholder="Your Name" value="{{ old('username') }}" required="">
                                            @error('username')
                                           <span class="text-danger"></span>
                                           @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="email" name="email" id="email" placeholder="Email Address" required="" value="{{ old('email') }}">
                                             @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="password" id="password" placeholder="Password" required="">
                                            
                                        </div>
                                        Show Password <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                        <div class="form-group">
                                            <input type="password" name="confirm_password" id="confirm-password" placeholder="Confirm Password" required="" >
                                            
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone" id="phone" placeholder="Phone" required="" value="{{ old('phone') }}">
                                            @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>

                                        
                                        <button class="btn" type="submit"
                                            name="submit-form">
                                            <span class="thm-btn">apply for it</span>
                                        </button>
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


<script type="text/javascript">
    $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>