<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addStudents()
    {
        return view("admin.views.add_students");
    }
    public function listStudents()
    {
        echo "Welcome to listStudents";
    }
}
