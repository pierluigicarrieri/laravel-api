<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index () {

        //Creates a '$projects' variable with all the data in 'Projects' table and relations 
        //(through functions in 'Project' model), then paginates

        $projects = Project::with('type', 'technologies')->paginate(2);

        //Returns a json

        return response()->json([
            'success' => true,
            'results' => $projects
        ]);

    }
}
