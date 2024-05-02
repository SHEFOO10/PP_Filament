<?php

namespace App\Filament\Resources\CourseResource\Pages;

use App\Filament\Resources\CourseResource;
use Filament\Resources\Pages\Page;

class MyCourses extends Page
{
    protected static string $resource = CourseResource::class;

    protected static string $view = 'filament.resources.course-resource.pages.my-courses';
}
