<?php

use Illuminate\Database\Seeder;

class PotsTableSeeder extends Seeder
{
      /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pots')->insert([
            'name' => 'ceramic ',
            'systemID' => 2,
            'comments' => 'cheap but useful',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('pots')->insert([
            'name' => 'plastic',
            'systemID' => 2,
            'comments' => 'cheap',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
