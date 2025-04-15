@extends('layout')
@section('content')
<div class="container mx-auto px-4 py-6">
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
            
            <div class="flex space-x-2">
                <a href="/employer/task/edit/{{ $task->id }}" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors duration-300">Edit</a>
                
                <form action="/employer/task/delete/{{ $task->id }}" method="POST" >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition-colors duration-300">Delete</button>
                </form>
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
                    <div class="flex items-center">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($task->assignedUser->name ?? 'Unassigned') }}&background=random" alt="Avatar" class="w-6 h-6 rounded-full mr-2">
                        <span class="font-medium text-gray-800">{{ $task->assignedUser->name ?? 'Unassigned' }}</span>
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
        
        <div class="border-t border-gray-200 pt-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Task Timeline</h2>
            <div class="space-y-6">
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                        <div class="w-0.5 h-full bg-gray-200"></div>
                    </div>
                    <div class="pb-6">
                        <p class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($task->created_at)->format('M d, Y h:i A') }}</p>
                        <p class="font-medium">Task created by {{ $task->user->name }}</p>
                    </div>
                </div>
                
                @if($task->updated_at != $task->created_at)
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                        <div class="w-0.5 h-full bg-gray-200"></div>
                    </div>
                    <div class="pb-6">
                        <p class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($task->updated_at)->format('M d, Y h:i A') }}</p>
                        <p class="font-medium">Task updated</p>
                    </div>
                </div>
                @endif
                
                @if($task->status == 'completed')
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($task->updated_at)->format('M d, Y h:i A') }}</p>
                        <p class="font-medium">Task marked as completed</p>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
    
