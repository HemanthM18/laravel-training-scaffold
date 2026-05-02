@extends('layouts.app')

@section('content')
    {{-- TODO Day 3: build the projects list page --}}
    {{-- Should display all projects in a Tailwind grid; each card links to the show page --}}
    {{-- TODO Day 5: replace hardcoded data with real DB data passed from the controller --}}
    {{-- TODO Day 9: use @can('update', $project) to conditionally show edit/delete buttons --}}

    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold">Projects</h1>
        <!-- <p class="text-gray-500 mt-4">TODO Day 3 — projects index goes here</p> -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white shadow rounded-lg p-5">
                <h2 class="text-xl font-semibold">Website Redesign</h2>
                <p class="text-gray-500 mt-2">Update company website UI.</p>
                <a href="/projects/1" class="text-blue-600 mt-4 inline-block">View Project</a>
            </div>

            <div class="bg-white shadow rounded-lg p-5">
                <h2 class="text-xl font-semibold">CRM System</h2>
                <p class="text-gray-500 mt-2">Customer management platform.</p>
                <a href="/projects/2" class="text-blue-600 mt-4 inline-block">View Project</a>
            </div>

            <div class="bg-white shadow rounded-lg p-5">
                <h2 class="text-xl font-semibold">Mobile App</h2>
                <p class="text-gray-500 mt-2">Build Android and iOS app.</p>
                <a href="/projects/3" class="text-blue-600 mt-4 inline-block">View Project</a>
            </div>
        </div>
    </div>
@endsection