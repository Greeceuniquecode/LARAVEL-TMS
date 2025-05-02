@extends("/layout")
@section("content")
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section with Gradient -->
    <div class="bg-gray-100 py-16 px-4">
        <div class="max-w-6xl mx-auto text-center text-gray-500">
            <h1 class="text-4xl md:text-5xl font-extrabold  mb-4">
                About LimitlessTMS
            </h1>
            <p class="text-xl text-blue-300 italic">
                "Where trust never gets broken"
            </p>
        </div>
    </div>

    <!-- Images Section with Better Positioning -->
    <div class="relative bg-white py-12">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
            <div class="flex justify-center">
                <img class="h-64 object-contain rounded-lg shadow-md" src="{{asset("images/tmsfake.png")}}" alt="Task Management Interface">
            </div>
            <div class="flex justify-center">
                <img class="h-64 object-contain rounded-lg shadow-md" src="{{asset("images/NEW.png")}}" alt="LimitlessTMS Logo">
            </div>
            <div class="flex justify-center">
                <img class="h-64 object-contain rounded-lg shadow-md" src="{{asset("images/img.png")}}" alt="Task Management Features">
            </div>
        </div>
    </div>

    <!-- Company Description -->
    <div class="py-12 px-4 bg-white">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-blue-500 to-indigo-600 h-3"></div>
                <div class="p-8">
                    <p class="text-lg text-gray-700 leading-relaxed">
                        At LimitlessTMS, we believe in pushing productivity beyond limits. Our powerful task management system is designed to help individuals and teams stay organized, streamline workflows, and achieve their goals effortlessly. With intuitive features, real-time collaboration, and smart automation, LimitlessTMS transforms the way you manage tasks so you can focus on what truly matters.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <div class="py-12 px-4 bg-gray-50">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-extrabold text-blue-600">
                Why Choose LimitlessTMS?
            </h2>
        </div>
        
        <div class="max-w-3xl mx-auto">
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-blue-500 to-indigo-600 h-3"></div>
                <div class="p-8">
                    <p class="text-lg text-orange-700 font-medium mb-6">
                        In a world full of distractions, staying productive shouldn't feel like a challenge—it should feel limitless.
                    </p>
                    
                    <p class="text-lg text-emerald-700 mb-8">
                        That's where LimitlessTMS comes in. We designed our task management system to empower you with clarity, efficiency, and control over your work. Whether you're managing personal projects, leading a team, or running a business, LimitlessTMS adapts to your workflow, not the other way around.
                    </p>
                    
                    <div class="bg-blue-50 rounded-xl p-6 mb-8">
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <span class="text-blue-600 font-bold mr-2">1) 🚀</span>
                                <span class="text-gray-800"><span class="font-semibold">Efficiency Without Limits</span> – Organize, prioritize, and track tasks effortlessly.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 font-bold mr-2">2) 🤝</span>
                                <span class="text-gray-800"><span class="font-semibold">Seamless Collaboration</span> – Work together in real-time, no matter where you are.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 font-bold mr-2">3) ⚡</span>
                                <span class="text-gray-800"><span class="font-semibold">Smart Automation</span> – Let repetitive tasks take care of themselves.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 font-bold mr-2">4) 📊</span>
                                <span class="text-gray-800"><span class="font-semibold">Insightful Analytics</span> – Stay on top of progress with data-driven insights.</span>
                            </li>
                        </ul>
                    </div>
                    
                    <p class="text-lg text-red-600 font-medium text-center italic">
                        With LimitlessTMS, productivity isn't just a goal—it's a way of life. Ready to break barriers and take control of your tasks? Your journey to limitless productivity starts here.
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Call to Action -->
    <div class="bg-gray-50 py-12 px-4">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-2xl font-bold text-gray-500 mb-4">Ready to experience limitless productivity?</h2>
            <a href="/register" class="inline-block bg-white px-8 py-3 rounded-lg text-blue-600 font-medium hover:bg-blue-50 transition duration-300 shadow-md">
                Get Started Today
            </a>
        </div>
    </div>
</div>
@endsection