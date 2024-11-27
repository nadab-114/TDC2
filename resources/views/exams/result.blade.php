<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body class="flex flex-wrap">
    <div class="flex flex-col max-w-[60rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <h1>Exam Results</h1>
        <p>Total Questions: {{ $exam->total_questions }}</p>
        <p>Score: {{ $exam->score }}</p>
    </div>
</body>