<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
//Schema::create('departments', function (Blueprint $table) {
//    $table->id();
//    $table->string("name");
//    $table->string("description")->nullable();
//    $table->string("address");
//    $table->timestamps();
//});
    public function run()
    {
        DB::table('departments')->insert([
            'name' => 'test',
            'description' => 'test',
            'address' => 'test',
        ]);
        DB::table('departments')->insert([
            'name' => 'test',
            'description' => 'test',
            'address' => 'test',
        ]);
        DB::table('departments')->insert([
            'name' => 'test',
            'description' => 'test',
            'address' => 'test',
        ]);
        DB::table('departments')->insert([
            'name' => 'test',
            'description' => 'test',
            'address' => 'test',
        ]);
        DB::table('departments')->insert([
            'name' => 'test',
            'description' => 'test',
            'address' => 'test',
        ]);
    }
}
