@extends('layout')
@section('content')
<div class="container mx-auto px-4">
    <div class="flex items-center mb-6">
        <a href="/employer/task" class="text-blue-600 hover:text-blue-800 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Back to Tasks
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-lg p-6">
        <div class="flex justify-between items-start mb-6">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">{{ $task->name }}</h1>
                <p class="text-gray-500 mt-1">Created by {{ $task->user->name }}</p>
            </div>
        </div>
        
        <div class="mb-6">
            <div class="flex justify-between mb-4">
                <div class="bg-gray-100 rounded-lg px-4 py-3 w-full lg:w-1/3 mb-4 lg:mb-0 lg:mr-4">
                    <h3 class="text-sm font-semibold text-gray-500 mb-1">Status</h3>
                    <div class="flex items-center">
                        <span class="w-3 h-3 rounded-full mr-2
                            @if($task->status == 'completed') bg-green-500
                            @elseif($task->status == 'in_progress') bg-yellow-500
                            @elseif($task->status == 'pending') bg-gray-500
                            @else bg-red-500
                            @endif">
                        </span>
                        <span class="font-medium text-gray-800">{{ ucfirst(str_replace('_', ' ', $task->status)) }}</span>
                    </div>
                </div>
                
                <div class="bg-gray-100 rounded-lg px-4 py-3 w-full lg:w-1/3 mb-4 lg:mb-0 lg:mr-4">
                    <h3 class="text-sm font-semibold text-gray-500 mb-1">Assigned To</h3>
                    @php
                        $assignedUserIds = json_decode($task->assigned_user, true) ?? [];
                    @endphp
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                    @foreach($assignedUserIds as $userId)
                        @php
                            $user = \App\Models\User::find($userId);
                        @endphp

                         @if($user)

                            <div class="flex items-center mb-1">
                                <img src="{{ asset($user->profile_image)}}" class="w-6 h-6 mr-2 rounded-full" alt="Avatar">
                                <span class="font-medium text-gray-800">{{ $user->name ?? 'Unassigned' }}</span>
                            </div>
                        @endif
                            @endforeach
                        </div>
                </div>
                
                <div class="bg-gray-100 rounded-lg px-4 py-3 w-full lg:w-1/3">
                    <h3 class="text-sm font-semibold text-gray-500 mb-1">Timeline</h3>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="font-medium text-gray-800">{{ \Carbon\Carbon::parse($task->start_date)->format('M d') }} - {{ \Carbon\Carbon::parse($task->end_date)->format('M d, Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mb-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Description</h2>
            <div class="bg-gray-50 rounded-lg p-4 text-gray-700">
                <p>{{ $task->description }}</p>
            </div>
        </div>

        @if($task->status=="completed")
        <div class="flex justify-center items-center p-2">
            <div class="relative overflow-hidden transform transition-all duration-500 hover:scale-105">
                <!-- Background effect -->
                <div class="absolute inset-0 bg-white opacity-10"></div>
            
                <!-- COMPLETED text with staggered animation using only standard classes -->
                <div class="text-center relative">
                    <h2 class="text-2xl font-bold tracking-wider text-green-700 flex justify-center">
                        <!-- Each letter with slight opacity transition on page load via CSS -->
                        <span class="mx-0.5 animate-pulse">C</span>
                        <span class="mx-0.5 animate-pulse">O</span>
                        <span class="mx-0.5 animate-pulse">M</span>
                        <span class="mx-0.5 animate-pulse">P</span>
                        <span class="mx-0.5 animate-pulse">L</span>
                        <span class="mx-0.5 animate-pulse">E</span>
                        <span class="mx-0.5 animate-pulse">T</span>
                        <span class="mx-0.5 animate-pulse">E</span>
                        <span class="mx-0.5 animate-pulse">D</span>
                    </h2>
                </div>
                
            </div>
        </div>

        <style>
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            h2 span {
                display: inline-block;
                opacity: 0;
                animation: fadeInUp 0.5s ease forwards;
            }
            
            h2 span:nth-child(1) { animation-delay: 0.1s; }
            h2 span:nth-child(2) { animation-delay: 0.2s; }
            h2 span:nth-child(3) { animation-delay: 0.3s; }
            h2 span:nth-child(4) { animation-delay: 0.4s; }
            h2 span:nth-child(5) { animation-delay: 0.5s; }
            h2 span:nth-child(6) { animation-delay: 0.6s; }
            h2 span:nth-child(7) { animation-delay: 0.7s; }
            h2 span:nth-child(8) { animation-delay: 0.8s; }
            h2 span:nth-child(9) { animation-delay: 0.9s; }
        </style>
        @else
        <div class="flex space-x-2">
            <a href="/employee/task/{{ $task->id }}/completed" class="mx-auto px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition-colors duration-300">Completed</a>
        </div>
        @endif
    </div>
</div>
@endsection
    
