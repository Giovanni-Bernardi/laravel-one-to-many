<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class HomeController extends Controller
{
    public function home(){
        $employees = Employee::all();
        // dd($employees);
        return view('pages.home', compact('employees'));
    }
}
