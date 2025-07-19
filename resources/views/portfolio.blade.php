<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aliazer Casan Solaiman - Back-end Developer</title>
    <meta name="description" content="Professional Back-end Developer specializing in PHP and Laravel framework">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 antialiased">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white/90 backdrop-blur-sm border-b border-gray-200 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <h1 class="text-xl font-bold text-gray-900">Aliazer Casan Solaiman</h1>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#home" class="text-gray-900 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">Home</a>
                        <a href="#about" class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">About</a>
                        <a href="#skills" class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">Skills</a>
                        <a href="#projects" class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">Projects</a>
                        <a href="#contact" class="text-gray-600 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">Contact</a>
                    </div>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div class="mobile-menu hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t border-gray-200">
                <a href="#home" class="text-gray-900 hover:text-blue-600 block px-3 py-2 text-base font-medium">Home</a>
                <a href="#about" class="text-gray-600 hover:text-blue-600 block px-3 py-2 text-base font-medium">About</a>
                <a href="#skills" class="text-gray-600 hover:text-blue-600 block px-3 py-2 text-base font-medium">Skills</a>
                <a href="#projects" class="text-gray-600 hover:text-blue-600 block px-3 py-2 text-base font-medium">Projects</a>
                <a href="#contact" class="text-gray-600 hover:text-blue-600 block px-3 py-2 text-base font-medium">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-16 min-h-screen flex items-center bg-gradient-to-br from-blue-50 to-indigo-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <div class="mb-8">
                    <div class="w-32 h-32 mx-auto bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full flex items-center justify-center text-white text-4xl font-bold shadow-lg">
                        ACS
                    </div>
                </div>
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                    Hi, I'm <span class="text-blue-600">Aliazer Casan Solaiman</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-600 mb-8 max-w-3xl mx-auto">
                    Back-end Developer specializing in <span class="font-semibold text-blue-600">PHP</span> and <span class="font-semibold text-blue-600">Laravel</span>
                </p>
                <p class="text-lg text-gray-500 mb-12 max-w-2xl mx-auto">
                    Passionate about building robust, scalable web applications and APIs that power modern digital experiences.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#projects" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-medium hover:bg-blue-700 transition-colors shadow-lg">
                        View My Work
                    </a>
                    <a href="#contact" class="border border-blue-600 text-blue-600 px-8 py-3 rounded-lg font-medium hover:bg-blue-50 transition-colors">
                        Get In Touch
                    </a>
                </div>
            </div>
        </div>
    </section>    <!-- A
bout Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">About Me</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Dedicated back-end developer with expertise in PHP and Laravel framework
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">My Journey</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        As a passionate back-end developer, I specialize in creating robust and scalable web applications using PHP and the Laravel framework. My focus is on writing clean, maintainable code that powers seamless user experiences.
                    </p>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        I enjoy tackling complex problems and building efficient solutions that help businesses grow and succeed in the digital landscape.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Problem Solver</span>
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Team Player</span>
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium">Continuous Learner</span>
                    </div>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl">
                    <h4 class="text-xl font-bold text-gray-900 mb-6">Quick Facts</h4>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-blue-600 rounded-full mr-3"></div>
                            <span class="text-gray-600">Specialization: Back-end Development</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-blue-600 rounded-full mr-3"></div>
                            <span class="text-gray-600">Primary Language: PHP</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-blue-600 rounded-full mr-3"></div>
                            <span class="text-gray-600">Framework: Laravel</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-blue-600 rounded-full mr-3"></div>
                            <span class="text-gray-600">Focus: Scalable Web Applications</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Technical Skills</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Technologies and tools I use to build powerful back-end solutions
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Core Technologies -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L2 7v10c0 5.55 3.84 9.739 9 11 5.16-1.261 9-5.45 9-11V7l-10-5z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Core Technologies</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>
                            PHP 8.2+
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>
                            Laravel Framework
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>
                            MySQL/PostgreSQL
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-blue-600 rounded-full mr-3"></span>
                            RESTful APIs
                        </li>
                    </ul>
                </div>

                <!-- Development Tools -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Development Tools</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-green-600 rounded-full mr-3"></span>
                            Git & GitHub
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-green-600 rounded-full mr-3"></span>
                            Composer
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-green-600 rounded-full mr-3"></span>
                            PHPUnit Testing
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-green-600 rounded-full mr-3"></span>
                            Docker
                        </li>
                    </ul>
                </div>

                <!-- Additional Skills -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Additional Skills</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-purple-600 rounded-full mr-3"></span>
                            API Development
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-purple-600 rounded-full mr-3"></span>
                            Database Design
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-purple-600 rounded-full mr-3"></span>
                            Performance Optimization
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-purple-600 rounded-full mr-3"></span>
                            Security Best Practices
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


 <!-- Projects Section -->
    <section id="projects" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Featured Projects</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Some of the projects I've worked on using PHP and Laravel
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-lg transition-shadow">
                    <div class="h-48 bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center">
                        <div class="text-white text-center">
                            <svg class="w-16 h-16 mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L2 7v10c0 5.55 3.84 9.739 9 11 5.16-1.261 9-5.45 9-11V7l-10-5z"/>
                            </svg>
                            <h4 class="text-xl font-bold">E-Commerce API</h4>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">E-Commerce REST API</h3>
                        <p class="text-gray-600 mb-4">
                            A comprehensive REST API for e-commerce applications built with Laravel, featuring user authentication, product management, and order processing.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">Laravel</span>
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm">MySQL</span>
                            <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-sm">JWT Auth</span>
                        </div>
                        <div class="flex gap-3">
                            <a href="#" class="text-blue-600 hover:text-blue-700 font-medium text-sm">View Details</a>
                            <a href="#" class="text-gray-500 hover:text-gray-700 font-medium text-sm">GitHub</a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-lg transition-shadow">
                    <div class="h-48 bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center">
                        <div class="text-white text-center">
                            <svg class="w-16 h-16 mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/>
                            </svg>
                            <h4 class="text-xl font-bold">CMS Platform</h4>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Content Management System</h3>
                        <p class="text-gray-600 mb-4">
                            A flexible CMS platform with role-based access control, content versioning, and multi-language support built using Laravel.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">Laravel</span>
                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-sm">Blade</span>
                            <span class="bg-red-100 text-red-800 px-2 py-1 rounded text-sm">Redis</span>
                        </div>
                        <div class="flex gap-3">
                            <a href="#" class="text-blue-600 hover:text-blue-700 font-medium text-sm">View Details</a>
                            <a href="#" class="text-gray-500 hover:text-gray-700 font-medium text-sm">GitHub</a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-lg transition-shadow">
                    <div class="h-48 bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center">
                        <div class="text-white text-center">
                            <svg class="w-16 h-16 mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                            <h4 class="text-xl font-bold">Task Manager</h4>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Project Management Tool</h3>
                        <p class="text-gray-600 mb-4">
                            A collaborative project management application with real-time updates, file sharing, and team collaboration features.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">Laravel</span>
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm">WebSockets</span>
                            <span class="bg-orange-100 text-orange-800 px-2 py-1 rounded text-sm">Queue Jobs</span>
                        </div>
                        <div class="flex gap-3">
                            <a href="#" class="text-blue-600 hover:text-blue-700 font-medium text-sm">View Details</a>
                            <a href="#" class="text-gray-500 hover:text-gray-700 font-medium text-sm">GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Get In Touch</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Let's discuss your next project or collaboration opportunity
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Let's Connect</h3>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        I'm always interested in hearing about new opportunities and exciting projects. Whether you need a back-end developer for your team or want to discuss a potential collaboration, feel free to reach out.
                    </p>
                    <div class="space-y-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Email</h4>
                                <p class="text-gray-600">[email]@example.com</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Location</h4>
                                <p class="text-gray-600">[City], [Country]</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">GitHub</h4>
                                <p class="text-gray-600">github.com/[username]</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200">
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Your Name">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="your.email@example.com">
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                            <input type="text" id="subject" name="subject" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Project Discussion">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Tell me about your project..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-medium hover:bg-blue-700 transition-colors">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h3 class="text-2xl font-bold mb-4">Aliazer Casan Solaiman</h3>
                <p class="text-gray-400 mb-6">Back-end Developer | PHP & Laravel Specialist</p>
                <div class="flex justify-center space-x-6 mb-8">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                </div>
                <div class="border-t border-gray-800 pt-8">
                    <p class="text-gray-400 text-sm">
                        © 2025 Aliazer Casan Solaiman. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

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
                    // Close mobile menu if open
                    mobileMenu.classList.add('hidden');
                }
            });
        });

        // Update active navigation link on scroll
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('nav a[href^="#"]');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('text-gray-900');
                link.classList.add('text-gray-600');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.remove('text-gray-600');
                    link.classList.add('text-gray-900');
                }
            });
        });
    </script>
</body>
</html>