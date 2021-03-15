<?php

namespace App\Http\Controllers;

// lets import the model
use App\Models\Student;

class Students extends Controller
{
    public function list()
    {
        return Student::all();
    }
}
