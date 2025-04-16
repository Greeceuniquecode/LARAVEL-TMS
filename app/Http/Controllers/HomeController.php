<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        if ($user == null) {
            return redirect("/");
        }
        if ($user->role == "employee") {
            return redirect('/employee/dashboard');
        } elseif ($user->role == "employer") {
            return redirect("/employer/dashboard");
        } elseif ($user->role == "admin") {
            return redirect("/admin/dashboard");
        } else {
            return redirect("/");
        }
    }
}
