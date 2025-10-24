<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display all products
     * 
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // Static products data for demonstration
        $products = [
            [
                'id' => 1,
                'title' => 'Complete Web Development Bootcamp',
                'category' => 'Web Development',
                'author' => 'John Anderson',
                'rating' => 4.8,
                'reviews' => 1250,
                'price' => 49.99,
                'duration' => '40 hours',
                'level' => 'Beginner',
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
                'duration' => '55 hours',
                'level' => 'Intermediate',
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
                'duration' => '25 hours',
                'level' => 'Beginner',
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
                'duration' => '35 hours',
                'level' => 'Intermediate',
                'badge' => 'Hot',
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
                'duration' => '30 hours',
                'level' => 'Beginner',
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
                'duration' => '45 hours',
                'level' => 'Advanced',
                'image' => '/javascript.jpg'
            ],
            [
                'id' => 7,
                'title' => 'Machine Learning A-Z',
                'category' => 'Data Science',
                'author' => 'Dr. Andrew Peterson',
                'rating' => 4.9,
                'reviews' => 1456,
                'price' => 89.99,
                'duration' => '60 hours',
                'level' => 'Advanced',
                'badge' => 'Bestseller',
                'image' => '/ml.jpg'
            ],
            [
                'id' => 8,
                'title' => 'Social Media Marketing Strategy',
                'category' => 'Marketing',
                'author' => 'Jessica Taylor',
                'rating' => 4.5,
                'reviews' => 567,
                'price' => 44.99,
                'duration' => '28 hours',
                'level' => 'Intermediate',
                'image' => '/smm.jpg'
            ],
            [
                'id' => 9,
                'title' => 'React and Redux Complete Guide',
                'category' => 'Web Development',
                'author' => 'Mark Johnson',
                'rating' => 4.7,
                'reviews' => 892,
                'price' => 64.99,
                'duration' => '48 hours',
                'level' => 'Intermediate',
                'image' => '/react.jpg'
            ],
            [
                'id' => 10,
                'title' => 'Graphic Design Masterclass',
                'category' => 'Design',
                'author' => 'Sophie Anderson',
                'rating' => 4.8,
                'reviews' => 723,
                'price' => 52.99,
                'duration' => '38 hours',
                'level' => 'Beginner',
                'badge' => 'Popular',
                'image' => '/graphic.jpg'
            ],
            [
                'id' => 11,
                'title' => 'AWS Cloud Computing',
                'category' => 'Cloud Computing',
                'author' => 'Thomas Richards',
                'rating' => 4.6,
                'reviews' => 634,
                'price' => 69.99,
                'duration' => '42 hours',
                'level' => 'Intermediate',
                'image' => '/aws.jpg'
            ],
            [
                'id' => 12,
                'title' => 'Business Strategy and Leadership',
                'category' => 'Business',
                'author' => 'Rachel Green',
                'rating' => 4.7,
                'reviews' => 445,
                'price' => 47.99,
                'duration' => '32 hours',
                'level' => 'Advanced',
                'image' => '/blm.jpg'
            ]
        ];

        $totalProducts = 545; // Total number of products in database

        return view('pages.products', compact('products', 'totalProducts'));
    }

    /**
     * Display a single product detail page
     * 
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $product = [
            'id' => 1,
            'title' => 'Complete Web Development Bootcamp',
            'description' => 'Master front-end and back-end technologies in this comprehensive Web Development Bootcamp. Build real-world projects and become a job-ready full-stack developer.',
            "full_description" => "This Complete Web Development Bootcamp is designed to take you from a beginner to a proficient full-stack web developer. Throughout this course, you will learn the fundamentals of web development, including HTML, CSS, JavaScript, and popular frameworks like Node.js and Express. You will also gain hands-on experience by building real-world projects that showcase your skills to potential employers.",
            'category' => 'Web Development',
            'author' => 'John Anderson',
            'rating' => 4.8,
            'reviews' => 1250,
            'price' => 49.99,
            'duration' => '40 hours',
            'video_hours' => '15 hours',
            'articles' => 120,
            'resources' => 15,
            'sections' => 12,
            'lectures' => 150,
            'level' => 'Beginner',
            'badge' => 'Bestseller',
            'image' => '/web-dev.jpg',
            'students' => 56,
            'language' => 'English',
            'updated' => '2024-01-15',
            'learning_objectives' => [
                'Build responsive websites using HTML5, CSS3, and JavaScript',
                'Understand front-end frameworks like Bootstrap and Tailwind CSS',
                'Develop back-end applications with Node.js and Express',
                'Work with databases using MongoDB and Mongoose',
                'Create RESTful APIs and integrate third-party services',
                'Deploy web applications to cloud platforms'
            ],
            'curriculum' => [
                [
                    "title" => "Getting Started",
                    "lectures" => 1,
                    "duration" => "30 mins"
                ],
                [
                    "title" => "HTML & CSS Basics",
                    "lectures" => 3,
                    "duration" => "2 hours"
                ],
                [
                    "title" => "JavaScript Fundamentals",
                    "lectures" => 4,
                    "duration" => "3 hours"
                ],
                [
                    "title" => "Front-End Frameworks",
                    "lectures" => 2,
                    "duration" => "1.5 hours"
                ],
                [
                    "title" => "Version Control with Git & GitHub",
                    "lectures" => 2,
                    "duration" => "1 hour"
                ],
                [
                    "title" => "Back-End Development with Node.js & Express",
                    "lectures" => 5,
                    "duration" => "4 hours"
                ],
                [
                    "title" => "Database Management with MongoDB",
                    "lectures" => 3,
                    "duration" => "2.5 hours"
                ],
                [
                    "title" => "Building RESTful APIs",
                    "lectures" => 3,
                    "duration" => "2 hours"
                ],
                [
                    "title" => "Deployment & Hosting",
                    "lectures" => 2,
                    "duration" => "1.5 hours"
                ],
                [
                    "title" => "Final Project: Full-Stack Web Application",
                    "lectures" => 5,
                    "duration" => "4 hours"
                ]
            ],
            'reviewsDetailed' => [
                [
                    'name' => 'Alice Johnson',
                    'rating' => 5,
                    'comment' => 'This course was amazing! I learned so much and landed a job as a web developer thanks to it.'
                ],
                [
                    'name' => 'Mark Smith',
                    'rating' => 4,
                    'comment' => 'Great content and well-structured. The projects really helped solidify my understanding.'
                ],
                [
                    'name' => 'Linda Davis',
                    'rating' => 5,
                    'comment' => 'John is an excellent instructor. Highly recommend this course to anyone looking to get into web development.'
                ]
            ]
        ];

        $relatedCourses = [
            [
                'id' => 5,
                'title' => 'Python for Beginners',
                'author' => 'David Kumar',
                'category' => 'Programming',
                'price' => 34.99,
                'reviews' => 890,
                'image' => '/python.jpg'
            ],
            [
                'id' => 6,
                'title' => 'Advanced JavaScript Techniques',
                'author' => 'Lisa Wang',
                'category' => 'Web Development',
                'price' => 54.99,
                'reviews' => 654,
                'image' => '/javascript.jpg'
            ],
            [
                'id' => 8,
                'title' => 'Social Media Marketing Strategy',
                'author' => 'Jessica Taylor',
                'category' => 'Marketing',
                'price' => 44.99,
                'reviews' => 567,
                'image' => '/smm.jpg'
            ],
            [
                'id' => 10,
                'title' => 'Graphic Design Masterclass',
                'author' => 'Sophie Anderson',
                'category' => 'Design',
                'price' => 52.99,
                'reviews' => 723,
                'image' => '/graphic.jpg'
            ]
        ];
        return view('pages.product-detail', compact('id', 'product', 'relatedCourses'));
    }
}
