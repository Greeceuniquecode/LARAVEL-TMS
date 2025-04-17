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


    <header class="nav bg-gray-50 flex text-white text-lg border-b-6 border-gray-600 rounded-b-2xl justify-between p-2 px-6 cursor-pointer">
        <div class="flex gap-5">
            <a href="/" class="">
                <img class="h-13 w-13 " src="{{asset('images/NEW.png')}}" alt="logo">
            </a>
            <a href="/home" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-indigo-600 inline-flex items-center px-1 pt-1 border-b-2 text-lg font-medium ">Home</a>
            <a href="/about" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-indigo-600 inline-flex items-center px-1 pt-1 border-b-2 text-lg font-medium ">About</a>
            <a href="/contact" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-indigo-600 inline-flex items-center px-1 pt-1 border-b-2 text-lg font-medium ">contact us </a>
            @if($user)
            <a href='/tasks' class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-indigo-600 inline-flex items-center px-1 pt-1 border-b-2 text-lg font-medium">Task</a>
            @endif
        </div>
        @if($user)
       <a href="/profile"> 
        <img class="rounded-full h-12 w-12 border-2 border-black my-auto" src="{{asset($user->profile_image)}}" >
       </a>
        @else
        <div class="flex gap-5">
        <a href="/login" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-indigo-600 inline-flex items-center px-1 pt-1 border-b-2 text-lg font-medium  ">Login</a>
        <a href="/register" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-indigo-600 inline-flex items-center px-1 pt-1 border-b-2 text-lg font-medium ">register</a>
        </div>
        @endif
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