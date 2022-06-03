<?php

class TasksController
{
    public function index()
    {
        $tasks = Task::all();

        return view('index', [
            'tasks' => $tasks
        ]);
    }

    public function store()
    {
        Task::save([
            'task' => Request::getPostValue('task')
        ]);

        Redirect::to('/');
    }

    public function update()
    {
        Task::update([
            'id' => Request::getPostValue('id')
        ], [
            'completed' => intval(! Request::getPostValue('completed'))
        ]);

        Redirect::to('/');
    }

    public function destroy()
    {
        $id = Request::getPostValue('id');
        Task::delete(["id" => $id]);

        Redirect::to("/");
    }
}
