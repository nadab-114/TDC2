@include('usersidebar')

<body class="flex flex-wrap">
    <div class="flex flex-col max-w-[60rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <h1>Quiz Results</h1>
    <p><strong>Quiz Title:</strong> {{ $quizzes->title }}</p>
    <p><strong>Score:</strong> {{ $attempt->score }}</p>

    @if ($answers->isEmpty())
        <p>No answers recorded for this attempt.</p>
    @else
        <ul>
            @foreach ($answers as $answer)
                <li class = "py-2   ">
                    <strong>Question:</strong> {{ $answer->question->question_text }} <br>
                    <strong>Your Answer:</strong> {{ $answer->question->getOptionText($answer->selected_option) }} <br>
                    <strong>Correct Answer:</strong> {{ $answer->question->{$answer->question->correct_option} }} <br>
                </li>
            @endforeach
        </ul>
        
        @endif
                

    </div>
</body>
    