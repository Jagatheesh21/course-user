    <!--Start Course Details-->
    <section class="course-details p-0">
        <div class="container">
            <div class="row">
                <!--Start Course Details Content-->
                <div class="col-xl-12 col-lg-12">
                    <div class="course-details__content">


                        <!--Start Course Details Curriculum-->
                        <div class="course-details__curriculum">
                            
                            <!--Start Single Course Details Curriculum-->

                            @forelse($slots as $slot)
                            <!-- <div class="comment-one__content">
                                    <div class="comment-one__content-top">
                                        <div class="comment-one__content-text">
                                            <h3>{{$slot->name}}</h3>
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
                                </div> -->
                            <div class="course-details__curriculum-single">
                                <h3 class="course-details__curriculum-single-title">{{$slot->name}} ( From {{\Carbon\Carbon::parse($slot->start_date)->format('M d Y')}} To {{\Carbon\Carbon::parse($slot->end_date)->format('M d Y')}} )</h3>
                                <p class="course-details__curriculum-single-text">{{$slot->description}}

                                </p>
                                <!-- <p class="course-details__curriculum-single-text"><a href="{{route('slot_details',['slot'=>$slot->slug])}}" class="thm-btn btn-sm">Enroll Now</a></p> -->

                                <ul class="course-details__curriculum-list list-unstyled">

                                    <li>
                                        <div class="course-details__curriculum-list-left">
                                        <p>
                                        <button class="btn btn-sm btn-primary">Total Seats : {{$slot->seats}}</button>
                                        <button class="btn btn-sm btn-warning">From {{\Carbon\Carbon::parse($slot->start_date)->format('M d,Y')}} To {{\Carbon\Carbon::parse($slot->end_date)->format('M d,Y')}}</button>
                                        <button class="btn btn-sm btn-success">Price: $ {{number_format($slot->price,2)}}</button>
                                        
                                    <!-- <a href="{{route('slot_details',['slot'=>$slot->slug])}}" class="thm-btn btn-sm">Enroll Now</a> -->
                                        </p>
                                   

                                        </div>
                                        <a href="{{route('slot_details',[$slot->course->slug,$slot->slug])}}"class="thm-btn btn-sm">Enroll Now</a>
                                        <!-- <button class="thm-btn btn-sm"><a href="{{route('slot_details',['slot'=>$slot->slug])}}">Enroll Now</a></button> -->
                                    </li>



                                </ul>
                            </div>
                            @empty
                            <div class="course-details__curriculum-single text-center">
                               <h3 class="course-details__curriculum-single-title">No Slots Yet</h3>
                            </div>
                            @endforelse

                            <!--End Single Course Details Curriculum-->


                        </div>
                        <!--End Course Details Curriculum-->

                        
                    </div>
                </div>
                <!--End Course Details Content-->

                <!-- Start Course Details Sidebar-->
                <!-- <div class="col-xl-4 col-lg-4">
                    <div class="course-details__sidebar">


                        <div class="course-details__sidebar-meta wow fadeInUp animated" data-wow-delay="0.3s">
                            <ul class="course-details__sidebar-meta-list list-unstyled">
                                <li class="course-details__sidebar-meta-list-item">
                                    <div class="icon">
                                        <a href=""><i class="far fa-clock"></i></a>
                                    </div>
                                    <div class="text">
                                        <p><a href="#">Durations:<span>10 hours</span></a></p>
                                    </div>
                                </li>

                                <li class="course-details__sidebar-meta-list-item">
                                    <div class="icon">
                                        <a href=""><i class="far fa-folder-open"></i></a>
                                    </div>
                                    <div class="text">
                                        <p><a href="#">Lectures:<span>6</span></a></p>
                                    </div>
                                </li>

                                <li class="course-details__sidebar-meta-list-item">
                                    <div class="icon">
                                        <a href=""><i class="far fa-user-circle"></i></a>
                                    </div>
                                    <div class="text">
                                        <p><a href="#">Students:<span> Max 6</span></a></p>
                                    </div>
                                </li>

                                <li class="course-details__sidebar-meta-list-item">
                                    <div class="icon">
                                        <a href=""><i class="fas fa-play"></i></a>
                                    </div>
                                    <div class="text">
                                        <p><a href="#">Video:<span>8 hours</span></a></p>
                                    </div>
                                </li>

                                <li class="course-details__sidebar-meta-list-item">
                                    <div class="icon">
                                        <a href=""><i class="far fa-flag"></i></a>
                                    </div>
                                    <div class="text">
                                        <p><a href="#">Skill Level:<span>Advanced</span></a></p>
                                    </div>
                                </li>

                                <li class="course-details__sidebar-meta-list-item">
                                    <div class="icon">
                                        <a href=""><i class="far fa-bell"></i></a>
                                    </div>
                                    <div class="text">
                                        <p><a href="#">Language:<span>English</span></a></p>
                                    </div>
                                </li>
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
                </div> -->
                <!--End Course Details Sidebar -->
            </div>
        </div>
    </section>
    <!--End Course Details-->