@extends('layout.app')

@section('title')
    <title>Student List</title>
@endsection

{{-- page-specific navigation: will render before the student table --}}

@section('content')
    <h2 class="text-2xl font-bold mb-4">Student List</h2>

    <table class="min-w-full bg-white border border-gray-300 border-collapse">
        <thead class="bg-gray-100">
            <tr>
                <th class="py-2 px-4 border border-gray-300 text-left">Name</th>
                <th class="py-2 px-4 border border-gray-300 text-left">Status</th>
                <th class="py-2 px-4 border border-gray-300 text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td class="py-2 px-4 border border-gray-300">{{ data_get($student, 'name') }}</td>
                    <td class="py-2 px-4 border">
                        <p class="px-2 py-1 rounded text-center rounded-lg {{ $student['status'] === 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                            {{ $student['status'] }}
                        </p>
                    </td>
                    <td class="py-2 px-4 border border-gray-300">
                        <button class="text-red-500 hover:underline">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="flex gap-2 mt-4">
        <x-alert message="Student added successfully!" type="success" />
        <x-alert message="Failed to add student." type="error" />
        <x-alert message="Something went wrong." type="info" />
    </div>
@endsection