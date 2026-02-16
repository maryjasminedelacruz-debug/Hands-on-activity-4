<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            ['name' => 'John Doe', 'status' => 'active'],
            ['name' => 'Jane Smith', 'status' => 'inactive'],
            ['name' => 'Michael Johnson', 'status' => 'active'],
        ];
        return view('students.index', compact('students'));
    }

    public function dashboard()
    {
        return view('students.dashboard');
    }
}