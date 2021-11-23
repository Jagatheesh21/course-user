<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use App\Models\Module;
use App\Models\Slot;
use App\Models\ModuleSection;

class CourseController extends Controller
{
    public function index()
    {
      $course = Course::withCount(['modules','slots'])->get();
      $slot = Course::withCount(['slots'])->first();
      $module = Course::withCount(['modules'])->first();
        return view('welcome',['courses' => $course,'slot'=>$slot,'module'=>$module]);
    }

    public function detail(Request $request)
    {
      $categories = Category::all();
      $course = Course::withCount(['modules','slots'])->where('slug',$request->course)->first();
      $modules = Module::with(['sections'])->where('course_id',$course->id)->get();
      $slots = Slot::where('course_id',$course->id)->get();
        //dd($course);

        return view('Courses.course-details',['categories'=>$categories,'modules' => $modules,'course' => $course,'slots'=>$slots]);
    }
    public function About()
    {
      return view('about');
    }

    public function Contact()
    {
      return view('contact');
    }
    public function slots(Request $request)
    {
      $categories = Category::all();
      $courses = Course::whereNotIn('slug',array($request->course))->get();
      $course  = Course::WithCount(['slots'])->where('slug',$request->course)->first();
      return view('slots.slots',['course'=>$course,'all_courses'=> $courses,'categories' => $categories]);
    }  
}
