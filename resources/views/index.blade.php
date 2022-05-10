@extends('layouts.app')
@section('title', 'Lambent: Managed Virtual Assistants and Remote Teams in the Philippines')

@section('description', 'The easiest, most straightforward system for getting your work done. Reclaim your time for the
important things.')

@section('content')

@include('header')



<!-- Hero: With Sign in Form -->
<div class="relative bg-lambright-500 overflow-hidden">
    <!-- <div class="hidden sm:block sm:absolute sm:inset-0" aria-hidden="true">

    </div> -->
    <div class="relative pt-6">
        <div>



            <main class="lg:mt-8 sm:mt-24">
                <div class="pt-10 bg-blue-700 sm:pt-14 lg:pt-0 lg:pb-20 lg:overflow-hidden">
                    <div class="mx-auto max-w-7xl lg:px-8">
                        <div class="lg:grid lg:grid-cols-3 gap-8 ">
                            <div
                                class="mx-auto col-span-2 max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
                                <div class="lg:py-24">

                                    <h1 class="mt-4  sm:mt-5 sm:text-6xl ">
                                        <span
                                            class="block text-6xl text-left  font-concourset6  leading-tight font-normal tracking-normal text-newcolor-700 capitalize">Productivity
                                            Superpowers </span>
                                    </h1>
                                    <p
                                        class="mt-3 font-copy text-2xl font-normal tracking-normal  leading-normal text-left text-newcolor-700 normal-case sm:mt-5">
                                        A dedicated concierge. A pool of task experts. Robust process management.
                                        Inexpensive, straightforward monthly billing. <br> Transform your workflow into
                                        a streamlined productivity machine. Get more done faster. Focus on what
                                        matters.<br> Be happy.
                                    </p>
                                    <div class="mt-10 sm:mt-12">
                                        <!-- <img class="w-44 mt-3 md:center " src="images/LAMB - Proof Image - Rate on Clutch - 1.svg" alt=""> -->
                                        <!--  -->

                                       
                                        <div class="mt-5">
                                            

                                                    <div class="sm:col-span-2 bg-lime-500 rounded-md shadow ">
                                                        <div class="mt-1">
                                                            <a href = "/contact"
                                                                class="block w-full py-3  font-concourset6 text-base normal-case text-center  font-normal tracking-normal leading-relaxed align-middle px-5 rounded-md shadow  text-white hover:bg-lime-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300 focus:ring-offset-gray-900">Let's
                                                                Talk</a>
                                                        </div>
                                                    </div>
                                                </div>

                                        </div>
                                    </div>
                                </div>

                                <div class=" bg-blend-overlay mb-16   lg:m-0 sm:static w-full lg:relative">
                                <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
                                    <!-- Illustration taken from Lucid Illustrations: https://lucid.pixsellz.io/ -->
                                    <img class="w-60 mb-28 ml-14  sm:mb-28 sm:ml-40 lg:ml-0  lg:w-full  md:left-16 sm:left-0 lg:absolute lg:left "
                                        src="images/LAMB-Si_te-Image-Home-Header.svg"
                                        alt="Supercharge your productivity with offshore virtual assistants.">
                                    <!-- <div class="absolute inset-0 bg-lambright-600 mix-blend-lighten" aria-hidden="true"></div> -->
                                </div>
                            </div>
                            </div>
                            
                        </div>
                    </div>

            </main>
        </div>
    </div>

    <!-- Split with image -->

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="relative py-24 bg-slate-100">
        <div class="relative rounded-lg my-9  max-w-7xl mx-auto pt-6 px-12 sm:px-6 lg:px-14 bg-lime-600">
            <div class="h-80 bg-lime-600 mix-blend-darken rounded-lg sm:h-72 md:absolute md:right-0 md:h-5/6 md:w-1/2">
                <img class="w-72 ml-72 mt-4 h-80 object-fit" src="images/Lambent-Works-Magic-on-Tasks.svg"
                    alt="One free task to demonstrate Lambent’s managed virtual assistant approach.">
            </div>
            <div class="relative max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-12 lg:py-16">
                <div class=" md:w-9/12 ">
                    <p
                        class="mt-2 text-newcolor-700 font-concourset6 text-5xl font-normal tracking-normal leading-tight text-left capitalize">
                        What’s better than magic? Free magic!
                    </p>

                    <p
                        class="mt-3 text-xl font-normal tracking-normal text-left font-copy normal-case text-newcolor-700">
                        Do you have something that you’ve been putting off?<br>
                        Some task that stays at the bottom of your inbox pile?<br>
                        Well then, allow us to demonstrate how Lambent works its magic — for free.
                    </p>
                    <div class="mt-8">
                        <div class="inline-flex rounded-md shadow">
                            <!-- <form  action="/transaction" class="sm:max-w-xl sm:mx-auto lg:mx-0" method="POST">
              {{ csrf_field()}}
                  <input type="hidden" placeholder="Last Name" name="last_name" id="last_name" autocomplete="family-name" value="Free Magic">
                  <input type="hidden" placeholder="First Name" name="first_name" id="first_name" autocomplete="given-name"  value="I wanna talk">
              <button type="submit"  class="inline-flex items-center bg-lamblue-600 justify-center text-white px-5 py-3 border border-transparent rounded-md font-concourset6 text-base normal-case font-normal tracking-normal leading-relaxed hover:bg-lamblue-400"> Schedule a Call Today!</button>
             </form> -->
                            <a href="/freemagic"
                                class="inline-flex items-center bg-lamblue-600 justify-center text-white px-5 py-3 border border-transparent rounded-md font-concourset6 text-base normal-case font-normal tracking-normal leading-relaxed hover:bg-lamblue-400">Schedule
                                a Call Today</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Content: with testimonials and stats -->


    <div class="relative bg-lime-50 py-24 sm:py-24">
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start">
            <div class="relative sm:py-16 lg:py-0">
                <div aria-hidden="true" class="hidden sm:block lg:absolute lg:inset-y-0 lg:right-0 lg:w-screen">
                    <div class="absolute inset-y-0 right-1/2 w-full bg-lime-50 rounded-r-3xl lg:right-72"></div>
                    <svg class="absolute top-8 left-1/2 -ml-3 lg:-right-8 lg:left-auto lg:top-12" width="404"
                        height="392" fill="none" viewBox="0 0 404 392">
                        <defs>
                            <pattern id="02f20b47-fd69-4224-a62a-4c9de5c763f7" x="0" y="0" width="20" height="20"
                                patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="392" fill="url(#02f20b47-fd69-4224-a62a-4c9de5c763f7)" />
                    </svg>
                </div>
                <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0 lg:max-w-none lg:py-20">
                    <!-- Testimonial card-->
                    <div class="relative pt-64 pb-10 rounded-2xl shadow-xl overflow-hidden">
                        <img class="absolute inset-0 h-full w-full object-cover" src="images/harry-fozzard-mountain.jpg"
                            alt="Harry Fozzard with Remote Area Medical Philippines mission to Itbayat Philippines">
                        <div class="absolute inset-0 bg-lambright-600 mix-blend-multiply"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-lambright-600 via-lambright-600 opacity-90">
                        </div>
                        <div class="relative px-8">

                            <blockquote class="mt-8">
                                <div class="relative text-lg font-medium text-white md:flex-grow">

                                    <p
                                        class="relative  font-copy text-xl font-normal tracking-normal leading-relaxed text-newcolor-700 normal-case">
                                        Lambent is Gladwell’s 10,000-hour rule applied to remote teams. We’re
                                        purpose-built to streamline your work with meticulously designed processes and
                                        all the hacks and enhancements we've learned over fifteen years.
                                    </p>
                                </div>

                                <footer class="mt-4">
                                    <p
                                        class=" font-concourset3 text-sm font-normal leading-snug text-left text-newcolor-700 normal-case">
                                        Harry Fozzard, Founder Lambent Consulting</p>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0">
                <!-- Content area -->
                <div class="pt-12 sm:pt-16 lg:pt-20">
                    <h2
                        class="text-6xl text-left  text-newcolor-50 font-normal-600 tracking-normal leading-tight font-concourset6 capitalize">
                        What if it was easy?
                    </h2>
                    <div class="mt-6 text-newcolor-800 font-normal-400 tracking-normal leading-normal  space-y-6">
                        <p
                            class="text-xl text-left text-lambright-50 tracking-normal font-normal leading-relaxed normal-case font-copy">
                            No delegation tutorials. No crossing cultural divides. Just work done.
                        </p>
                        <p
                            class="text-xl text-left text-lambright-50 tracking-normal font-normal leading-relaxed normal-case font-copy">
                            First, we assign you a Concierge. Your Concierge is your go-to person who meets with you
                            each week to plan your deliverables. She coordinates with our data management, marketing,
                            writing, social media, lead generation, design, documentation, coding, and data mining
                            specialists. She monitors their performance and reviews deliverables.
                        </p>
                        <p
                            class="text-xl text-left text-lambright-50 tracking-normal font-normal leading-relaxed normal-case font-copy">
                            Your Concierge is your interface to the launch team as they imbibe your expectations to
                            engineer a lightning-fast, bulletproof workflow. Before your program goes live, we’ll spend
                            hours configuring automation, documenting processes, and testing outcomes. We build a
                            dashboard so you can see what’s happening 24/7.
                        </p>
                        <p
                            class="text-xl text-left text-lambright-50 tracking-normal font-normal leading-relaxed normal-case font-copy">
                            After launch, we calibrate across weekly sprints to keep improving and improving. Furiously
                            documenting documentarians memorialize that hard-earned knowledge in a self-serve wiki for
                            your reference.
                        </p>
                        <p
                            class="text-xl text-left text-lambright-50 tracking-normal font-normal leading-relaxed normal-case font-copy">
                            Then we do it all over again.
                        </p>
                    </div>
                </div>

                <!-- Stats section -->

            </div>
        </div>
    </div>


    <!-- Features: Grid with offset icons -->

    <div class="relative bg-slate-100 py-24 sm:py-24 lg:py-24">
        <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
            <h2 class="text-blue-700 font-concoursec5 text-lg leading-none font-normal tracking-normal uppercase">JUST
                DELEGATE</h2>
            <p
                class="font-concourset6 text-4xl font-normal tracking-normal leading-snug text-center text-newcolor-50 capitalize">
                Choose Your Workflow…
            </p>
            <p
                class="font-copy text-xl font-normal tracking-normal text-center leading-relaxed text-lambright-50 normal-case">
                Online marketing and back-office administration? No worries.<br> Data collection for lead generation and
                content moderation? We’re here for you.
            </p>
            <div class="mt-12">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span
                                        class="inline-flex items-center justify-center p-3 bg-lambright-500 rounded-md shadow-lg">
                                        <!-- Heroicon name: outline/cloud-upload -->
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                                        </svg>
                                    </span>
                                </div>
                                <h3
                                    class="mt-8 font-concourset4 text-2xl font-normal tracking-normal leading-snug capitalize text-newcolor-50">
                                    Online Marketing</h3>
                                <p
                                    class="mt-5 font-copy2 text-base font-normal text-center tracking-normal normal-case leading-relaxed text-newcolor-200">
                                    Build your audience and stay engaged. Strategy, design, updates, lists, and CRM
                                    management.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span
                                        class="inline-flex items-center justify-center p-3 bg-lambright-500 rounded-md shadow-lg">
                                        <!-- Heroicon name: outline/lock-closed -->
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </span>
                                </div>
                                <h3
                                    class="mt-8 font-concourset4 text-2xl font-normal tracking-normal leading-snug capitalize text-newcolor-50">
                                    Customer Experience</h3>
                                <p
                                    class="mt-5 font-copy2 text-base font-normal text-center tracking-normal normal-case leading-relaxed text-newcolor-200">
                                    Keep your customers happy with best-in-class CX. Support across all channels and
                                    self-service platforms
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span
                                        class="inline-flex items-center justify-center p-3 bg-lambright-500 rounded-md shadow-lg">
                                        <!-- Heroicon name: outline/refresh -->
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                        </svg>
                                    </span>
                                </div>
                                <h3
                                    class="mt-8 font-concourset4 text-2xl font-normal tracking-normal leading-snug capitalize text-newcolor-50">
                                    Back-office Admin</h3>
                                <p
                                    class="mt-5 font-copy2 text-base font-normal text-center tracking-normal normal-case leading-relaxed text-newcolor-200">
                                    Offload any task and optimize it. Assistants and processes support to any
                                    administrative function.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span
                                        class="inline-flex items-center justify-center p-3 bg-lambright-500 rounded-md shadow-lg">
                                        <!-- Heroicon name: outline/shield-check -->
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                                        </svg>
                                    </span>
                                </div>
                                <h3
                                    class="mt-8 font-concourset4 text-2xl font-normal tracking-normal leading-snug capitalize text-newcolor-50">
                                    Data Collection</h3>
                                <p
                                    class="mt-5 font-copy2 text-base font-normal text-center tracking-normal normal-case leading-relaxed text-newcolor-200">
                                    Expand or enhance your list with updates and additional data points. Data mining,
                                    tele-surveys, data verification, and append.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span
                                        class="inline-flex items-center justify-center p-3 bg-lambright-500 rounded-md shadow-lg">
                                        <!-- Heroicon name: outline/cog -->
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                        </svg>
                                    </span>
                                </div>
                                <h3
                                    class="mt-8 font-concourset4 text-2xl font-normal tracking-normal leading-snug capitalize text-newcolor-50">
                                    Documentation & Learning</h3>
                                <p
                                    class="mt-5 font-copy2 text-base font-normal text-center tracking-normal normal-case leading-relaxed text-newcolor-200">
                                    Leverage Lambent’s process development for your organization: process maps,
                                    operating procedures, and online training.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span
                                        class="inline-flex items-center justify-center p-3 bg-lambright-500 rounded-md shadow-lg">
                                        <!-- Heroicon name: outline/server -->
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 5.758a3 3 0 10-4.243 4.243 3 3 0 004.243-4.243zm0-5.758a3 3 0 10-4.243-4.243 3 3 0 004.243 4.243z" />
                                        </svg>
                                    </span>
                                </div>
                                <h3
                                    class="mt-8 font-concourset4 text-2xl font-normal tracking-normal leading-snug capitalize text-newcolor-50">
                                    Content Moderation</h3>
                                <p
                                    class="mt-5 font-copy2 text-base font-normal text-center tracking-normal normal-case leading-relaxed text-newcolor-200">
                                    Safeguard your community. Maintain your online assets: social monitoring and
                                    moderation, image preparation, and curation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Testimonials: with Background -->

    <slider></slider>





    <!-- Blog: 3-column cards -->

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="relative bg-slate-100 py-24 px-4 sm:px-6 lg:py-24 lg:px-8">
        <div class="absolute inset-0">
            <div class="bg-slate-100 h-1/3 sm:h-2/3"></div>
        </div>
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center">
                <h2
                    class="font-concourset6 lg:text-5xl font-normal tracking-normal leading-snug text-newcolor-50 sm:text-4xl">
                    Lambent Illuminations
                </h2>
                <p
                    class="mt-3 max-w-2xl mx-auto font-copy text-xl font-normal tracking-normal leading-relaxed text-lambright-50 normal-case sm:mt-4">
                    Resources and information for outsourcers and businesses. Leverage our process experience with
                    insights into outsourcing best practices, the Philippines, and tools for work.
                </p>
            </div>
            <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="/images/philippines-global-outsourcing-capital.jpg"
                            alt="Learn about outsourcing in the Philippines.">
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p
                                class="font-concourset4 text-2xl font-normal tracking-normal leading-tight capitalize text-newcolor-50">
                                Philippines
                            </p>
                            <p
                                class="mt-3 font-copy2 text-base font-normal tracking-normal leading-relaxed text-lambright-50 normal-case">
                                All about the Philippines. Learn about the local outsourcing landscape, culture
                                insights, business operations, and more. Benefit from two decades of business process
                                outsourcing and call center operations in the world capital of outsourcing.
                            </p>
                        </div>
                        <div class="flex flex-row justify-start mt-4">
                            <a href="https://blog.lambent.co/tag/philippines/"
                                class="font-copy text-base font-normal tracking-normal leading-none text-newgrowth-600 normal-case">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="/images/how-businesses-scale-with-lambent.jpg"
                            alt="Tips, insights, and hacks for outsouricng.">
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p
                                class="font-concourset4 text-2xl font-normal tracking-normal leading-tight capitalize text-newcolor-50">
                                Outsourcing
                            </p>
                            <p
                                class="mt-3 font-copy2 text-base font-normal tracking-normal leading-relaxed text-lambright-50 normal-case">
                                Real-life commentary, ideas, and tools for those outsourcing and those about to
                                outsource. An excellent resource for team managers, corporate trainers, entrepreneurs,
                                and solopreneurs who want insights into better operations.
                            </p>
                        </div>
                        <div class="flex flex-row justify-start mt-4">
                            <a href="hhttps://blog.lambent.co/tag/outsourcing/"
                                class="font-copy text-base font-normal tracking-normal leading-none text-newgrowth-600 normal-case">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="/images/working-with-lambent.jpg"
                            alt="Outsourcing theory and practice with real-world examples.">
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p
                                class="font-concourset4 text-2xl font-normal tracking-normal leading-tight capitalize text-newcolor-50">
                                Work
                            </p>
                            <p
                                class="mt-3 font-copy2 text-base font-normal tracking-normal leading-relaxed text-lambright-50 normal-case">
                                Work we do for our clients, dispatches from the factory floor, challenges and broad
                                overviews of process work we’ve documented. Understand what we do and why we do it to
                                keep clients for lengthy productive engagements.
                            </p>
                        </div>
                        <div class="flex flex-row justify-start mt-4">
                            <a href="https://blog.lambent.co/tag/philippines/"
                                class="font-copy text-base font-normal tracking-normal leading-none text-newgrowth-600 normal-case">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('footer')


    @endsection
