<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StudentsController extends Controller
{
    function index()
    {
       $students = Http::get("https://jsonplaceholder.typicode.com/users");
       return view('students',['students'=> json_decode($students)]);
    }
}
