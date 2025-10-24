<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display the about page
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Team members data (static for demonstration)
        $team = [
            [
                'name' => 'Alexandra Thompson',
                'role' => 'Founder & CEO',
                'bio' => 'Passionate educator with 15+ years of experience in e-learning and educational technology.'
            ],
            [
                'name' => 'Michael Rodriguez',
                'role' => 'Chief Technology Officer',
                'bio' => 'Expert in scalable web applications and learning management systems with a focus on user experience.'
            ],
            [
                'name' => 'Sarah Williams',
                'role' => 'Head of Content',
                'bio' => 'Curriculum specialist dedicated to creating engaging and effective learning experiences.'
            ],
            [
                'name' => 'James Patterson',
                'role' => 'Lead Instructor',
                'bio' => 'Full-stack developer and educator committed to helping students achieve their coding goals.'
            ],
            [
                'name' => 'Emma Chen',
                'role' => 'Marketing Director',
                'bio' => 'Digital marketing strategist focused on connecting learners with transformative educational content.'
            ],
            [
                'name' => 'David Kumar',
                'role' => 'Student Success Manager',
                'bio' => 'Dedicated to ensuring every student has the support and resources needed to succeed.'
            ]
        ];

        return view('pages.about', compact('team'));
    }
}
