<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Category::count() == 0) {
            $arrayCategories = ['people', 'auto', 'money', 'technology'];


            foreach ($arrayCategories as $name)
                Category::factory()->state(['name' => $name])->create();
        }


    }

}
