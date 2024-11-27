@include('usersidebar')
<div class="container">
    {{-- Check if module exists --}}
    @if ($module)
        <h2 class="text-2xl font-semibold mb-4">{{ $module->title }}</h2>
        <p>{{ $module->description }}</p>
        
        {{-- Embed PDF --}}
        <div class="mt-4">
            <iframe src="{{ asset('storage/' . $module->file_path) }}" width="100%" height="600px"></iframe>
        </div>
    @else
        <p>Module not found.</p>
    @endif
</div>