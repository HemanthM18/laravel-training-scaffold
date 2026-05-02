@extends('layouts.app')

@section('content')
    {{-- TODO Day 3: build the new-project form layout --}}
    {{-- TODO Day 5: wire POST action and old() helper for repopulation --}}
    {{-- TODO Day 7: add @error directives to display validation errors --}}

    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold">New Project</h1>
        <!-- <p class="text-gray-500 mt-4">TODO Day 3 — project create form goes here</p> -->
        <div class="bg-white shadow rounded-lg p-6">
            <form>

                <div class="mb-4">
                    <label class="block font-medium mb-2">Project Name</label>
                    <input type="text"
                        class="w-full border rounded px-4 py-2"
                        placeholder="Enter project name">
                </div>

                <div class="mb-4">
                    <label class="block font-medium mb-2">Description</label>
                    <textarea
                        class="w-full border rounded px-4 py-2"
                        rows="4"
                        placeholder="Enter description"></textarea>
                </div>

                <div class="mb-4">
                    <label class="block font-medium mb-2">Status</label>
                    <select class="w-full border rounded px-4 py-2">
                        <option>Planning</option>
                        <option>Active</option>
                        <option>Completed</option>
                    </select>
                </div>

                <button class="bg-blue-600 text-black px-5 py-2 rounded">
                    Create Project
                </button>

            </form>
        </div>
    </div>
@endsection