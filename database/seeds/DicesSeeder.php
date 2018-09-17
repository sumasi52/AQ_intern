<?php

use Illuminate\Database\Seeder;

class DicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dices')->insert([
            ['dice_id' => 'a1', 'angle' => '50', 'number' => '1', ],
            ['dice_id' => 'a2', 'angle' => '100', 'number' => '2', ],
            //['dice_id' => 'a3', 'angle' => '200', 'number' => '3', ],
            //['dice_id' => 'b1', 'angle' => '280', 'number' => '4', ],
            //['dice_id' => 'b2', 'angle' => '0', 'number' => '5', ],
        ]);
    }
}
