@extends('layouts.app')

@section('content')
    {{-- TODO Day 3: build the task detail page --}}
    {{-- TODO Day 5: pass $task from the controller and display its fields --}}
    {{-- TODO Day 6: list nested $task->comments --}}
    {{-- TODO Day 11: if $task->attachment_path exists, show a download link --}}

    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold">Task Detail</h1>
        <!-- <p class="text-gray-500 mt-4">TODO Day 3 — task detail goes here</p> -->
        <p class="text-gray-600 mt-3">
            Create a responsive navigation bar for desktop and mobile screens.
        </p>

        <div class="mt-4 space-y-2">
            <p><strong>Status:</strong> In Progress</p>
            <p><strong>Assigned To:</strong> Hemanth</p>
            <p><strong>Due Date:</strong> 18 May 2026</p>
        </div>

        <h2 class="text-xl font-semibold mt-6 mb-3">Comments</h2>

        <ul class="space-y-2">
            <li class="border rounded p-3">Need mobile menu animation.</li>
            <li class="border rounded p-3">Desktop version looks good.</li>
        </ul>

        <a href="/projects/1/tasks" class="inline-block mt-6 text-blue-600 hover:underline">
            ← Back to Tasks
        </a>
    </div>
@endsection