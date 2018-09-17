<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Employee;


class EmployeeController extends Controller
{

    public function match($family_name,$given_name)
    {
        $user = Employee::where('family_name', $family_name)->where('given_name', $given_name)->first();
        if (!isset($user)){
            return response()->json('従業員情報を取得できません',500);
        }else{
            return response()->json($user,200);
        }
    }

}
