<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dice;
use DB;

class EditController extends Controller
{
    public function edit(Request $request){
        $id = ($request->input('id'));
        $dice= Dice::where('id', $id)->first();
        return view('edit', ['dice' => $dice]);
    }

    public function delete(Request $request) {
        $id = ($request->input('id'));
        $deletedRows = Dice::where('id', $id)->delete();
        return view('index');
    }

}
