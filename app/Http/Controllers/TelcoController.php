<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telco_Package;
use App\Models\Application;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewApplication;

class TelcoController extends Controller
{
    public function index(){
        
        $Telco_Package = Telco_Package::all();

        return view('home', ['TelcoPackage' => $Telco_Package]); 
    }

    public function apply(){

        $Telco_Package = Telco_Package::all();
        
        return view('apply', ['TelcoPackage' => $Telco_Package]); 
}

    public function store(Request $request) {
        //Validatetion
        $this->validate($request,[
            'name' => ['required', 'min:3'],
            'email'  => 'required',
            'location'  => 'required',
            'contact' => ['required', 'unique:applications'],
            'package' => 'required',
            'message' => ''
        ]);

        $receiverEmailAddress = ['tanweiteck.twt@gmail.com'];

        Mail::to($receiverEmailAddress)->send(new NewApplication);

        Application::create($request->all());
        return back()->with('success', 'Congratulations ! ! !  Your application has been submitted.');

    

        // $Application = Application::create([
        //     'name' => request('name'),
        //     'email' => request('email'),
        //     'location' => request('location'),
        //     'contact' => request('contact'),
        //     'package' => request('package'),
        //     'message' => request('message'),
            
        // ]);

        //send email to
        // angtatt2@gmail.com

    }
}