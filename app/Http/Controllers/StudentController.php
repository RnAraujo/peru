<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function saludo()
    {
        return view('student.saludo');
    }

    public function autor()
    {
        return view('student.lista');
    }
}
