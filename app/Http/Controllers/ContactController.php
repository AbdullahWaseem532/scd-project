<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $faqs = [
            [
                'question' => 'How do I purchase a course?',
                'answer' => 'Simply browse our course catalog, click on any course that interests you, and click the "Add to Cart" button. Once you\'re ready, proceed to checkout and complete your payment securely.'
            ],
            [
                'question' => 'What payment methods do you accept?',
                'answer' => 'We accept all major credit cards (Visa, Mastercard, American Express), PayPal, and bank transfers. All transactions are secured with industry-standard encryption.'
            ],
            [
                'question' => 'Do I get lifetime access to purchased courses?',
                'answer' => 'Yes! Once you purchase a course, you have lifetime access to all course materials, including any future updates. You can learn at your own pace and revisit content anytime.'
            ],
            [
                'question' => 'Are there any prerequisites for courses?',
                'answer' => 'Prerequisites vary by course. Each course page clearly lists any required knowledge or skills. We offer courses for all levels, from complete beginners to advanced professionals.'
            ],
            [
                'question' => 'Can I get a refund if I\'m not satisfied?',
                'answer' => 'Yes, we offer a 30-day money-back guarantee on all courses. If you\'re not satisfied for any reason, contact our support team within 30 days of purchase for a full refund.'
            ],
            [
                'question' => 'Do you offer certificates upon completion?',
                'answer' => 'Absolutely! Upon completing a course and passing any required assessments, you\'ll receive a certificate of completion that you can share on your resume and LinkedIn profile.'
            ],
            [
                'question' => 'How long do I have to complete a course?',
                'answer' => 'There are no deadlines! With lifetime access, you can complete courses at your own pace. Take your time and learn when it\'s most convenient for you.'
            ],
            [
                'question' => 'Can I access courses on mobile devices?',
                'answer' => 'Yes, our platform is fully responsive and works on all devices. We also have dedicated mobile apps for iOS and Android for an optimized mobile learning experience.'
            ]
        ];

        return view('pages.contact', compact('faqs'));
    }

    public function submit(Request $request)
    {        
        return redirect()->route('contact')->with('success', 'Thank you for your message! We\'ll get back to you soon.');
    }
}
