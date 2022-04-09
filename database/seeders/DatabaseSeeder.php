<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('perfumes')->insert([
            'id' => '1',
            'name' => 'jo parfum',
            'type' => 'alap',
            'price' => '3500'
        ]);

        DB::table('perfumes')->insert([
            'id' => '2',
            'name' => 'legjobb parfum',
            'type' => 'jo',
            'price' => '3300'
        ]);

        DB::table('perfumes')->insert([
            'id' => '3',
            'name' => 'ez is jo parfum',
            'type' => 'vedd meg kategoria',
            'price' => '350340'
        ]);

        DB::table('perfumes')->insert([
            'id' => '4',
            'name' => 'jobb parfum',
            'type' => 'alap',
            'price' => '23500'
        ]);

        DB::table('perfumes')->insert([
            'id' => '5',
            'name' => 'nem rossz parfum',
            'type' => 'elmegy kategória',
            'price' => '53200'
        ]);
        
    }
}
