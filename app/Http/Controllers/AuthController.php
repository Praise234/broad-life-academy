<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Validator;
use App\Models\User;

class AuthController extends Controller
{
    // Validate and add new user
    public function registerUser(Request $request){
        // Error messages for inputs
        $messages = [
            'required' => 'The :attribute is required',
            'string'    => 'The :attribute must be text format',
            'unique'      => 'The :attribute already exist',
            'email' => ':attribute is not an email',
            'file'    => 'The :attribute must be a file',
            'min'      => 'The :attribute must have a minimum length of :min',
            'max'      => 'The :attribute must have a maximum length of :max',
            'same' => 'Password and confirm password are not the same',
            'numeric' => 'The :attribute must be numeric',
            'size' => 'The :attribute must be of size 11',
        
          ];

        //   Validation conditions
        $validator = Validator::make($request->all(), [
            'fullname'=>'required|string|min:3',
            'email'=>'required|email|unique:users,email',
            'phone'=>'required|numeric|min:11',
            'password'=>'required|min:5',
            'password_verify'=>'required|same:password',
        ], $messages);
        
        // return errors
        if ($validator->fails()) {
            return back()->with('fail', $validator->errors());
        }

        // try to add student to database
        try {
            $newStudent = User::create([
                'name' => $request->input("fullname"),
                'email' => $request->input("email"),
                'phone' => $request->input("phone"),
                'password' => Hash::make($request->input("password")),
            ]);
        } catch (\Throwable $th) { //throw error if failure occurs
            return back()->with('error', "An unknown error occured, please try again");
        }

        return redirect('login')->with('Success', 'Registration successful, please check your email for confirmation');

    }
}
