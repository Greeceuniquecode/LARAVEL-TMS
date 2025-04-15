<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NavController extends Controller
{
    public function taskNav(){
        $user=Auth::user();
        if($user->role=='employer'){
            return redirect('/employer/task');
        }
        elseif($user->role=='employee'){
            return redirect('/employee/task');
        }
        else{
            return redirect('/error');
        }
    }
}
