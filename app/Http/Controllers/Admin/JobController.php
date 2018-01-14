<?php

namespace App\Http\Controllers\Admin;

use App\Image;
use App\Job;
use App\JobImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PHPColorExtractor\PHPColorExtractor;

class JobController extends Controller
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
        $jobs = Job::all();

        return view('admin.jobs.index', ['jobs' => $jobs]);
    }

    public function deactivate($id){
        $job = Job::find($id);
        $job->isactive = 0;
        $job->save();

        JobImage::where('jobid','=', $id)->update(['isactive' => '0']);
        return redirect()->route('adminJobs');
    }

    public function activate($id){
        $job = Job::find($id);
        $job->isactive = 1;
        $job->save();

        JobImage::where('jobid','=', $id)->update(['isactive' => '1']);
        return redirect()->route('adminJobs');
    }

    public function delete($id){
        $job = Job::destroy($id);

        JobImage::where('jobid','=', $id)->delete();

        return redirect()->route('adminJobs');
    }


    public function new(){
        return view('admin.jobs.job');
    }

    public function create(Request $job){

        $newJob = new Job();
        $newJob->title = $job->title;
        $newJob->short = $job->short;
        $newJob->description = $job->description;
        $newJob->fromdate = $job->fromdate;
        $newJob->todate = $job->todate;
        $newJob->company = $job->company;
        $newJob->titledescription = $job->titledescription;
        $newJob->companydescription = $job->companydescription;
        $newJob->companyphone = $job->companyphone;
        $newJob->companywebsite = $job->companywebsite;

        if($job->iscurrent = 'on'){
            $newJob->iscurrent = true;
        }else{
            $newJob->iscurrent = false;
        }
        $newJob->save();
        if($job->hasFile('images'))
        {
            foreach($job->file('images') as $file){
                $newImage = new Image();

                $filepath1 = "projects/".str_replace(' ', '_', $job->title);
                $filepath = $file->store($filepath1, 'images');
                $extractor = new PHPColorExtractor();

                $extractor->setImage('images/'.$filepath)->setTotalColors(5)->setGranularity(10);
                $palette = $extractor->extractPalette();
//                TODO add new image here

                $newImage->color = $palette[4];
                $newImage->path = $palette[4];
                $newImage->filename = $palette[4];
                $newImage->save();

                $newJobImage = new JobImage();
                $newJobImage->imageid = $newImage->id;
                $newJobImage->jobid = $newJob->id;
                $newJobImage->isactive = true;
                $newJobImage->save();

            }
        }

        $image = $newJob->images()->first();

        $newJob->imageid = $image->id;
        $newJob->save();

        return redirect()->route('adminJobs');

        exit;
    }

    public function edit($id){
        $job = Job::find($id);

        if(!isset($job)){
            return redirect()->route('adminJobs');
        }

        return view('admin.jobs.job', ['job' => $job]);
    }

    public function update(Request $job){
        dump($job);
        exit;
    }
}
