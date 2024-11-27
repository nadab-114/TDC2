@include('admin.adminsidebar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Question</title>
</head>
<body class="flex flex-col">
    <div class="flex flex-col max-w-[60rem] px-4 sm:px-6 lg:px-8 lg:py-14 mx-auto m-8 bg-white border shadow-sm rounded-xl dark:bg-white dark:border-neutral-700 dark:shadow-neutral-700/70">
        <h1>Edit Question for Quiz: {{ $quizzes->title }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.questionsupdate', [$quizzes->id, $questions->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="question_text">Question Text:</label>
                <input type="text" id="question_text" name="question_text" value="{{ old('question_text', $questions->question_text) }}" required>
            </div>

            <div>
                <label for="option_a">Option A:</label>
                <input type="text" id="option_a" name="option_a" value="{{ old('option_a', $questions->option_a) }}" required>
            </div>

            <div>
                <label for="option_b">Option B:</label>
                <input type="text" id="option_b" name="option_b" value="{{ old('option_b', $questions->option_b) }}" required>
            </div>

            <div>
                <label for="option_c">Option C:</label>
                <input type="text" id="option_c" name="option_c" value="{{ old('option_c', $questions->option_c) }}" required>
            </div>

            <div>
                <label for="option_d">Option D:</label>
                <input type="text" id="option_d" name="option_d" value="{{ old('option_d', $questions->option_d) }}" required>
            </div>

            <div>
                <label for="correct_option">Correct Option:</label>
                <select id="correct_option" name="correct_option" required>
                    <option value="option_a" {{ old('correct_option', $questions->correct_option) == 'option_a' ? 'selected' : '' }}>Option A</option>
                    <option value="option_b" {{ old('correct_option', $questions->correct_option) == 'option_b' ? 'selected' : '' }}>Option B</option>
                    <option value="option_c" {{ old('correct_option', $questions->correct_option) == 'option_c' ? 'selected' : '' }}>Option C</option>
                    <option value="option_d" {{ old('correct_option', $questions->correct_option) == 'option_d' ? 'selected' : '' }}>Option D</option>
                </select>
            </div>

            <div>
                <button type="submit">Update Question</button>
            </div>
        </form>
    </div>
</body>
</html>
