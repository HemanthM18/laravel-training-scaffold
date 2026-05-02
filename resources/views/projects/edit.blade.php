@extends('layouts.app')

@section('content')
    {{-- TODO Day 3: build the edit-project form layout --}}
    {{-- TODO Day 5: pre-fill fields with $project values --}}
    {{-- TODO Day 7: add @error directives --}}

    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold">Edit Project</h1>
        <!-- <p class="text-gray-500 mt-4">TODO Day 3 — project edit form goes here</p> -->
        <div class="bg-white shadow rounded-lg p-6">
            <form>

                <div class="mb-4">
                    <label class="block font-medium mb-2">Project Name</label>
                    <input type="text"
                        value="Website Redesign"
                        class="w-full border rounded px-4 py-2">
                </div>

                <div class="mb-4">
                    <label class="block font-medium mb-2">Description</label>
                    <textarea
                        class="w-full border rounded px-4 py-2"
                        rows="4">Modern website redesign project</textarea>
                </div>

                <div class="mb-4">
                    <label class="block font-medium mb-2">Status</label>
                    <select class="w-full border rounded px-4 py-2">
                        <option selected>Active</option>
                        <option>Planning</option>
                        <option>Completed</option>
                    </select>
                </div>

                <button class="bg-green-600 text-black px-5 py-2 rounded">
                    Update Project
                </button>

            </form>
        </div>
    </div>
@endsection