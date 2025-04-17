<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //admin dashboard
    public function adminDashboard(){
        $authUser=Auth::user();
        $user=User::get();
        $task=Task::get();

        if($authUser->role=='admin')
        {
            return view("/dashboard/admin/dashboard",compact('user','task',));
        }
        else{
            return redirect("/");
        }
    }
}
