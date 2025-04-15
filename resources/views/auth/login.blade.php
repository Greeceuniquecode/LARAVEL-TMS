@extends('./layout')
@section('content')
<div class="border-2 rounded-xl w-1/2 m-4 mx-auto bg-linear-to-t from-blue-400 to-white ">
    <form class="flex flex-col gap-5 m-6" action="/login-data" method="POST">
        @csrf
        <legend class="text-blue-800 font-extrabold underline mx-auto text-3xl">Enter your login Details</legend>
        <div class="flex justify-between w-1/2">
            <label class="font-semibold text-gray-800" for="email">Email</label>
            <div>
                <input  class="border-2 rounded-md px-2 bg-white" type="email" value="{{ old('email') }}" name="email" placeholder="Enter your email">
                @error('email')<p class="text-red-600">{{$message}}</p>@enderror  
            </div>
        </div>
        <div class="flex justify-between w-1/2">
            <label class="font-semibold text-gray-800" for="password">Password</label>
            <div>
                <input class="border-2 rounded-md px-2 bg-white" type="text" placeholder="Enter password" name="password" id="password">
                @error('password')<p class="text-red-600">{{$message}}</p>@enderror  
            </div>
        </div>
        <button class="w-1/5 p-1 font-bold mx-auto bg-blue-600 border-b-4 border-white rounded-xl hover:bg-blue-800 ease-in-out duration-300 transition-color text-white" type="submit">Login</button> 
    </form>
    
</div>
    
@endsection