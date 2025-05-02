<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- jQuery (required by Select2) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <title>LimitlessTMS</title>
</head>

<body class="font-sans">
    <?php
    use Illuminate\Support\Facades\Auth;

    $user = Auth::User();
?>

@session('success')
<span id="notification" class="bg-green-600 border border-white rounded-lg text-white text-lg font-semibold 
  absolute top-[8%] right-0 p-4 px-12 z-10 transition-transform duration-500 transform translate-x-full opacity-0">
  {{session('success')}}
</span>
@endsession
@session('error')
<span id="notification" class="bg-red-600 border border-white rounded-lg text-white text-lg font-semibold 
  absolute top-[8%] z-10 right-0 p-4 px-12 transition-transform duration-500 transform translate-x-full opacity-0">
  {{session('error')}}
</span>
@endsession


<header x-data="{ open: false }" class="nav bg-gray-50 flex flex-col md:flex-row text-white text-lg border-b-6 border-gray-600 rounded-b-2xl p-2 px-6 cursor-pointer">
    <div class="flex justify-between items-center">
        <div class="flex items-center gap-5">
            <a href="/">
                <img class="h-13 w-13" src="{{asset('images/NEW.png')}}" alt="logo">
            </a>
            <button @click="open = !open" class="md:hidden text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        @if($user)
        <a href="/profile" class="hidden md:block">
            <img class="rounded-full h-12 w-12 border-2 border-black" src="{{asset($user->profile_image)}}" alt="profile">
        </a>
        @else
        <div class="hidden md:flex gap-5">
            <a href="/login" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-indigo-600 inline-flex items-center px-1 pt-1 border-b-2 font-medium">Login</a>
            <a href="/register" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-indigo-600 inline-flex items-center px-1 pt-1 border-b-2 font-medium">Register</a>
        </div>
        @endif
    </div>

    <div :class="{'block': open, 'hidden': !open}" class="md:flex flex-col md:flex-row gap-5 mt-2 md:mt-0">
        <a href="/home" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-indigo-600 inline-flex items-center px-1 pt-1 border-b-2 font-medium">Home</a>
        <a href="/about" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-indigo-600 inline-flex items-center px-1 pt-1 border-b-2 font-medium">About</a>
        <a href="/contact" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-indigo-600 inline-flex items-center px-1 pt-1 border-b-2 font-medium">Contact Us</a>
        @if($user)
        <a href='/tasks' class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-indigo-600 inline-flex items-center px-1 pt-1 border-b-2 font-medium">Task</a>
        @endif
        @if(!$user)
        <div class="md:hidden flex flex-col gap-2 mt-2">
            <a href="/login" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-indigo-600 inline-flex items-center px-1 pt-1 border-b-2 font-medium">Login</a>
            <a href="/register" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-indigo-600 inline-flex items-center px-1 pt-1 border-b-2 font-medium">Register</a>
        </div>
        @endif
    </div>

<!-- Include Alpine.js in your layout if it's not already present -->
<script src="//unpkg.com/alpinejs" defer></script>

    </header>
    <section class="bg-gray-50 min-h-[70vh] py-6">
        @yield('content')
    </section>
        <footer class="bg-gradient-to-b from-blue-50 to-white">       
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-2xl font-bold text-blue-900 ">LimitlessTMS</h2>
                <p class="text-sm">&copy; 2025 All Rights Reserved Greece Dahal.</p>
                <div class="text-center">
                    <p class="text-lg mb-4 text-gray-900 font-extrabold hover:text-green-900 duration-300 hover:font-semibold ease-in-out">Follow Us On Social Media</p>
                <div class="flex justify-center space-x-4 mt-2">
                    <a target="_blank" href="https://www.facebook.com/greece.dahal.5/" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-indigo-600 inline-flex items-center px-1 pt-1 border-b-2 text-lg font-medium ">Facebook</a>
                    <a target="_blank" href="https://github.com/Greeceuniquecode" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-indigo-600 inline-flex items-center px-1 pt-1 border-b-2 text-lg font-medium ">Github</a>
                    <a target="_blank" href="https://www.instagram.com/greecedahal/" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-indigo-600 inline-flex items-center px-1 pt-1 border-b-2 text-lg font-medium ">Instagram</a>
                </div>
            </div>

    </footer>
</body>
<script>
    const notification = document.getElementById('notification');
  
    // Step 1: Slide in from right (to visible position)
    setTimeout(() => {
      notification.classList.remove('translate-x-full', 'opacity-0');
      notification.classList.add('translate-x-0', 'opacity-100');
    }, 100);
  
    // Step 2: Slide further right and fade out after 5s
    setTimeout(() => {
      // This moves it even more to the right (custom class)
      notification.classList.remove('translate-x-0', 'opacity-100');
      notification.classList.add('translate-x-[150%]', 'opacity-0');
    }, 3100);
  </script>
</html>