<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{


    public function studenti(){
        $data = Student::all();
        return view('studenti', compact('data'));
    }
    // protected $students;

    // public function __construct(){
    //     $this->getStudents();
    // }

    // public function getStudents(){
    //     $this->students = config('students');
    // }


    // public function studenti(){
    //     $data = config('students');
    //     return view('studenti', compact('data'));
    // }

    // public function show($id){
    //     if(!array_key_exists($id, $this->students)){
    //         abort(404);
    //     }
    //     $student = $this->students[$id];
    //     return view('show', compact('student'));
    // }

    // // oppure utilizzo lo slug

    // public function slug($nome){
    //     $trovato = false;
    //     foreach ($this->students as $studente){
    //         if ($studente['slug'] == $nome){
    //             $student = $studente;
    //             $trovato = true;
    //         }
    //     }
    //     if ($trovato){
    //         return view('slug', compact('student'));
    //     } else {
    //         abort(404);
    //     }
    // }


}
