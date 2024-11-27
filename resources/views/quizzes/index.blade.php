@include('usersidebar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="flex flex-wrap">
    <div class=" container flex flex-nowrap max-w-[60rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <h1 class="mb-4">Available Quizzes</h1>
        <ul class=" divide-y divide-gray-200 list-group">
            @foreach($quizzes as $quiz)
                <li class="list-group-item">
                    <a href="{{ route('quizzes.show', $quiz->id) }}">
                        {{ $quiz->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>