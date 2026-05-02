@extends('layouts.app')

@section('content')
    {{-- TODO Day 3: build the edit-task form layout --}}
    {{-- TODO Day 5: pre-fill fields with $task values --}}
    {{-- TODO Day 7: add @error directives --}}

    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold">Edit Task</h1>
        <!-- <p class="text-gray-500 mt-4">TODO Day 3 — task edit form goes here</p> -->
        <div class="bg-white shadow rounded-lg p-6">
            <form>

                <div class="mb-4">
                    <label class="block font-medium mb-2">Task Name</label>
                    <input type="text"
                        value="Build Navbar"
                        class="w-full border rounded px-4 py-2">
                </div>

                <div class="mb-4">
                    <label class="block font-medium mb-2">Description</label>
                    <textarea
                        class="w-full border rounded px-4 py-2"
                        rows="4">Create responsive navigation menu</textarea>
                </div>

                <div class="mb-4">
                    <label class="block font-medium mb-2">Status</label>
                    <select class="w-full border rounded px-4 py-2">
                        <option>Pending</option>
                        <option selected>In Progress</option>
                        <option>Completed</option>
                    </select>
                </div>

                <button class="bg-green-600 text-black px-5 py-2 rounded">
                    Update Task
                </button>

            </form>
        </div>
    </div>
@endsection