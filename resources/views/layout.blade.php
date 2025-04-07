<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>LimitlessTMS</title>
</head>

<body class="">
    <?php
    use Illuminate\Support\Facades\Auth;

    $user = Auth::User();
?>

@session('success')
<span id="notification" class="bg-green-600 border border-white rounded-lg text-white text-lg font-semibold 
  absolute top-[4%] right-0 p-4 px-12 transition-transform duration-500 transform translate-x-full opacity-0">
  {{session('success')}}
</span>
@endsession
@session('error')
<span id="notification" class="bg-red-600 border border-white rounded-lg text-white text-lg font-semibold 
  absolute top-[4%] right-0 p-4 px-12 transition-transform duration-500 transform translate-x-full opacity-0">
  {{session('error')}}
</span>
@endsession


    <header class="nav flex text-white text-lg border-b-6 border-gray-600 rounded-b-2xl justify-between p-2 px-6 cursor-pointer bg-linear-to-b from-blue-400 to-white">
        <div class="flex gap-5">
            <a href="/" class="">
                <img class="h-13 w-13 " src="{{asset('images/NEW.png')}}" alt="logo">
            </a>
            <a href="/home" class="hover:text-green-200 duration-300 hover:font-semibold ease-in-out ">Home</a>
            <a href="/about" class="hover:text-green-200 duration-300 hover:font-semibold ease-in-out ">About</a>
            <a href="/contact" class="hover:text-green-200 duration-300 hover:font-semibold ease-in-out ">contact us </a>
        </div>
        @if($user)
       <a href="/profile"> 
        <img class="rounded-full h-12 w-12 border-2 border-black my-auto" src="{{asset($user->profile_image)}}" >
       </a>
        @else
        <div class="flex gap-5">
        <a href="/login" class="hover:text-green-200 duration-300 hover:font-semibold ease-in-out  ">Login</a>
        <a href="/register" class="hover:text-green-200 duration-300 hover:font-semibold ease-in-out ">register</a>
        </div>
        @endif
    </header>
    <section class="bg-linear-to-t from-blue-400 to-blue-200 to-white min-h-[70vh]">
        @yield('content')
    </section>
        <footer class="bg-linear-to-t from-blue-400 to-white">       
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-2xl font-bold text-blue-900 ">LimitlessTMS</h2>
                <p class="text-sm">&copy; 2025 All Rights Reserved Greece Dahal.</p>
                <div class="text-center">
                    <p class="text-lg mb-4 text-gray-900 font-extrabold hover:text-green-900 duration-300 hover:font-semibold ease-in-out">Follow Us On Social Media</p>
                <div class="flex justify-center space-x-4 mt-2">
                    <a target="_blank" href="https://www.facebook.com/greece.dahal.5/" class="hover:text-green-200 duration-300 hover:font-semibold ease-in-out ">Facebook</a>
                    <a target="_blank" href="https://github.com/Greeceuniquecode" class="hover:text-green-200 duration-300 hover:font-semibold ease-in-out ">Github</a>
                    <a target="_blank" href="https://www.instagram.com/greecedahal/" class="hover:text-green-200 duration-300 hover:font-semibold ease-in-out ">Instagram</a>
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