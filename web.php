<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('a/{id}', function ($id) {
    $courses = \App\Models\Course::with([
        'levels.vidio',
        'levels.question',
        'categore',
        'train'
    ])->where('trainer_id', $id)->get();

    // ربط الخيارات يدويًا بكل سؤال
    foreach ($courses as $course) {
        foreach ($course->levels as $level) {
            foreach ($level->question as $question) {
                $question->Option = \App\Models\Option::where('question_id', $question->id)->get();
            }
        }
    }

    return $courses;
});

//Route::get('/sanctum/csrf-cookie',[\Laravel\Sanctum\Http\Controllers\CsrfCookieController::class,'show']);
//Route::post('/register', [\App\Http\Controllers\api\Register::class, 'register']);

Route::get('/courses/{course}/quiz', [\App\Http\Controllers\exam::class, 'showQuiz'])->name('quiz.show');
Route::post('/courses/{course}/quiz', [\App\Http\Controllers\exam::class, 'submitQuiz'])->name('quiz.submit');
require __DIR__.'/auth.php';
