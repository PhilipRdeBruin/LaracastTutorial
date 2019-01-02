<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;

class myProjectTasksController extends Controller {

    public function store(Project $project) {

        $attributes = request()->validate(['description' => ['required', 'min:10']]);

        $project->addTask($attributes);

//        $project->addTask(request('description'));
/*
        Task::create([
            'project_id' => $project->id,
            'description' => request('description')
        ]);
*/
        return back();

    }

    public function update(Task $task) {

// met method 'incomplete':

        $method = request()->has('completed') ? 'complete' : 'incomplete';
        $task->$method();

//  alt. request->has('completed') ? $task->complete() : $task->incomplete();

//  alt. (zonder 'incomplete')        $task->complete(request()->has('completed'));

/*
        $task->update([
            'completed' => request()->has('completed')
        ]);
*/
        return back();

    }
}
