<form method="POST" action="{{ route('exam.submit') }}">
    @csrf
    <input type="hidden" name="course_id" value="{{ $course->id }}">

    @foreach($course->questions as $question)
        <div>
            <p><strong>{{ $question->question_text }}</strong></p>
            @foreach($question->options as $option)
                <label>
                    <input type="radio" name="answers[{{ $question->id }}]" value="{{ $option->id }}">
                    {{ $option->option_text }}
                </label><br>
            @endforeach
        </div>
        <hr>
    @endforeach

    <button type="submit">إرسال الإجابات</button>
</form>
