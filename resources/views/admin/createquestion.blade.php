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
    
    <h1 class= "text-2xl pb-4">Create Question for Quiz: {{ $quizzes->title }}</h1>
    

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.questionstore', $quizzes->id) }}" method="POST">
        @csrf

        <div class="flex flex-col">
            <label for="question_text">Question Text:</label>
            <input type="text" id="question_text" name="question_text" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-gray text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:border-neutral-700 dark:text-black dark:hover:bg-neutral-200 dark:focus:bg-white" placeholder="Question" value="{{ old('question_text') }}" required>
        </div>

        <div class="flex flex-col">
            <label for="option_a">Option A:</label>
            <input type="text" id="option_a" name="option_a" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-gray text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:border-neutral-700 dark:text-black dark:hover:bg-neutral-200 dark:focus:bg-white" placeholder="Choice A" value="{{ old('option_a') }}" required>
        </div>

        <div class="flex flex-col">
            <label for="option_b">Option B:</label>
            <input type="text" id="option_b" name="option_b" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-gray text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:border-neutral-700 dark:text-black dark:hover:bg-neutral-200 dark:focus:bg-white" placeholder="Choice B" value="{{ old('option_b') }}" required>
        </div>

        <div class="flex flex-col">
            <label for="option_c">Option C:</label>
            <input type="text" id="option_c" name="option_c" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-gray text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:border-neutral-700 dark:text-black dark:hover:bg-neutral-200 dark:focus:bg-white" placeholder="Choice C" value="{{ old('option_c') }}" required>
        </div>

        <div class="flex flex-col">
            <label for="option_d">Option D:</label>
            <input type="text" id="option_d" name="option_d" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-gray text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:border-neutral-700 dark:text-black dark:hover:bg-neutral-200 dark:focus:bg-white" placeholder="Choice D" value="{{ old('option_d') }}" required>
        </div>

        <div>
            <label for="correct_option">Correct Option:</label>
            <select id="correct_option" name="correct_option" class="py-2 px-3 gap-x-2 block w-half text-sm font-medium rounded-lg border border-gray-200 bg-gray text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:border-neutral-700 dark:text-black dark:hover:bg-neutral-200 dark:focus:bg-white" required>
                <option value="option_a" {{ old('correct_option') == 'option_a' ? 'selected' : '' }}>Option A</option>
                <option value="option_b" {{ old('correct_option') == 'option_b' ? 'selected' : '' }}>Option B</option>
                <option value="option_c" {{ old('correct_option') == 'option_c' ? 'selected' : '' }}>Option C</option>
                <option value="option_d" {{ old('correct_option') == 'option_d' ? 'selected' : '' }}>Option D</option>
            </select>
        </div>

        <div class="flex py-3 justify-between ">
            <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-gray text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:border-neutral-700 dark:text-black dark:hover:bg-neutral-200 dark:focus:bg-white">Create Question</button>
            
            <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-gray text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:border-neutral-700 dark:text-black dark:hover:bg-neutral-200 dark:focus:bg-white" href="./quiz">Cancle</a>
        </div>
        
            
        
    </form>
    
    </div>
    
    <script>
        if (performance.navigation.type == 2) {
            window.location.reload(true);
        }
    </script>
</body>
</html>