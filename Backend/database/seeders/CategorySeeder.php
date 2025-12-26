<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Programming',
                'slug' => 'programming',
                'icon' => 'pi pi-code',
                'color' => 'bg-blue-500',
                'description' => 'Learn web, mobile, and software development'
            ],
            [
                'name' => 'Design',
                'slug' => 'design',
                'icon' => 'pi pi-palette',
                'color' => 'bg-yellow-500',
                'description' => 'UI/UX, graphic, and product design'
            ],
            [
                'name' => 'Business',
                'slug' => 'business',
                'icon' => 'pi pi-chart-line',
                'color' => 'bg-green-500',
                'description' => 'Entrepreneurship, finance, and management'
            ],
            [
                'name' => 'Language',
                'slug' => 'language',
                'icon' => 'pi pi-globe',
                'color' => 'bg-purple-500',
                'description' => 'Learn foreign languages and communication'
            ],
            [
                'name' => 'Marketing',
                'slug' => 'marketing',
                'icon' => 'pi pi-megaphone',
                'color' => 'bg-pink-500',
                'description' => 'Digital marketing and branding strategies'
            ],
        ];

        foreach ($categories as $category) {
            Categories::create($category);
        }
    }
}
