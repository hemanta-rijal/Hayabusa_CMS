<?php

namespace App\Observers;

use App\Models\Event;
use Illuminate\Support\Str;

class EventObserver
{
    /**
     * Handle the Event "created" event.
     *
     * @param Event $event
     * @return void
     */
    public function creating(Event $event): void
    {
        $event->slug = Str::slug($event->title_en);
        // Check if the generated slug already exists
        $count = Event::where('slug', $event->slug)->count();
        if ($count > 0) {
            $event->slug .= '-' . $count;
        }
    }

    /**
     * Handle the Event "update" event.
     *
     * @param Event $event
     * @return void
     */
    public function updating(Event $event): void
    {
        if ($event->isDirty('title_en')) {
            $event->slug = Str::slug($event->title_en);

            // Check if the generated slug already exists
            $count = Event::where('slug', $event->slug)->count();
            if ($count > 0) {
                $event->slug .= '-' . $count;
            }
        }
    }
}
