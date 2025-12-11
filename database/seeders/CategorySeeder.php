<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Web Development',
                'description' => 'Learn to build modern websites and web applications using the latest technologies and frameworks.',
                'is_active' => true,
            ],
            [
                'name' => 'Mobile Development',
                'description' => 'Master mobile app development for iOS and Android platforms.',
                'is_active' => true,
            ],
            [
                'name' => 'Data Science',
                'description' => 'Explore data analysis, machine learning, and artificial intelligence.',
                'is_active' => true,
            ],
            [
                'name' => 'Programming Languages',
                'description' => 'Learn fundamental and advanced programming languages from scratch.',
                'is_active' => true,
            ],
            [
                'name' => 'UI/UX Design',
                'description' => 'Create beautiful and user-friendly interfaces and experiences.',
                'is_active' => true,
            ],
            [
                'name' => 'DevOps & Cloud',
                'description' => 'Learn deployment, automation, and cloud infrastructure management.',
                'is_active' => true,
            ],
            [
                'name' => 'Cybersecurity',
                'description' => 'Protect systems and networks from security threats and vulnerabilities.',
                'is_active' => true,
            ],
            [
                'name' => 'Database Management',
                'description' => 'Master database design, optimization, and administration.',
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
                'description' => $category['description'],
                'is_active' => $category['is_active'],
            ]);
        }
    }
}

