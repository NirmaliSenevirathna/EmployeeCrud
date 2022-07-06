<?php

namespace App\Http\Controllers;
use App\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index(Request $request)

    {
        $employees = Employees::all();
       //dd($employees);



	   return view('index', compact('employees','employees'));
    }
    public function create()

    {
	    return view('create');
    }


    public function store(Request $request)


    {



        $requestData = $request->all();
        $filename = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $filename, 'public');
        $requestData["image"] = '/storage/'.$path;
        Employees::create($requestData);


        return redirect()->route('employee.index')->with('success','Employee created succesfully.');
    }


    public function show(employees $employee)
    {

	    return view('show')->with('employee',$employee);

    }


    public function edit(employees $employee)
    {

	    return view('edit')->with('employee',$employee);

    }





    public function update(Request $request,Employees $employee)

    {



        $employee->update([
            'name' => $request->name,
            'image' => $request->image,
            'price' => $request->price,
            'status' => $request->status,




        ]);


        return redirect()->route('employee.index')->with('success',' updated successfully');

    }



    public function destroy(Employees $employee)
    {

        $employee->delete();

        return redirect()->route('employee.index')->with('success',' deleted successfully.');

    }


}
