<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
            'name' => 'Nuevos',
            'description' => 'Libros en buen estado traidos y muy alta calidad',
            'priority' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'Viejos',
            'description' => 'Algunos libros en buen estado otros un poco deteriorados y a muy buen precio',
            'priority' => 2
        ]);
    }
}
