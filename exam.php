<?php

namespace App\Http\Controllers;

use App\Models\Answer_user;
use App\Models\Course;
use App\Models\Option;
use App\Models\Question;
use App\Models\Result;
use Illuminate\Http\Request;

class exam extends Controller
{
    public function submit(Request $request)
    {
        $userId = auth()->id();
        $courseId = $request->course_id;
        $answers = $request->answers;

        $correct = 0;
        $total = count($answers);

        foreach ($answers as $questionId => $optionId) {
            $option = Option::find($optionId);

            Answer_user::create([
                'user_id' => $userId,
                'question_id' => $questionId,
                'slected_option_id' => $optionId,
            ]);

            if ($option && $option->is_correct) {
                $correct++;
            }
        }

        $percentage = round(($correct / $total) * 100, 2);
        $passed = $percentage >= 60;

        Result::updateOrCreate([
            'user_id' => $userId,
            'course_id' => $courseId,
        ], [
            'score' => $percentage,
            'passed' => $passed,
        ]);

        return view('result', compact('percentage', 'passed'));
    }

}
