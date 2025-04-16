@extends('./layout')
@section('content')
<div class="border-2 rounded-xl w-1/2 m-4 mx-auto bg-linear-to-t from-blue-400 to-white ">
    <form class="flex flex-col gap-5 m-6" method="POST" action="/register-user" enctype="multipart/form-data">
       @csrf
        <legend class="text-blue-800 font-extrabold underline mx-auto text-3xl">Enter your signup Details</legend>
        <div class="name flex justify-between w-1/2">
            <label class="font-semibold text-gray-800" for="name">Name</label>
            <div>
                <input  class="border-2 rounded-md px-2 bg-white" type="text" name="name" placeholder="Enter your Name" >
                @error('name')<p class="text-red-600">{{$message}}</p>@enderror    
            </div>
        </div>   
        <div class="email flex justify-between w-1/2">
            <label class="font-semibold text-gray-800" for="email">Email</label>
            <div>
                <input  class="border-2 rounded-md px-2 bg-white" type="email" name="email" placeholder="Enter your email" >
                @error('email')<p class="text-red-600">{{$message}}</p>@enderror    
            </div>
        </div>
        <div class=" password flex justify-between w-1/2">
            <label class="font-semibold text-gray-800" for="password">Password</label>
            <div>
                <input class="border-2 rounded-md px-2 bg-white" name="password" type="text" placeholder="Enter password" name="password" id="password" >
                @error('password')<p class="text-red-600">{{$message}}</p>@enderror    
            </div>
        </div>
        <div class="phone flex justify-between w-1/2">
            <label class="font-semibold text-gray-800" for="phone">Phone number</label>
            <div>
                <input  class="border-2 rounded-md px-2 bg-white" type="phone" name="phone" placeholder="Enter your phone number" >
                @error('phone')<p class="text-red-600">{{$message}}</p>@enderror    
            </div>
        </div>
        <div class="gender flex gap-2 w-2/3">
            <label class="font-semibold text-gray-800 mr-8" for="gender">Gender</label>
            <input type="radio" name="gender" value="male" checked>Male
             <input type="radio" name="gender" value="female">Female
             <input type="radio" name="gender" value="others">Others
        </div>
        <div class="dob flex justify-between w-1/2">
            <label class="font-semibold text-gray-800" for="dob">Date of Birth</label>
            <input  class="border-2 rounded-md px-2 bg-white" type="date" name="dob" >
        </div>
        <div class="profile flex w-3/4">
            <label class="font-semibold text-gray-800" for="profile_image">Profile Image</label>
            <div>
                <input type="file" placeholder="select image" name="profile_image" class="ml-2 px-2 bg-white border-r rounded-sm">
                @error('profile_image')<p class="text-red-600">{{$message}}</p>@enderror    
            </div>
        </div>
        <button class="w-1/5 p-1 font-bold mx-auto bg-blue-600 border-b-4 border-white rounded-xl hover:bg-blue-800 ease-in-out duration-300 transition-color text-white" type="submit">Register</button>
        
        
    </form>
    
</div>
    
@endsection