<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = Factory::create();

        for ($i = 1; $i <= 5; $i++)
        {
            Category::create([
                'name'        => $faker->word(),
                'description' => $faker->text(),
                'image'       => 'category-images/category-image1650531999.jpg',
                'status'      => mt_rand(0,1),
            ]);
        }
    }
}
