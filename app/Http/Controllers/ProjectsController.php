<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Http\Requests;

class ProjectsController extends Controller
{
	public function index() {
		
		$projects = \App\Project::all();
		
		return view('projects.index')->with('projects', $projects);
	}
	
    public function create() {
		
		$projectTypes = \App\ProjectType::all();
		$projectStatuses = \App\ProjectStatus::all();
		$year = Carbon::now()->format('y');
		$project = new \App\Year;
		$projectNumber = $project->nextProjectNumber();
		
		return view('projects.create')
			->with('projectTypes', $projectTypes)
			->with('projectStatuses', $projectStatuses)
			->with('year', $year)
			->with('projectNumber', $projectNumber);
    }
	
	public function store(Request $request) {
		
		$project = new \App\Project;
		$project->projectType_id = $request->projectType_id;
		$project->projectStatus_id = $request->projectStatus_id;
		$project->version = 0;
		$project->nextProjectNumber();
		
		$currentYear = \App\Year::where('value', '=', Carbon::now()->format('y'));
		$project->year_id = $currentYear->id
		
		$projectType = \App\ProjectType::where('id', '=', $request->projectType_id)->first();
		
		$project->name = $request->name;
		
		$project->save();

		return redirect('/projects');
	}
}
