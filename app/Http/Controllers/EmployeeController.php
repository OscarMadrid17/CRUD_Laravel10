<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['employees'] = Employee::paginate(5);
        return view('employee.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request = request()->all();

        $request = request()->except('_token');
        Employee::insert($request);
        // return response()->json($request);

        return redirect()->route('employee.index')->with('message', 'Empleado agregado exitosamente');


    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $EmployeeInfo = request()->except(['_token','_method']);
        Employee::where('id','=',$id)->update($EmployeeInfo);

         $employee = Employee::findOrFail($id);
         return view('employee.edit', compact('employee'));


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Employee::destroy($id);
        // return redirect('employee');

        return redirect()->route('employee.index')->with('message', 'Empleado eliminado exitosamente');
    }
}
