<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationListController extends Controller
{
    public function index(){
        $Application = Application::all();
        return view('applicationlist', ['Application' => $Application]); 
    }

    public function add()
    {
        return view('addapplication');
    }
    
    public function create(Request $request) {
        //Validation
        $this->validate($request,[
            'name' => ['required', 'min:3'],
            'email'  => 'required',
            'location'  => 'required',
            'contact' => ['required', 'unique:applications'],
            'package_id' => 'required',
            'message' => ''
        ]);
    
        Application::create($request->all());
        return redirect('applicationlist');
    }
    
    public function delete($id)
        {
            Application::find($id)->delete();
            return redirect('applicationlist');
        }
    
    
    public function edit($id)
    {
            
            $data = Application::find($id);
            return view('addremark', ['data' => $data]);
    }
    
    
    
    
    public function update(Request $request, Application $Application)
    {
        {
            $this->validate($request, [
                'name' => ['required', 'min:3'],
                'email'  => 'required',
                'location'  => 'required',
                'contact' => ['required'],
                'package_id' => 'required',
                'message' => '',
                'remark' => ''
        ]);
    
            $data=Application::find($request->id);
            $data->name = $request->name;
            $data->email = $request->email;
            $data->location = $request->location;
            $data->contact = $request->contact;
            $data->package_id = $request->package_id;
            $data->message = $request->message;
            $data->remark = $request->remark;
    
            $data->save();
            return redirect('applicationlist'); 
        }    	
    }
    
    }