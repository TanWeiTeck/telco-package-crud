<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telco_Package;
use App\Models\Application;

class AdminController extends Controller
{
    //



public function index(){
    $Telco_Package = Telco_Package::all();
    return view('dashboard', ['TelcoPackage' => $Telco_Package]); 
}

public function add()
{
    return view('addpackage');
}

public function create(Request $request) {
    //Validatetion
    $this->validate($request,[
        'service_provider' => 'required',
        'package_id'  => ['required'],
        'internet_speed'  => 'required',
        'description' => 'required',
        'price' => ['required', 'integer'],
        'discount(%)' => 'required',
        'discounted_price' => ['required', 'integer']
    ]);

    Telco_Package::create($request->all());
    return redirect('dashboard');
}




public function edit(Telco_Package $Telco_Package)
{
        return view('edit');
}




public function update(Request $request, Telco_Package $Telco_Package)
{
    if(isset($_POST['delete'])) {
        $Telco_Package->delete();
        return redirect('/dashboard');
    }
    else
    {
        $this->validate($request, [
        'service_provider' => 'required',
        'package_id'  => ['required'],
        'internet_speed'  => 'required',
        'description' => 'required',
        'price' => ['required', 'integer'],
        'discount(%)' => 'required',
        'discounted_price' => ['required', 'integer']
    ]);

        $Telco_Package->service_provider = $request->service_provider;
        $Telco_Package->package_id = $request->package_id;
        $Telco_Package->internet_speed = $request->internet_speed;
        $Telco_Package->description = $request->description;
        $Telco_Package->price = $request->price;
        $Telco_Package->discounted_price = $request->discounted_price;

        $Telco_Package->save();
        return redirect('/dashboard'); 
    }    	
}
}