@include('layouts.header')
<style type="text/css">
.active {
  border-color: #28a745 !important;
  background-color: rgb(0 123 255 / 25%);
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.18), 0 3px 6px rgba(0, 0, 0, 0.23);
  font-color: white;
}

.card {
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15), 0 2px 5px rgba(0, 0, 0, 0.2);
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}


</style>
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
                <div class="col-xl-9 col-lg-8">
                    <div class="contact-details-one__single">
                        
                        <div class="contact-details-one__single-text">
                            <h4>1.Welcome Learner</h4>
                            <p>You Can review your Order Here</p>
                        </div>
                    </div>



                    <div class="contact-details-one__single">
                        
                        <div class="contact-details-one__single-text">
                            <h4>2.Slot Selection</h4>
                            
                            <div class="card-deck">
                                @forelse($slots as $active_slot)
                                  <div class="card  @if($active_slot->slug==$slot_id) active @endif" id="{{$active_slot->id}}-card">
                                    <div class="card-body">
                                      <h5 class="card-title"><input id="{{$active_slot->id}}" value="{{$active_slot->id}}" name="slot" data-price="{{$active_slot->price}}" class="slot_radio" @if($active_slot->slug==$slot_id) checked @endif type="radio"> {{$active_slot->name}}</h5>
                                      <p class="card-text">From {{\Carbon\Carbon::parse($active_slot->start_date)->format('M d Y')}} To {{\Carbon\Carbon::parse($active_slot->end_date)->format('M d Y')}}</p>
                                      <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                    </div>
                                  </div>
                                @empty
                                @endforelse
                            </div>
                            <br>
                            
                            <!-- <ul class="course-details__curriculum-list list-unstyled">
                                 
                                <li>
                                    
                                    
                                </li>
                                <li>
                                    <div class="course-details__curriculum-list-left">
                                        <div class="card">
                                            <div class="card-box">Test 2</div>
                                        </div>
                                    </div>

                                </li>
                            </ul>  -->                          
                            
                        </div>
                    </div>

                    <div class="contact-details-one__single">
                        
                        <div class="contact-details-one__single-text">
                            <h4>3.Payment Details</h4>
                            <img src="{{asset('assets/images/paypal-logo.png')}}" width="100px" height="70px">
                            <br>
                            <form method="POST" action="{{route('enrollment.store')}}">
                                @csrf
                            <input type="hidden" name="course_id" id="active_course" value="{{$course->id}}">    
                            <input type="hidden" name="slot_id" id="active_slot" value="{{$slot_id}}">
                            <input type="hidden" name="amount" id="active_price" value="{{$slot->price}}">
                            <input type="hidden" name="student_id" value="{{auth()->user()->id}}">
                            <button class="btn btn-sm btn-primary" type="submit">Pay Securely</button>
                           </form>
                        </div>
                    </div>
                    
                </div>
                <!--End Teaching One Content-->
                <!--Start Teaching One Apply Form-->
                <div class="col-xl-3 col-lg-4">
                    <div class="contact-details-one__single">
                        <div class="contact-details-one__single-text">
                            <h4>Order Summary</h4>
                            <hr>
                            <p class="card-text"><strong>{{$course->name}}</strong></p>
                            <hr>
                            <p class="text-muted">Course Price : $ <span class="slot_price">{{$slot->price}}</span></p>
                            <hr>
                            <p class="text-primary">Net Payable : $ <span class="total_price">{{$slot->price}}</span></p>

                        </div>
                        
                    </div>
                </div>
                <!--End Teaching One Apply Form-->
            </div>
        </div>
    </section>
    <!--End Teaching One-->
    <br>
@if (session('error'))
<script type="text/javascript">
    $('#loginModal').modal('open'); //include your model id
</script>
@endif
@include('layouts.footer')
<script type="text/javascript">
    $(document).ready(function () {
    var slot_id = $("#active_slot").val();
    var price = $("#active_price").val();

    $('input:radio').change(function () {//Clicking input radio
        var radioClicked = $(this).attr('id');
        var price = $(this).data("price");
        unclickRadio();
        removeActive();
        clickRadio(radioClicked,price);
        makeActive(radioClicked,price);
    });
    $(".card").click(function () {//Clicking the card
        var inputElement = $(this).find('input[type=radio]').attr('id');
        unclickRadio();
        removeActive();
        makeActive(inputElement);
        clickRadio(inputElement);
    });
});


function unclickRadio() {
    $("input:radio").prop("checked", false);
}

function clickRadio(inputElement,price) {
    
    $("#" + inputElement).prop("checked", true);
}

function removeActive() {
    $(".card").removeClass("active");
}

function makeActive(element,price) {
    $("#active_slot").val(element);
    $("#active_price").val(price);
    $(".slot_price").html(price);
    $(".total_price").html(price);
    $("#" + element + "-card").addClass("active");
}

$(".pay").click(function(){
    var course_id = "{{$course->id}}";
    var slot_id = $("#active_slot").val();
    var price = $("#active_price").val();
    var student_id = $(".student_id").val();
    
    $.ajax({
        url:"{{route('enrollment.store')}}",
        type:"POST",
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data:"{'student_id':'"+student_id+"','course_id':'"+course_id+"','slot_id':'"+slot_id+"','amount':'"+price+"'}",

        success:function(response)
        {
             window.location.href=response;
        }
    });
//return confirm('Are you sure?');

});
</script>