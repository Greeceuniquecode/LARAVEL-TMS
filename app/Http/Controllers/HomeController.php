<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard(){
        $user = Auth::user();
        if ($user == null){
            return redirect("/");
        }
        if ($user->role == "employee") {
            return redirect('/dashboard');
        } elseif ($user->role == "employer") {
            return redirect("/edashboard");
        } else {
            return redirect("/");
        }
    }

}
