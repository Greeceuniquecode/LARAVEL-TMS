@extends('layout')
@section('content')
<script>
  $(document).ready(function () {
    $('#assigned_user').select2({
      placeholder: "Type to search employee names",
      minimumInputLength: 1
    });
  });
</script>
<?php
use App\Models\User;

$users = User::where('role','employee')->get();

?>

<div class="max-w-3xl mx-auto mt-2 mb-12 px-4">
  <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200">
    <!-- Gradient Header -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-400 py-2 px-6">
      <h1 class="text-2xl font-bold text-white text-center">EnterTask Details</h1>
    </div>
    
    <!-- Form Body -->
    <div class="p-6">
      <form class="space-y-2" method="POST" action="/employer/create-task" enctype="multipart/form-data">
        @csrf
        
        <!-- Name Field -->
        <div class="space-y-2">
          <label for="name" class="block text-sm font-semibold text-gray-700">Task Name</label>
          <input 
            type="text" 
            name="name" 
            id="name" 
            placeholder="Enter task name" 
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
          >
          @error('name')
            <p class="text-red-600 text-sm mt-1">{{$message}}</p>
          @enderror
        </div>
        
        <!-- Description Field -->
        <div class="space-y-2">
          <label for="description" class="block text-sm font-semibold text-gray-700">Description</label>
          <textarea 
            name="description" 
            id="description" 
            placeholder="Enter your description" 
            rows="3"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
          ></textarea>
          @error('description')
            <p class="text-red-600 text-sm mt-1">{{$message}}</p>
          @enderror
        </div>
        
        <!-- Dates Section - Two Column Layout -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <!-- Start Date -->
          <div class="space-y-2">
            <label for="start_date" class="block text-sm font-semibold text-gray-700">Start Date</label>
            <input 
              type="date" 
              name="start_date" 
              id="start_date"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
            >
            @error('start_date')
              <p class="text-red-600 text-sm mt-1">{{$message}}</p>
            @enderror
          </div>
          
          <!-- Due Date -->
          <div class="space-y-2">
            <label for="end_date" class="block text-sm font-semibold text-gray-700">Due Date</label>
            <input 
              type="date" 
              name="end_date" 
              id="end_date"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
            >
            @error('end_date')
              <p class="text-red-600 text-sm mt-1">{{$message}}</p>
            @enderror
          </div>
        </div>
        
        <!-- Status -->
        <div class="space-y-2">
          <label for="status" class="block text-sm font-semibold text-gray-700">Status</label>
          <select 
            name="status" 
            id="status"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors appearance-none bg-white"
          >
            <option class="text-yellow-600 font-medium" value="pending">Pending</option>
            <option class="text-blue-600 font-medium" value="processing">In Progress</option>
            <option class="text-green-600 font-medium" value="completed">Completed</option>
          </select>
          @error('status')
            <p class="text-red-600 text-sm mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="space-y-2">
          <label for="assigned_user" class="block text-sm font-semibold text-gray-700">Assign User</label>
          <div>
            <select name="assigned_user[]" id="assigned_user" multiple style="width: 100%">
              @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
              @endforeach
            </select>
            @error('assigned_user')
              <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
          </div>
        </div>
        
        <!-- Submit Button -->
        <div class="pt-4">
          <button 
            type="submit"
            class="w-full bg-gradient-to-r from-blue-700 to-blue-500 text-white font-bold py-3 px-4 rounded-lg hover:from-blue-800 hover:to-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transform transition-all duration-300 ease-in-out hover:scale-[1.02] active:scale-[0.99]"
          >
            Add Task
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection