<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    /**
     * This function returns the index.blade.php file from the teachers directory
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', [
            'teachers' => $teachers
        ]);
    }

}
