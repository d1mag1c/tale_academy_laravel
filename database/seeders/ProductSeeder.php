<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Product::count() == 0) {

            Product::factory()->count(20)->create();

            $products = Product::all();
            $categoriesIds = Category::all()->pluck('id')->toArray();

            foreach ($products as $product) {

                shuffle($categoriesIds);
                $ids = array_slice($categoriesIds, 0, rand(1, count($categoriesIds)));
                $product->categories()->sync($ids);

            }
        }

    }
}
