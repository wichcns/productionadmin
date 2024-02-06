<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
use App\Models\status;
class EmployeeController extends Controller
{
    public function index()
    {
        $employees = employee::all();
        $status = status::all();
        return view('admin.employee', compact('employees'));
    }
    public function create()
    {
        $employee = new employee;
        return view('admin.formemployee', compact('employee'));
    }
    public function store(Request $request)
    {
        $employee = new employee;
        $employee->fname        = $request->fname;
        $employee->lname        = $request->lname;
        $employee->code         = $request->code;
        $employee->age          = $request->age;
        $employee->gender       = $request->gender;
        $employee->phone        = $request->phone;
        $employee->address      = $request->address;
        $employee->status       = $request->status;
        $employee->district     = $request->district;
        $employee->province     = $request->province;
        $employee->subdistrict  = $request->subdistrict;
        $employee->zipcode      = $request->zipcode;
        $employee->save();

        return redirect('/employee');
    }
    public function editemployee($id)
    {
        $employees = employee::findOrFail($id);
        return view('admin.formemployee',compact('employees'));
    }
}
