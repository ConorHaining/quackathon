<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registration;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    
    /**
     * Return the single page app
     * 
     * @return \Illuminate\Http\Response
     */
    public function webpage() {
        $model = registration::all();

    	return view('index')->withModel($model);
    }

    /**
    * Register the form.
    *
    * @return \Illuminate\Http\Response
    */
    public function RegisterPost(Request $request) {

    	$validator = Validator::make($request->all(), [
        'forename' => 'required',
        'surname' => 'required',
        'email' => 'required|unique:registration|email',
        'university' => 'required',
        'tshirt' => 'required',
        'lunch' => 'required',
        'dinner' => 'required',
        'breakfast' => 'required',
        ]);

        if ($validator->fails()) {

            return redirect('/')->withErrors($validator)->withInput();

        } else {

        	$model = registration::create($request->all());

        	$model->save();

        	return redirect('/')->with('success', 'You\'re going to Quackathon 2017! Keep an eye of your email');

        }

    }
}