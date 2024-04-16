<?php

namespace App\Observers;

use App\Models\Client;

class ClientObserver
{
    /**
     * Handle the Category "created" event.
     *
     * @param Client $client
     * @return void
     */
    public function creating(Client $client): void
    {
        $client->position = Client::max('position') + 1;
    }

    /**
     * Handle the meal "deleted" event.
     *
     * @param Client $client
     * @return void
     */
    public function deleting(Client $client): void
    {
        $lowerPriorityCategories = Client::where('position', '>', $client->position)->get();
        foreach ($lowerPriorityCategories as $lowerPriorityClient) {
            $lowerPriorityClient->position--;
            $lowerPriorityClient->saveQuietly();
        }
    }
}
