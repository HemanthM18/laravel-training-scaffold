@extends('layouts.app')

@section('content')
    {{-- TODO Day 3: build the project detail page --}}
    {{-- TODO Day 5: pass $project from the controller and display its fields --}}
    {{-- TODO Day 6: list nested $project->tasks with their $task->comments --}}

    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold">Project Detail</h1>
        <!-- <p class="text-gray-500 mt-4">TODO Day 3 — project detail goes here</p> -->
        <p class="text-gray-600 mt-3">
            This project focuses on improving the company website design and user experience.
        </p>
        <div class="mt-6 bg-white shadow rounded-lg p-5">
            <h2 class="text-xl font-semibold mb-3">Project Details</h2>

            <p><strong>Status:</strong> In Progress</p>
            <p><strong>Deadline:</strong> 20 May 2026</p>
            <p><strong>Team:</strong> 4 Members</p>
        </div>

        <div class="mt-6 bg-white shadow rounded-lg p-5">
            <h2 class="text-xl font-semibold mb-3">Tasks</h2>

            <ul class="list-disc pl-6 space-y-2">
                <li>Create homepage layout</li>
                <li>Design contact page</li>
                <li>Improve navigation menu</li>
            </ul>
        </div>
    </div>
@endsection