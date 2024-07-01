<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = array(
            array(
                'name' => 'Case Study',
                'is_active' => 1,
            ),
            array(
                'name' => 'Commercial Feature',
                'is_active' => 1,
            ),
            array(
                'name' => 'Featured In',
                'is_active' => 1,
            ),
            array(
                'name' => 'Garage Door Tips',
                'is_active' => 1,
            ),
            array(
                'name' => 'Maintenance',
                'is_active' => 1,
            ),
            array(
                'name' => 'News',
                'is_active' => 1,
            ),
            array(
                'name' => 'Safety',
                'is_active' => 1,
            ),
            array(
                'name' => 'Service',
                'is_active' => 1,
            ),
            array(
                'name' => 'Smart Home',
                'is_active' => 1,
            ),
            array(
                'name' => 'Wind Load',
                'is_active' => 1,
            )
        );

        if(count($tags) > 0) {
            foreach($tags as $tag) {
                Tag::updateOrCreate([
                    'name' => $tag['name']
                ],[
                    'is_active' => $tag['is_active']
                ]);
            }
        }
    }
}
