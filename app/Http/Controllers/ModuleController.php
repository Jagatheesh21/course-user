<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use App\Models\Module;
use App\Models\Slot;

class ModuleController extends Controller
{
    public function index()
    {
        $modules = Module::all();
        return view('welcome',['modules' => $modules]);
    }

    public function detail(Request $request)
    {
      $module = Module::with('slots')->where('id',$request->id)->first();
      $slots = Slot::where('module_id',$request->id)->get();
      return view('modules.details',['module' => $module,'slots'=>$slots]);
    }


}
