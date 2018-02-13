<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\ProjectImage;
use App\Image;
use PHPColorExtractor\PHPColorExtractor;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

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
        $projects = Project::all();


        for($i = 0; $i<sizeof($projects); $i++){
            $projects[$i]->category = $projects[$i]->category()->first();
        }

        return view('admin.projects.index', ['projects' => $projects]);
    }

    public function deactivate($id){
        $project = Project::find($id);
        $project->isactive = 0;
        $project->save();

        ProjectImage::where('projectid','=', $id)->update(['isactive' => '0']);
        return redirect()->route('adminProjects');
    }

    public function activate($id){
        $project = Project::find($id);
        $project->isactive = 1;
        $project->save();

        ProjectImage::where('projectid','=', $id)->update(['isactive' => '1']);
        return redirect()->route('adminProjects');
    }

    public function delete($id){
        $project = Project::destroy($id);

        ProjectImage::where('projectid','=', $id)->delete();

        return redirect()->route('adminProjects');
    }

    public function new(){
        $categories = Category::all()->where('isactive', '=', '1');

        return view('admin.projects.project', ['categories' => $categories]);
    }

    public function create(Request $project){

        $newProject = new Project();
        $newProject->title = $project->title;
        $newProject->short = $project->short;
        $newProject->description = nl2br($project->description);
        $newProject->projectstart = $project->projectstart;
        $newProject->projectend = $project->projectend;
        $newProject->categoryid = $project->categoryid;
        $newProject->projectwebsite = $project->projectwebsite;
        $newProject->projectgithub = $project->projectgithub;
        if($project->iscomleted = 'on'){
            $newProject->iscompleted = true;
        }else{
            $newProject->iscompleted = false;
        }
        $newProject->save();
        if($project->hasFile('images'))
        {
            foreach($project->file('images') as $file){
                $newImage = new Image();

                $filepath1 = "projects/".str_replace(' ', '_', $project->title);
                $filepath = $file->store($filepath1, 'images');
                $extractor = new PHPColorExtractor();

                $extractor->setImage('images/'.$filepath)->setTotalColors(5)->setGranularity(10);
                $palette = $extractor->extractPalette();
//                TODO add new image here

                $newImage->color = $palette[4];
                $newImage->path = 'images/'.$filepath;
                $newImage->filename = $filepath;
                $newImage->save();

                $newProjectImage = new ProjectImage();
                $newProjectImage->imageid = $newImage->id;
                $newProjectImage->projectid = $newProject->id;
                $newProjectImage->isactive = true;
                $newProjectImage->save();

            }
        }

        $image = $newProject->images()->first();

	if(isset($image)){
		$newProject->imageid = $image->id;
	}

        $newProject->save();

        return redirect()->route('adminProjects');
    }

    public function edit($id){
        $project = Project::find($id);

        if(!isset($project)){
            return redirect()->route('adminProjects');
        }

        $categories = Category::all()->where('isactive', '=', '1');
        return view('admin.projects.project', ['project' => $project, 'categories' => $categories]);
    }

    public function update(){

    }

}
