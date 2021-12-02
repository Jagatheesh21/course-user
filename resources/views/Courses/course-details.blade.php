@include('layouts.header')
    <!--Page Header Start-->
    <section class="page-header clearfix" style="background-image: url(assets/images/backgrounds/about2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-header__wrapper clearfix">
                        <div class="page-header__title">
                            <h2>Course Details</h2>
                        </div>
                        <div class="page-header__menu">
                            <ul class="page-header__menu-list list-unstyled clearfix">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li class="active">Course Details</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Start Course Details-->
    <section class="course-details">
        <div class="container">
            <div class="row">
                <!--Start Course Details Content-->
                <div class="col-xl-8 col-lg-8">
                    <div class="course-details__content">
                        <!--Start Single Courses One-->
                        <div class="courses-one__single style2 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <div class="courses-one__single-img">
                                <img src="{{ asset('assets/images/backgrounds/course.jpg')}}" alt=""/>
                                <div class="overlay-text">
                                    <p>Featured</p>
                                </div>
                            </div>
                            <div class="courses-one__single-content">
                                <div class="courses-one__single-content-overlay-img">
                                    <img src="{{ asset('assets/images/resources/course-details-overlay-img.png')}}" alt=""/>
                                </div>
                                <h6 class="courses-one__single-content-name">{{$course->author->name}} <span>Recently Updated {{\Carbon\Carbon::parse($course->updated_at)->format('d M, Y')}}</span></h6>
                                <h4 class="courses-one__single-content-title">{{$course->name}}</h4>
                                <div class="courses-one__single-content-review-box">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <div class="rateing-box">
                                        <span>(4)</span>
                                    </div>
                                </div>
                                <div class="course-details__content-text1">
                                    <p>{{$course->description}}</p>
                                </div>

                                <div class="course-details__content-text2" style="display: none;">
                                    <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of lorem ipsum amet finibus eros.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                                </div>

                                <!-- <div class="course-details__content-list">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-confirmation"></span>
                                            </div>
                                            <div class="text">
                                                <p>It has survived not only five centuries</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <span class="icon-confirmation"></span>
                                            </div>
                                            <div class="text">
                                                <p>Lorem Ipsum is simply dummy text of the new design</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <span class="icon-confirmation"></span>
                                            </div>
                                            <div class="text">
                                                <p>Printng and type setting ipsum</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <span class="icon-confirmation"></span>
                                            </div>
                                            <div class="text">
                                                <p>Take a look at our round up of the best shows</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div> -->

                            </div>
                        </div>
                        <!--End Single Courses One-->

                        <!--Start Course Details Curriculum-->
                        <div class="course-details__curriculum">
                            <h2 class="course-details__curriculum-title">Curriculum</h2>
                            @forelse($course->modules as $module)
                            <!--Start Single Course Details Curriculum-->
                            <div class="course-details__curriculum-single">
                                <h3 class="course-details__curriculum-single-title">{{$module->name}}</h3>
                                <p class="course-details__curriculum-single-text">{{$module->description}}</p>
                                <ul class="course-details__curriculum-list list-unstyled">
                                  @forelse($module->sections as $section)
                                    <li>
                                        <div class="course-details__curriculum-list-left">
                                            <div class="course-details__curriculum-list-left-icon">
                                                <i class="fa fa-play" aria-hidden="true"></i>
                                            </div>
                                            <a href="#" class="course-details__curriculum-list-left-title">{{$section->name}}</a>
                                            <!-- <span>Preview</span> -->
                                        </div>
                                        <div class="course-details__curriculum-list-right">
                                            <p>{{$section->duration}}</p>
                                        </div>
                                    </li>
                                    @empty
                                    <li>No Sections Yet!</li>
                                    @endforelse
                                </ul>
                            </div>
                            <!--End Single Course Details Curriculum-->
                            @empty
                            @endforelse

                        </div>
                        <!--End Course Details Curriculum-->

                        <!--Start Course Details Reviews-->
                        <div class="course-details__reviews">
                            <h3 class="course-details__reviews-title">Reviews</h3>
                            <div class="course-details__progress-review">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-7 col-md-7">
                                        <div class="course-details__progress clearfix">
                                            <div class="course-details__progress-item">
                                                <p class="course-details__progress-text">Excellent</p>
                                                <div class="course-details__progress-bar">
                                                    <span style="width: 90%;"></span>
                                                </div>
                                                <p class="course-details__progress-count">2</p>
                                            </div>

                                            <div class="course-details__progress-item">
                                                <p class="course-details__progress-text">Very Good</p>
                                                <div class="course-details__progress-bar">
                                                    <span style="width: 80%;"></span>
                                                </div>
                                                <p class="course-details__progress-count">1</p>
                                            </div>

                                            <div class="course-details__progress-item">
                                                <p class="course-details__progress-text">Average</p>
                                                <div class="course-details__progress-bar">
                                                    <span style="width: 70%;"></span>
                                                </div>
                                                <p class="course-details__progress-count">1</p>
                                            </div>

                                            <div class="course-details__progress-item">
                                                <p class="course-details__progress-text">Poor</p>
                                                <div class="course-details__progress-bar">
                                                    <span style="width: 0%;" class="no-bubble"></span>
                                                </div>
                                                <p class="course-details__progress-count">0</p>
                                            </div>

                                            <div class="course-details__progress-item">
                                                <p class="course-details__progress-text">Terrible</p>
                                                <div class="course-details__progress-bar">
                                                    <span style="width: 0%;" class="no-bubble"></span>
                                                </div>
                                                <p class="course-details__progress-count">0</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-5 col-lg-5 col-md-5">
                                        <div class="course-details__review-box">
                                            <h2 class="course-details__review-count">4.6</h2>
                                            <div class="course-details__review-stars">
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                            </div>
                                            <p class="course-details__review-text">30 reviews</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Start Course Details Comment-->
                            <div class="course-details__comment">
                                <div class="course-details__comment-single">
                                    <div class="course-details__comment-img">
                                        <img src="assets/images/resources/course-details-comment-img1.png" alt=""/>
                                    </div>
                                    <div class="course-details__comment-text">
                                        <div class="course-details__comment-text-top">
                                            <h3 class="course-details__comment-text-name">David Marks</h3>
                                            <p>3 hours ago</p>
                                            <div class="course-details__comment-review-stars">
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                            </div>
                                        </div>
                                        <p class="course-details__comment-text-bottom">Cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum lightly believable. If you are going to use a of you need to be sure there.</p>
                                    </div>
                                </div>

                                <div class="course-details__comment-single">
                                    <div class="course-details__comment-img">
                                        <img src="assets/images/resources/course-details-comment-img2.png" alt=""/>
                                    </div>
                                    <div class="course-details__comment-text">
                                        <div class="course-details__comment-text-top">
                                            <h3 class="course-details__comment-text-name">Christine Eve</h3>
                                            <p>3 hours ago</p>
                                            <div class="course-details__comment-review-stars">
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                            </div>
                                        </div>
                                        <p class="course-details__comment-text-bottom">Cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum lightly believable. If you are going to use a of you need to be sure there.</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Course Details Comment-->

                            <div class="course-details__add-review">
                                <h2 class="course-details__add-review-title">Add a Review</h2>
                                <p class="course-details__add-review-text">
                                    Rate this Course?
                                    <a href="#" class="fas fa-star active pd-left"></a>
                                    <a href="#" class="fas fa-star active"></a>
                                    <a href="#" class="fas fa-star active"></a>
                                    <a href="#" class="fas fa-star"></a>
                                    <a href="#" class="fas fa-star"></a>
                                </p>

                                <div class="course-details__add-review-form">
                                    <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="comment-form__input-box">
                                                    <input type="text" placeholder="Your name" name="name">
                                                </div>
                                                <div class="comment-form__input-box">
                                                    <input type="email" placeholder="Email address" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="comment-form__input-box">
                                                    <textarea name="message" placeholder="Write message"></textarea>
                                                </div>
                                                <button type="submit" class="thm-btn comment-form__btn">Submit review</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--End Course Details Reviews-->
                    </div>
                </div>
                <!--End Course Details Content-->

                <!--Start Course Details Sidebar-->
                <div class="col-xl-4 col-lg-4">
                    <div class="course-details__sidebar">
                        <div class="course-details__price wow fadeInUp animated" data-wow-delay="0.1s">
                            <h2 class="course-details__price-amount">${{number_format($course->slots()->first()->price,2)}}</h2>
                            <div class="course-details__price-btn">
                                <a href="javascript:void(0);" class="thm-btn enrollNow" Onclick="GetSlotDetails({{$course->id}});">Enroll Now</a>
                            </div>
                        </div>

                        <div class="course-details__sidebar-meta wow fadeInUp animated" data-wow-delay="0.3s">
                            <ul class="course-details__sidebar-meta-list list-unstyled">
                                <li class="course-details__sidebar-meta-list-item">
                                    <div class="icon">
                                        <a href="javascript:void(0)"><i class="far fa-clock"></i></a>
                                    </div>
                                    <div class="text">
                                        <p><a href="javascript:void(0)">Durations:<span>From {{$course->slots()->first()->start_date}} To {{$course->slots()->first()->end_date}}</span></a></p>
                                    </div>
                                </li>

                                <li class="course-details__sidebar-meta-list-item">
                                    <div class="icon">
                                        <a href="javascript:void(0)"><i class="far fa-folder-open"></i></a>
                                    </div>
                                    <div class="text">
                                        <p><a href="javascript:void(0)">Lectures:<span>6</span></a></p>
                                    </div>
                                </li>

                                <li class="course-details__sidebar-meta-list-item">
                                    <div class="icon">
                                        <a href=""><i class="far fa-user-circle"></i></a>
                                    </div>
                                    <div class="text">
                                        <p><a href="javascript:void(0)">Students:<span> Max {{$course->slots()->first()->seats}}</span></a></p>
                                    </div>
                                </li>

                                <li class="course-details__sidebar-meta-list-item">
                                    <div class="icon">
                                        <a href=""><i class="fas fa-play"></i></a>
                                    </div>
                                    <div class="text">
                                        <p><a href="javascript:void(0)">Video:<span>8 hours</span></a></p>
                                    </div>
                                </li>

                                <li class="course-details__sidebar-meta-list-item">
                                    <div class="icon">
                                        <a href=""><i class="far fa-flag"></i></a>
                                    </div>
                                    <div class="text">
                                        <p><a href="javascript:void(0)">Skill Level:<span>

                                            {{$course->skill_level->name}}</span></a></p>
                                    </div>
                                </li>

                                <li class="course-details__sidebar-meta-list-item">
                                    <div class="icon">
                                        <a href=""><i class="far fa-bell"></i></a>
                                    </div>
                                    <div class="text">
                                        <p><a href="javascript:void(0)">Language:<span>{{$course->language->name??""}}</span></a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar__single sidebar__tags wow fadeInUp animated mt-5" data-wow-delay="0.5s">
                            <h3 class="sidebar__title">Tags</h3>
                            <ul class="sidebar__tags-list list-unstyled">
                                @php $tags = explode(',',$course->tags);
                                @endphp
                                @forelse($tags as $tag)
                                <li><a href="#">{{$tag}}</a></li>
                                @empty
                                @endforelse
                            </ul>
                        </div>

                        <div class="course-details__new-courses wow fadeInUp animated" data-wow-delay="0.5s">
                            <h3 class="course-details__new-courses-title">New Courses</h3>
                            <ul class="course-details__new-courses-list list-unstyled">
                                <li class="course-details__new-courses-list-item">
                                    <div class="course-details__new-courses-list-item-img">
                                        <img src="assets/images/resources/course-details-sidebar-img1.png" alt=""/>
                                    </div>
                                    <div class="course-details__new-courses-list-item-content">
                                        <h4 class="course-details__new-courses-list-item-content-title"><a href="#">React – The Complete <br>Instruction</a></h4>
                                        <div class="course-details__new-courses-rateing-box">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <div class="course-details__new-courses-rateing-count">
                                                <span>(4)</span>
                                            </div>
                                        </div>
                                        <p class="course-details__new-courses-price">$30.00</p>
                                    </div>
                                </li>

                                <li class="course-details__new-courses-list-item">
                                    <div class="course-details__new-courses-list-item-img">
                                        <img src="assets/images/resources/course-details-sidebar-img2.png" alt=""/>
                                    </div>
                                    <div class="course-details__new-courses-list-item-content">
                                        <h4 class="course-details__new-courses-list-item-content-title"><a href="#">React – The Complete <br>Instruction</a></h4>
                                        <div class="course-details__new-courses-rateing-box">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <div class="course-details__new-courses-rateing-count">
                                                <span>(4)</span>
                                            </div>
                                        </div>
                                        <p class="course-details__new-courses-price">$30.00</p>
                                    </div>
                                </li>

                                <li class="course-details__new-courses-list-item">
                                    <div class="course-details__new-courses-list-item-img">
                                        <img src="assets/images/resources/course-details-sidebar-img3.png" alt=""/>
                                    </div>
                                    <div class="course-details__new-courses-list-item-content">
                                        <h4 class="course-details__new-courses-list-item-content-title"><a href="#">React – The Complete <br>Instruction</a></h4>
                                        <div class="course-details__new-courses-rateing-box">
                                            <ul class="list-unstyled">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <div class="course-details__new-courses-rateing-count">
                                                <span>(4)</span>
                                            </div>
                                        </div>
                                        <p class="course-details__new-courses-price">$30.00</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Course Details Sidebar-->
            </div>
        </div>
    </section>
    <!--End Course Details-->
    <!-- SLOT MODAL -->
    <div class="modal fade" id="slotModal"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title title-box" id="exampleModalLabel">Slot Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body slot-content">
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- SLOT MODAL -->
@include('layouts.footer')
