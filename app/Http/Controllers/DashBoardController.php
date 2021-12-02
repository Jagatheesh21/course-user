<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Module;
use App\Models\Enrollment;

class DashBoardController extends Controller
{
  public function __construct()
  {
    $this->user = auth()->user();
    $this->middleware('auth');
  }
  public function index()
  {
    
    $courses = Enrollment::where('student_id',auth()->user()->id)->get();

    return view('dashboard',['courses'=>$courses]);
  }
}
