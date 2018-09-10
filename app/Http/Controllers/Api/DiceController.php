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
        $angle = ($request->input('angle'));


        //サイコロの目
        /*
        $number = ceil($angle*6/680);
        if($number == 0){
            $number = 1;
        }
        */
        $number = $angle;


        if(!$dice_id==''){
            $dice_data = Dice::updateOrCreate(['dice_id' => $dice_id], ['angle'=>$angle,'number' => $number]);

        }

        $dices = DB::table('dices')->get();


        return view('index', ['dices' => $dices]);
    }

}
