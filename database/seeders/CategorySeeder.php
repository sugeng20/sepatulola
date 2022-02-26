<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['role' => 'ANAK', 'name' => 'Dongeng', 'type' => 'PDF'],
            ['role' => 'ANAK', 'name' => 'Cerpen', 'type' => 'PDF'],
            ['role' => 'ANAK', 'name' => 'Informasi dan Pengetahuan', 'type' => 'PDF'],
            ['role' => 'ANAK', 'name' => 'Numerasi', 'type' => 'PDF'],
            ['role' => 'ANAK', 'name' => 'Cita-Cita', 'type' => 'PDF'],
            ['role' => 'ANAK', 'name' => 'Komik', 'type' => 'PDF'],
            ['role' => 'ANAK', 'name' => 'Games', 'type' => 'PDF'],
            ['role' => 'ANAK', 'name' => 'Video', 'type' => 'VIDEO'],

            ['role' => 'ORANG TUA', 'name' => 'Ebook', 'type' => 'PDF'],
            ['role' => 'ORANG TUA', 'name' => 'Modul', 'type' => 'PDF'],
            ['role' => 'ORANG TUA', 'name' => 'Video', 'type' => 'VIDEO'],
    
            ['role' => 'GURU', 'name' => 'Ebook Tema', 'type' => 'PDF'],
            ['role' => 'GURU', 'name' => 'Video Pembelajaran', 'type' => 'VIDEO'],
            ['role' => 'GURU', 'name' => 'Modul', 'type' => 'PDF'],
        ]);
    }
}
