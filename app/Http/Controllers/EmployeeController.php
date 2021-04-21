<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //

    public function addEmployee()
    {
        return view('add-employee');
    }

    public function storeEmployee(Request $request)
    {
        $name = $request -> name;
        $image = $request -> file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $employee = new Employee();
        $employee->name = $name;
        $employee->profileimage = $imageName;
        $employee->save();
        return back()->with('employee_added','Employee has been inserted');
    }

    public function employees()
    {
        $employees = Employee::all();
        return view('all-employees',compact('employees'));
    }

    public function editEmployee($id)
    {
        $employee = Employee::find($id);
        return view('edit-employee', compact('employee'));
    }

    public function updateEmployee(Request $request)
    {
        $name = $request -> name;
        $image = $request -> file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $employee = Employee::find($request->id);
        $employee->name = $name;
        $employee->profileimage = $imageName;
        $employee->save();    
        return back()->with('employee_updated','Employee updated successfully!');
    }
}
