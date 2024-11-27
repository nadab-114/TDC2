@include('admin.adminsidebar')
<body class="flex flex-wrap">
    <div class=" flex flex-nowrap max-w-[60rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <h1>Module Details</h1>
        <p><strong>Title:</strong> {{ $module->title }}</p>
        <p><strong>Uploaded File:</strong></p>
        <iframe src="{{ asset('storage/' . $module->file_path) }}" width="100%" height="600px"></iframe>
        <a href="{{ route('admin.modules.module') }}" class="btn btn-secondary">Back to Modules</a>
    </div>
</body>