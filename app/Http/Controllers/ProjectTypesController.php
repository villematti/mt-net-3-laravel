<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectTypesController extends Controller
{
    public function index() {
    	
		$projectTypes = \App\ProjectType::all();
		
		return view('projectTypes.index')->with('types', $projectTypes);
    }
	
	public function create() {
		
		return view('projectTypes.create');
	}
	
	public function store(Request $request) {
		
		$projectType = new \App\ProjectType;
		
		$projectType->name = $request->name;
		
		$projectType->save();
		
		return redirect('/project-types');
		
	}
	
	public function delete($id) {
		
		// Prevent deletion if there is a project associated with this type.
		if (empty(\App\Project::where('projectType_id', '=', $id)->first())) {
			$type = \App\ProjectType::where('id', '=', $id)->first();
			$type->delete();
			return back();
		} else {
			return back();
		}
	}
}
