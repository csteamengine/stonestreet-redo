<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.projects.index');
    }

    public function new(){

        return view('admin.projects.project');
    }

    public function create(){

    }

    public function edit($id){
        $project = Project::find($id);

        return view('admin.projects.project', ['project' => $project]);
    }

    public function update(){

    }

}
