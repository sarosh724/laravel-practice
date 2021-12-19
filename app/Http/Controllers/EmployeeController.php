<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
class EmployeeController extends Controller
{
    //

    function show(){

        return Employee::all();

    }

}
