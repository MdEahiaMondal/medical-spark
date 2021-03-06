<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Department;
use Illuminate\Http\Request;
use Str;




class DepartmentController extends Controller
{
    public function index()
    {
        $perPage = request()->perPage ?: 10;
        $keyword = request()->keyword;

        $departments = new Department();

        if ($keyword){
            $departments = $departments->where('name', 'like', '%'.request()->keyword.'%');
        }

        $departments = $departments->latest()->paginate($perPage);

        return view('backend.department.index', compact('departments'));
    }



    public function create()
    {
       return view('backend.department.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|unique:departments'
        ]);

        $request['code'] = Str::slug($request->name);

        Department::create($request->all());

        return redirect()->route('departments.index')->with('successTMsg','Department save successfully');
    }



    public function edit(Department $department)
    {

        dd($department->with('questions')->get()->toArray());

        return view('backend.department.edit',compact('department'));
    }



    public function update(Request $request, Department $department)
    {
        $request->validate([
            'name' => 'required|max:255|unique:departments,name,'.$department->id
        ]);

        $request['code'] = Str::slug($request->name);

        $department->update($request->all());

        return redirect(route('departments.index'))->with('successTMsg', 'Department has been updated successfully');
    }



    public function destroy(Department $department)
    {
        $department->delete();
        return back()->with('successTMsg', 'Department has been deleted successfully');
    }
}
