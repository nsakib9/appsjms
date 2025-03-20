@extends('layouts.app')

@section('title', 'হোম - AI চালিত টুলস ও কোর্স')

@section('content')

<!-- Hero Banner -->
<div class="bg-gradient-to-r from-sky-400 to-blue-600 py-16 px-4 text-white text-center">
    <h1 class="text-4xl font-bold mb-4">AI-চালিত টুল ব্যবহার করুন, ক্যারিয়ারকে এগিয়ে নিন!</h1>
    <p class="text-lg mb-6">আপনার কাজকে আরও সহজ, সুন্দর ও প্রফেশনাল করুন আমাদের টুল দিয়ে।</p>
    <a href="#tools" class="bg-white text-blue-700 px-6 py-2 rounded-lg hover:bg-gray-100 transition">এখনই টুলগুলো দেখুন</a>
</div>

<!-- Featured Tools -->
<div id="tools" class="max-w-7xl mx-auto my-10 px-4">
    <h2 class="text-3xl font-bold text-center mb-6 text-gray-800">🧰 আমাদের জনপ্রিয় টুলগুলো</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
        @foreach(range(1,8) as $tool)
            <div class="bg-white rounded-lg shadow-md border-t-4 border-sky-500 p-6 hover:shadow-xl transition">
                <h3 class="text-xl font-semibold text-gray-700 mb-2">টুলের নাম {{$tool}}</h3>
                <p class="text-gray-500 mb-4">আপনার কাজকে সহজ করতে চমৎকার একটি AI টুল।</p>
                <div class="flex justify-between">
                    <a href="#" class="text-sky-500 font-semibold">Demo দেখুন</a>
                    <a href="/app/cover-letter-generator" class="text-blue-600 font-semibold">ব্যবহার করুন</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Video Slider -->
<div class="bg-sky-50 py-10">
    <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">📽️ আমাদের টিউটোরিয়াল ভিডিও</h2>
    <div class="max-w-6xl mx-auto swiper videoSwiper">
        <div class="swiper-wrapper">
            @foreach(range(1,6) as $video)
                <div class="swiper-slide p-4">
                    <iframe class="rounded-lg shadow-md" width="100%" height="220" src="https://www.youtube.com/embed/YOUR_VIDEO_ID" frameborder="0" allowfullscreen></iframe>
                    <p class="mt-2 text-center text-gray-700">ভিডিও টাইটেল {{$video}}</p>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- Course Enrollment CTA -->
<div class="bg-gradient-to-r from-purple-500 to-indigo-600 py-16 text-center text-white">
    <h2 class="text-3xl font-bold mb-4">🚀 প্রফেশনাল স্কিল অর্জনে আমাদের কোর্স করুন</h2>
    <p class="text-lg mb-6">আজই আপনার প্রয়োজনীয় স্কিল অর্জন করুন এবং ক্যারিয়ারে এগিয়ে যান।</p>
    <a href="#" class="bg-white text-indigo-600 px-6 py-2 rounded-lg font-semibold hover:bg-gray-100 transition">কোর্সে এনরোল করুন</a>
</div>

<!-- Testimonials Slider -->
<div class="bg-gray-50 py-12">
    <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">💬 ব্যবহারকারীদের মতামত</h2>
    <div class="max-w-4xl mx-auto swiper testimonialSwiper">
        <div class="swiper-wrapper">
            @foreach(range(1,5) as $review)
                <div class="swiper-slide bg-white p-6 rounded-lg shadow-md text-center">
                    <img class="w-16 h-16 rounded-full mx-auto mb-4" src="https://i.pravatar.cc/150?img={{$review}}" alt="user">
                    <p class="text-gray-600">"আপনাদের টুল আমার ক্যারিয়ারে দারুণ সহযোগিতা করেছে!"</p>
                    <h4 class="mt-2 font-semibold text-blue-600">ব্যবহারকারী {{$review}}</h4>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- Newsletter Subscription -->
<div class="bg-white py-10">
    <div class="max-w-4xl mx-auto bg-sky-100 p-8 rounded-lg text-center border-t-4 border-sky-500 shadow">
        <h3 class="text-2xl font-semibold mb-4 text-gray-700">নতুন টুল ও কোর্স সম্পর্কে আপডেট পেতে সাবস্ক্রাইব করুন</h3>
        <form class="flex flex-col sm:flex-row justify-center">
            <input type="email" placeholder="আপনার ইমেইল দিন" class="p-3 rounded-l-lg border border-sky-300 flex-1">
            <button class="bg-sky-500 text-white px-6 py-3 rounded-r-lg font-semibold hover:bg-sky-600 transition">সাবস্ক্রাইব করুন</button>
        </form>
    </div>
</div>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-6">
    <div class="max-w-6xl mx-auto text-center">
        <p>© 2025 আপনার প্রতিষ্ঠান। সমস্ত অধিকার সংরক্ষিত।</p>
        <div class="flex justify-center space-x-4 mt-2">
            <a href="#">Facebook</a> | <a href="#">YouTube</a> | <a href="#">LinkedIn</a>
        </div>
    </div>
</footer>

<!-- SwiperJS CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    new Swiper(".videoSwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: { delay: 3000 },
        pagination: { el: ".swiper-pagination", clickable: true },
        breakpoints: {
            640: { slidesPerView: 2 },
            1024: { slidesPerView: 3 }
        }
    });

    new Swiper(".testimonialSwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: { delay: 3000 },
        pagination: { el: ".swiper-pagination", clickable: true },
    });
});
</script>

@endsection
