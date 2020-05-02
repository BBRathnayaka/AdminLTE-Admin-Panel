<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addStudents()
    {
        echo "Welcome to addStudents";
    }
    public function listStudents()
    {
        echo "Welcome to listStudents";
    }
}
