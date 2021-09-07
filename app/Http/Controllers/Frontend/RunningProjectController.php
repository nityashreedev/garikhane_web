<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RunningProject;

class RunningProjectController extends Controller
{
    public function index()
    {
        $runningProjects = RunningProject::all();
        return view('running-project.index', compact('runningProjects'));
    }
}