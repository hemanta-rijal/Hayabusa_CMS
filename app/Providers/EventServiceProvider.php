<?php

namespace App\Providers;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Course;
use App\Models\Event;
use App\Models\Faq;
use App\Models\Team;
use App\Observers\BlogObserver;
use App\Observers\ClientObserver;
use App\Observers\CourseObserver;
use App\Observers\EventObserver;
use App\Observers\FaqObserver;
use App\Observers\TeamObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot(): void
    {
        Client::observe(ClientObserver::class);
        Blog::observe(BlogObserver::class);
        Event::observe(EventObserver::class);
        Faq::observe(FaqObserver::class);
        Team::observe(TeamObserver::class);
        Course::observe(CourseObserver::class);
    }
}
