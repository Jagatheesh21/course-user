<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Module;

class DashBoardController extends Controller
{
  public function __construct()
  {
    $this->user = auth()->user();
    $this->middleware('auth');
  }
  public function index()
  {
    $student = auth()->User();

    return view('dashboard',['student'=>$student]);
  }
}
