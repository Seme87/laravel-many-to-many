<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('type', 'technologies')->get();

        return $projects;
    }


    public function show($slug)
    {
        try {
            $project = Project::where('slug', $slug)->with('type', 'technologies')->firstOrFail();
            return $project;
        } catch (\illuminate\Database\Eloquent\ModelNotFoundException ) {
            return response([
                'error' => '404 Project not found'
            ], 404);
        }

        

        return $project;
    }
}