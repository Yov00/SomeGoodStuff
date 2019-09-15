<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $title = "Projects";
        $projects = Project::orderBy('id','asc')->get();
        return view('projects.index')->with([
            'title'=>$title,
            'projects'=>$projects
        ]);
    }


    public function create()
    {
        $title = "Create new project";
        return view('projects/create')->with([
            'title'=> $title,
        ]);
    }


    public function update(Project $project)
    {
        
        $project->update(request(['title','description']));
        return redirect('/projects');
    }


    public function edit(Project $project)
    {
        $title = "Edit project";
        
        return view('projects.edit')->with([
            'title'=>$title,
            'project'=>$project
        ]);
    }


    public function show(Project $project)
    {
        

        $title = "Preview";
        return view('projects.show')->with([
            'project'=>$project,
            'title'=>$title
        ]);
    }


    public function store()
    {
       $validated = request()->validate([
            'title' => ['required','min:3','max:40'],
            'description' => ['required','min:5']
         ]);
        Project::create($validated);  
        return redirect('/projects');

    }


    public function destroy($id)
    {

        Project::findOrFail($id)->delete();
        return redirect('/projects'); 

    }
}
