<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitPro - Professional Gym Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .stats-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .membership-card {
            transition: all 0.3s ease;
        }
        .membership-card:hover {
            transform: scale(1.03);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        .trainer-card {
            transition: transform 0.3s ease;
        }
        .trainer-card:hover {
            transform: translateY(-8px);
        }
        .schedule-item {
            border-left: 4px solid #667eea;
        }
    </style>
</head>
<body class="font-sans bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="text-2xl font-bold text-purple-700">FitPro</div>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="home.php" class="text-gray-700 hover:text-purple-600">Home</a>
                    <a href="#features" class="text-gray-700 hover:text-purple-600">Features</a>
                    <a href="#membership" class="text-gray-700 hover:text-purple-600">Membership</a>
                    <a href="#classes" class="text-gray-700 hover:text-purple-600">Classes</a>
                    <a href="#trainers" class="text-gray-700 hover:text-purple-600">Trainers</a>
                    <a href="contact.php" class="text-gray-700 hover:text-purple-600">Contact</a>
                </div>
                <div class="flex items-center space-x-4">
                 <!-- <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors">
                        Member Login
                    </button> 
                    
                    <button class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-900 transition-colors">
                        Admin Portal
                    </button> -->
                    <a href="login.php" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors">
    Member Login
</a>

<a href="admin_login.php" class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-900 transition-colors">
    Admin Portal
</a>

                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="gradient-bg text-white pt-20 pb-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-5xl font-bold mb-6">Transform Your Gym Management Experience</h1>
                    <p class="text-xl mb-8 text-purple-100">
                        Streamline operations, engage members, and grow your fitness business with our comprehensive management platform.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="register.php" button class="bg-white text-purple-700 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                            Start Free Trial
                        </a>
                        <a href="demo.php" button class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-purple-700 transition-colors">
                            Watch Demo
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <div class="rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a95d8674-8fbc-4b7d-8b48-de7804b55fb5.png" alt="Modern gym management dashboard showing member statistics, class schedules, and fitness metrics in a clean interface" class="w-full" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="stats-card text-center p-6 bg-white rounded-xl shadow-md">
                    <div class="text-4xl font-bold text-purple-600 mb-2">500+</div>
                    <div class="text-gray-600">Active Members</div>
                </div>
                <div class="stats-card text-center p-6 bg-white rounded-xl shadow-md">
                    <div class="text-4xl font-bold text-purple-600 mb-2">25+</div>
                    <div class="text-gray-600">Certified Trainers</div>
                </div>
                <div class="stats-card text-center p-6 bg-white rounded-xl shadow-md">
                    <div class="text-4xl font-bold text-purple-600 mb-2">50+</div>
                    <div class="text-gray-600">Weekly Classes</div>
                </div>
                <div class="stats-card text-center p-6 bg-white rounded-xl shadow-md">
                    <div class="text-4xl font-bold text-purple-600 mb-2">99%</div>
                    <div class="text-gray-600">Member Satisfaction</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Powerful Features</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Everything you need to manage your gym efficiently and provide exceptional member experiences
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-users text-3xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Member Management</h3>
                    <p class="text-gray-600">
                        Complete member profiles, attendance tracking, payment processing, and communication tools in one place.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-calendar-alt text-3xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Class Scheduling</h3>
                    <p class="text-gray-600">
                        Automated class bookings, waitlist management, and real-time capacity tracking for optimal scheduling.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-chart-line text-3xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Analytics & Reports</h3>
                    <p class="text-gray-600">
                        Comprehensive business insights, revenue tracking, and performance metrics to drive growth.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-mobile-alt text-3xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Mobile App</h3>
                    <p class="text-gray-600">
                        Members can book classes, track progress, and make payments through our dedicated mobile application.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-money-bill-wave text-3xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Billing System</h3>
                    <p class="text-gray-600">
                        Automated billing, subscription management, and payment tracking with multiple payment options.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                        <i class="fas fa-lock text-3xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Access Control</h3>
                    <p class="text-gray-600">
                        Secure facility access with member ID verification and real-time access logs for safety and security.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Membership Plans -->
    <section id="membership" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Flexible Membership Plans</h2>
                <p class="text-xl text-gray-600">Choose the plan that fits your fitness journey</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="membership-card bg-white border-2 border-gray-200 rounded-xl p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-4">Basic</h3>
                    <div class="text-4xl font-bold text-purple-600 mb-6">$49<span class="text-lg text-gray-600">/month</span></div>
                    <ul class="space-y-3 mb-8">
                        <li>Access to all equipment</li>
                        <li>Free fitness assessment</li>
                        <li>Locker room access</li>
                        <li>Basic WiFi</li>
                        <li class="text-gray-400">Group classes</li>
                        <li class="text-gray-400">Personal training</li>
                    </ul>
                    <a href="payment.php?user_id=1&class_id=2&amount=49"  button class="w-full bg-gray-800 text-white py-3 rounded-lg hover:bg-gray-900 transition-colors">
                        Get Started
                    </a>
                </div>
                
                <div class="membership-card bg-gradient-to-br from-purple-600 to-purple-800 text-white rounded-xl p-8 text-center transform scale-105">
                    <div class="bg-white text-purple-600 text-sm font-semibold px-4 py-1 rounded-full inline-block mb-4">
                        MOST POPULAR
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Premium</h3>
                    <div class="text-4xl font-bold mb-6">$79<span class="text-lg text-purple-200">/month</span></div>
                    <ul class="space-y-3 mb-8">
                        <li>All Basic features</li>
                        <li>Unlimited group classes</li>
                        <li>Premium locker rooms</li>
                        <li>High-speed WiFi</li>
                        <li>2 personal training sessions</li>
                        <li>Nutrition consultation</li>
                    </ul>
                    <button class="w-full bg-white text-purple-600 py-3 rounded-lg hover:bg-gray-100 transition-colors">
                        Get Started
                    </button>
                </div>
                
                <div class="membership-card bg-white border-2 border-gray-200 rounded-xl p-8 text-center">
                    <h3 class="text-2xl font-semibold mb-4">Elite</h3>
                    <div class="text-4xl font-bold text-purple-600 mb-6">$129<span class="text-lg text-gray-600">/month</span></div>
                    <ul class="space-y-3 mb-8">
                        <li>All Premium features</li>
                        <li>24/7 facility access</li>
                        <li>Unlimited personal training</li>
                        <li>Premium amenities</li>
                        <li>Priority booking</li>
                        <li>Comprehensive body analysis</li>
                    </ul>
                    <button class="w-full bg-gray-800 text-white py-3 rounded-lg hover:bg-gray-900 transition-colors">
                        Get Started
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Class Schedule -->
    <section id="classes" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Class Schedule</h2>
                <p class="text-xl text-gray-600">Join our diverse range of fitness classes</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl overflow-hidden shadow-md">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/dce30499-da38-49b6-b1f1-4a04d4502acd.png" alt="High-energy yoga class in a bright studio with diverse participants following instructor poses" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Power Yoga</h3>
                        <p class="text-gray-600 mb-4">Mon, Wed, Fri • 7:00 AM - 8:00 AM</p>
                        <div class="flex justify-between items-center">
                            <span class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-sm">12 spots left</span>
                            <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700">Book Now</button>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl overflow-hidden shadow-md">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/f8ac09cd-13f4-4af7-8f89-63de8322c83f.png" alt="Intense HIIT workout session with trainer leading group through dynamic exercises in modern gym" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">HIIT Training</h3>
                        <p class="text-gray-600 mb-4">Tue, Thu • 6:00 PM - 7:00 PM</p>
                        <div class="flex justify-between items-center">
                            <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm">Full</span>
                            <button class="bg-gray-300 text-gray-600 px-4 py-2 rounded-lg cursor-not-allowed">Waitlist</button>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl overflow-hidden shadow-md">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/b034cf01-fa06-4cb4-be45-31e27dc2c305.png" alt="Spin cycling class with rows of stationary bikes and enthusiastic instructor motivating participants" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Spin Class</h3>
                        <p class="text-gray-600 mb-4">Daily • Various times</p>
                        <div class="flex justify-between items-center">
                            <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm">Open</span>
                            <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trainers Section -->
    <section id="trainers" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Meet Our Expert Trainers</h2>
                <p class="text-xl text-gray-600">Certified professionals dedicated to your success</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="trainer-card bg-white rounded-xl shadow-md overflow-hidden text-center">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/0f2a6462-2018-4e39-a9e4-4838ca3a3fe2.png" alt="Professional fitness trainer in athletic wear demonstrating proper exercise form with confident expression" class="w-full h-64 object-cover" />
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">Sarah Johnson</h3>
                        <p class="text-purple-600 mb-2">Certified Personal Trainer</p>
                        <p class="text-gray-600 text-sm">Specializes in strength training and nutrition coaching with 8 years of experience.</p>
                        <div class="flex justify-center space-x-3 mt-4">
                            <span class="bg-blue-100 text-blue-600 px-2 py-1 rounded text-xs">Strength</span>
                            <span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs">Nutrition</span>
                        </div>
                    </div>
                </div>
                
                <div class="trainer-card bg-white rounded-xl shadow-md overflow-hidden text-center">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/635941ff-b0a6-4b60-8b83-660f88f7003f.png" alt="Yoga instructor demonstrating advanced pose with perfect form in a serene studio environment" class="w-full h-64 object-cover" />
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">Mike Chen</h3>
                        <p class="text-purple-600 mb-2">Yoga & Flexibility Expert</p>
                        <p class="text-gray-600 text-sm">500-hour certified yoga instructor with focus on mindfulness and flexibility.</p>
                        <div class="flex justify-center space-x-3 mt-4">
                            <span class="bg-purple-100 text-purple-600 px-2 py-1 rounded text-xs">Yoga</span>
                            <span class="bg-indigo-100 text-indigo-600 px-2 py-1 rounded text-xs">Meditation</span>
                        </div>
                    </div>
                </div>
                
                <div class="trainer-card bg-white rounded-xl shadow-md overflow-hidden text-center">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/17d981e5-f6af-47c7-932f-34fe699b0718.png" alt="Enthusiastic HIIT trainer leading a high-energy group workout session with perfect technique" class="w-full h-64 object-cover" />
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">Emily Rodriguez</h3>
                        <p class="text-purple-600 mb-2">HIIT & Cardio Specialist</p>
                        <p class="text-gray-600 text-sm">Creates dynamic, high-energy workouts that maximize calorie burn and endurance.</p>
                        <div class="flex justify-center space-x-3 mt-4">
                            <span class="bg-red-100 text-red-600 px-2 py-1 rounded text-xs">HIIT</span>
                            <span class="bg-orange-100 text-orange-600 px-2 py-1 rounded text-xs">Cardio</span>
                        </div>
                    </div>
                </div>
                
                <div class="trainer-card bg-white rounded-xl shadow-md overflow-hidden text-center">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/4434bbb2-d878-4e24-9495-0e7f3242d25a.png" alt="Senior fitness expert working with mature clients on functional strength and mobility exercises" class="w-full h-64 object-cover" />
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">David Thompson</h3>
                        <p class="text-purple-600 mb-2">Senior Fitness Expert</p>
                        <p class="text-gray-600 text-sm">Specialized in functional fitness and mobility for older adults and rehabilitation.</p>
                        <div class="flex justify-center space-x-3 mt-4">
                            <span class="bg-teal-100 text-teal-600 px-2 py-1 rounded text-xs">Senior</span>
                            <span class="bg-cyan-100 text-cyan-600 px-2 py-1 rounded text-xs">Rehab</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-6">Get In Touch</h2>
                    <p class="text-xl text-gray-600 mb-8">
                        Ready to transform your fitness journey? Reach out to us for a free consultation or facility tour.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-map-marker-alt text-purple-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Location</h4>
                                <p class="text-gray-600">123 Fitness Street, Health City, HC 12345</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-phone text-purple-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Phone</h4>
                                <p class="text-gray-600">(555) 123-4567</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-envelope text-purple-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Email</h4>
                                <p class="text-gray-600">info@fitprogym.com</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-clock text-purple-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Hours</h4>
                                <p class="text-gray-600">Mon-Fri: 5:00 AM - 11:00 PM<br>Sat-Sun: 7:00 AM - 9:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <h3 class="text-2xl font-semibold mb-6">Send us a Message</h3>
                    
                <!-- ✅ Form starts here -->
                <form action="contact.php" method="POST" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                                <input type="text" name="first_name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent"  placeholder="Your first name" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                                <input type="text" name="last_name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent"  placeholder="Your last name" required>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="your.email@example.com" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                            <input type="tel" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent"  placeholder="(555) 123-4567" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea name="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="How can we help you?" required></textarea>
                        </div>
                        <button type="submit" class="w-full bg-purple-600 text-white py-3 rounded-lg hover:bg-purple-700 transition-colors">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">FitPro Gym</h3>
                    <p class="text-gray-400">
                        Empowering fitness journeys through technology and expert guidance since 2015.
                    </p>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="#features" class="text-gray-400 hover:text-white">Features</a></li>
                        <li><a href="#membership" class="text-gray-400 hover:text-white">Membership</a></li>
                        <li><a href="#classes" class="text-gray-400 hover:text-white">Classes</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Resources</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Support</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Connect With Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-purple-600">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-purple-600">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-purple-600">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-purple-600">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>© 2024 FitPro Gym Management System. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Simple form validation
        const contactForm = document.querySelector('form');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Thank you for your message! We will get back to you soon.');
                this.reset();
            });
        }
    </script>
</body>
</html>

