<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/user',[\App\Http\Controllers\api\Homecontroller::class,'index']);
Route::get('/course',[\App\Http\Controllers\api\Homecontroller::class,'popular']);
Route::get('/courses',[\App\Http\Controllers\api\Course::class,'index'])->middleware('auth:sanctum');
Route::post('/ratings', [\App\Http\Controllers\api\Course::class, 'store'])->middleware('auth:sanctum');
Route::get('ratings/{user_id}/{course_id}', [\App\Http\Controllers\api\Course::class, 'show']);
//Route::post('/courses/{id}', [\App\Http\Controllers\api\Course::class, 'update']);
Route::post('/store/level', [\App\Http\Controllers\api\Level::class, 'store']);
Route::post('/unregister-course', [\App\Http\Controllers\api\CoureLevel::class, 'unregister']);

Route::post('/store/results',[\App\Http\Controllers\api\Result::class,'store']);
Route::get('/progress',[\App\Http\Controllers\api\Progress::class,'index']);
Route::post('/courses/enroll', [\App\Http\Controllers\api\Enrol::class, 'enroll']);
Route::get('/profile', [\App\Http\Controllers\api\profile::class, 'show']);
Route::post('/profile/update', [\App\Http\Controllers\api\profile::class, 'update']);
Route::post('/profile/password', [\App\Http\Controllers\api\profile::class, 'Password']);
Route::post('/profile/image', [\App\Http\Controllers\api\profile::class,'updateImage']);
Route::get('/profile/courses', [\App\Http\Controllers\api\profile::class, 'courses']);
Route::get('/profile/ratings',[\App\Http\Controllers\api\profile::class,'ratings']);
Route::get('/profile/progress',[\App\Http\Controllers\api\profile::class,'progress']);
Route::post('/progress/complete_course',[\App\Http\Controllers\api\Progress::class,'markCourseComplete']);
Route::get('/trainer/courses', [\App\Http\Controllers\api\Trainer::class, 'getCourses']);
Route::post('/courses/levels/trainer', [\App\Http\Controllers\api\Trainer::class, 'store']);
Route::post('/levels/vidios', [\App\Http\Controllers\api\Trainer::class, 'storevidio']);
Route::post('/levels/questions', [\App\Http\Controllers\api\Trainer::class, 'storequestion']);
Route::post('/levels/option', [\App\Http\Controllers\api\Trainer::class, 'storeoption']);
Route::post('/courses/{id}/update', [\App\Http\Controllers\api\Trainer::class, 'updatecourse']);
Route::post('/profile/trainer', [\App\Http\Controllers\api\Trainer::class, 'updatetrainer']);
Route::post('/change-password/trainer', [\App\Http\Controllers\api\Trainer::class, 'changePasswordtrainer']);
Route::get('/courses/{id}/levels/trainer', [\App\Http\Controllers\api\Trainer::class, 'index']);
Route::get('/levels/{id}/vidios/trainer', [\App\Http\Controllers\api\Trainer::class, 'getvidio']);
Route::get('/levels/{id}/questions', [\App\Http\Controllers\api\Trainer::class, 'getquestion']);
Route::delete('/levels/{id}/delete', [\App\Http\Controllers\api\Trainer::class, 'destroylevel']);
Route::delete('/vidios/{id}/delete', [\App\Http\Controllers\api\Trainer::class, 'destroyvidio']);
Route::delete('/question/{id}/delete', [\App\Http\Controllers\api\Trainer::class, 'destroyquestion']);
Route::get('/categore',[\App\Http\Controllers\api\Trainer::class,'Categore']);



Route::get('/users/admin', [\App\Http\Controllers\api\Admin::class, 'index']);
Route::patch('/users/{id}/role', [\App\Http\Controllers\api\Admin::class, 'updateRole']);
Route::delete('/users/{id}/admin', [\App\Http\Controllers\api\Admin::class, 'destroy']);
Route::get('admin/users/{id}', [\App\Http\Controllers\api\Admin::class, 'show']);
Route::get('/stats', [\App\Http\Controllers\api\Admin::class, 'stats']);
Route::get('/courses/admin', [\App\Http\Controllers\api\Admin::class, 'indexcourse']);
Route::post('/courses/admin/store', [\App\Http\Controllers\api\Admin::class, 'storecourse']);
Route::patch('/courses/{id}/trainer', [\App\Http\Controllers\api\Admin::class, 'assignTrainer']);
Route::delete('/courses/{id}/admin', [\App\Http\Controllers\api\Admin::class, 'destroycourse']);

Route::get('/categores', [\App\Http\Controllers\api\Admin::class, 'categore']);










Route::get('/progress/by-course', [\App\Http\Controllers\api\Progress::class, 'getUserProgressByCourse']);
Route::post('/store/answer',[\App\Http\Controllers\api\Answer::class,'store']);
Route::post('/store/progress',[\App\Http\Controllers\api\Progress::class,'store']);
Route::Post('progress/update',[\App\Http\Controllers\api\Progress::class,'update']);
Route::post('/vidios', [\App\Http\Controllers\api\Vidio::class, 'store']);
Route::post('/questions', [\App\Http\Controllers\api\Question::class, 'store']);
Route::post('/options', [\App\Http\Controllers\api\Option::class, 'store']);
Route::put('/users/{id}', [\App\Http\Controllers\api\User::class, 'update']);
Route::put('/users/{id}/change-password', [\App\Http\Controllers\api\User::class, 'changePassword']);
Route::get('/levels/{id}', [\App\Http\Controllers\api\Level::class, 'index']);
Route::get('/level/question/{id}',[\App\Http\Controllers\api\Level::class,'show']);
Route::delete('/videos/{id}', [\App\Http\Controllers\api\Vidio::class, 'destroy']);
Route::delete('/questions/{id}', [\App\Http\Controllers\api\Question::class, 'destroy']);
Route::get('/courses/{id}', [\App\Http\Controllers\api\Course::class, 'show']);
Route::post('/users/{id}/avatar', [\App\Http\Controllers\api\Userp::class, 'uploadAvatar']);

Route::post('/send-otp', [\App\Http\Controllers\api\Forget_passwod::class, 'sendOtp']);
Route::post('/verify-otp', [\App\Http\Controllers\api\Forget_passwod::class, 'verifyOtp']);




Route::get('/show/{id}',[\App\Http\Controllers\api\Course_Details::class,'show']);

Route::get('/courses/{id}', [\App\Http\Controllers\api\CoureLevel::class, 'show']);
Route::get('/user/{user}/course/{course}', [\App\Http\Controllers\api\CoureLevel::class, 'getProgress']);
Route::post('/user/{user}/course/{course}/complete', [\App\Http\Controllers\api\CoureLevel::class, 'markComplete']);
Route::post('/login',[\App\Http\Controllers\api\Login::class,'login']);
//Route::middleware('web')->group(function (){
Route::post('/register', [\App\Http\Controllers\api\Register::class, 'register']);
Route::post('/register/send-code', [\App\Http\Controllers\api\Register::class, 'sendVerificationCode']);
Route::post('/register/verify', [\App\Http\Controllers\api\Register::class, 'verifyAndRegister']);

Route::post('/send-code', [\App\Http\Controllers\api\Passwoed::class, 'sendCode']);
Route::post('/verify-code', [\App\Http\Controllers\api\Passwoed::class, 'verifyCode']);
Route::post('/change-password', [\App\Http\Controllers\api\Passwoed::class, 'changePassword']);


Route::post('/forgot-password', [\App\Http\Controllers\api\Forget_passwod::class, 'sendResetLink']);

Route::post('/reset-password', [\App\Http\Controllers\api\Forget_passwod::class, 'reset']);
Route::get('/my-certificates', [\App\Http\Controllers\api\Certificate::class, 'myCertificates']);
Route::get('/certificates/by-course/{courseId}', [\App\Http\Controllers\api\Certificate::class, 'getByCourse']);

Route::post('/certificates', [\App\Http\Controllers\api\Certificate::class, 'store']);
Route::get('/certificates/{courseId}', [\App\Http\Controllers\api\Certificate::class, 'show']);
