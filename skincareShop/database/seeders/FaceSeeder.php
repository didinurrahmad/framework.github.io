<?php

namespace Database\Seeders;

use App\Models\Face;
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
        $faces = [
            [
                
                'merk' => 'Scarlett',
                'harga' => 45000,
            ],
            [
          
                'merk' => 'MS Glow',
                'harga' => 100000,
            ],
           
        ];
        foreach($faces as $face){
            Face::create([
                'merk' => $face["merk"],
                'harga' => $face["harga"],
            ]);
        }
    }
}
