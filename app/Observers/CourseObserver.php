<?php

namespace App\Observers;

use App\Models\Course;

class CourseObserver
{
    /**
     * Handle the Category "created" event.
     *
     * @param Course $course
     * @return void
     */
    public function creating(Course $course): void
    {
        $course->position = Course::max('position') + 1;
    }

    /**
     * Handle the meal "deleted" event.
     *
     * @param Course $course
     * @return void
     */
    public function deleting(Course $course): void
    {
        $lowerPriorityCategories = Course::where('position', '>', $course->position)->get();
        foreach ($lowerPriorityCategories as $lowerPriorityCourse) {
            $lowerPriorityCourse->position--;
            $lowerPriorityCourse->saveQuietly();
        }
    }
}
