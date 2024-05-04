<?php

use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\ContactBannerController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\CTAController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\FaqController;
use App\Http\Controllers\Backend\HelpBannerController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\HomePageBannerController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\StatController;
use App\Http\Controllers\Backend\SubCourseController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\UtilityController;
use App\Http\Controllers\Frontend\PageController as FrontPageController;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['web', SetLocale::class])->group(function () {
    Route::get('/', [FrontPageController::class, 'home'])->name('frontend.home');
    Route::get('/about-us', [FrontPageController::class, 'about'])->name('frontend.about');
    Route::get('/our-client', [FrontPageController::class, 'clients'])->name('frontend.clients');
    Route::get('/testimonials', [FrontPageController::class, 'testimonials'])->name('frontend.testimonials');
    Route::get('/faqs', [FrontPageController::class, 'faqs'])->name('frontend.faqs');
    Route::get('/blogs', [FrontPageController::class, 'blogs'])->name('frontend.blogs.blogs');
    Route::get('/blogs/{slug}', [FrontPageController::class, 'blogsDetails'])->name('frontend.blogs.details');
    Route::get('/events', [FrontPageController::class, 'events'])->name('frontend.events');
    Route::get('/events/{slug}', [FrontPageController::class, 'eventDetails'])->name('frontend.events.details');
    Route::post('/events/participate', [FrontPageController::class, 'saveEventParticipants'])->name('frontend.events.participate');
    Route::get('/japan/about', [FrontPageController::class, 'aboutJapan'])->name('frontend.japan.about');
    Route::get('/japan/study', [FrontPageController::class, 'studyInJapan'])->name('frontend.japan.study');
    Route::get('/japan/work', [FrontPageController::class, 'workInJapan'])->name('frontend.japan.work');
    Route::get('/nepal', [FrontPageController::class, 'nepal'])->name('frontend.nepal');
    Route::get('/services', [FrontPageController::class, 'serviceForClient'])->name('frontend.services');
    Route::get('/courses', [FrontPageController::class, 'courses'])->name('frontend.services.courses');
    Route::get('/clients/post', [FrontPageController::class, 'postJob'])->name('frontend.clients.post');
    Route::get('/clients/apply', [FrontPageController::class, 'applyJob'])->name('frontend.clients.apply');
    Route::get('/clients/job', [FrontPageController::class, 'opening'])->name('frontend.clients.job');
    Route::get('/contact', [FrontPageController::class, 'contact'])->name('frontend.contact');
    Route::get('/success', [FrontPageController::class, 'success'])->name('frontend.success');
    Route::get('/error', [FrontPageController::class, 'error'])->name('frontend.error');
    Route::get('/not-found', [FrontPageController::class, 'notFound'])->name('frontend.404');
    Route::get('/internal-server-error', [FrontPageController::class, 'serverError'])->name('frontend.500');
});

Route::group(['prefix' => 'system'], function () {

    Auth::routes([
        'register' => false,
        'reset' => false,
        'verify' => false,
    ]);

    Route::group(['middleware' => 'auth'], function () {
        Route::post('/sort-table', [UtilityController::class, 'positionSort'])->name('position-sort');


        Route::get('manage-menus/{id?}', [MenuController::class, 'index'])->name('menu.index');
        Route::post('create-menu', [menuController::class, 'store'])->name('menu.store');

        Route::post('menu-items', [menuController::class, 'storeMenuItems'])->name('menu-item.store');


        Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

        // Settings routes
        Route::get('/site-settings', [SettingController::class, 'index'])->name('setting');
        Route::post('/site-settings', [SettingController::class, 'save'])->name('setting.save');

        //statistics route
        Route::get('/statistics', [StatController::class, 'index'])->name('statistics');
        Route::post('/statistics', [StatController::class, 'store'])->name('statistics.save');



        // Settings routes
        Route::get('/help-banner', [HelpBannerController::class, 'index'])->name('help-banner');
        Route::post('/help-banner', [HelpBannerController::class, 'save'])->name('help-banner.save');

        //home banners
        Route::get('/home-banner', [HomePageBannerController::class, 'create'])->name('home-banner');
        Route::post('/home-banner', [HomePageBannerController::class, 'store'])->name('home-banner.save');

        // Settings routes
        Route::get('/contact-banner', [ContactBannerController::class, 'index'])->name('contact-banner');
        Route::post('/contact-banner', [ContactBannerController::class, 'save'])->name('contact-banner.save');

        // Client CRUD Routes
        Route::resource('clients', ClientController::class)->except(['show']);

        // Team CRUD Routes
        Route::resource('teams', TeamController::class)->except(['show']);

        // Course CRUD Routes
        Route::resource('courses', CourseController::class)->except(['show']);

        // SubCourse CRUD Routes
        Route::resource('subCourses', SubCourseController::class)->except(['show']);

        // Faq CRUD Routes
        Route::resource('faqs', FaqController::class)->except(['show']);

        // Testimonial CRUD Routes
        Route::resource('testimonials', TestimonialController::class)->except(['show']);

        // Blog CRUD Routes
        Route::resource('blogs', BlogController::class)->except(['show']);
        Route::post('/blogs/{blog}/{imageId}/remove_image', [BlogController::class, 'removeImage']);

        //ctas 

        Route::resource('ctas', CTAController::class)->except(['show']);

        // Event CRUD Routes
        Route::resource('events', EventController::class)->except(['show']);
        Route::post('/events/{event}/{imageId}/remove_image', [EventController::class, 'removeImage']);
        Route::get('/events/{event}/participants', [EventController::class, 'participants'])->name('event.participants');

        // Pages routes
        // Course
        Route::get('/page/courses', [PageController::class, 'courseIndex'])->name('page.course');
        Route::post('/page/courses', [PageController::class, 'courseSave'])->name('page.course.save');
        // Event
        Route::get('/page/events', [PageController::class, 'eventIndex'])->name('page.event');
        Route::post('/page/events', [PageController::class, 'eventSave'])->name('page.event.save');
        // Blog
        Route::get('/page/blogs', [PageController::class, 'blogIndex'])->name('page.blog');
        Route::post('/page/blogs', [PageController::class, 'blogSave'])->name('page.blog.save');
        // Client
        Route::get('/page/clients', [PageController::class, 'clientIndex'])->name('page.client');
        Route::post('/page/clients', [PageController::class, 'clientSave'])->name('page.client.save');
        // Faq
        Route::get('/page/faqs', [PageController::class, 'faqIndex'])->name('page.faq');
        Route::post('/page/faqs', [PageController::class, 'faqSave'])->name('page.faq.save');
        // Service for Students
        Route::get('/page/student-services', [PageController::class, 'serviceForStudentIndex'])->name('page.student-services');
        Route::post('/page/student-services', [PageController::class, 'serviceForStudentSave'])->name('page.student-services.save');
        // Service for clients
        Route::get('/page/client-services', [PageController::class, 'serviceForClientIndex'])->name('page.client-services');
        Route::post('/page/client-services', [PageController::class, 'serviceForClientSave'])->name('page.client-services.save');
        // Work In Japan
        Route::get('/page/work-in-japan', [PageController::class, 'workInJapanIndex'])->name('page.work-in-japan');
        Route::post('/page/work-in-japan', [PageController::class, 'workInJapanSave'])->name('page.work-in-japan.save');
        // Study In Nepal
        Route::get('/page/study-in-japan', [PageController::class, 'studyInJapanIndex'])->name('page.study-in-japan');
        Route::post('/page/study-in-japan', [PageController::class, 'studyInJapanSave'])->name('page.study-in-japan.save');
        Route::post('/page/{imageId}/study-in-japan/remove_image', [PageController::class, 'removeStudyInJapanImage'])->name('page.study-in-japan.remove-img');
        // About Nepal
        Route::get('/page/about-nepal', [PageController::class, 'aboutNepalIndex'])->name('page.about-nepal');
        Route::post('/page/about-nepal', [PageController::class, 'aboutNepalSave'])->name('page.about-nepal.save');
        Route::post('/page/{imageId}/about-nepal/remove_image', [PageController::class, 'removeAboutNepalImage'])->name('page.about-nepal.remove-img');
        // About
        Route::get('/page/about', [PageController::class, 'aboutIndex'])->name('page.about');
        Route::post('/page/about', [PageController::class, 'aboutSave'])->name('page.about.save');
        Route::post('/page/{imageId}/about/remove_image', [PageController::class, 'removeAboutImage'])->name('page.about.remove-img');
    });
});
