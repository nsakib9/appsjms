@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto my-10">
    <h1 class="text-3xl font-bold mb-6">🔧 Admin Dashboard</h1>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-4 rounded mb-4">{{ session('success') }}</div>
    @endif

    {{-- Tools Section --}}
    <h2 class="text-xl font-bold my-4">টুলগুলো</h2>
    <table class="table-auto w-full border">
        <thead class="bg-gray-100">
            <tr>
                <th class="border p-2">Name</th>
                <th class="border p-2">Description</th>
                <th class="border p-2">Status</th>
                <th class="border p-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tools as $tool)
                <tr>
                    <td class="border p-2">{{ $tool->name }}</td>
                    <td class="border p-2">{{ $tool->description }}</td>
                    <td class="border p-2">{{ $tool->status ? 'Active' : 'Inactive' }}</td>
                    <td class="border p-2">
                        <a href="{{ route('admin.tools.edit', $tool->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- User Data Section --}}
    <h2 class="text-xl font-bold my-4">ব্যবহারকারীর ডেটা</h2>
    <table class="table-auto w-full border">
        <thead class="bg-gray-100">
            <tr>
                <th class="border p-2">User Name</th>
                <th class="border p-2">Email</th>
                <th class="border p-2">App Tool</th>
                <th class="border p-2">Generated Data</th>
                <th class="border p-2">Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($userData as $data)
                <tr>
                    <td class="border p-2">{{ $data->name }}</td>
                    <td class="border p-2">{{ $data->email }}</td>
                    <td class="border p-2">{{ $data->appTool->name }}</td>
                    <td class="border p-2">{{ Str::limit($data->generated_letter, 50) }}</td>
                    <td class="border p-2">{{ $data->created_at->format('d M Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
