<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Programming', 'slug' => 'programming'],
            ['name' => 'Design', 'slug' => 'design'],
            ['name' => 'Business', 'slug' => 'business'],
            ['name' => 'Language', 'slug' => 'language'],
            ['name' => 'Marketing', 'slug' => 'marketing'],
        ];

        foreach ($categories as $cat) {
            Categories::create($cat);
        }
    }
}
