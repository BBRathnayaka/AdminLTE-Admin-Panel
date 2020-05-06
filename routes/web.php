<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "AdminHomeController@dashboard");

//Classes Routes
Route::get("/add-section", "ClassSectionController@addSchoolSection")->name("addClassSection");;
Route::get('/list-section', "ClassSectionController@listSchoolSection")->name("listClassSection");;
Route::get('/list-sections-data', "ClassSectionController@listAllSection")->name("listallsection");;

Route::get('/add-class', "SchoolClassController@addSchoolClass")->name("addSchoolClass");;
Route::get('/list-class', "SchoolClassController@listSchoolClass")->name("listSchoolClass");;

//Faculty Routes
Route::get('/add-faculty-type', "FacultyTypeController@addFacultyType")->name("addFacultyType");;
Route::get('/list-faculty-type', "FacultyTypeController@listFacultyType")->name("listFacultyType");;
Route::get('/add-faculty', "FacultyTypeController@addFaculty")->name("addFaculty");;
Route::get('/list-faculty', "FacultyTypeController@listFaculty")->name("listFaculty");;

//Student Routes
Route::get('/add-students', "StudentController@addStudents")->name("addStudents");;
Route::get('/list-students', "StudentController@listStudents")->name("listStudents");;
