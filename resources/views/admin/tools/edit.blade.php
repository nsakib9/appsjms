@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto my-10">
    <h2 class="text-2xl font-bold mb-6">✏️ Edit Tool</h2>

    <form method="POST" action="{{ route('admin.tools.update', $tool->id) }}">
        @csrf
        @method('PUT')

        <label class="block">Name</label>
        <input type="text" name="name" value="{{ $tool->name }}" class="w-full border p-2 rounded mb-4">

        <label class="block">Description</label>
        <textarea name="description" class="w-full border p-2 rounded mb-4">{{ $tool->description }}</textarea>

        <label class="block">Status</label>
        <select name="status" class="w-full border p-2 rounded mb-4">
            <option value="1" {{ $tool->status ? 'selected' : '' }}>Active</option>
            <option value="0" {{ !$tool->status ? 'selected' : '' }}>Inactive</option>
        </select>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update Tool</button>
    </form>
</div>
@endsection
