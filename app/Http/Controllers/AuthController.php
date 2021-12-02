<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Mail; 
use App\Models\UserVerify;
use Illuminate\Support\Facades\Validator;
use Response;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    public function customLogin(Request $request)
    {
     
        // dd($request->all());

        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'password' => 'required|min:6',
        ]);

        if ($validator->passes()) {
        $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                // return redirect()->intended(route('dashboard'))
                //              ->withSuccess('Signed in');
                return Response::json(['success' => 'Successfully Login']);           
            }else{
                return Response::json(['loginerror' => 'Login details are not valid']);           
            }
        }else{
          return Response::json(['errors' => $validator->errors()]);  
        }
        // return redirect("login")->with('message','Login details are not valid');
    }



    public function registration()
    {
        return view('auth.registration');
    }


    public function customRegistration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:students',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password|min:6'
        ]);
        // $validator = $request->validate([
        //     'username' => 'required',
        //     'phone' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'confirm_password' => 'required|same:password|min:6',
        //     'password' => 'required|min:6',
        // ]);


        if ($validator->fails()) {
        	//$errors = $validator->errors();
            return Response::json(['errors' => $validator->errors()]); 
            //return redirect(route('register-user'))->withErrors($errors);
        }
        $validated = $validator->validated();
        $data = $validated;
        $check = $this->create($data);
         return Response::json(['success' => 'Verification Email Send, Kindly Check your Inbox!']);
       // return back()->with('success','Verification Email Send, Kindly Check your Inbox!');
    }


    public function create(array $data)
    {
      $student = Student::create([
        'name' => $data['username'],
        'mobile' => $data['phone'],
        'email' => $data['email'],
        'is_email_verified' =>0,
        'password' => Hash::make($data['password'])
      ]);
      
      $token = Str::random(64);
      UserVerify::Create([
      	'student_id' => $student->id,
      	'token' => $token
      ]);

       Mail::send('auth.email_verification', ['token' => $token], function($message) use($data){
              $message->to($data['email']);
              $message->subject('Email Verification Mail');
          });
    }


    public function dashboard()
    {
        if(Auth::check()){
            return redirect('/');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function signOut() {
        Session::flush();
        Auth::logout();

        return back();
    }
     public function verifyAccount(Request $request)
    {
        $token = $request->verification_code;

         $validator = Validator::make($request->all(), [
            'verification_code' => 'required',
        ]);

         if ($validator->fails()) {
            return Response::json(['errors' => $validator->errors()]); 
        }

        $verifyUser = UserVerify::where('token', $token)->first();
  
        $message = 'Sorry your email cannot be identified.';
  
        if(!is_null($verifyUser) ){
            $user = $verifyUser->user;
              
            if(!$user->email_verified_at) {
                $verifyUser->user->is_email_verified = 1;
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
            return Response::json(['success' => $message]);
        }else{
            return Response::json(['error' => $message]);
        }
  
      //return redirect()->route('login')->with('message', $message);
    }
    public function resendCode()
    {
    	return view('auth.resend_code');
    }
    public function sendCode(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);
    	if ($validator->fails()) {
        	$errors = $validator->errors();
            return redirect(route('resend_code'))->with('message',$errors);
        }

        $validated = $validator->validated();

    	$student = Student::where('email',$validated['email'])->first();
    	if($student)
    	{
    		if($student->is_email_verified==1)
    		{
    		return back()->with('message','Your e-mail is verified. You can now login.');
    		}else{
    		      $token = Str::random(64);

			      UserVerify::where('id',$student->id)->update(['token'=>$token]);

       			 Mail::send('auth.email_verification', ['token' => $token], function($message) use($student){
                 $message->to($student->email);
                 $message->subject('Email Verification Mail');  			
          		});	

       return back()->with('message','Verification Email Send, Kindly Check your Inbox!');
    		}
    	}else{
    		return back()->with('message','No Accounts Found. Kindly Register..');
    	}
    }
}
