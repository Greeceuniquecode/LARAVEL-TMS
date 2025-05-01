@extends('./layout')
@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-50 py-12 px-4">
    <div class="w-full max-w-2xl rounded-2xl shadow-lg overflow-hidden mb-12">
        <!-- Card Header with Gradient -->
        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 px-6 py-8">
            <h2 class="text-center text-3xl font-extrabold text-white">Create Account</h2>
            <p class="text-center text-blue-100 mt-2">Please fill in your information to get started</p>
        </div>
        
        <!-- Card Body -->
        <div class="bg-white px-8 py-10">
            <form class="space-y-6" method="POST" action="/register-user" enctype="multipart/form-data">
                @csrf
                
                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">
                        Full Name
                    </label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg text-gray-900 placeholder-gray-400"
                            placeholder="Enter your full name"
                        />
                    </div>
                    @error('name')<p class="mt-2 text-sm text-red-600">{{$message}}</p>@enderror
                </div>
                
                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Email Address
                    </label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                        </div>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg text-gray-900 placeholder-gray-400"
                            placeholder="you@example.com"
                        />
                    </div>
                    @error('email')<p class="mt-2 text-sm text-red-600">{{$message}}</p>@enderror
                </div>
                
                <!-- Password Field -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">
                        Password
                    </label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg text-gray-900 placeholder-gray-400"
                            placeholder="Create a strong password"
                        />
                    </div>
                    @error('password')<p class="mt-2 text-sm text-red-600">{{$message}}</p>@enderror
                </div>
                
                <!-- Phone Number -->
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">
                        Phone Number
                    </label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                        </div>
                        <input
                            type="tel"
                            name="phone"
                            id="phone"
                            class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg text-gray-900 placeholder-gray-400"
                            placeholder="Enter your phone number"
                        />
                    </div>
                    @error('phone')<p class="mt-2 text-sm text-red-600">{{$message}}</p>@enderror
                </div>
                
                <!-- Gender Selection -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Gender</label>
                    <div class="flex flex-wrap gap-6">
                        <div class="flex items-center">
                            <input
                                id="gender-male"
                                name="gender"
                                type="radio"
                                value="male"
                                checked
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300"
                            />
                            <label for="gender-male" class="ml-2 block text-sm text-gray-700">
                                Male
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input
                                id="gender-female"
                                name="gender"
                                type="radio"
                                value="female"
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300"
                            />
                            <label for="gender-female" class="ml-2 block text-sm text-gray-700">
                                Female
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input
                                id="gender-others"
                                name="gender"
                                type="radio"
                                value="others"
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300"
                            />
                            <label for="gender-others" class="ml-2 block text-sm text-gray-700">
                                Others
                            </label>
                        </div>
                    </div>
                </div>
                
                <!-- Date of Birth -->
                <div>
                    <label for="dob" class="block text-sm font-medium text-gray-700">
                        Date of Birth
                    </label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input
                            type="date"
                            name="dob"
                            id="dob"
                            class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg text-gray-900"
                        />
                    </div>
                </div>
                
                <!-- Profile Image Upload -->
                <div>
                    <label for="profile_image" class="block text-sm font-medium text-gray-700">
                        Profile Image
                    </label>
                    <div class="mt-1 flex items-center">
                        <div class="w-16 h-16 rounded-full bg-gray-200 flex items-center justify-center mr-4 overflow-hidden">
                            <svg class="h-8 w-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <div class="relative border border-gray-300 rounded-md px-3 py-2 shadow-sm flex items-center justify-center hover:bg-gray-50 focus-within:ring-1 focus-within:ring-blue-500 focus-within:border-blue-500">
                                <label for="profile_image" class="cursor-pointer text-sm text-blue-600">
                                    <span>Upload a file</span>
                                    <input
                                        id="profile_image"
                                        name="profile_image"
                                        type="file"
                                        class="sr-only"
                                    />
                                </label>
                            </div>
                            <p class="mt-1 text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                            @error('profile_image')<p class="mt-1 text-sm text-red-600">{{$message}}</p>@enderror
                        </div>
                    </div>
                </div>
                
                <!-- Submit Button -->
                <div>
                    <button
                        type="submit"
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out"
                    >
                        Create Account
                    </button>
                </div>
                
                <!-- Login Link -->
                <div class="text-center">
                    <p class="text-sm text-gray-600">
                        Already have an account?
                        <a href="/login" class="font-medium text-blue-600 hover:text-blue-500">
                            Sign in instead
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection