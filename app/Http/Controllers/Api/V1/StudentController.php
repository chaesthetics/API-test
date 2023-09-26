<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentRequest;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return response()->json("Index shiit");
    }

    public function store(StoreStudentRequest $request)
    {
        Student::create($request->validated());
        return response()->json("Student has been created");
    }

    public function update(StoreStudentRequest $request, Student $student)
    {
        $student->update($request->validated());
        return response()->json("Updated Successfully");
    }
}
