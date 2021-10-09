<?php

namespace App\Http\Controllers;

use App\Http\Requests\Employee\StoreEmployeeRequest;
use App\Models\Employee;
use App\Traits\ImgUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Images upload traits 
    |--------------------------------------------------------------------------
    |
    | This Trait to save img in PC
    |
    */

    use ImgUpload;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employees')
        ->with('employees', DB::table('employees')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-employee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $request = $request->toArray();

            if (!is_null($request['avatar']))
            {
                $fileName = $this->saveImage($request['avatar'], 'uploads/employee/avatar');

                $request['avatar'] = "uploads/employee/avatar/$fileName";
                
            } else {
                $request['avatar'] = "uploads/employee/avatar/default.png";
            }

            $employee = Employee::create( $request );

            return redirect()->back()->with(['successAlert' => 'success message']);

        } catch (\Exception $ex) {
            return redirect()->back()->with(['errorAlert' => 'error message']);
        }
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('edit-employee')
        ->with('employee', $employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        try{
            $employee = $employee->update( $request->toArray() );

            return redirect('employees')->with(['successAlert' => 'success message']);

        } catch (\Exception $ex) {
            return redirect()->back()->with(['errorAlert' => 'error message']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        try{
            $employee = $employee->delete( $employee );

            return redirect()->back()->with(['successAlert' => 'success message']);

        } catch (\Exception $ex) {
            return redirect()->back()->with(['errorAlert' => 'error message']);
        }
    }
}
