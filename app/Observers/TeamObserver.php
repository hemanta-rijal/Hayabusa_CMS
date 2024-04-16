<?php

namespace App\Observers;

use App\Models\Team;

class TeamObserver
{
    /**
     * Handle the Category "created" event.
     *
     * @param Team $team
     * @return void
     */
    public function creating(Team $team): void
    {
        $team->position = Team::max('position') + 1;
    }

    /**
     * Handle the meal "deleted" event.
     *
     * @param Team $team
     * @return void
     */
    public function deleting(Team $team): void
    {
        $lowerPriorityCategories = Team::where('position', '>', $team->position)->get();
        foreach ($lowerPriorityCategories as $lowerPriorityTeam) {
            $lowerPriorityTeam->position--;
            $lowerPriorityTeam->saveQuietly();
        }
    }
}
