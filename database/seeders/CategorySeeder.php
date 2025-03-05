<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $cat = ['Hosting Emprende', 'Hosting Empresa'];
        $cat2 = ['Descripcion Hosting Emprende', 
                'Descripcion Hosting Empresa'
                ];
        $ids = [1, 2];
        for ($i = 0; $i < 2; $i++) {
            Category::create([
                'id' => $ids[$i],
                'name' => $cat[$i],
                'description' => $cat2[$i],
                'status' => 1,
                'visible' => 1,
            ]);
        }
    }
}
