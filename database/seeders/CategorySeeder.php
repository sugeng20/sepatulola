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
            ['role' => 'ANAK', 'name' => 'Teks Dongeng', 'type' => 'TEKS'],
            ['role' => 'ANAK', 'name' => 'Teks Cerpen', 'type' => 'TEKS'],
            ['role' => 'ANAK', 'name' => 'Teks Informasi dan Pengetahuan', 'type' => 'TEKS'],
            ['role' => 'ANAK', 'name' => 'Teks Numerasi', 'type' => 'TEKS'],
            ['role' => 'ANAK', 'name' => 'Teks Cita-Cita', 'type' => 'TEKS'],
            ['role' => 'ANAK', 'name' => 'Komik', 'type' => 'PDF'],
            ['role' => 'ANAK', 'name' => 'Video Dongeng', 'type' => 'VIDEO'],
            ['role' => 'ANAK', 'name' => 'Visualisasi Cerita', 'type' => 'PDF'],
            ['role' => 'ANAK', 'name' => 'Mewarnai', 'type' => 'PDF'],
            ['role' => 'ANAK', 'name' => 'Ilustrasi Teks Bacaan', 'type' => 'PDF'],
            ['role' => 'ANAK', 'name' => 'Poster Informasi', 'type' => 'TEKS'],
            ['role' => 'ANAK', 'name' => 'Menggambar', 'type' => 'PDF'],
            ['role' => 'ANAK', 'name' => 'Puzzle', 'type' => 'LINK TERKAIT'],
            ['role' => 'ANAK', 'name' => 'Games', 'type' => 'LINK TERKAIT'],

            ['role' => 'ORANG TUA', 'name' => 'Ebook Dongeng', 'type' => 'PDF'],
            ['role' => 'ORANG TUA', 'name' => 'Modul', 'type' => 'PDF'],
            ['role' => 'ORANG TUA', 'name' => 'Video Tutorial', 'type' => 'VIDEO'],
            ['role' => 'ORANG TUA', 'name' => 'Moodboard', 'type' => 'PDF'],
            ['role' => 'ORANG TUA', 'name' => 'Tips dan Trick', 'type' => 'TEKS'],

            ['role' => 'GURU', 'name' => 'Ebook Tema', 'type' => 'PDF'],
            ['role' => 'GURU', 'name' => 'Video Pembelajaran', 'type' => 'VIDEO'],
            ['role' => 'GURU', 'name' => 'Modul', 'type' => 'PDF'],
        ]);
    }
}
