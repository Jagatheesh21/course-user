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
                                <h4 class="section-title__title">{{$course->name}}</h4>
                                <p>{{$course->description}}</p>
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
                            <p class="registration-one__left-text">{{$course->description}}</p>
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
                    <div class="col-xl-5 col-lg-5">
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
                    </div>
                    <!--End Registration One Right-->
                </div>
            </div>

        </section>

        <!--Registration One End-->

    <!--Start Course Details-->
    <!--Courses One Start-->
    <section class="courses-one courses-one--courses">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Checkout Our New List</span>
                <h2 class="section-title__title">Explore Course Modules</h2>
            </div>

            <div class="row filter-layout masonary-layout">
                <!--Start Single Courses One-->
                @forelse($modules as $module)
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item development business">
                    <div class="courses-one__single wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="courses-one__single-img">
                            <img src="{{asset('assets/images/backgrounds/about3.jpg')}}" alt=""/>
                            <div class="overlay-text">
                                <p>Featured</p>
                            </div>
                        </div>
                        <div class="courses-one__single-content">
                            <!-- <div class="courses-one__single-content-overlay-img">
                                <img src="{{asset('assets/images/backgrounds/about3.jpg')}}" alt=""/>
                            </div> -->
                            <h6 class="courses-one__single-content-name">{{$module->course->name}}</h6>
                            <h4 class="courses-one__single-content-title"><a href="{{route('module_details',['id' => $module->id])}}">{{$module->name}}</a></h4>
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
                            <!-- <p class="courses-one__single-content-price">$30.00</p> -->
                            <ul class="courses-one__single-content-courses-info list-unstyled">
                                <li>{{$module->slots->count()}} Slots</li>

                                <li>{{$module->name}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @empty
                @endforelse
                <!--End Single Courses One-->


            </div>
        </div>
    </section>
    <!--Courses One End-->
    <!--End Course Details-->

    <!-- Modal -->


    <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Enrollment</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('enrollment.store')}}" method="POST">
              @csrf
              <div class="form-group">
                <label for="recipient-name" class="col-form-label required">Course:</label>
                <input type="text" class="form-control" readonly id="course_name" value="{{$course->c_name}}">
                <input type="hidden" class="form-control" id="course_id" value="{{$course->id}}">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Slots:</label>
                <select class="form-control" name="slot_id" id="slot_id">
                  <option value="">Select Slot</option>
                  @forelse($slots as $slot)
                  <option value="{{$slot->id}}" data-price="{{$slot->price}}">{{$slot->name}}</option>
                  @empty
                  @endforelse
                </select>
              </div>
              <div class="form-group">
                <label for="" class="col-form-label">Amount</label>
                <input type="text" class="form-control price" name="price" value="0" readonly>
              </div>
              <input type="hidden" name="payment_mode" value="paypal">
              <br>
              <!-- <div id="paypal-button-container" style="display:none">

              </div> -->

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary close" data-dismiss="modal">Close</button>
           <button  type="submit" class="btn btn-primary pay">Pay</button>
          </div>
          </form>
        </div>
      </div>
    </div>
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
