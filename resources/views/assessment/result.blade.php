@include('usersidebar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
</head>
<body>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold">Quiz Results</h1>
        <p class="my-4">Your score: {{ $attempt->score }}</p>
        <a href="{{ route('quiz.index') }}" class="px-4 py-2 bg-green-500 text-white rounded">Take Again</a>
    </div>
</body>
</html>