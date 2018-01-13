<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

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

    public function create(Request $project){
        dump($project);
        if($project->hasFile('images'))
        {
//            dump($project->file('images'));
            foreach($project->file('images') as $file){
                $filepath = "/images/projects/".$project->title;
                $filename = $file->store($filepath);
                if(!is_dir($filepath)){
                    Storage::makeDirectory($filepath);
                }
                $file->move($filepath);
                dump($filepath);
            }
        }
        exit;
    }

    public function edit($id){
        $project = Project::find($id);

        return view('admin.projects.project', ['project' => $project]);
    }

    public function update(){

    }

}
