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
    <div class="flex flex-col max-w-[60rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto"> 
        <h1 class="text-2xl font-bold mb-6">Quiz: {{ $quizzes->title }}</h1>
    
        <form action="{{ route('quizzes.submit', $quizzes->id) }}" method="POST">
            @csrf
            @foreach ($questions as $question)
                <p><strong>{{ $question->question_text }}</strong></p>
                <label>
                    <input type="radio" name="answers[{{ $question->id }}]" value="option_a">
                    {{ $question->option_a }}
                </label><br>
                <label>
                    <input type="radio" name="answers[{{ $question->id }}]" value="option_b">
                    {{ $question->option_b }}
                </label><br>
                <label>
                    <input type="radio" name="answers[{{ $question->id }}]" value="option_c">
                    {{ $question->option_c }}
                </label><br>
                <label>
                    <input type="radio" name="answers[{{ $question->id }}]" value="option_d">
                    {{ $question->option_d }}
                </label><br>
            @endforeach
            <button type="submit">Submit</button>
        </form>
        
    </div> 
</body>
</html>