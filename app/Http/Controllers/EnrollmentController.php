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


      define('PAYPAL_URL', 'https://www.sandbox.paypal.com');
      define('APP_URL', 'http://localhost:8000/enrollment');
      define('PAYPAL_MAIL_ID', 'sb-47borm8449994@business.example.com');


      $item_name = $request->slot_id;
      $item_price = $request->amount;
      $currency = 'USD';

      $return_url =  APP_URL;
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
      return redirect($payPal_URL);
        //
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
    public function Slotdetail(Request $request)
    {
      $slot = Slot::with(['course'])->where('slug',$request->slot)->first();
      return view('modules.slot_details',['slot'=>$slot]);
    }
}
