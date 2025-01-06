<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => Str::uuid(),
                'name' => 'Adventure',
                'description' => 'Explore thrilling and adventurous destinations.',
                'slug' => Str::slug('adventure'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Relaxation',
                'description' => 'Unwind and relax with these serene packages.',
                'slug' => Str::slug('relaxation'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Cultural',
                'description' => 'Immerse yourself in local culture and traditions.',
                'slug' => Str::slug('cultural'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Family',
                'description' => 'Fun and memorable experiences for the whole family.',
                'slug' => Str::slug('family'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Luxury',
                'description' => 'Indulge in high-end, luxurious getaways.',
                'slug' => Str::slug('luxury'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
