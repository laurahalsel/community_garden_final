<?php

use Illuminate\Database\Seeder;

class SoilsTableSeeder extends Seeder
{
      /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soils')->insert([
            'name' => 'miracle grow',
            'systemID' => 2,
            'comments' => 'the perfect potting soil for your plants',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('soils')->insert([
            'name' => 'loam',
            'systemID' => 2,
            'comments' => 'best darn potting soil all gardners love',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
