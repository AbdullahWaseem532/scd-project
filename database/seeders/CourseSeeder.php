<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get categories
        $webDev = Category::where('slug', 'web-development')->first();
        $mobileDev = Category::where('slug', 'mobile-development')->first();
        $dataScience = Category::where('slug', 'data-science')->first();
        $programming = Category::where('slug', 'programming-languages')->first();
        $uiux = Category::where('slug', 'ui-ux-design')->first();
        $devops = Category::where('slug', 'devops-cloud')->first();
        $cybersecurity = Category::where('slug', 'cybersecurity')->first();
        $database = Category::where('slug', 'database-management')->first();

        $courses = [
            // Web Development Courses
            [
                'title' => 'Complete Laravel Masterclass',
                'description' => 'Master Laravel framework from basics to advanced topics. Build real-world applications with authentication, APIs, and more.',
                'price' => 99.99,
                'discount_price' => 79.99,
                'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=800&h=600&fit=crop',
                'category_id' => $webDev?->id,
                'is_active' => true,
                'stock' => 100,
            ],
            [
                'title' => 'React.js Complete Guide',
                'description' => 'Learn React.js from scratch. Build modern, interactive user interfaces with hooks, context, and routing.',
                'price' => 89.99,
                'discount_price' => 69.99,
                'image' => 'https://images.unsplash.com/photo-1633356122544-f134324a6cee?w=800&h=600&fit=crop',
                'category_id' => $webDev?->id,
                'is_active' => true,
                'stock' => 150,
            ],
            [
                'title' => 'Vue.js 3 Fundamentals',
                'description' => 'Comprehensive Vue.js 3 course covering composition API, state management, and building scalable applications.',
                'price' => 79.99,
                'image' => 'https://images.unsplash.com/photo-1551650975-87deedd944c3?w=800&h=600&fit=crop',
                'category_id' => $webDev?->id,
                'is_active' => true,
                'stock' => 120,
            ],
            [
                'title' => 'Full Stack JavaScript Development',
                'description' => 'Build full-stack applications using Node.js, Express, MongoDB, and React. Complete MERN stack course.',
                'price' => 129.99,
                'discount_price' => 99.99,
                'image' => 'https://images.unsplash.com/photo-1516116216624-53e697fedbea?w=800&h=600&fit=crop',
                'category_id' => $webDev?->id,
                'is_active' => true,
                'stock' => 80,
            ],

            // Mobile Development Courses
            [
                'title' => 'Flutter Development Bootcamp',
                'description' => 'Create beautiful cross-platform mobile apps with Flutter and Dart. Build iOS and Android apps from one codebase.',
                'price' => 109.99,
                'discount_price' => 89.99,
                'image' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=800&h=600&fit=crop',
                'category_id' => $mobileDev?->id,
                'is_active' => true,
                'stock' => 90,
            ],
            [
                'title' => 'React Native Mastery',
                'description' => 'Learn to build native mobile apps using React Native. Master navigation, state management, and native modules.',
                'price' => 99.99,
                'image' => 'https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?w=800&h=600&fit=crop',
                'category_id' => $mobileDev?->id,
                'is_active' => true,
                'stock' => 100,
            ],
            [
                'title' => 'iOS Development with Swift',
                'description' => 'Complete iOS app development course using Swift and SwiftUI. Build and publish apps to the App Store.',
                'price' => 119.99,
                'image' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=800&h=600&fit=crop',
                'category_id' => $mobileDev?->id,
                'is_active' => true,
                'stock' => 70,
            ],

            // Data Science Courses
            [
                'title' => 'Python for Data Science',
                'description' => 'Learn data analysis, visualization, and machine learning with Python, Pandas, NumPy, and Scikit-learn.',
                'price' => 94.99,
                'discount_price' => 74.99,
                'image' => 'https://images.unsplash.com/photo-1524967932365-0d8a1a0b0c4e?w=800&h=600&fit=crop',
                'category_id' => $dataScience?->id,
                'is_active' => true,
                'stock' => 110,
            ],
            [
                'title' => 'Machine Learning Fundamentals',
                'description' => 'Introduction to machine learning algorithms, neural networks, and deep learning with TensorFlow and Keras.',
                'price' => 139.99,
                'discount_price' => 109.99,
                'image' => 'https://images.unsplash.com/photo-1555949963-aa79dcee981c?w=800&h=600&fit=crop',
                'category_id' => $dataScience?->id,
                'is_active' => true,
                'stock' => 60,
            ],
            [
                'title' => 'Data Analysis with SQL',
                'description' => 'Master SQL for data analysis. Learn complex queries, aggregations, and data manipulation techniques.',
                'price' => 69.99,
                'image' => 'https://images.unsplash.com/photo-1544383835-bda2bc66a55d?w=800&h=600&fit=crop',
                'category_id' => $dataScience?->id,
                'is_active' => true,
                'stock' => 130,
            ],

            // Programming Languages Courses
            [
                'title' => 'Python Programming Complete',
                'description' => 'From beginner to advanced Python programming. Learn syntax, OOP, data structures, and best practices.',
                'price' => 84.99,
                'discount_price' => 64.99,
                'image' => 'https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?w=800&h=600&fit=crop',
                'category_id' => $programming?->id,
                'is_active' => true,
                'stock' => 200,
            ],
            [
                'title' => 'JavaScript Deep Dive',
                'description' => 'Master JavaScript ES6+, async programming, closures, prototypes, and modern JavaScript patterns.',
                'price' => 79.99,
                'image' => 'https://images.unsplash.com/photo-1579468118864-1b9ea3c0db4a?w=800&h=600&fit=crop',
                'category_id' => $programming?->id,
                'is_active' => true,
                'stock' => 180,
            ],
            [
                'title' => 'Java Programming Masterclass',
                'description' => 'Complete Java course covering fundamentals, OOP, collections, multithreading, and enterprise development.',
                'price' => 99.99,
                'image' => 'https://images.unsplash.com/photo-1516116216624-53e697fedbea?w=800&h=600&fit=crop',
                'category_id' => $programming?->id,
                'is_active' => true,
                'stock' => 140,
            ],

            // UI/UX Design Courses
            [
                'title' => 'Figma UI/UX Design',
                'description' => 'Learn to design beautiful interfaces with Figma. Master prototyping, components, and design systems.',
                'price' => 74.99,
                'discount_price' => 59.99,
                'image' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?w=800&h=600&fit=crop',
                'category_id' => $uiux?->id,
                'is_active' => true,
                'stock' => 100,
            ],
            [
                'title' => 'Adobe XD Essentials',
                'description' => 'Create interactive prototypes and design user experiences with Adobe XD. Learn animation and collaboration.',
                'price' => 69.99,
                'image' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?w=800&h=600&fit=crop',
                'category_id' => $uiux?->id,
                'is_active' => true,
                'stock' => 90,
            ],

            // DevOps & Cloud Courses
            [
                'title' => 'Docker & Kubernetes Mastery',
                'description' => 'Learn containerization with Docker and orchestration with Kubernetes. Deploy scalable applications.',
                'price' => 119.99,
                'discount_price' => 99.99,
                'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=800&h=600&fit=crop',
                'category_id' => $devops?->id,
                'is_active' => true,
                'stock' => 75,
            ],
            [
                'title' => 'AWS Cloud Practitioner',
                'description' => 'Master Amazon Web Services. Learn EC2, S3, Lambda, and other AWS services for cloud infrastructure.',
                'price' => 129.99,
                'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=800&h=600&fit=crop',
                'category_id' => $devops?->id,
                'is_active' => true,
                'stock' => 65,
            ],

            // Cybersecurity Courses
            [
                'title' => 'Ethical Hacking & Penetration Testing',
                'description' => 'Learn ethical hacking techniques, vulnerability assessment, and penetration testing methodologies.',
                'price' => 149.99,
                'discount_price' => 119.99,
                'image' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=800&h=600&fit=crop',
                'category_id' => $cybersecurity?->id,
                'is_active' => true,
                'stock' => 50,
            ],
            [
                'title' => 'Network Security Fundamentals',
                'description' => 'Understand network security, firewalls, VPNs, and secure network architecture design.',
                'price' => 89.99,
                'image' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=800&h=600&fit=crop',
                'category_id' => $cybersecurity?->id,
                'is_active' => true,
                'stock' => 80,
            ],

            // Database Management Courses
            [
                'title' => 'MySQL Database Administration',
                'description' => 'Master MySQL database design, optimization, indexing, and administration. Learn advanced querying techniques.',
                'price' => 79.99,
                'image' => 'https://images.unsplash.com/photo-1544383835-bda2bc66a55d?w=800&h=600&fit=crop',
                'category_id' => $database?->id,
                'is_active' => true,
                'stock' => 100,
            ],
            [
                'title' => 'MongoDB Complete Guide',
                'description' => 'Learn NoSQL database design with MongoDB. Master aggregation, indexing, and data modeling.',
                'price' => 84.99,
                'discount_price' => 69.99,
                'image' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=800&h=600&fit=crop',
                'category_id' => $database?->id,
                'is_active' => true,
                'stock' => 90,
            ],
        ];

        foreach ($courses as $course) {
            if ($course['category_id']) {
                Product::create([
                    'title' => $course['title'],
                    'slug' => Str::slug($course['title']),
                    'description' => $course['description'],
                    'price' => $course['price'],
                    'discount_price' => $course['discount_price'] ?? null,
                    'image' => $course['image'] ?? null,
                    'category_id' => $course['category_id'],
                    'is_active' => $course['is_active'],
                    'stock' => $course['stock'],
                ]);
            }
        }
    }
}

