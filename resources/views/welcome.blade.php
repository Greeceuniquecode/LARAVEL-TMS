@extends("/layout")
@section('content')
<body>
    <?php
    use Illuminate\Support\Facades\Auth;

    $user = Auth::User();
?>
    <div class="bg-gradient-to-br from-blue-100 to-white text-gray-800 font-sans">
        <!-- Header -->
        <header class="bg-linear-to-b from-blue-400 to-white text-white p-6 shadow-md">
          <h1 class="text-3xl font-bold mx-auto text-center">LimitlessTMS</h1>
          <p class="text-sm mx-auto text-center">Your ultimate Task Management System</p>
        </header>
      
        <!-- Introduction -->
        <section class="p-6">
          <h2 class="text-6xl font-semibold mb-2 text-blue-700 mx-auto text-center underline ">Introduction to LimitlessTMS</h2>
          <p class="text-gray-700 text-2xl">Welcome to LimitlessTMS, your all-in-one task management solution designed for simplicity and efficiency.  
            Whether you’re a solo freelancer, a student juggling assignments, or a growing team, LimitlessTMS is built for you.  
            With its intuitive interface and powerful features, you can create, track, and manage tasks with ease.  
            Stay focused on your goals without worrying about complicated tools or cluttered dashboards.  
            Everything you need is streamlined into one elegant platform.  
            Start using LimitlessTMS and bring structure to your workflow from day one.</p>
        </section>
      
        <!-- Our Experiences -->
        <section class="p-6 bg-white bg-opacity-70 rounded-md shadow-sm mx-4 my-4">
          <h2 class="text-2xl font-semibold mb-2 text-blue-700">Our Experiences</h2>
          <p class="text-gray-700 text-gray-700 text-2xl">Our team comes from a background of project management, software engineering, and UI/UX design.  
            We’ve worked with startups, enterprises, and remote teams across different industries.  
            Over the years, we faced the same problem again and again — complex task tools that were hard to use.  
            So, we set out to create something better: LimitlessTMS.  
            A solution born from real-world pain points, refined by user feedback, and driven by passion for productivity.  
            We’ve put our collective experience into building a system that’s both powerful and effortless to use.
          </p></p>
        </section>
      
        <!-- Seamless Collaboration -->
        <section class="p-6">
          <h2 class="text-2xl font-semibold mb-2 text-blue-700">Seamless Collaboration</h2>
          <p class="text-gray-700 text-2xl">Teamwork should be smooth and stress-free — and that's what LimitlessTMS is all about.  
            Assign tasks to teammates, leave comments, and share progress updates without switching apps.  
            Real-time syncing keeps everyone on the same page, no matter where they’re located.  
            Notifications and reminders ensure nothing slips through the cracks.  
            It's like having a digital whiteboard, calendar, and chat app in one clean interface.  
            Say goodbye to scattered communication and hello to true collaboration.
          </p></p>
        </section>
      
        <!-- Maximum Efficiency -->
        <section class="p-6 bg-white bg-opacity-70 rounded-md shadow-sm mx-4 my-4">
          <h2 class="text-2xl font-semibold mb-2 text-blue-700">Maximum Efficiency</h2>
          <p class="text-gray-700 text-2xl">    LimitlessTMS is built to help you get things done faster and smarter.  
            Use smart task categorization and priority settings to focus on what matters most.  
            Our clean interface minimizes distractions so you can stay in your zone.  
            Track your progress over time and adjust your plans with visual insights.  
            Every feature is designed to support momentum and reduce time wasted on repetitive tasks.  
            With LimitlessTMS, productivity becomes a habit — not a struggle.
        </p>
        </section>
      
        <!-- Call to Action -->
        <section class="p-8 text-center bg-gradient-to-r from-blue-100 to-white rounded-md shadow-md mx-4 my-6">
          <h2 class="text-2xl font-bold text-blue-800 mb-4">Get Started with LimitlessTMS Today!</h2>
          <p class="mb-4 text-gray-700">Start organizing your life and work in just a few clicks.</p>
        </section>
            
    </body>
      
      
@endsection