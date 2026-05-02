@extends('layouts.app')

@section('content')
    {{-- TODO Day 3: build the tasks list page --}}
    {{-- Should display all tasks for the current project, grouped or filtered by status --}}
    {{-- TODO Day 5: replace hardcoded data with real DB data passed from the controller --}}
    {{-- TODO Day 9: use @can('update', $task) to conditionally show edit/delete buttons --}}

    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold">Tasks</h1>
        <!-- <p class="text-gray-500 mt-4">TODO Day 3 — tasks index goes here</p> -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div class="bg-white shadow rounded-lg p-5">
                <h2 class="text-xl font-semibold">Design Homepage UI</h2>
                <p class="text-gray-600 mt-2">Create homepage layout for website redesign.</p>
                <p class="text-green-600 mt-3 font-medium">Completed</p>
                <a href="/projects/1/tasks/1" class="text-blue-600 mt-3 inline-block">View Task</a>
            </div>

            <div class="bg-white shadow rounded-lg p-5">
                <h2 class="text-xl font-semibold">Build Navbar</h2>
                <p class="text-gray-600 mt-2">Responsive navigation menu design.</p>
                <p class="text-yellow-600 mt-3 font-medium">In Progress</p>
                <a href="/projects/1/tasks/2" class="text-blue-600 mt-3 inline-block">View Task</a>
            </div>

            <div class="bg-white shadow rounded-lg p-5">
                <h2 class="text-xl font-semibold">Deploy Project</h2>
                <p class="text-gray-600 mt-2">Upload final version to production server.</p>
                <p class="text-blue-600 mt-3 font-medium">Pending</p>
                <a href="/projects/1/tasks/3" class="text-blue-600 mt-3 inline-block">View Task</a>
            </div>

        </div>
    </div>
@endsection