<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;


class EmployeeContoller extends Controller
{
    public function store(Request $request)
    {
    
       $employees = new employee();

       $employees->first_name = $request->input('first_name');
       $employees->last_name = $request->input('last_name');
       $employees->email= $request->input('email');
       $employees->status = '0';

       $employees->save();
       return response()->json($employees);
    }

    public function show()
    {
        $employees = employee::all();
        return response()->json( $employees);
    }

    public function update(Request $request, $id)
    {
        $employee = employee::find($id);
        if($employee)
        {
        $employee->first_name = $request->input('first_name');
        $employee->last_name = $request->input('last_name');
        $employee->email = $request->input('email');
        $employee->update();
        return response()->json(['message'=>'employee is updated successfully'], 200);
        }
        else
        {
            return response()->json(['message'=>'No employee is found'], 404);
        }

    }

    public function destroy($id)
    {
        $employee = employee::find($id);
        if($employee)
        {
            $employee->delete($id);
            return response()->json(['message'=>'employee is deleted successfully'], 200);
        }
        else
        {
            return response()->json(['message'=>'No employee is found'], 404);
        }
        
        

    }

}
