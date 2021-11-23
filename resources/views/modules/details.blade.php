@include('layouts.header')

<!--Registration One Start-->
        <section class="registration-one jarallax" data-jarallax data-speed="0.2" data-imgPosition="100% 0%">
            <div class="registration-one__bg"
                style="background-image: url(assets/images/backgrounds/course.jpg);"></div>
            <div class="container">
                <div class="row">
                    <!--Start Registration One Left-->
                    <div class="col-xl-7 col-lg-7">

                        <div class="registration-one__left">
                            <div class="section-title">
                                <h4 class="section-title__title">{{$module->name}}</h4>
                                <p>{{$module->description}}</p>
                                <div class="courses-one__single-content-review-box">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <div  class="rateing-box">
                                        <span style="color: white !important;">(4)</span>
                                    </div>
                                </div>


                            </div>
                            <p class="registration-one__left-text">{{$module->description}}</p>
                            <!-- <div class="registration-one__left-transform-box">
                                <div class="registration-one__left-transform-box-icon">
                                    <span class="icon-online-course"></span>
                                </div>
                                <div class="registration-one__left-transform-box-text">
                                    <h3><a href="#">Qualified Mentors</a></h3>
                                    <p>Discover creative projects limited editions of 100 <br>from artists, designers,
                                        and more.</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!--End Registration One Left-->

                    <!--Start Registration One Right-->
                    <!-- <div class="col-xl-5 col-lg-5">
                        <div class="registration-one__right wow slideInRight" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="registration-one__right-form">
                                <h4>Limited Seats Available</h4>
                                <div class="form-box">

                                      <button  class="registration-one__right-form-btn">
                                          <span style="background: #42378f;width:350px" class="thm-btn ">Enroll Now</span>
                                      </button>


                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!--End Registration One Right-->
                </div>
            </div>

        </section>
        <!--Registration One End-->

    <!--Start Course Details-->
    <section class="course-details p-0">
        <div class="container">
            <div class="row">
                <!--Start Course Details Content-->
                <div class="col-xl-12 col-lg-12">
                    <div class="course-details__content">


                        <!--Start Course Details Curriculum-->
                        <div class="course-details__curriculum">
                            <h2 class="course-details__curriculum-title">Slots</h2>
                            <!--Start Single Course Details Curriculum-->

                            @forelse($slots as $slot)
                            <div class="course-details__curriculum-single">
                                <h3 class="course-details__curriculum-single-title">{{$slot->name}} ( From {{\Carbon\Carbon::parse($slot->start_date)->format('M d Y')}} To {{\Carbon\Carbon::parse($slot->end_date)->format('M d Y')}} )</h3>
                                <p class="course-details__curriculum-single-text">{{$slot->description}}</p>
                                <ul class="course-details__curriculum-list list-unstyled">

                                    <li>
                                        <div class="course-details__curriculum-list-left">
                                            <div class="course-details__curriculum-list-left-icon">
                                                <i class="fa fa-book" aria-hidden="true"></i>
                                            </div>
                                            <a href="#" class="course-details__curriculum-list-left-title">Total {{$slot->seats}} Seats</a>
                                            <span>Preview</span>

                                        </div>
                                        <a class="thm-btn btn-sm comment-form__btn" href="{{route('slot_details',['id'=>$slot->id])}}">Enroll Row</a>

                                        <div class="course-details__curriculum-list-right">
                                            <p>Course Price : {{$slot->price}}</p>
                                        </div>
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
                                        <img width="120px" height="120px" src="{{asset('assets/images/resources/career2.jpg')}}" alt=""/>
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
                                        <img width="120px" height="120px" src="{{asset('assets/images/resources/career2.jpg')}}" alt=""/>
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

    <!-- Modal -->



@include('layouts.footer')
<script type="text/javascript">
function EnrollNow(student_id)
{
$("#exampleModal").modal('show');
}
$(".close").click(function(){
$("#exampleModal").modal('hide');
});

$("#slot_id").change(function(){
var price = $("#slot_id option:selected").data('price');
if(price!="" || price!=undefined || price!=null)
{
$(".price").val(price);
$("#paypal-button-container").show();
}

});
</script>
<script
    src="https://www.paypal.com/sdk/js?client-id=AXZ-ZeSuPja1-Kc6RxBAvzA2jPp0NrTEloeh6IiLnW48aQ2WGnKgceGbt0nPLu8DlcWVrk0GRYMPtACO"> // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
  </script>
  <script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '0.01'
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        alert('Transaction completed by ' + details.payer.name.given_name);

      });
    }
  }).render('#paypal-button-container');
  //This function displays Smart Payment Buttons on your web page.
</script
