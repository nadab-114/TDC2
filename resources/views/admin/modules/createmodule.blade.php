@include('admin.adminsidebar')
<body class="flex flex-wrap">
    <div class=" flex flex-col max-w-[60rem] px-4 sm:px-6 lg:px-8 lg:py-14 mx-auto m-8 bg-white border shadow-sm rounded-xl dark:White dark:border-neutral-700 dark:shadow-neutral-700/70">
<h1 class= "text-2xl pb-4">Add New Module</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.modules.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="flex flex-col">
            <label for="title">Module Title:</label>
            <input type="text" name="title" id="title" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-gray text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:border-neutral-700 dark:text-black dark:hover:bg-neutral-200 dark:focus:bg-white" placeholder="Title" required>
        </div>

        <div class="flex flex-col">
            <label for="file">Module File (PDF)</label>
            <input type="file" name="file" id="file" class="form-control" accept="application/pdf" required>
        </div>

        <div class="flex py-3 justify-between">
            <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-gray text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:border-neutral-700 dark:text-black dark:hover:bg-neutral-200 dark:focus:bg-white">Create Module</button>
            
            <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-gray text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:border-neutral-700 dark:text-black dark:hover:bg-neutral-200 dark:focus:bg-white" href="{{ route('admin.modules.module') }}">Cancle</a>
        </div>
    </form>
    
    </div>
</body>