<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Project;

class HomeController extends Controller
{ 
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        // $this->middleware('auth');
    }
    
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index()
    {
        $services=Service::all();
        $projects = Project::orderBy('id', 'desc')->paginate(6);
        return view('front.homeBage',compact(['services', 'projects']));

    }
    public function service(Service $service)
    {
        $services=Service::all();
        return view('front.service',compact('service','services'));
    }
    // public function service(Service $service)
    // {
    //     $services=Service::all();
    //     return view('front.service',compact('service','services'));
    // }
    public function project(Project $project){
        return view('front.project', [
            'project' => $project
        ]);
    }
    public function about()
    {
        return view('front.about');
    }
}
