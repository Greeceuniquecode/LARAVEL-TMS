@extends('/layout')
@section('content')
<section class="max-w-6xl mx-auto px-4 py-12">
    <h2 class="text-3xl font-semibold mb-6 text-center text-blue-800">Features You'll Love</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-white p-6 rounded-lg shadow border border-blue-200">
        <h3 class="text-xl font-bold mb-2 text-blue-700">Task Boards</h3>
        <p class="text-blue-800">Create and organize tasks with drag-and-drop boards.</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow border border-blue-200">
        <h3 class="text-xl font-bold mb-2 text-blue-700">Deadline Tracking</h3>
        <p class="text-blue-800">Never miss a deadline with built-in reminders and due dates.</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow border border-blue-200">
        <h3 class="text-xl font-bold mb-2 text-blue-700">Team Chat</h3>
        <p class="text-blue-800">Communicate instantly with your team inside every project.</p>
      </div>
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="bg-blue-100 py-12">
    <div class="max-w-6xl mx-auto px-4 text-center">
      <h2 class="text-3xl font-semibold mb-6 text-blue-800">Why Choose LimitlessTMS?</h2>
      <p class="mb-4 text-blue-800">Designed to simplify teamwork, LimitlessTMS helps you manage everything in one place.</p>
      <ul class="list-disc list-inside max-w-md mx-auto text-left text-blue-800">
        <li>Simple and clean interface</li>
        <li>Boosts productivity with clear task views</li>
        <li>Accessible from any device</li>
        <li>No learning curve get started instantly</li>
      </ul>
    </div>
  </section>

 
  <section class="max-w-6xl mx-auto px-4 py-12">
    <h2 class="text-3xl font-semibold mb-6 text-center text-blue-800">What Users Say</h2>
    <div class="grid md:grid-cols-2 gap-8">
      <div class="bg-white p-6 rounded-lg shadow border border-blue-200">
        <p class="text-blue-800">"LimitlessTMS helped our team stay organized and communicate better. Super easy to use!"</p>
        <p class="mt-2 text-sm text-blue-600">— Sarah, Project Manager</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow border border-blue-200">
        <p class="text-blue-800">"I love how clean the design is. I was able to set up my project in minutes!"</p>
        <p class="mt-2 text-sm text-blue-600">— Alex, Freelance Designer</p>
      </div>
    </div>
  </section>
@endsection