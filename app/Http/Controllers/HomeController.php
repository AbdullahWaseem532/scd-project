<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Featured products data (For demonstration)
        $featuredProducts = [
            [
                'id' => 1,
                'title' => 'Complete Web Development Bootcamp',
                'category' => 'Web Development',
                'author' => 'John Anderson',
                'rating' => 4.8,
                'reviews' => 1250,
                'price' => 49.99,
                'badge' => 'Bestseller',
                'image' => '/web-dev.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Data Science Master Class',
                'category' => 'Data Science',
                'author' => 'Sarah Mitchell',
                'rating' => 4.9,
                'reviews' => 980,
                'price' => 79.99,
                'badge' => 'Hot',
                'image' => '/data-science.jpg'
            ],
            [
                'id' => 3,
                'title' => 'Digital Marketing Fundamentals',
                'category' => 'Marketing',
                'author' => 'Michael Chen',
                'rating' => 4.7,
                'reviews' => 756,
                'price' => 39.99,
                'badge' => 'New',
                'image' => '/digital-marketing.jpg'
            ],
            [
                'id' => 4,
                'title' => 'UI/UX Design Principles',
                'category' => 'Design',
                'author' => 'Emily Roberts',
                'rating' => 4.9,
                'reviews' => 1120,
                'price' => 59.99,
                'badge' => 'Bestseller',
                'image' => '/ui-ux.jpg'
            ],
            [
                'id' => 5,
                'title' => 'Python for Beginners',
                'category' => 'Programming',
                'author' => 'David Kumar',
                'rating' => 4.6,
                'reviews' => 890,
                'price' => 34.99,
                'badge' => 'Popular',
                'image' => '/python.jpg'
            ],
            [
                'id' => 6,
                'title' => 'Advanced JavaScript Techniques',
                'category' => 'Web Development',
                'author' => 'Lisa Wang',
                'rating' => 4.8,
                'reviews' => 654,
                'price' => 54.99,
                'badge' => 'New',
                'image' => '/javascript.jpg'
            ]
        ];

        // Customer testimonials data
        $testimonials = [
            [
                'name' => 'Jennifer Martinez',
                'role' => 'Software Developer',
                'text' => 'CourseHub transformed my career! The web development courses are comprehensive and well-structured. I went from beginner to landing my dream job in just 6 months.'
            ],
            [
                'name' => 'Robert Thompson',
                'role' => 'Data Analyst',
                'text' => 'The quality of instruction is outstanding. The data science courses gave me practical skills I use every day at work. Best investment I\'ve made in my professional development.'
            ],
            [
                'name' => 'Amanda Lee',
                'role' => 'Marketing Manager',
                'text' => 'I love how accessible and flexible CourseHub is. I could learn at my own pace while working full-time. The marketing courses helped me advance in my career significantly.'
            ],
            [
                'name' => 'James Wilson',
                'role' => 'UI/UX Designer',
                'text' => 'The design courses are top-notch! Real-world projects and expert feedback helped me build an impressive portfolio. Highly recommend CourseHub to anyone serious about learning.'
            ],
            [
                'name' => 'Maria Garcia',
                'role' => 'Entrepreneur',
                'text' => 'CourseHub courses gave me the skills to start my own business. The business and marketing content is practical and immediately applicable. Worth every penny!'
            ],
            [
                'name' => 'Chris Brown',
                'role' => 'Full-Stack Developer',
                'text' => 'As someone who\'s taken courses on multiple platforms, CourseHub stands out for its quality and instructor expertise. The programming courses are exceptionally well-organized.'
            ]
        ];

        return view('pages.home', compact('featuredProducts', 'testimonials'));
    }
}
