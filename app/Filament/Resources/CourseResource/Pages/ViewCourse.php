<?php

namespace App\Filament\Resources\CourseResource\Pages;

use App\Filament\Resources\CourseResource;
use App\Models\Course;
use Filament\Resources\Pages\Page;

class ViewCourse extends Page
{
    protected static string $resource = CourseResource::class;

    protected static string $view = 'filament.resources.course-resource.pages.view-course';

    public function mount(Course $id) {
        $this->course = $id;
    }
}
