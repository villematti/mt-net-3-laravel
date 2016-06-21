<?php

use Illuminate\Database\Seeder;

class CounterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		for ($x=1;$x<100000;$x++) {
			
			DB::table('counts')->insert([
				'value' => $x
        	]);
		}
    }
}
