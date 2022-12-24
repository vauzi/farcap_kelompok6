<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Aspirasi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aspirasis')->insert([
            'cerita' => 'lorem ipsum dolor',
            'foto' => 'foto.jpeg',
            'id_user' => 1
        ]);
    }
}
