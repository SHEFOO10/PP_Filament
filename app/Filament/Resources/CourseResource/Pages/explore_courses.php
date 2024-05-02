<?php

namespace App\Filament\Resources\CourseResource\Pages;

use App\Filament\Resources\CourseResource;
use App\Models\Course;
use Filament\Actions\Action;
use Filament\Resources\Pages\Page;

class explore_courses extends Page
{
    protected static string $resource = CourseResource::class;

    protected static string $view = 'filament.resources.course-resource.pages.explore_courses';
    protected static ?string $title = 'Explore';
    public function mount(): array
    {
        $data = Course::get()->toArray();
        return $this->data = $data;
    }

}
