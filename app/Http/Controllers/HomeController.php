<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $Project = Project::where('status','1')->get();
        
        return view(
            'home',
            [
                'Projects'  => $Project
            ]
        );
    }
}