@extends('layouts.app')

@section('title', 'সেরা কভার লেটার জেনারেটর')

@section('content')
<div 
    x-data="{ 
        tab: 'basic', 
        modalOpen: false, 
        modalContent: '', 
        showDownloadPopup: false 
    }"
    class="text-white bg-gray-900"
>

    <!-- ================== হেডার ব্যানার সেকশন (গেমিং স্টাইল) ================== -->
    <div class="bg-gradient-to-r from-purple-700 to-pink-600 py-10 px-4 md:flex md:items-center md:justify-between text-white shadow-xl">
        <!-- 🎥 বাম পাশে YouTube ভিডিও -->
        <div class="w-full md:w-1/2 mb-4 md:mb-0">
            <iframe 
                width="100%" 
                height="250" 
                src="https://www.youtube.com/embed/YOUR_VIDEO_ID" 
                frameborder="0" 
                allowfullscreen
                class="rounded-lg border-4 border-purple-900"
            ></iframe>
        </div>
        <!-- 🔥 ডান পাশে কল টু অ্যাকশন -->
        <div class="w-full md:w-1/2 text-center md:text-left md:pl-6">
            <h2 class="text-3xl font-extrabold mb-2">আপনার চাকরির স্বপ্ন পূরণ করুন!</h2>
            <p class="text-lg text-gray-100">
                মাত্র এক ক্লিকেই তৈরি করুন পারফেক্ট কভার লেটার, যা নিয়োগকর্তাকে গেম চেঞ্জারের মতো ইমপ্রেস করবে।
            </p>
            <button class="mt-4 bg-black border-2 border-pink-400 text-pink-200 px-6 py-2 rounded-lg hover:bg-pink-600 hover:text-white transition">
                এখনই শুরু করুন
            </button>
        </div>
    </div>
    <!-- ================== /হেডার ব্যানার সেকশন ================== -->

    <!-- ================== Form Section (Basic + Advanced) ================== -->
    <div class="max-w-4xl mx-auto mt-6 p-4 md:p-6 rounded-lg shadow-lg border-4 border-purple-800 bg-gray-800">

        <!-- === Tab Switch === -->
        <div class="flex space-x-4 mb-4">
            <button 
                @click="tab = 'basic'" 
                :class="{'bg-purple-600': tab === 'basic'}" 
                class="px-4 py-2 rounded border border-purple-600 text-white"
            >
                Basic
            </button>
            <button 
                @click="tab = 'advanced'" 
                :class="{'bg-pink-600': tab === 'advanced'}" 
                class="px-4 py-2 rounded border border-pink-600 text-white"
            >
                Advanced
            </button>
        </div>

        <!-- ============= Basic Form ============= -->
        <form 
            x-show="tab === 'basic'" 
            action="{{ route('app.generate', $app->slug) }}" 
            method="POST" 
            class="space-y-4"
        >
            @csrf
            <input 
                type="text" 
                name="name" 
                placeholder="আপনার নাম" 
                class="w-full border border-purple-500 bg-gray-700 p-2 rounded" 
                required
            >
            <input 
                type="email" 
                name="email" 
                placeholder="আপনার ইমেইল" 
                class="w-full border border-purple-500 bg-gray-700 p-2 rounded" 
                required
            >
            <input 
                type="text" 
                name="job_title" 
                placeholder="চাকরির পদের নাম" 
                class="w-full border border-purple-500 bg-gray-700 p-2 rounded" 
                required
            >
            <input 
                type="text" 
                name="company_name" 
                placeholder="প্রতিষ্ঠানের নাম" 
                class="w-full border border-purple-500 bg-gray-700 p-2 rounded" 
                required
            >
            <textarea 
                name="skills" 
                placeholder="আপনার দক্ষতা (কমা দিয়ে আলাদা করুন)" 
                class="w-full border border-purple-500 bg-gray-700 p-2 rounded" 
                required
            ></textarea>

            <!-- Action Buttons -->
            <div class="flex space-x-4">
                <button 
                    type="submit" 
                    class="bg-green-500 text-white px-4 py-2 rounded font-bold hover:bg-green-600"
                >
                    কভার লেটার তৈরি করুন
                </button>
                <button 
                    type="button" 
                    @click="document.getElementById('generated-letters').scrollIntoView({ behavior: 'smooth' })" 
                    class="bg-blue-500 text-white px-4 py-2 rounded font-bold hover:bg-blue-600"
                >
                    পূর্বের কভার লেটার দেখুন
                </button>
            </div>
        </form>
        <!-- ============= /Basic Form ============= -->

        <!-- ============= Advanced Form ============= -->
        <form 
            x-show="tab === 'advanced'" 
            class="space-y-4"
        >
            <input 
                type="text" 
                name="hiring_manager" 
                placeholder="হায়ারিং ম্যানেজারের নাম" 
                class="w-full border border-pink-500 bg-gray-700 p-2 rounded" 
                required
            >
            <input 
                type="text" 
                name="company_name" 
                placeholder="কোম্পানির নাম" 
                class="w-full border border-pink-500 bg-gray-700 p-2 rounded" 
                required
            >
            <input 
                type="text" 
                name="job_title" 
                placeholder="পজিশনের নাম" 
                class="w-full border border-pink-500 bg-gray-700 p-2 rounded" 
                required
            >
            <textarea 
                name="job_description" 
                placeholder="টার্গেট জব এর ডেসক্রিপশন (ATS কীওয়ার্ড অনুযায়ী)" 
                class="w-full border border-pink-500 bg-gray-700 p-2 rounded" 
                required
            ></textarea>
            <p class="text-pink-300 text-sm">
                ⚡ এখানে ATS কীওয়ার্ডের ব্যাখ্যা থাকতে পারে
            </p>

            <!-- Tone Selection -->
            <select name="tone" class="w-full border border-pink-500 bg-gray-700 p-2 rounded">
                <option value="formal">Formal</option>
                <option value="friendly">Friendly</option>
                <option value="persuasive">Persuasive</option>
            </select>

            <!-- Cover Letter Format -->
            <select name="format" class="w-full border border-pink-500 bg-gray-700 p-2 rounded">
                <option value="bangla">বাংলা</option>
                <option value="english">English</option>
            </select>

            <!-- Download Button (Placeholder Submission) -->
            <button 
                type="button"
                @click="
                    modalOpen = false; 
                    showDownloadPopup = true; 
                    setTimeout(() => { 
                        showDownloadPopup = false; 
                        window.location.href = 'https://example.com'; 
                    }, 1500)
                " 
                class="bg-green-500 text-white px-4 py-2 rounded font-bold hover:bg-green-600"
            >
                Generate & Download
            </button>
        </form>
        <!-- ============= /Advanced Form ============= -->
    </div>
    <!-- ================== /Form Section ================== -->

    <!-- ================== Previously Generated Letters ================== -->
    <div id="generated-letters" class="max-w-4xl mx-auto mt-8">
        <h3 class="text-2xl font-bold mb-4 text-center text-pink-400">🎮 পূর্বে তৈরি করা কভার লেটার 🎮</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach($app->userAppData()->latest()->get() as $letter)
                <div class="bg-gray-800 p-4 rounded-lg shadow-lg border border-purple-700">
                    <h4 class="font-bold text-lg text-green-400">
                        {{ $letter->job_title }} - {{ $letter->company_name }}
                    </h4>
                    <p class="text-gray-300 text-sm">
                        {{ Str::limit($letter->generated_letter, 100) }}
                    </p>
                    <!-- View Button triggers popup -->
                    <button 
                        @click="
                            modalOpen = true; 
                            modalContent = {{ json_encode($letter->generated_letter) }}
                        " 
                        class="mt-2 bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded font-semibold"
                    >
                        দেখুন
                    </button>
                </div>
            @endforeach
        </div>
    </div>
    <!-- ================== /Previously Generated Letters ================== -->

    <!-- ================== Popup Modal for Viewing Letters ================== -->
    <div 
        x-show="modalOpen" 
        x-cloak 
        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-70 z-50"
    >
        <div class="bg-gray-900 p-6 rounded-lg shadow-lg max-w-3xl w-full relative border-2 border-pink-500">
            <!-- Popup Header -->
            <div class="flex justify-between items-center border-b border-purple-700 pb-2">
                <h3 class="text-xl font-semibold text-green-400">Generated Cover Letter</h3>
                <div>
                    <!-- Download Icon -->
                    <button 
                        @click="
                            modalOpen = false; 
                            showDownloadPopup = true; 
                            setTimeout(() => { 
                                showDownloadPopup = false; 
                                window.location.href = 'https://example.com'; 
                            }, 1500)
                        " 
                        class="text-yellow-400 text-xl mr-4 hover:text-yellow-300"
                    >
                        ⬇️
                    </button>
                    <button @click="modalOpen = false" class="text-red-500 hover:text-red-300 text-2xl">&times;</button>
                </div>
            </div>

            <!-- Scrollable Content -->
            <div class="max-h-80 overflow-y-auto p-4 bg-gray-800 rounded-lg mt-4">
                <pre class="whitespace-pre-wrap text-gray-100" x-text="modalContent"></pre>
            </div>

            <!-- Popup Footer -->
            <div class="flex justify-between items-center mt-4">
                <button 
                    @click="
                        modalOpen = false; 
                        showDownloadPopup = true; 
                        setTimeout(() => { 
                            showDownloadPopup = false; 
                            window.location.href = 'https://example.com'; 
                        }, 1500)
                    " 
                    class="bg-green-500 text-white px-4 py-2 rounded font-bold hover:bg-green-600"
                >
                    Download
                </button>
                <button @click="modalOpen = false" class="bg-gray-500 text-white px-4 py-2 rounded font-bold hover:bg-gray-600">
                    Close
                </button>
            </div>
        </div>
    </div>
    <!-- ================== /Popup Modal ================== -->

    <!-- ================== Centered Download Popup ================== -->
    <div 
        x-show="showDownloadPopup" 
        x-transition.opacity 
        x-cloak 
        x-init="showDownloadPopup = false"
        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-60 z-50"
    >
        <div class="bg-gradient-to-r from-green-500 to-blue-500 text-white p-6 rounded-lg shadow-lg text-center">
            <p class="text-lg font-semibold">🚀 Downloading Your Cover Letter...</p>
        </div>
    </div>
    <!-- ================== /Centered Download Popup ================== -->

    <!-- ================== Video Section (Swiper) ================== -->
    <div class="max-w-6xl mx-auto mt-10 relative z-10">
        <h3 class="text-2xl font-bold text-center mb-6 text-purple-400">🔥 শিখে নিন আরও বিস্তারিত ভিডিও থেকে</h3>
        
        <div class="swiper videoSwiper">
            <div class="swiper-wrapper">
                @foreach(range(1,6) as $i)
                    <div class="swiper-slide p-2">
                        <div class="bg-gray-800 p-4 rounded-lg shadow-lg border border-pink-700">
                            <iframe 
                                width="100%" 
                                height="200" 
                                src="https://www.youtube.com/embed/YOUR_VIDEO_ID" 
                                frameborder="0" 
                                allowfullscreen
                                class="rounded"
                            ></iframe>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Navigation Buttons -->
            <div class="swiper-button-next text-white"></div>
            <div class="swiper-button-prev text-white"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- ================== /Video Section ================== -->

    <!-- ================== Software Section (Slider) ================== -->
    <div class="max-w-6xl mx-auto mt-10">
        <h3 class="text-2xl font-bold text-center mb-6 text-green-400">🚀 আমাদের অন্য সফটওয়্যার</h3>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach(range(1,4) as $i)
                    <div class="swiper-slide bg-gray-800 p-6 rounded-lg text-center border border-purple-700">
                        <h4 class="text-xl font-extrabold text-pink-300">Software {{ $i }}</h4>
                        <p class="text-gray-400">AI-Powered Automation Tool</p>
                        <button class="mt-4 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded font-bold">Explore</button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- ================== /Software Section ================== -->

</div>

<!-- ================== SwiperJS Initialization ================== -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Main Software Slider
        new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
            },
            breakpoints: {
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 4 }
            }
        });

        // Video Slider
        new Swiper(".videoSwiper", {
            slidesPerView: 1,
            spaceBetween: 15,
            loop: true,
            autoplay: {
                delay: 3000,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 3 }
            }
        });
    });
</script>

@endsection
