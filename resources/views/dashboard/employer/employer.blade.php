@extends('../layout')
@section("content")
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold text-center mb-6">Employer Dashboard - LimitlessTMS</h1>

    <!-- Navigation -->
    <nav class="bg-white p-4 rounded shadow mb-6">
      <ul class="flex justify-around">
        <li><a href="#" class="text-blue-500 hover:underline">Dashboard</a></li>
        <li><a href="#" class="text-blue-500 hover:underline">Manage Employees</a></li>
        <li><a href="#" class="text-blue-500 hover:underline">Assign Tasks</a></li>
        <li><a href="#" class="text-blue-500 hover:underline">Reports</a></li>
      </ul>
    </nav>

    <!-- Dashboard Content -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <div class="bg-white p-4 rounded shadow">
        <h2 class="text-lg font-semibold mb-2">Total Employees</h2>
        <p class="text-3xl text-blue-600">25</p>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <h2 class="text-lg font-semibold mb-2">Active Projects</h2>
        <p class="text-3xl text-green-600">4</p>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <h2 class="text-lg font-semibold mb-2">Pending Approvals</h2>
        <p class="text-3xl text-red-600">3</p>
      </div>
    </div>

    <!-- Recent Employee Activity -->
    <div class="mt-6 bg-white p-4 rounded shadow">
      <h2 class="text-xl font-semibold mb-4">Recent Employee Activity</h2>
      <ul class="space-y-2">
        <li class="p-2 bg-gray-50 rounded">👤 John submitted task report</li>
        <li class="p-2 bg-gray-50 rounded">👤 Sarah updated project status</li>
        <li class="p-2 bg-gray-50 rounded">👤 Ahmed requested time off</li>
      </ul>
    </div>
  </div>
@endsection
