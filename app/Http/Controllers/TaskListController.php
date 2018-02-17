<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskList;
use Validator;

class TaskListController extends Controller
{    
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user()->load('lists.tasks');
        
        $data = [
            'lists' => $user->lists,
        ];        

        return view('user.tasklist',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tasklist = new TaskList;
        $tasklist->title = 'new list';
        $tasklist->user_id = auth()->user()->id;

        if ($tasklist->save()) {
            return response($tasklist, 202);
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
    public function update(Request $request, TaskList $tasklist)
    {
        $validator = Validator::make($request->all(), [
            'tasklist.title'        => 'required',
        ]);

        if ($validator->fails()) {
            return response($validator->errors(), 406);
        }

        $tasklist->title        = $request->input('tasklist.title');
        $tasklist->user_id      = auth()->user()->id;

        if ($tasklist->save()) {
            return response($tasklist, 202);
        }
        return response('Expectation Failed',417);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaskList $tasklist)
    {
        if ($tasklist->delete()) {
            return response($tasklist,202);
        }
        return response('Expectation Failed',417);
    }
}
