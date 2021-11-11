<?php

namespace App\Http\Controllers;

use App\Imports\ChildrenImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ChildrenController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        Excel::import(new ChildrenImport, $request->emps);
        
        return redirect('childrens')->with(['successAlert' => 'success message']);
    }
}
