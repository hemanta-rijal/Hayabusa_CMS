<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Course;
use App\Models\Event;
use App\Models\EventParticipant;
use App\Models\Faq;
use App\Models\Page\AboutNepalPage;
use App\Models\Page\AboutPage;
use App\Models\Page\BlogPage;
use App\Models\Page\ClientPage;
use App\Models\Page\CoursePage;
use App\Models\Page\EventPage;
use App\Models\Page\FaqPage;
use App\Models\Page\ServiceForClient;
use App\Models\Page\ServiceForStudent;
use App\Models\Page\StudyInJapan;
use App\Models\Page\WorkInJapan;
use App\Models\Team;
use App\Models\Testimonial;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(): Factory|View|Application
    {
        $events = Event::orderByDesc('created_at')->take(4)->get();
        $blogs = Blog::orderByDesc('created_at')->take(3)->get();
        $faqs = Faq::orderBy('position')->take(6)->get();
        $course = Course::with('subCourses')->orderBy('position')->take(1)->first();
        return view('frontend.home', compact(
            'events', 'blogs', 'faqs', 'course'
        ));
    }

    public function about(): Factory|View|Application
    {
        $page = AboutPage::with('images')->firstOrFail();
        $teams = Team::orderBy('position')->get();
        return view('frontend.about', compact('page', 'teams'));
    }

    public function clients(): Factory|View|Application
    {
        $page = ClientPage::firstOrFail();
        $clients = Client::orderBy('position')->get();
        return view('frontend.clients', compact(
            'page', 'clients'
        ));
    }

    public function testimonials(): Factory|View|Application
    {
        $activeTab = request()->query('type') == 'client' ? 'client' : 'student' ;
        $studentTestimonials = Testimonial::where('type', 'student')->get();
        $clientTestimonials = Testimonial::where('type', 'client')->get();
        return view('frontend.testimonials', compact(
            'studentTestimonials', 'clientTestimonials', 'activeTab'
        ));
    }

    public function faqs(): Factory|View|Application
    {
        $page = FaqPage::firstOrFail();
        $faqs = Faq::orderBy('position')->get();
        return view('frontend.faqs', compact(
            'page', 'faqs'
        ));
    }

    public function blogs(): Factory|View|Application
    {
        $blogs = Blog::orderByDesc('created_at')->get();
        $page = BlogPage::firstOrFail();
        return view('frontend.blogs.blogs', compact(
            'blogs', 'page'
        ));
    }

    public function blogsDetails($slug): Factory|View|Application
    {
        $blog = Blog::whereSlug($slug)->with('images')->firstOrFail();
        return view('frontend.blogs.details', compact('blog'));
    }

    public function events(): Factory|View|Application
    {
        $page = EventPage::firstOrFail();
        $events = Event::orderByDesc('created_At')->get();
        return view('frontend.events.events', compact(
            'events', 'page'
        ));
    }

    public function eventDetails($slug): Factory|View|Application
    {
        $page = EventPage::firstOrFail();
        $event = Event::whereSlug($slug)->with('images')->firstOrFail();
        return view('frontend.events.details', compact(
            'event', 'page'
        ));
    }

    public function saveEventParticipants(Request $request): RedirectResponse
    {
        try {
            $rules = [
                'event_id' => ['required', Rule::exists('events', 'id')],
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'detail' => 'nullable',
            ];
            $validated = $request->validate($rules);

            EventParticipant::create($validated);
            return redirect()->route('frontend.success')->with([
                'message' => trans('site.message.success_msg'),
                'status' => trans('site.message.success')
            ]);
        } catch (Exception $e) {
            return redirect()->route('frontend.error')->with([
                'message' => trans('site.message.error_msg'),
                'status' => trans('site.message.error')
            ]);
        }
    }

    public function aboutJapan(): Factory|View|Application
    {
        return view('frontend.japan.about');
    }

    public function studyInJapan(): Factory|View|Application
    {
        $page = StudyInJapan::with('images')->firstOrFail();
        return view('frontend.japan.study', compact('page'));
    }

    public function workInJapan(): Factory|View|Application
    {
        $clients = Client::orderBy('position')->get();
        $page = WorkInJapan::firstOrFail();
        return view('frontend.japan.work', compact(
            'clients', 'page'
        ));
    }

    public function nepal(): Factory|View|Application
    {
        $page = AboutNepalPage::with('images')->firstOrFail();
        return view('frontend.nepal', compact('page'));
    }

    public function serviceForClient(): Factory|View|Application
    {
        $activeTab = request()->query('type') == 'client' ? 'client' : 'student' ;
        $clientService = ServiceForClient::firstOrFail();
        $studentService = ServiceForStudent::firstOrFail();
        $studentTestimonials = Testimonial::whereType('student')->take(2)->get();
        $clientTestimonials = Testimonial::whereType('client')->take(2)->get();
        return view('frontend.services.client', compact(
            'clientService', 'studentService', 'activeTab',
            'studentTestimonials', 'clientTestimonials'
        ));
    }

    public function courses(): Factory|View|Application
    {
        $page = CoursePage::firstOrFail();
        $courses = Course::with('subCourses')->orderBy('position', 'ASC')->get();
        return view('frontend.services.courses', compact('page', 'courses'));
    }

    public function serviceForStudent(): Factory|View|Application
    {
        return view('frontend.services.student');
    }

    public function postJob(): Factory|View|Application
    {
        return view('frontend.clients.post');
    }

    public function applyJob(): Factory|View|Application
    {
        return view('frontend.clients.apply');
    }

    public function opening(): Factory|View|Application
    {
        return view('frontend.clients.job');
    }

    public function contact(): Factory|View|Application
    {
        return view('frontend.contact');
    }

    public function success(): Factory|View|Application
    {
        return view('frontend.success');
    }

    public function error(): Factory|View|Application
    {
        return view('frontend.fail');
    }
    public function notFound(): Factory|View|Application
    {
        return view('frontend.404');
    }
    public function serverError(): Factory|View|Application
    {
        return view('frontend.500');
    }

}
