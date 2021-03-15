<?php

namespace App\Http\Controllers;

use App\Models\ClassesStudents;
use App\Models\Product;
use Illuminate\Http\Request;

// lets import the model
use App\Models\Item;

//use App\Models\Product;
// comment test

class Items extends Controller
{
    public function list()
    {
        return Item::all();
    }

    public function addClass(Request $req)
    {
        $item = new Item();
        $item->name = $req->name;
        $item->description = $req->description;
        if ($item->save()) {
            if (isset($req->studentSelectedId) && is_array($req->studentSelectedId)) {
                foreach ($req->studentSelectedId as $studentSelectedId) {
                    $classesStudents = new ClassesStudents();
                    $classesStudents->class_id = $item->id;
                    $classesStudents->teacher_id = $req->teacherSelectedId;
                    $classesStudents->student_id = $studentSelectedId;
                    $classesStudents->save();
                }
            }
        }
        echo 1;
    }
}
