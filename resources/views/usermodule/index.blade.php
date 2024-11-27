@include('usersidebar')
<body class="flex flex-wrap">
    <div class=" flex flex-col max-w-[60rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <h2 class="text-2xl font-semibold mb-4">Available Modules</h2>
    
    {{-- Check if there are any modules to display --}}
    @if ($module->isEmpty())
        <p>No modules available at the moment.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            {{-- Loop through each module and display them --}}
            @foreach ($module as $module)
                <div class="bg-white shadow-lg rounded-lg p-4">
                    <h3 class="text-xl font-semibold">{{ $module->title }}</h3>
                    <p class="text-gray-700">{{ Str::limit($module->description, 100) }}</p>

                    {{-- Button to view the PDF --}}
                    <a href="{{ route('usermodule.show', $module->id) }}" class="mt-2 inline-block text-blue-500 hover:text-blue-700">
                        View Module PDF
                    </a>
                </div>
            @endforeach
        </div>
    @endif
</div>
</body>