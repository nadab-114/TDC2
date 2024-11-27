@include('admin.adminsidebar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="flex flex-col ">
    <div class=" flex flex-col max-w-[60rem] px-4 sm:px-6 lg:px-8 lg:py-14 mx-auto m-8 bg-white border shadow-sm rounded-xl dark:White dark:border-neutral-700 dark:shadow-neutral-700/70">
    Create a New Quiz

    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form for creating a new quiz -->
    <form action="{{ route('admin.quizstore') }}" method="POST">
        @csrf

        <div class="flex flex-col ">
            <label for="title" class="block text-sm font-medium mb-2 dark:text-black">Quiz Title:</label>
            <input type="text" id="title" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-gray text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:border-neutral-700 dark:text-black dark:hover:bg-neutral-200 dark:focus:bg-white" placeholder="Sample" name="title" value="{{ old('title') }}" required>
        </div>

        <div class="flex flex-col">
            <label for="description" class="block text-sm font-medium mb-2 dark:text-black">Description:</label>
            <textarea id="description" name="description" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-gray text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:border-neutral-700 dark:text-black dark:hover:bg-neutral-200 dark:focus:bg-white" placeholder="Descrition">{{ old('description') }}</textarea>
        </div>

        <div class="flex flex-col">
            <label for="topic" class="block text-sm font-medium mb-2 dark:text-black">Topic:</label>
            <textarea id="topic" name="topic" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-gray text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:border-neutral-700 dark:text-black dark:hover:bg-neutral-200 dark:focus:bg-white" placeholder="Topic">{{ old('topic') }}</textarea>
        </div>

        <div class="flex flex-col py-6">
            <button type="submit" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-gray text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:border-neutral-700 dark:text-black dark:hover:bg-neutral-200 dark:focus:bg-white">Create Quiz</button>
        </div>
    </form>
</div>
</body>
</html>