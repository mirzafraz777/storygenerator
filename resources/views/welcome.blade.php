<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
        @endif
    </head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-blue-600">Story Teller</a>
            <div>
                <a href="#" class="px-4 text-gray-600 hover:text-blue-600">Home</a>
                <a href="#" class="px-4 text-gray-600 hover:text-blue-600">Features</a>
                <a href="#" class="px-4 text-gray-600 hover:text-blue-600">Pricing</a>
                <a href="#" class="px-4 text-gray-600 hover:text-blue-600">Contact</a>
                <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Get Started</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-blue-600 text-white text-center py-20">
        <h1 class="text-5xl font-bold">Build Your Dream Website</h1>
        <p class="text-lg mt-4">The best solution for your online presence</p>
        <a href="#" class="mt-6 inline-block px-6 py-3 bg-white text-blue-600 font-bold rounded-lg hover:bg-gray-200">Get Started</a>
    </header>

    <!-- Features Section -->
    <section class="container mx-auto my-20 px-4 text-center">
        <h2 class="text-3xl font-bold text-gray-800">Why Choose Us?</h2>
        <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-6 bg-white shadow-md rounded-lg">
                <h3 class="text-xl font-semibold text-blue-600">Fast & Secure</h3>
                <p class="text-gray-600 mt-2">Our platform is optimized for speed and security.</p>
            </div>
            <div class="p-6 bg-white shadow-md rounded-lg">
                <h3 class="text-xl font-semibold text-blue-600">User Friendly</h3>
                <p class="text-gray-600 mt-2">Easy-to-use interface for a great user experience.</p>
            </div>
            <div class="p-6 bg-white shadow-md rounded-lg">
                <h3 class="text-xl font-semibold text-blue-600">24/7 Support</h3>
                <p class="text-gray-600 mt-2">We are always here to help you with any issues.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-gray-200 py-20 text-center">
        <h2 class="text-3xl font-bold text-gray-800">What Our Clients Say</h2>
        <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8 container mx-auto px-4">
            <div class="p-6 bg-white shadow-md rounded-lg">
                <p class="text-gray-600 italic">"Best service I’ve ever used. Highly recommended!"</p>
                <h3 class="text-blue-600 font-bold mt-2">- John Doe</h3>
            </div>
            <div class="p-6 bg-white shadow-md rounded-lg">
                <p class="text-gray-600 italic">"Amazing experience, my website is running smoothly."</p>
                <h3 class="text-blue-600 font-bold mt-2">- Sarah Smith</h3>
            </div>
            <div class="p-6 bg-white shadow-md rounded-lg">
                <p class="text-gray-600 italic">"Top-notch support and seamless integration!"</p>
                <h3 class="text-blue-600 font-bold mt-2">- Mark Wilson</h3>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="container mx-auto my-20 px-4 text-center">
        <h2 class="text-3xl font-bold text-gray-800">Choose Your Plan</h2>
        <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-6 bg-white shadow-md rounded-lg">
                <h3 class="text-xl font-semibold text-blue-600">Basic</h3>
                <p class="text-gray-600 mt-2">$10/month</p>
                <ul class="mt-4 text-gray-600">
                    <li>✔ 1 Website</li>
                    <li>✔ 10GB Storage</li>
                    <li>✔ Email Support</li>
                </ul>
                <a href="#" class="mt-6 inline-block px-6 py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700">Get Started</a>
            </div>
            <div class="p-6 bg-white shadow-md rounded-lg">
                <h3 class="text-xl font-semibold text-blue-600">Pro</h3>
                <p class="text-gray-600 mt-2">$25/month</p>
                <ul class="mt-4 text-gray-600">
                    <li>✔ 5 Websites</li>
                    <li>✔ 50GB Storage</li>
                    <li>✔ Priority Support</li>
                </ul>
                <a href="#" class="mt-6 inline-block px-6 py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700">Get Started</a>
            </div>
            <div class="p-6 bg-white shadow-md rounded-lg">
                <h3 class="text-xl font-semibold text-blue-600">Enterprise</h3>
                <p class="text-gray-600 mt-2">$50/month</p>
                <ul class="mt-4 text-gray-600">
                    <li>✔ Unlimited Websites</li>
                    <li>✔ 200GB Storage</li>
                    <li>✔ 24/7 VIP Support</li>
                </ul>
                <a href="#" class="mt-6 inline-block px-6 py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700">Get Started</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="bg-gray-200 py-20 text-center">
        <h2 class="text-3xl font-bold text-gray-800">Get In Touch</h2>
        <div class="mt-10 container mx-auto px-4">
            <form action="#" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
                @csrf
                <input type="text" name="name" placeholder="Your Name" class="w-full p-3 border border-gray-300 rounded-lg mb-4">
                <input type="email" name="email" placeholder="Your Email" class="w-full p-3 border border-gray-300 rounded-lg mb-4">
                <textarea name="message" placeholder="Your Message" class="w-full p-3 border border-gray-300 rounded-lg mb-4"></textarea>
                <button type="submit" class="w-full px-6 py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4">
        <p>© 2025 Story Teller. All Rights Reserved.</p>
    </footer>

</body>
</html>
