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
    <h1 class="text-2xl font-bold">Driving Knowledge Quiz</h1>
    <form action="{{ route('quiz.submit') }}" method="POST">
        @csrf
        @if($questions && $questions->count())
        @foreach ($quiz->questions as $question)
        <p>{{ $question->text }}</p>
        @foreach ($question->answers as $answer)
            <input type="radio" name="answers[{{ $question->id }}]" value="{{ $answer->id }}">
            <label>{{ $answer->text }}</label>
        @endforeach
    @endforeach
    
@else
    <p>No quiz/questions available.</p>
@endif
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Submit</button>
    </form>
</div>
</body>
</html>