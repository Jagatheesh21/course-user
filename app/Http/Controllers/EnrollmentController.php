<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Category;
use App\Models\Course;
use App\Models\Module;
use App\Models\Slot;

use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
  public function __construct()
  {
    $this->title = "Enrollment";
    $this->user = auth()->user();
    $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        dd($request->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      dd($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      //dd($request->all());
      define('PAYPAL_URL', 'https://www.sandbox.paypal.com');
      define('APP_URL', 'http://localhost:8000');
      define('PAYPAL_MAIL_ID', 'sb-47borm8449994@business.example.com');


      $slot = Slot::Find($request->slot_id);
      $course = Course::Find($slot->course_id);
      $item_name = $course->name."-".$slot->name;
      $item_price = $request->amount;
      $currency = 'USD';

      $return_url =  APP_URL.'/enrollment/notify?student_id='.$request->student_id.'&slot_id='.$request->slot_id.'&amount='.$item_price;
      $cancel_url = APP_URL;
      $notify_url = 'https://localhost:8000/enrollment/notify?student_id='.$request->student_id.'&slot_id='.$request->slot_id.'&amount='.$item_price;

      //query strings
      $querystring  = "";
      $querystring .= "?business=" . urlencode(PAYPAL_MAIL_ID) . "&";
      $querystring .= "item_name=" . urlencode($item_name) . "&";
      $querystring .= "amount=" . urlencode($item_price) . "&";
      //$querystring .= "currency_code=".$currency."&";
      $querystring .= "return=" . urlencode(stripslashes($return_url)) . "&";
      $querystring .= "cancel_return=" . urlencode(stripslashes($cancel_url)) . "&";
      $querystring .= "notify_url=" . urlencode($notify_url);
      $querystring .= "&cmd=_xclick&no_note=1&amp;bn=PP-BuyNowBF%3Abtn_buynow_LG.gif%3ANonHostedGuest";
      $payPal_URL = PAYPAL_URL . "/cgi-bin/webscr" . $querystring;
    //return $payPal_URL;
      return redirect($payPal_URL);
    
    
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function show(Enrollment $enrollment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function edit(Enrollment $enrollment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enrollment $enrollment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enrollment $enrollment)
    {
        //
    }
    public function Slotdetail($course_id,$slot_id)
    {
      
      $slot = Slot::where('slug',$slot_id)->first();
      $course = Course::where('slug',$course_id)->first();
      $slots = Slot::where('course_id',$course->id)->get();
      
      return view('modules.slot_details',['slot'=>$slot,'slots'=>$slots,'slot_id'=>$slot_id,'course'=>$course]);
    }
    public function Notify(Request $request)
    {
      $slot = Slot::Find($request->input('slot_id'));
      $enrollment = new Enrollment;
      $enrollment->slot_id = $request->input('slot_id');
      $enrollment->student_id = $request->input('student_id');
      $enrollment->course_id = $slot->course_id;
      $enrollment->amount_payable = $request->input('amount');
      $enrollment->amount_paid = $request->input('amount');
      $enrollment->transaction_id = $request->input('PayerID');
      $enrollment->payment_status = 'paid';
      $enrollment->status = 1;
      $enrollment->remarks="Paid by Paypal";
      $enrollment->save();
      return redirect(route('dashboard'))->with('message','Course Enrolled Succesfully!');

    }
}
