@include('layouts.header')
 <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content">

            </div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
    <!--Page Header Start-->
    <section class="page-header clearfix" style="background-image: url(assets/images/backgrounds/about.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-header__wrapper clearfix">
                        <div class="page-header__title">
                            <h2>Courses</h2>
                        </div>
                        <div class="page-header__menu">
                            <ul class="page-header__menu-list list-unstyled clearfix">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Courses</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Page Header End-->




    <!--News Details Start-->
    <section class="news-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="news-details__left">
                        <div class="blog-one__single style2">
                            <div class="blog-one__single-img">
                                <img src="{{ asset('assets/images/backgrounds/course.jpg')}}" alt=""/>
                            </div>
                            <div class="blog-one__single-content">
                                <div class="blog-one__single-content-overlay-mata-info">
                                    <ul class="list-unstyled">
                                        <li><a href="#"><span class="icon-clock"></span>{{\Carbon\Carbon::parse($course->created_at)->diffForHumans()}}</a></li>
                                        <li><a href="#"><span class="icon-user"></span>{{$course->author->name}} </a></li>
                                        
                                    </ul>
                                </div>
                                <h2 class="blog-one__single-content-title">{{$course->name}}</h2>
                            </div>
                        </div>

                        <div class="news-details__text1">
                            <p>{!! $course->description !!} </p>
                        </div>


                        <!--Start Comment One -->
                        <div class="comment-one">
                            <h3 class="comment-one__title">{{$course->slots_count}} Slots</h3>
                            @forelse($course->slots as $slot)
                            <div class="comment-one__single">
                                <div class="comment-one__image">
                                    <img src="assets/images/blog/comment-img1.png" alt="">
                                </div>
                                <div class="comment-one__content">
                                    <div class="comment-one__content-top">
                                        <div class="comment-one__content-text">
                                            <h3>{{$slot->name}}<span>{{$slot->created_at->diffForHumans()}}</span></h3>
                                        </div>
                                        <div class="comment-one__content-btn">
                                            <a href="{{route('slot_details',['slot'=>$slot->slug])}}" class="thm-btn">Enroll Now</a>
                                        </div>
                                    </div>
                                    <p>
                                    	<button class="btn btn-sm btn-primary">Total Seats : {{$slot->seats}}</button>
                                    	<button class="btn btn-sm btn-warning">From {{\Carbon\Carbon::parse($slot->start_date)->format('M d,Y')}} To {{\Carbon\Carbon::parse($slot->end_date)->format('M d,Y')}}</button><br>
                                    <button class="btn btn-sm btn-success">Price: $ {{number_format($slot->price,2)}}</button>
                                    </p>
                                </div>
                            </div>
						@empty
						@endforelse                            
                        </div>
                        <!--End Comment One -->

                        <!--Start Comment Form -->
                        <div class="comment-form">
                            <h3 class="comment-form__title">Leave a Comment</h3>
                            <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
                                novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Your name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box">
                                            <textarea name="message" placeholder="Write message"></textarea>
                                        </div>
                                        <button type="submit" class="thm-btn comment-form__btn">Submit Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--End Comment Form -->
                    </div>
                </div>

                <!--Start Sidebar-->
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__post wow fadeInUp animated" data-wow-delay="0.1s">
                            <h3 class="sidebar__title">Recent Courses</h3>
                            <ul class="sidebar__post-list list-unstyled">
                            	@forelse($all_courses as $all_course)
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="assets/images/blog/recent-posts-img1.png" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <ul class="list-unstyled">
                                            <li>
                                                <p><a href="#"><i class="far fa-user-circle"></i>{{$$all_course->author->name}}</a></p>
                                                <h3><a href="{{route('course_details',['course'=>$all_course->slug])}}">{{$$all_course->description}}</a></h3>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                @empty
                                <li>
                                	<h6>No Courses Yet !</h6>
                                </li>
                                @endforelse
                                
                            </ul>
                        </div>

                        <div class="sidebar__single sidebar__category wow fadeInUp animated" data-wow-delay="0.3s">
                            <h3 class="sidebar__title">All Categories</h3>
                            <ul class="sidebar__category-list list-unstyled">
                            	@forelse($categories as $category)
                                <li><a href="#"><i class="far fa-arrow-alt-circle-right"></i>{{$category->cat_name}}</a></li>
                                @empty
                                <li>No Categories Yet!</li>
                                @endforelse
                                
                            </ul>
                        </div>

                        <div class="sidebar__single sidebar__tags wow fadeInUp animated" data-wow-delay="0.5s">
                            <h3 class="sidebar__title">Tags</h3>
                            <ul class="sidebar__tags-list list-unstyled">
                                <li><a href="#">Education</a></li>
                                <li><a href="#">Programing</a></li>
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Academics</a></li>
                                <li><a href="#">Art</a></li>
                                <li><a href="#">Teachings</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Sidebar-->
            </div>
        </div>
    </section>
    <!--News Details End-->

@include('layouts.footer')
