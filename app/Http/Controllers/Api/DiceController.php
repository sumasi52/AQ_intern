<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dice;
use DB;


class DiceController extends Controller
{
    public function number(Request $request)
    {
        $dice_id = ($request->input('dice_id'));
        $id = ($request->input('id'));
        $angle = ($request->input('angle'));
        $dice_name = ($request->input('dice_name'));
        $delete_flag = ($request->input('delete_flag'));



        //サイコロの目
        /*
        $number = ceil($angle*6/680);
        if($number == 0){
            $number = 1;
        }
        */
        $number = $angle;

        if($dice_name=='') {
            $dice_name = $dice_id;
        }


            if(!$dice_id==''){
            $dice_data = Dice::updateOrCreate(['dice_id' => $dice_id], ['angle'=>$angle,'number' => $number,'dice_name' => $dice_name]);

        }

        if($delete_flag == 1){
            $deletedRows = Dice::where('id', $id)->delete();
        }

        $dices = DB::table('dices')->get();


        return view('index', ['dices' => $dices]);
    }

    public function ajax() {

        $dices = DB::table('dices')->get();
        return view('ajax', ['dices' => $dices]);
    }


}
