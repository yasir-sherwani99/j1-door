<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = array(
            array(
                'name' => 'Tufan Khan',
                'designation' => 'Project Manager',
                'picture' => 'images/upload/testimonials/c-1.png',
                'comment' => 'What a great experience! I have visited one of the workshops & attended a masterclass, and both were super useful for young designers. Highly recommended!',
                'is_active' => 1
            ),
            array(
                'name' => 'Riaz Gujjar',
                'designation' => 'Project Manager',
                'picture' => 'images/upload/testimonials/c-2.png',
                'comment' => 'What a great experience! I have visited one of the workshops & attended a masterclass, and both were super useful for young designers. Highly recommended!',
                'is_active' => 1
            ),
            array(
                'name' => 'James Peter',
                'designation' => 'Project Manager',
                'picture' => 'images/upload/testimonials/c-3.png',
                'comment' => 'What a great experience! I have visited one of the workshops & attended a masterclass, and both were super useful for young designers. Highly recommended!',
                'is_active' => 1
            ),
            array(
                'name' => 'Akshay Kumar',
                'designation' => 'Project Manager',
                'picture' => 'images/upload/testimonials/c-4.png',
                'comment' => 'What a great experience! I have visited one of the workshops & attended a masterclass, and both were super useful for young designers. Highly recommended!',
                'is_active' => 1
            ),
            array(
                'name' => 'Ali Ahmad',
                'designation' => 'Project Manager',
                'picture' => 'images/upload/testimonials/c-1.png',
                'comment' => 'What a great experience! I have visited one of the workshops & attended a masterclass, and both were super useful for young designers. Highly recommended!',
                'is_active' => 1
            ),
        );

        if(count($testimonials) > 0) {
            foreach($testimonials as $testimonial) {
                Testimonial::updateOrCreate([
                    'name' => $testimonial['name']
                ],[
                    'designation' => $testimonial['designation'],
                    'picture' => $testimonial['picture'],
                    'comment' => $testimonial['comment'],
                    'is_active' => $testimonial['is_active']
                ]);
            }
        }
    }
}
