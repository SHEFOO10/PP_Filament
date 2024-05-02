<?php

use App\Filament\Resources\CourseResource\Pages\ViewCourse;
use App\Http\Controllers\EnrollmentController;
use App\Models\Course;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('enrollments/{course}', function (Course $course) {
    auth()->user()->courses()->attach($course, [
        'enrollment_date' => now()
    ]);
    return redirect()->route('filament.admin.resources.courses.my_courses');
})->name('course_enroll');