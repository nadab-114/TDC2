@include('admin.adminsidebar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questions for Quiz: {{ $quizzes->title }}</title>
</head>
<body class="flex flex-col">
    <div class="flex flex-col max-w-[60rem] px-4 sm:px-6 lg:px-8 lg:py-14 mx-auto m-8 bg-white border shadow-sm rounded-xl dark:bg-white dark:border-neutral-700 dark:shadow-neutral-700/70">
        <h1 class="text-2xl font-semibold mb-4">Questions for Quiz: {{ $quizzes->title }}</h1>

        @if ($questions->isEmpty())
            <p>No questions available for this quiz.</p>
        @else
            <table class="min-w-full border-collapse border border-gray-200">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">Question</th>
                        <th class="border px-4 py-2">Option A</th>
                        <th class="border px-4 py-2">Option B</th>
                        <th class="border px-4 py-2">Option C</th>
                        <th class="border px-4 py-2">Option D</th>
                        <th class="border px-4 py-2">Correct Option</th>
                        <th class="border px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($questions as $question)
                        <tr>
                            <td class="border px-4 py-2">{{ $question->question_text }}</td>
                            <td class="border px-4 py-2">{{ $question->option_a }}</td>
                            <td class="border px-4 py-2">{{ $question->option_b }}</td>
                            <td class="border px-4 py-2">{{ $question->option_c }}</td>
                            <td class="border px-4 py-2">{{ $question->option_d }}</td>
                            <td class="border px-4 py-2">{{ ucfirst(str_replace('_', ' ', $question->correct_option)) }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('admin.questionsedit', ['quizzes' => $quizzes->id, 'questions' => $question->id]) }}" class="text-blue-600">Edit</a> |
                                <form action="{{ route('admin.questionsdestroy', $question->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <div class="mt-4">
            <a href="{{ route('admin.createquestion', $quizzes->id) }}" class="text-blue-600">Add New Question</a>
        </div>
    </div>
</body>
</html>
