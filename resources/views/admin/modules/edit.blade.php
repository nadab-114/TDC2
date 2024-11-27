@include('admin.adminsidebar')
<body class="flex flex-wrap">
    <div class=" flex flex-nowrap max-w-[60rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <h1>Edit Module</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{ route('admin.modules.update', $module->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Module Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $module->title }}" required>
            </div>
    
            <div class="form-group">
                <label for="file">Module File (PDF)</label>
                <input type="file" name="file" id="file" class="form-control" accept="application/pdf">
                <small>Leave empty if you don't want to update the file.</small>
            </div>
    
            <button type="submit" class="btn btn-success">Update Module</button>
            <a href="{{ route('admin.modules.module') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>