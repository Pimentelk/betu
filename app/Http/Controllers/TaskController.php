<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Validator;

class TaskController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task;
        $task->title        = $request->input('task.title');
        $task->description  = $request->input('task.description');
        $task->list_id      = $request->input('task.list_id');
        $task->category_id  = 1;

        if ($task->save()) {
            return response($task, 202);
        }
        return response('Expectation Failed',417);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $validator = Validator::make($request->all(), [
            'task.title'        => 'required|max:150',
            'task.description'  => 'max:1000',
            'task.list_id'      => 'max:10',
            'task.category_id'  => 'max:10',
            'task.complete'     => ''
        ]);

        if ($validator->fails()) {
            return response($validator->errors(), 406);
        }

        $task->title        = $request->input('task.title');
        $task->description  = $request->input('task.description');
        $task->list_id      = $request->input('task.list_id');
        $task->category_id  = $request->input('task.category_id');
        $task->complete     = (strval($request->input('task.complete')) == true) ? 1 : 0;

        if ($task->save()) {
            return response($task, 202);
        }
        return response('Expectation Failed',417);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        if ($task->delete()) {
            return response($task,202);
        }
        return response('Expectation Failed',417);
    }
}
