<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArduinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Arduino::create([
            'temperature' => '45.5'
        ]);

        Arduino::create([
            'temperature' => '22.3'
        ]);

        Arduino::create([
            'temperature' => '11'
        ]);

        Arduino::create([
            'temperature' => '95.8'
        ]);
    }
}
