<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tables')->insert([
            'name'=>'Table-001',
            'max_capacity'=> 4,
        ]);

        DB::table('tables')->insert([
            'name'=>'Table-002',
            'max_capacity'=> 4,
        ]);
        
        DB::table('tables')->insert([
            'name'=>'Table-003',
            'max_capacity'=> 2,
        ]);
        
        DB::table('tables')->insert([
            'name'=>'Table-004',
            'max_capacity'=> 6,
        ]);  
        
        DB::table('tables')->insert([
            'name'=>'Table-005',
            'max_capacity'=> 2,
        ]);        

    }
}
