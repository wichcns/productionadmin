<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
class EmployeeController extends Controller
{
    public function index()
    {
        $employees = employee::all();
        return view('admin.employee', compact('employees'));
    }
    public function create()
    {
        $employees = new employee;
        return view('admin.formemployee', compact('employees'));
    }
    public function editemployee($id)
    {
        $employees = employee::findOrFail($id);
        return view('admin.formemployee',compact('employees'));
    }
}
