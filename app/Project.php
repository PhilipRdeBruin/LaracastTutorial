<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    protected $fillable = [
        'title', 'description'
    ];

// alternatief:

//    protected $guarded = [];

    public function tasks() {

        return $this->hasMany(Task::class);
    }


    public function  addTask($task) {

        $this->tasks()->create($task);

    }


/*
    public function  addTask($description) {

        $this->tasks()->create(compact('description'));

// alternatief:

        return Task::create([
            'project_id' => $this->id,
            'description' => request('description')
        ]);

    }
*/
}
