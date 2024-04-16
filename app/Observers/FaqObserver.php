<?php

namespace App\Observers;

use App\Models\Faq;

class FaqObserver
{
    /**
     * Handle the Category "created" event.
     *
     * @param Faq $faq
     * @return void
     */
    public function creating(Faq $faq): void
    {
        $faq->position = Faq::max('position') + 1;
    }

    /**
     * Handle the meal "deleted" event.
     *
     * @param Faq $faq
     * @return void
     */
    public function deleting(Faq $faq): void
    {
        $lowerPriorityCategories = Faq::where('position', '>', $faq->position)->get();
        foreach ($lowerPriorityCategories as $lowerPriorityFaq) {
            $lowerPriorityFaq->position--;
            $lowerPriorityFaq->saveQuietly();
        }
    }
}
