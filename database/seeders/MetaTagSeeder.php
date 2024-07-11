<?php

namespace Database\Seeders;

use App\Models\MetaTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetaTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $metatags = array(
            array(
                'id' => 1,
                'page' => 'Home',
                'title' => 'J1 Door | Residential Garage & Commercial Doors',
                'description' => null,
                'keywords' => null
            ),
            array(
                'id' => 2,
                'page' => 'Search Products',
                'title' => 'J1 Door | Search Products',
                'description' => null,
                'keywords' => null
            ),
            array(
                'id' => 3,
                'page' => 'Quote',
                'title' => 'J1 Door | Request a Quote',
                'description' => null,
                'keywords' => null
            ),
            array(
                'id' => 4,
                'page' => 'Services',
                'title' => 'J1 Door | Services',
                'description' => null,
                'keywords' => null
            ),
            array(
                'id' => 5,
                'page' => 'Product Details',
                'title' => 'J1 Door | Product Details',
                'description' => null,
                'keywords' => null
            ),
            array(
                'id' => 6,
                'page' => 'Distributor',
                'title' => 'J1 Door | Distributor',
                'description' => null,
                'keywords' => null
            ),
            array(
                'id' => 7,
                'page' => 'Repair',
                'title' => 'J1 Door | Repair',
                'description' => null,
                'keywords' => null
            ),
            array(
                'id' => 8,
                'page' => 'Blog',
                'title' => 'J1 Door | Blog',
                'description' => null,
                'keywords' => null
            ),
            array(
                'id' => 9,
                'page' => 'Privacy Policy',
                'title' => 'J1 Door | Privacy Policy',
                'description' => null,
                'keywords' => null
            ),
        );

        if(count($metatags) > 0) {
            foreach($metatags as $meta) {
                MetaTag::updateOrCreate([
                    'page' => $meta['page']
                ],[
                    'id' => $meta['id'],
                    'title' => $meta['title'],
                    'description' => $meta['description'],
                    'keywords' => $meta['keywords']
                ]);
            }
        }
    }
}
