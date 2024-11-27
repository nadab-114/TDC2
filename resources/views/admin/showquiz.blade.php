@include('admin.adminsidebar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
</head>
<body>
    
    <h1 class="text-xl font-bold">{{ $quiz->title }}</h1>
<p>{{ $quiz->description }}</p>
<p><strong>Topic:</strong> {{ $quiz->topic }}</p>

<h2 class="text-lg font-bold">Questions:</h2>
<ul>
    @foreach ($quiz->questions as $question)
        <li>{{ $question->text }}</li>
    @endforeach
</ul>
</body>
</html>