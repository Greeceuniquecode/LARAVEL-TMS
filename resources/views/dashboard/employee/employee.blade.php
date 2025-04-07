@extends('layout')
@section('content')
<div class="max-w-4xl mx-auto p-6">

    <!-- Header -->
    <header class="text-center mb-8">
        <h1 class="text-3xl font-bold text-blue-700">LimitlessTMS Employee Section</h1>
        <p class="text-lg text-gray-600">Manage your team efficiently!</p>
    </header>

    <!-- Add Employee Form -->
    <section class="bg-white shadow-lg rounded-lg p-6 mb-8">
        <h2 class="text-2xl font-semibold text-blue-700 mb-4">Add New Employee</h2>
        <form action="#" method="POST" class="space-y-4">
            <div class="flex flex-col">
                <label for="employee-name" class="text-sm font-medium text-gray-700">Employee Name</label>
                <input type="text" id="employee-name" name="employee_name" class="p-3 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter employee name">
            </div>
            <div class="flex flex-col">
                <label for="employee-email" class="text-sm font-medium text-gray-700">Employee Email</label>
                <input type="email" id="employee-email" name="employee_email" class="p-3 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter employee email">
            </div>
            <div class="flex flex-col">
                <label for="employee-role" class="text-sm font-medium text-gray-700">Employee Role</label>
                <input type="text" id="employee-role" name="employee_role" class="p-3 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter employee role">
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700 transition duration-200">Add Employee</button>
        </form>
    </section>

    <!-- Employee List -->
    <section class="bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-blue-700 mb-4">Employee List</h2>
        <table class="min-w-full table-auto">
            <thead class="bg-blue-100">
                <tr>
                    <th class="px-4 py-2 text-left text-blue-700">Name</th>
                    <th class="px-4 py-2 text-left text-blue-700">Email</th>
                    <th class="px-4 py-2 text-left text-blue-700">Role</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b">
                    <td class="px-4 py-2">John Doe</td>
                    <td class="px-4 py-2">john.doe@example.com</td>
                    <td class="px-4 py-2">Developer</td>
                </tr>
                <tr class="border-b">
                    <td class="px-4 py-2">Jane Smith</td>
                    <td class="px-4 py-2">jane.smith@example.com</td>
                    <td class="px-4 py-2">Designer</td>
                </tr>
                <!-- More employees can be added here -->
            </tbody>
        </table>
    </section>
</div>

</body>
@endsection