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
}
