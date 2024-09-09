<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NosotrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nosotros')->insert([
            ['sobre_nosotros' => 'Somos una empresa que depila', 'mision' =>'Nuestra misión es depilarte','vision' =>'visualizamos la depilación', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
    ]);


    }
}
