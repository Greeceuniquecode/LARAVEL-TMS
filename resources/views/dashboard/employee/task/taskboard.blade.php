@extends('layout')

@section('content')
<div>
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
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Task Board</h1>
        
        <!-- Task columns -->
        <div class="">
            <!-- Pending Tasks Column -->
            <div class="bg-gray-50 rounded-lg p-4 mb-6">
                <h2 class="text-lg font-semibold text-gray-700 mb-4 flex items-center">
                    <span class="w-3 h-3 bg-gray-400 rounded-full mr-2"></span>
                    Pending
                </h2>
                
                <div class="space-y-4">
                    @foreach ($tasks->where('status', 'pending') as $task)
                    <div class="bg-white rounded-lg shadow p-4 border-l-4 hover:bg-gray-50 hover:scale-101 duration-200 border-gray-400">
                        <div class="flex justify-between items-start">
                        <a href='/employee/task/{{$task->id}}'>
                            <h3 class="font-medium text-gray-800">{{ $task->name }}</h3>
                    </a>
                            {{-- <a href="/employer/task/edit/{{ $task->id }}" class=" px-3 text-white rounded-md bg-blue-700 hover:bg-blue-900">
                                Edit
                            </a> --}}
                        </div>
                        
                        <p class="text-sm text-gray-600 mt-2 line-clamp-2">{{ $task->description }}</p>
                        
                        <div class="mt-4 flex justify-between items-center text-xs text-gray-500">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>{{ \Carbon\Carbon::parse($task->end_date)->format('M d') }}</span>
                            </div>
                            
                    @php
                        $assignedUserIds = json_decode($task->assigned_user, true) ?? [];
                    @endphp
                    <div class="flex gap-2">
                    @foreach($assignedUserIds as $userId)
                        @php
                            $user = \App\Models\User::find($userId);
                        @endphp

                         @if($user)

                            <div class="flex items-center">
                                <img src="{{ asset($user->profile_image)}}" class="w-6 h-6 rounded-full" alt="Avatar">
                            </div>
                        @endif
                            @endforeach
                        </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <!-- In Progress Tasks Column -->
            <div class="bg-gray-50 rounded-lg p-4 mb-6">
                <h2 class="text-lg font-semibold text-gray-700 mb-4 flex items-center">
                    <span class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></span>
                    In Progress
                </h2>
                
                <div class="space-y-4">
                    @foreach ($tasks->where('status', 'processing') as $task)
                    <div class="bg-white rounded-lg shadow p-4 border-l-4 hover:bg-gray-50 hover:scale-101 duration-200 border-yellow-500">
                        <div class="flex justify-between items-start">
                        <a href='/employer/task/{{$task->id}}'>
                            <h3 class="font-medium text-gray-800">{{ $task->name }}</h3>
                    </a>
                            {{-- <a href="/employer/task/edit/{{ $task->id }}" class=" px-3 text-white rounded-md bg-blue-700 hover:bg-blue-900">
                                Edit
                            </a> --}}
                        </div>
                        
                        <p class="text-sm text-gray-600 mt-2 line-clamp-2">{{ $task->description }}</p>
                        
                        <div class="mt-4 flex justify-between items-center text-xs text-gray-500">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>{{ \Carbon\Carbon::parse($task->end_date)->format('M d') }}</span>
                            </div>
                            
                    @php
                        $assignedUserIds = json_decode($task->assigned_user, true) ?? [];
                    @endphp
                    <div class="flex gap-2">
                    @foreach($assignedUserIds as $userId)
                        @php
                            $user = \App\Models\User::find($userId);
                        @endphp

                         @if($user)

                            <div class="flex items-center">
                                <img src="{{ asset($user->profile_image)}}" class="w-6 h-6 rounded-full" alt="Avatar">
                            </div>
                        @endif
                            @endforeach
                        </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Completed Tasks Column -->
            <div class="bg-gray-50 rounded-lg p-4 mb-6">
                <h2 class="text-lg font-semibold text-gray-700 mb-4 flex items-center">
                    <span class="w-3 h-3 bg-green-500 rounded-full mr-2"></span>
                    Completed
                </h2>
                
                <div class="space-y-4">
                    @foreach ($tasks->where('status', 'completed') as $task)
                    <div class="bg-white rounded-lg shadow p-4 border-l-4 hover:bg-gray-50 hover:scale-101 duration-200 border-green-500">
                        <div class="flex justify-between items-start">
                        <a href='/employer/task/{{$task->id}}'>
                            <h3 class="font-medium text-gray-800">{{ $task->name }}</h3>
                    </a>
                            {{-- <a href="/employer/task/edit/{{ $task->id }}" class=" px-3 text-white rounded-md bg-blue-700 hover:bg-blue-900">
                                Edit
                            </a> --}}
                        </div>
                        
                        <p class="text-sm text-gray-600 mt-2 line-clamp-2">{{ $task->description }}</p>
                        
                        <div class="mt-4 flex justify-between items-center text-xs text-gray-500">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>{{ \Carbon\Carbon::parse($task->end_date)->format('M d') }}</span>
                            </div>
                            
                    @php
                        $assignedUserIds = json_decode($task->assigned_user, true) ?? [];
                    @endphp
                    <div class="flex gap-2">
                    @foreach($assignedUserIds as $userId)
                        @php
                            $user = \App\Models\User::find($userId);
                        @endphp

                         @if($user)

                            <div class="flex items-center">
                                <img src="{{ asset($user->profile_image)}}" class="w-6 h-6 rounded-full" alt="Avatar">
                            </div>
                        @endif
                            @endforeach
                        </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Completed Tasks Column -->
            <div class="bg-gray-50 rounded-lg p-4 mb-6">
                <h2 class="text-lg font-semibold text-gray-700 mb-4 flex items-center">
                    <span class="w-3 h-3 bg-red-500 rounded-full mr-2"></span>
                    Rejected
                </h2>
                
                <div class="space-y-4">
                    @foreach ($tasks->where('status', 'rejected') as $task)
                    <div class="bg-white rounded-lg shadow p-4 border-l-4 hover:bg-gray-50 hover:scale-101 duration-200 border-red-500">
                        <div class="flex justify-between items-start">
                        <a href='/employer/task/{{$task->id}}'>
                            <h3 class="font-medium text-gray-800">{{ $task->name }}</h3>
                    </a>
                            {{-- <a href="/employer/task/edit/{{ $task->id }}" class=" px-3 text-white rounded-md bg-blue-700 hover:bg-blue-900">
                                Edit
                            </a> --}}
                        </div>
                        
                        <p class="text-sm text-gray-600 mt-2 line-clamp-2">{{ $task->description }}</p>
                        
                        <div class="mt-4 flex justify-between items-center text-xs text-gray-500">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>{{ \Carbon\Carbon::parse($task->end_date)->format('M d') }}</span>
                            </div>
                            
                    @php
                        $assignedUserIds = json_decode($task->assigned_user, true) ?? [];
                    @endphp
                    <div class="flex gap-2">
                    @foreach($assignedUserIds as $userId)
                        @php
                            $user = \App\Models\User::find($userId);
                        @endphp

                         @if($user)

                            <div class="flex items-center">
                                <img src="{{ asset($user->profile_image)}}" class="w-6 h-6 rounded-full" alt="Avatar">
                            </div>
                        @endif
                            @endforeach
                        </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        <!-- Empty State -->
        @if(count($tasks) == 0)
        <div class="bg-gray-50 rounded-lg p-12 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>
            <h3 class="text-lg font-medium text-gray-900 mb-2">No tasks found</h3>
            <p class="text-gray-500 mb-6">Get started by creating your first task</p>
            <a href="/employer/add-task" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors duration-300">
                Create Task
            </a>
        </div>
        @endif
    </div>
</div>
@endsection