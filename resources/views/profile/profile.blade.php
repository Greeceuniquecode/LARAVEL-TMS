@extends('./layout')
@section('content')
<div>
   
</div>
    <div class="">
<div class="m-4 text-gray-900 border-b-4 border-l-4 border-blue-900 rounded-xl w-1/2 m-2 bg-linear-to-t from-blue-400 to-white p-4  mx-auto center">
    <h1 class="text-blue-800 font-extrabold underline text-center mx-auto mb-4 text-3xl">LimitlessTMS</h1>
    <img class="h-30 w-30 mx-auto rounded-full mb-6" src="{{$user->profile_image}}" />
    <div>
        <span class="text-xl font-bold">Name: </span>
        <span class="text-xl font-bold">{{$user->name}}</span>
    </div>
    <div>
        <span class="text-xl font-bold">Phone:</span>
        <span class="text-xl font-bold" >{{$user->phone}}</span>
    </div>
    <div>
        <span class="text-xl font-bold">Email:</span>
        <span class="text-xl font-bold" >{{$user->email}}</span>  
    </div>
</div>
<div class="flex w-1/2 mx-auto justify-between">
    <a href="/edit-profile" class="w-1/5 text-center p-1 font-bold bg-blue-600 border-b-4 border-white rounded-xl hover:bg-blue-800 ease-in-out duration-300 transition-color text-white">Edit</a>
    <a href="/logout" class="w-1/5 p-1 text-center font-bold bg-red-600 border-b-4 border-white rounded-xl hover:bg-red-800 ease-in-out duration-300 transition-color text-white">Logout</a>
</div>

</div>
@endsection