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
        $categories = array(
            array(
                'id' => 1,
                'name' => 'Residential Garage Doors',
                'is_active' => 1
            ),
            array(
                'id' => 2,
                'name' => 'Garage Door Openers',
                'is_active' => 1
            ),
            array(
                'id' => 3,
                'name' => 'Garage Door Accessories',
                'is_active' => 1
            ),
            array(
                'id' => 4,
                'name' => 'Wind Load Garage Door',
                'is_active' => 1
            ),
            array(
                'id' => 5,
                'name' => 'Commercial Doors',
                'is_active' => 1
            ),
            array(
                'id' => 6,
                'name' => 'Commercial Accessories',
                'is_active' => 1
            ),
            array(
                'id' => 7,
                'name' => 'Commercial Operators',
                'is_active' => 1
            ),
            array(
                'id' => 8,
                'name' => 'Dock Equipment',
                'is_active' => 1
            )
        );

        if(count($categories) > 0) {
            foreach($categories as $category) {
                Category::updateOrCreate([
                    'name' => $category['name']
                ],[
                    'id' => $category['id'],
                    'is_active' => $category['is_active']
                ]);
            }
        }
    }
}
