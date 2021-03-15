<?php

namespace App\Http\Controllers;

// lets import the model
use App\Models\Teacher;

class Teachers extends Controller
{
    public function list()
    {
        return Teacher::all();
    }
}
