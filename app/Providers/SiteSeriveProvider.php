<?php

namespace App\Providers;

use App\Models\ContactBanner;
use App\Models\HelpBanner;
use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class SiteSeriveProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if (Schema::hasTable('settings')) {
            $settings = Setting::latest()->first();
            view()->composer('frontend.*', function ($view) use ($settings) {
                $view->with([
                    'siteData' => $settings
                ]);
            });
        }
        if (Schema::hasTable('contact_banners')) {
            $contactBanner = ContactBanner::latest()->first();
            view()->composer('frontend.*', function ($view) use ($contactBanner) {
                $view->with([
                    'contactBanner' => $contactBanner
                ]);
            });
        }
        if (Schema::hasTable('help_banners')) {
            $helpBanner = HelpBanner::latest()->first();
            view()->composer('frontend.*', function ($view) use ($helpBanner) {
                $view->with([
                    'helpBanner' => $helpBanner
                ]);
            });
        }
    }
}
