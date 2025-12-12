# E-Learning Platform

A web-based platform where students can browse, purchase, and access online courses. Built using **Laravel**, the project includes both user-facing features for students and an admin panel for managing the course catalog.

---

## Features

### For Students

- Browse all available courses.
- Filter courses by category.
- Search courses by title or description.
- View detailed course pages with pricing and descriptions.
- Add courses to the shopping cart and proceed through checkout.
- Create an account, log in, update profile, and reset passwords.
- Access a contact page with FAQs and a support form.

### For Admins

- Access a secure admin dashboard.
- View statistics such as total courses and categories.
- Create, edit, and delete courses.
- Manage course categories.
- Set regular and discount prices.
- Upload images or use external image URLs.
- Activate or deactivate courses and categories.
- Protect admin routes using authentication middleware.

---

## Technical Overview

- Framework: Laravel 12  
- Language: PHP  
- Database: SQLite  
- Authentication: Laravel Breeze  
- Cart: Session-based shopping cart  
- Frontend: Responsive design using standard web technologies  

---

## How It Works

1. Students browse courses or search for specific topics.  
2. Selected courses are added to the shopping cart.  
3. At checkout, the user fills in their details and confirms the order.  
4. Admins log in to manage courses, categories, and overall catalog data.

---

## Future Improvements

- Integrate payment gateways such as Stripe or PayPal.  
- Store full order history, generate invoices, and track order status.  
- Add course content delivery features like lessons, videos, quizzes, and certificates.  
- Allow reviews and ratings for courses.  
- Add wishlist support and more advanced filters.  
- Create an instructor dashboard for managing their own courses.  
- Develop mobile apps for iOS and Android.  
- Add multi-language and multi-currency support.

---

## Installation

### Requirements

- PHP 8+  
- Composer  
- Laravel CLI  
- MySql

---

## Admin Access

Create an admin user manually or via database seeding.

Admins can access the dashboard at:

```text
/admin/dashboard
```
