<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    public function taskValidator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|min:3|max:25|string',
            'description' => 'required|min:4|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'assigned_user' => [
                'nullable',
                'email',
                'min:3',
                function ($attribute, $value, $fail) {
                    $user = User::where('email', $value)
                        ->where('role', 'employee')
                        ->first();

                    if (!$user) {
                        $fail('The selected assigned user must be an existing employee.');
                    }
                },
            ],
        ]);
    }

    //Task details
    public function getTaskDetails($id)
    {
        $task = Task::find($id);
        return view('/dashboard/employer/task/taskDetails', compact('task'));
    }

    //Auth Task user detail
    public function authTaskDetails()
    {
        $user = Auth::user();
        if($user->role=="employer"){
            $tasks = Task::where('user_id', $user->id)->get();
            return view('/dashboard/employer/task/taskboard',compact('tasks'));
        }
        if($user->role=="employee"){
            $tasks = Task::whereJsonContains('assigned_user', $user->email)->get();
            return view('/dashboard/employee/task/taskboard',compact('tasks'));
        }

    }
    //create task
    public function addTask(Request $request)
    {
        $validator = $this->taskValidator($request->all());
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        if ($request->start_date > $request->end_date) {
            return back()->withErrors([
                'start_date' => "Start date cannot be smaller than end date",
            ]);
        }

        $task = new Task;
        $user = Auth::user()->id;
        $assignedUser = Json::encode($request->assigned_user);
        $task->name = $request->name;
        $task->description = $request->description;
        $task->start_date = $request->start_date;
        $task->end_date = $request->end_date;
        $task->status = $request->status;
        $task->user_id = $user;
        $task->assigned_user = $assignedUser;
        $task->save();
        return redirect('/tasks')->with('success', 'Task Added Successfully');
    }

    //edit-view controller 
    public function editTask($id)
    {
        $task = Task::find($id);
        return view('/dashboard/employer/task/editTask', compact('task'));
    }

    //create task
    public function updateTask(Request $request)
    {
        $validator = $this->taskValidator($request->all());
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        if ($request->start_date > $request->end_date) {
            return back()->withErrors([
                'start_date' => "Start date cannot be smaller than end date",
            ]);
        }

        $task = Task::where('id', $request->id);
        $user = Auth::user()->id;
        $assignedUser = Json::encode($request->assigned_user);
        $task->update(
            [
                'name' => $request->name,
                'description' => $request->description,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'status' => $request->status,
                'user_id' => $user,
                'assigned_user' => $assignedUser,
            ]
        );
        return redirect('/employer/task')->with('success', 'Task Update Successfully');
    }

    public function deleteTask(Request $request)
    {
        $task = Task::find($request->id);
        $task->delete();
        return redirect('/employer/task')->with('success', 'Task Deleted Successfully');
    }
}
