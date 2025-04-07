@extends("/layout")
@section('content')
<body>
    <?php
    use Illuminate\Support\Facades\Auth;

    $user = Auth::User();
?>
    <div class="text-blue-900 mx-auto text-center font-semibold underline text-6xl">
        <h1>LimitlessTMS</h1>
    </div>
    <div class=" mx-auto bg-linear-to-t from-blue-400 to-white text-emerald-700 text-center font-extrabold " >
        <p class=" m-4 mt-5 text-3xl underline ">LimitlessTMS is the ultimate task management system designed to boost productivity and streamline workflows like never before.</p>
            <p class=" m-4 text-purple-600 text-3xl "> Whether you're managing personal projects or leading a team, our intuitive platform helps you stay organized, set priorities, and track progress effortlessly. With smart automation, real-time collaboration, and powerful analytics, LimitlessTMS ensures you never miss a deadline.</p>
            <p class="m-4  mt-5 text-orange-400 underline text-3xl"> Say goodbye to chaos and hello to efficiency experience limitless possibilities in task management today!</p>
    </div>
    <div class="w-1/2 mt-5 text-center mx-auto   font-extrabold text-5xl text-gray-700 underline">
        <h1>Our experiences</h1>
    </div>
    <div class=" mx-auto bg-linear-to-t from-blue-400 to-white text-emerald-700 text-center font-semibold ">
        <p class="text-gray-600 text-3xl mt-5 m-6 gap-5 underline">At LimitlessTMS, we bring years of expertise in task management, workflow optimization, and productivity solutions.</p>
        <p class="text-gray-600 text-3xl mt-5 m-6 gap-5"> Our team has worked with businesses of all sizes, helping them streamline operations, improve collaboration, and achieve their goals efficiently. </p>
        <p class="text-gray-600 text-3xl mt-5 m-6 gap-5"> continuous innovation and user-driven improvements, we’ve built a system that adapts to your needs, ensuring seamless task management for individuals and teams alike.</p>
        <p class="text-gray-600 text-3xl mt-5 m-6 gap-5 underline"> With LimitlessTMS, you benefit from a wealth of experience dedicated to making your work smarter, faster, and more organized.</p>
    </div>
    <div class="text-gray-700 mx-auto text-center font-extrabold  text-5xl underline">
        <h1>"Seamless Collaboration, Maximum Efficiency"</h1>
    </div>
    <div class="mx-auto bg-linear-to-t from-blue-400 to-white text-emerald-700 text-center font-semibold">
        <p class="text-gray-600 text-3xl mt-5 m-6 gap-5 underline " >LimitlessTMS is more than just a task manager ,it’s a hub for effortless teamwork and seamless collaboration. </p>
            <p class="text-gray-600 text-3xl mt-5 m-6 gap-5" >With real-time updates, shared workspaces, and intuitive communication tools, your team can stay in sync no matter where they are. Assign tasks, set deadlines, and track progress all in one place, ensuring nothing falls through the cracks. </p>
            <p class="text-gray-600 text-3xl mt-5 m-6 gap-5"> you’re managing a small team or scaling up operations, LimitlessTMS keeps everyone aligned and working towards success.</p>

    </div>
    <div class=" text-gray-700 mx-auto text-center font-extrabold  text-5xl">
        <h1 class="mt-5 m-6 gap-5 underline">Get Started with LimitlessTMS Today!</h1>
    </div>
    <div class="text-gray-900 text-2xl mt-5 m-6 gap-5">
        <p class="text-gray-600 text-3xl mt-5 m-6 gap-5 underline">Ready to take control of your tasks and boost productivity like never before?</p>
        <p class="text-gray-600 text-3xl mt-5 m-6 gap-5"> LimitlessTMS is here to simplify your workflow, enhance collaboration, and keep you on track toward success.</p>
        <p class="text-gray-600 text-3xl mt-5 m-6 gap-5"> Whether you're managing personal projects or leading a team, our intuitive platform adapts to your needs. Join countless users who have transformed the way they work .</p>
        <p class="text-gray-600 text-3xl mt-5 m-6 gap-5 underline ">sign up today and experience the limitless possibilities of smart task management!</p>
    </div>
</body>
@endsection