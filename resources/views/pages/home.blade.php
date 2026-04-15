@extends('layouts.app')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-gray-100 pt-24">
    <div class="text-center">
        <h1 class="text-4xl md:text-6xl font-bold text-primary">
            Welcome to Entwo
        </h1>
        <p class="mt-4 text-lg text-gray-600">
            Innovative IT Solutions for Your Business
        </p>
        <a href="/contact" class="btn-primary mt-6 inline-block">
            Contact Us
        </a>
    </div>
</section>
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-primary mb-12">
            Our Services
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4">Web Development</h3>
                <p class="text-gray-600">
                    Building responsive and modern websites tailored to your business needs.
                </p>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4">Mobile Apps</h3>
                <p class="text-gray-600">
                    Creating user-friendly mobile applications for both iOS and Android platforms.
                </p>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4">Cloud Solutions</h3>
                <p class="text-gray-600">
                    Offering scalable cloud services to enhance your business operations.
                </p>
            </div>
        </div>
    </div>
@endsection
