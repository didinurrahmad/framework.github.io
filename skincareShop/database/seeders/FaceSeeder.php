<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $face = [
            [
                'id' => '1',
                'merk' => 'Scarlett',
                'harga' => 45000,
            ],
           
        ];
        foreach($face as $fc){
            \App\Models\face::firstOrCreate($fc);
        }
    }
}
