<?php

namespace App\Http\Controllers;

use App\Job;
use App\Mail\ContactEmail;
use App\Project;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function portfolio(){
        $websites = Project::where('categoryid', '=', '1')->where('isactive', '=', '1')->orderBy('projectstart', 'desc')->get();
        $hardware = Project::where('categoryid', '=', '2')->where('isactive', '=', '1')->orderBy('projectstart', 'desc')->get();
        $software = Project::where('categoryid', '=', '3')->where('isactive', '=', '1')->orderBy('projectstart', 'desc')->get();

        return view('portfolio', ['hardware' => $hardware, 'software' => $software, 'websites' => $websites]);
    }

    public function jobs(){
        $jobs = Job::where('isactive', '=', '1')->orderBy('fromdate', 'desc')->get();

        return view('jobs', ['jobs' => $jobs]);
    }

    public function contact(){
        return view('contact');
    }

    public function sendEmail(Request $request){
        Mail::send(new ContactEmail($request));
        return redirect()->route('contact');
    }

    public function about(){
        $user = User::find(1);
        $image = $user->image;
        $images = $user->images;

        return view('about', ['user' => $user, 'image' => $image, 'images' => $images]);
    }

    public function job($id){
        $job = Job::find($id);

        return view('job', ['job' => $job]);
    }

    public function project($id){
        $project = Project::find($id);

        return view('project', ['project' => $project]);
    }
}
