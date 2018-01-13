<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('admin.jobs.index');
    }

    public function new(){
        return view('admin.jobs.job');
    }

    public function create(Request $product){
        dump($product);
        exit;
    }

    public function edit(){
        return view('admin.jobs.job');
    }

    public function update(Request $product){
        dump($product);
        exit;
    }
}
