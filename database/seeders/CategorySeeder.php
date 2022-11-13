<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
//Schema::create('categories', function (Blueprint $table) {
//    $table->id();
//    $table->string("name");
//    $table->string("description")->nullable();
//    $table->timestamps();
//});
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'test',
            'description' => 'test',
        ]);
        DB::table('categories')->insert([
            'name' => 'test',
            'description' => 'test',
        ]);
        DB::table('categories')->insert([
            'name' => 'test',
            'description' => 'test',
        ]);
        DB::table('categories')->insert([
            'name' => 'test',
            'description' => 'test',
        ]);
    }
}
