@include('usersidebar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body class="flex flex-wrap">
    <div class="flex flex-col max-w-[60rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <form action="{{ route('exams.store', $exam->id) }}" method="POST">
        @csrf
        <h1>Exam</h1>
        @foreach ($exam->questions as $index => $question)
            <div>
                <p><strong>Q{{ $index + 1 }}:</strong> {{ $question->question_text }}</p>
                <div>
                    <label>
                        <input type="radio" name="answers[{{ $question->id }}]" value="option_a" required>
                        {{ $question->option_a }}
                    </label>
                    <label>
                        <input type="radio" name="answers[{{ $question->id }}]" value="option_b" required>
                        {{ $question->option_b }}
                    </label>
                    <label>
                        <input type="radio" name="answers[{{ $question->id }}]" value="option_c" required>
                        {{ $question->option_c }}
                    </label>
                    <label>
                        <input type="radio" name="answers[{{ $question->id }}]" value="option_d" required>
                        {{ $question->option_d }}
                    </label>
                </div>
            </div>
        @endforeach
        <button type="submit">Submit</button>
    </form>
    </div>
</body>
</html>