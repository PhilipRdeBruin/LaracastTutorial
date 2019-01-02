<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class myProjectController extends Controller {

    function index() {

        $projects = Project::All();

//        return view('pages.index', ['projects' => $projects]);
        return view('pages.index', compact('projects'));

    }


    function create() {

        return view('pages.create');

    }

/*
    function show($id) {

        $project = Project::findOrFail($id);

        return view('pages.show', compact('project'));

    }
*/

    function show(Project $project) {

        return view('pages.show', compact('project'));

    }

    function store() {

        $attributes = request()->validate([
            'title' => ['required', 'min:5', 'max:50'],
            'description' => ['required', 'min:20']
        ]);

        Project::create($attributes);

/*
        Project::create([
            'title' => request('title'),
            'description' => request('description'),
        ]);
*/

/*
        $project = new Project();

        $project->title = request('title');
        $project->description = request('description');

        $project->save();
*/

        return redirect('/projects');

    }

    function edit(Project $project) {

        return view('pages.edit', compact('project'));

    }

    function update(Project $project) {

        Project::update(request(['title', 'description']));

/*
        $project->title = request('title');
        $project->description = request('description');

        $project->save();
*/

        return redirect('/projects');

    }

    function destroy(Project $project) {

//        Project::findOrFail($id)->delete();

        $project->delete();

        return redirect('/projects');

    }

}
