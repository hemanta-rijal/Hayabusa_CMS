<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Page\AboutImage;
use App\Models\Page\AboutNepalImage;
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
use App\Models\Page\StudyInJapanImage;
use App\Models\Page\WorkInJapan;
use App\Traits\ImageTrait;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PageController extends Controller
{
    use ImageTrait;

    public function courseIndex(): Factory|View|Application
    {
        $page = CoursePage::first() ?? new CoursePage();
        return view('backend.pages.courses', compact('page'));
    }

    public function courseSave(Request $request): RedirectResponse
    {
        $coursePath = 'uploads/images/pages/course';
        $rules = [
            'main_title_en' => 'required',
            'course_section_title_en' => 'required',
            'main_title_jp' => 'required',
            'course_section_title_jp' => 'required',
            'image' => isset($request->id)
                ? 'nullable|max:1024|mimes:jpg,jpeg,png|exclude'
                : 'required|max:1024|mimes:jpg,jpeg,png|exclude'
        ];

        $validated = $request->validate($rules);

        try {
            if (isset($request->id)) {
                $page = CoursePage::findOrfail($request->id);
                $image = $page->image;
                if ($request->hasFile('image')) {
                    $this->deleteImage($coursePath . '/' . $page->image);
                    $image = $this->saveOriginalImage($request->file('image'), $coursePath);
                }

                $page->update($validated + [
                        'image' => $image,
                    ]);
                return redirect()->route('page.course')->with('success', 'Events page content updated successfully.!!');
            } else {
                $image = $this->saveOriginalImage($request->file('image'), $coursePath);
                CoursePage::create($validated + [
                        'image' => $image,
                    ]);
                return redirect()->route('page.course')->with('success', 'Events page content added successfully.!!');
            }
        } catch (Exception) {
            return back()->with('error', 'Something went wrong please try again later.!!')->withInput();
        }
    }

    public function blogIndex(): Factory|View|Application
    {
        $page = BlogPage::first() ?? new BlogPage();
        return view('backend.pages.blogs', compact('page'));
    }

    public function blogSave(Request $request): RedirectResponse
    {
        $blogPath = 'uploads/images/pages/blog';
        $rules = [
            'main_title_en' => 'required',
            'main_title_jp' => 'required',
            'image' => isset($request->id)
                ? 'nullable|max:1024|mimes:jpg,jpeg,png|exclude'
                : 'required|max:1024|mimes:jpg,jpeg,png|exclude'
        ];

        $validated = $request->validate($rules);

        try {
            if (isset($request->id)) {
                $page = BlogPage::findOrfail($request->id);
                $image = $page->image;
                if ($request->hasFile('image')) {
                    $this->deleteImage($blogPath . '/' . $page->image);
                    $image = $this->saveOriginalImage($request->file('image'), $blogPath);
                }

                $page->update($validated + [
                        'image' => $image,
                    ]);
                return redirect()->route('page.blog')->with('success', 'Events page content updated successfully.!!');
            } else {
                $image = $this->saveOriginalImage($request->file('image'), $blogPath);
                BlogPage::create($validated + [
                        'image' => $image,
                    ]);
                return redirect()->route('page.blog')->with('success', 'Events page content added successfully.!!');
            }
        } catch (Exception) {
            return back()->with('error', 'Something went wrong please try again later.!!')->withInput();
        }
    }

    public function eventIndex(): Factory|View|Application
    {
        $page = EventPage::first() ?? new EventPage();
        return view('backend.pages.events', compact('page'));
    }

    public function eventSave(Request $request): RedirectResponse
    {
        $eventPath = 'uploads/images/pages/event';
        $imgValidation = isset($request->id)
            ? 'nullable|max:1024|mimes:jpg,jpeg,png|exclude'
            : 'required|max:1024|mimes:jpg,jpeg,png|exclude';
        $rules = [
            'main_title_en' => 'required',
            'main_title_jp' => 'required',
            'sup_title_en' => 'required',
            'sup_title_jp' => 'required',
            'title_en' => 'required',
            'title_jp' => 'required',
            'sub_title_en' => 'required',
            'form_sub_title_jp' => 'required',
            'form_title_en' => 'required',
            'form_title_jp' => 'required',
            'form_sub_title_en' => 'required',
            'sub_title_jp' => 'required',
            'button_text_en' => 'required',
            'button_text_jp' => 'required',
            'link' => 'required',
            'image' => $imgValidation,
            'detail_image' => $imgValidation,
        ];

        $validated = $request->validate($rules);

        try {
            if (isset($request->id)) {
                $page = EventPage::findOrfail($request->id);
                $image = $request->hasFile('image')
                    ? $this->updateImage($page->image, $request->file('image'), $eventPath)
                    : $page->image;
                $detailImage = $request->hasFile('detail_image')
                    ? $this->updateImage($page->detail_image, $request->file('detail_image'), $eventPath)
                    : $page->detail_image;

                $page->update($validated + [
                        'image' => $image,
                        'detail_image' => $detailImage,
                    ]);
                return redirect()->route('page.event')->with('success', 'Events page content updated successfully.!!');
            } else {
                $image = $this->saveOriginalImage($request->file('image'), $eventPath);
                $detailImage = $this->saveOriginalImage($request->file('detail_image'), $eventPath);
                EventPage::create($validated + [
                        'image' => $image,
                        'detail_image' => $detailImage,
                    ]);
                return redirect()->route('page.event')->with('success', 'Events page content added successfully.!!');
            }
        } catch (Exception) {
            return back()->with('error', 'Something went wrong please try again later.!!')->withInput();
        }
    }

    public function clientIndex(): Factory|View|Application
    {
        $page = ClientPage::first() ?? new ClientPage();
        return view('backend.pages.clients', compact('page'));
    }

    public function clientSave(Request $request): RedirectResponse
    {
        $clientPath = 'uploads/images/pages/client';
        $imgValidation = isset($request->id)
            ? 'nullable|max:1024|mimes:jpg,jpeg,png|exclude'
            : 'required|max:1024|mimes:jpg,jpeg,png|exclude';
        $rules = [
            'main_title_en' => 'required',
            'main_title_jp' => 'required',
            'page_description_en' => 'required',
            'page_description_jp' => 'required',
            'button_text_en' => 'required',
            'button_text_jp' => 'required',
            'link' => 'required',
            'image' => $imgValidation,
        ];

        $validated = $request->validate($rules);

        try {
            if (isset($request->id)) {
                $page = ClientPage::findOrfail($request->id);
                $image = $request->hasFile('image')
                    ? $this->updateImage($page->image, $request->file('image'), $clientPath)
                    : $page->image;

                $page->update($validated + [
                        'image' => $image,
                    ]);
                return redirect()->route('page.client')->with('success', 'Clients page content updated successfully.!!');
            } else {
                $image = $this->saveOriginalImage($request->file('image'), $clientPath);
                ClientPage::create($validated + [
                        'image' => $image,
                    ]);
                return redirect()->route('page.client')->with('success', 'Clients page content added successfully.!!');
            }
        } catch (Exception) {
            return back()->with('error', 'Something went wrong please try again later.!!')->withInput();
        }
    }

    public function faqIndex(): Factory|View|Application
    {
        $page = FaqPage::first() ?? new FaqPage();
        return view('backend.pages.faqs', compact('page'));
    }

    public function faqSave(Request $request): RedirectResponse
    {
        $faqPath = 'uploads/images/pages/faq';
        $imgValidation = isset($request->id)
            ? 'nullable|max:1024|mimes:jpg,jpeg,png|exclude'
            : 'required|max:1024|mimes:jpg,jpeg,png|exclude';
        $rules = [
            'main_title_en' => 'required',
            'main_title_jp' => 'required',
            'page_description_en' => 'required',
            'page_description_jp' => 'required',
            'button_text_en' => 'required',
            'button_text_jp' => 'required',
            'link' => 'required',
            'image' => $imgValidation,
        ];

        $validated = $request->validate($rules);

        try {
            if (isset($request->id)) {
                $page = FaqPage::findOrfail($request->id);
                $image = $request->hasFile('image')
                    ? $this->updateImage($page->image, $request->file('image'), $faqPath)
                    : $page->image;

                $page->update($validated + [
                        'image' => $image,
                    ]);
                return redirect()->route('page.faq')->with('success', 'Faqs page content updated successfully.!!');
            } else {
                $image = $this->saveOriginalImage($request->file('image'), $faqPath);
                FaqPage::create($validated + [
                        'image' => $image,
                    ]);
                return redirect()->route('page.faq')->with('success', 'Faqs page content added successfully.!!');
            }
        } catch (Exception) {
            return back()->with('error', 'Something went wrong please try again later.!!')->withInput();
        }
    }

    public function aboutNepalIndex(): Factory|View|Application
    {
        $page = AboutNepalPage::first() ?? new AboutNepalPage();
        return view('backend.pages.about_nepal', compact('page'));
    }

    public function aboutNepalSave(Request $request): RedirectResponse
    {
        $aboutNepalPath = 'uploads/images/pages/about_nepal';
        $imgValidation = isset($request->id)
            ? 'nullable|max:1024|mimes:jpg,jpeg,png|exclude'
            : 'required|max:1024|mimes:jpg,jpeg,png|exclude';
        $rules = [
            'main_title_en' => 'required',
            'main_title_jp' => 'required',
            'page_sub_title_en' => 'required',
            'page_sub_title_jp' => 'required',
            'page_title_en' => 'required',
            'page_title_jp' => 'required',
            'page_description_en' => 'required',
            'page_description_jp' => 'required',
            'nepal.*.title_en' => 'required|exclude',
            'nepal.*.title_jp' => 'required|exclude',
            'nepal.*.value_en' => 'required|exclude',
            'nepal.*.value_jp' => 'required|exclude',
            'image' => $imgValidation,
            'page_image' => $imgValidation,
            'images.*' => 'nullable|max:1024|mimes:jpg,jpeg,png|exclude',
        ];

        $validated = $request->validate($rules);

        try {
            if (isset($request->id)) {
                $page = AboutNepalPage::findOrfail($request->id);
                $image = $request->hasFile('image')
                    ? $this->updateImage($page->image, $request->file('image'), $aboutNepalPath)
                    : $page->image;
                $pageImage = $request->hasFile('page_image')
                    ? $this->updateImage($page->page_image, $request->file('page_image'), $aboutNepalPath)
                    : $page->page_image;

                $page->update($validated + [
                        'details' => $request->nepal,
                        'image' => $image,
                        'page_image' => $pageImage,
                    ]);

                if (isset($request->images)) {
                    foreach ($request->images as $index => $image) {
                        $filename = $this->saveOriginalImage($image, $aboutNepalPath, 'img-' . $index . '-' . time());
                        AboutNepalImage::create([
                            'page_id' => $page->id,
                            'image' => $filename,
                        ]);
                    }
                }
                return redirect()->route('page.about-nepal')->with('success', 'About Nepal page content updated successfully.!!');
            } else {
                $image = $this->saveOriginalImage($request->file('image'), $aboutNepalPath);
                $pageImage = $this->saveOriginalImage($request->file('page_image'), $aboutNepalPath);
                $page = AboutNepalPage::create($validated + [
                        'details' => $request->nepal,
                        'image' => $image,
                        'page_image' => $pageImage,
                    ]);
                if (isset($request->images)) {
                    foreach ($request->images as $index => $image) {
                        $filename = $this->saveOriginalImage($image, $aboutNepalPath, 'img-' . $index . '-' . time());
                        AboutNepalImage::create([
                            'page_id' => $page->id,
                            'image' => $filename,
                        ]);
                    }
                }
                return redirect()->route('page.about-nepal')->with('success', 'About Nepal page content added successfully.!!');
            }
        } catch (Exception $e) {
            return back()->with('error', 'Something went wrong please try again later.!!')->withInput();
        }
    }

    public function removeAboutNepalImage($imageId): JsonResponse
    {
        try {
            $image = AboutNepalImage::find($imageId);
            if (is_file('uploads/images/pages/about_nepal/' . $image->image)) {
                unlink('uploads/images/pages/about_nepal/' . $image->image);
            }
            $image->delete();
            return response()->json($image);
        } catch (Exception) {
            return response()->json('failed');
        }
    }

    public function aboutIndex(): Factory|View|Application
    {
        $page = AboutPage::first() ?? new AboutPage();
        return view('backend.pages.about', compact('page'));
    }

    public function aboutSave(Request $request): RedirectResponse
    {
        $aboutPath = 'uploads/images/pages/about';
        $imgValidation = isset($request->id)
            ? 'nullable|max:3000|mimes:jpg,jpeg,png|exclude'
            : 'required|max:3000|mimes:jpg,jpeg,png|exclude';
        $rules = [
            'main_title_en' => 'required',
            'main_title_jp' => 'required',
            'page_sub_title_en' => 'required',
            'page_sub_title_jp' => 'required',
            'page_title_en' => 'required',
            'page_title_jp' => 'required',
            'page_description_en' => 'required',
            'page_description_jp' => 'required',
            'team_sub_title_en' => 'required',
            'team_sub_title_jp' => 'required',
            'team_title_en' => 'required',
            'team_title_jp' => 'required',
            'team_description_en' => 'required',
            'team_description_jp' => 'required',
            'director_title_en' => 'required',
            'director_title_jp' => 'required',
            'director_tagline_en' => 'required',
            'director_tagline_jp' => 'required',
            'director_description_en' => 'required',
            'director_description_jp' => 'required',
            'director_name_en' => 'required',
            'director_name_jp' => 'required',
            'detail.*.title_en' => 'required|exclude',
            'detail.*.title_jp' => 'required|exclude',
            'detail.*.value_en' => 'required|exclude',
            'detail.*.value_jp' => 'required|exclude',
            'image' => $imgValidation,
            'page_image' => $imgValidation,
            'director_image' => $imgValidation,
            'images.*' => 'nullable|max:1024|mimes:jpg,jpeg,png|exclude',
        ];

        $validated = $request->validate($rules);

        try {
            if (isset($request->id)) {
                $page = AboutPage::findOrfail($request->id);
                $image = $request->hasFile('image')
                    ? $this->updateImage($page->image, $request->file('image'), $aboutPath)
                    : $page->image;
                $pageImage = $request->hasFile('page_image')
                    ? $this->updateImage($page->page_image, $request->file('page_image'), $aboutPath)
                    : $page->page_image;
                $directorImage = $request->hasFile('director_image')
                    ? $this->updateImage($page->director_image, $request->file('director_image'), $aboutPath)
                    : $page->director_image;

                $page->update($validated + [
                        'details' => $request->detail,
                        'image' => $image,
                        'page_image' => $pageImage,
                        'director_image' => $directorImage,
                    ]);

                if (isset($request->images)) {
                    foreach ($request->images as $index => $image) {
                        $filename = $this->saveOriginalImage($image, $aboutPath, 'img-' . $index . '-' . time());
                        AboutImage::create([
                            'page_id' => $page->id,
                            'image' => $filename,
                        ]);
                    }
                }
                return redirect()->route('page.about')->with('success', 'About page content updated successfully.!!');
            } else {
                $image = $this->saveOriginalImage($request->file('image'), $aboutPath);
                $pageImage = $this->saveOriginalImage($request->file('page_image'), $aboutPath);
                $directorImage = $this->saveOriginalImage($request->file('director_image'), $aboutPath);
                $page = AboutPage::create($validated + [
                        'details' => $request->detail,
                        'image' => $image,
                        'page_image' => $pageImage,
                        'director_image' => $directorImage,
                    ]);

                if (isset($request->images)) {
                    foreach ($request->images as $index => $image) {
                        $filename = $this->saveOriginalImage($image, $aboutPath, 'img-' . $index . '-' . time());
                        AboutImage::create([
                            'page_id' => $page->id,
                            'image' => $filename,
                        ]);
                    }
                }
                return redirect()->route('page.about')->with('success', 'About page content added successfully.!!');
            }
        } catch (Exception) {
            return back()->with('error', 'Something went wrong please try again later.!!')->withInput();
        }
    }

    public function removeAboutImage($imageId): JsonResponse
    {
        try {
            $image = AboutImage::find($imageId);
            if (is_file('uploads/images/pages/about/' . $image->image)) {
                unlink('uploads/images/pages/about/' . $image->image);
            }
            $image->delete();
            return response()->json($image);
        } catch (Exception) {
            return response()->json('failed');
        }
    }

    public function workInJapanIndex(): Factory|View|Application
    {
        $page = WorkInJapan::first() ?? new WorkInJapan();
        return view('backend.pages.work_in_japan', compact('page'));
    }

    public function workInJapanSave(Request $request): RedirectResponse
    {
        $aboutPath = 'uploads/images/pages/work-in-japan';
        $imgValidation = isset($request->id)
            ? 'nullable|max:3000|mimes:jpg,jpeg,png|exclude'
            : 'required|max:3000|mimes:jpg,jpeg,png|exclude';
        $rules = [
            'main_title_en' => 'required',
            'main_title_jp' => 'required',
            'page_description_en' => 'required',
            'page_description_jp' => 'required',
            'button_text_en' => 'required',
            'button_text_jp' => 'required',
            'link' => 'required',
            'question.*.question_en' => 'required|exclude',
            'question.*.question_jp' => 'required|exclude',
            'question.*.answer_en' => 'required|exclude',
            'question.*.answer_jp' => 'required|exclude',
            'image' => $imgValidation,
            'page_image' => $imgValidation,
        ];

        $validated = $request->validate($rules);

        try {
            if (isset($request->id)) {
                $page = WorkInJapan::findOrfail($request->id);
                $image = $request->hasFile('image')
                    ? $this->updateImage($page->image, $request->file('image'), $aboutPath)
                    : $page->image;
                $pageImage = $request->hasFile('page_image')
                    ? $this->updateImage($page->page_image, $request->file('page_image'), $aboutPath)
                    : $page->page_image;

                $page->update($validated + [
                        'questions' => $request->question,
                        'image' => $image,
                        'page_image' => $pageImage,
                    ]);
                return redirect()->route('page.work-in-japan')->with('success', 'Work in Japan page content updated successfully.!!');
            } else {
                $image = $this->saveOriginalImage($request->file('image'), $aboutPath);
                $pageImage = $this->saveOriginalImage($request->file('page_image'), $aboutPath);
                WorkInJapan::create($validated + [
                        'questions' => $request->question,
                        'image' => $image,
                        'page_image' => $pageImage,
                    ]);
                return redirect()->route('page.work-in-japan')->with('success', 'Work in Japan page content added successfully.!!');
            }
        } catch (Exception) {
            return back()->with('error', 'Something went wrong please try again later.!!')->withInput();
        }
    }

    public function studyInJapanIndex(): Factory|View|Application
    {
        $page = StudyInJapan::first() ?? new WorkInJapan();
        return view('backend.pages.study_in_japan', compact('page'));
    }

    public function studyInJapanSave(Request $request): RedirectResponse
    {
        $imgPath = 'uploads/images/pages/study-in-japan';
        $imgValidation = isset($request->id)
            ? 'nullable|max:3000|mimes:jpg,jpeg,png|exclude'
            : 'required|max:3000|mimes:jpg,jpeg,png|exclude';
        $rules = [
            'main_title_en' => 'required',
            'main_title_jp' => 'required',
            'secondary_sub_title_en' => 'required',
            'secondary_sub_title_jp' => 'required',
            'secondary_title_en' => 'required',
            'secondary_title_jp' => 'required',
            'page_description_en' => 'required',
            'page_description_jp' => 'required',
            'secondary_page_description_en' => 'required',
            'secondary_page_description_jp' => 'required',
            'button_text_en' => 'required',
            'button_text_jp' => 'required',
            'link' => 'required',
            'question.*.question_en' => 'required|exclude',
            'question.*.question_jp' => 'required|exclude',
            'question.*.answer_en' => 'required|exclude',
            'question.*.answer_jp' => 'required|exclude',
            'image' => $imgValidation,
            'page_image' => $imgValidation,
            'second_image' => $imgValidation,
            'images.*' => 'nullable|max:1024|mimes:jpg,jpeg,png|exclude',
        ];

        $validated = $request->validate($rules);

        try {
            if (isset($request->id)) {
                $page = StudyInJapan::findOrfail($request->id);
                $image = $request->hasFile('image')
                    ? $this->updateImage($page->image, $request->file('image'), $imgPath)
                    : $page->image;
                $secondImage = $request->hasFile('second_image')
                    ? $this->updateImage($page->second_image, $request->file('second_image'), $imgPath)
                    : $page->second_image;
                $pageImage = $request->hasFile('page_image')
                    ? $this->updateImage($page->page_image, $request->file('page_image'), $imgPath)
                    : $page->page_image;

                $page->update($validated + [
                        'questions' => $request->question,
                        'image' => $image,
                        'second_image' => $secondImage,
                        'page_image' => $pageImage,
                    ]);

                if (isset($request->images)) {
                    foreach ($request->images as $index => $image) {
                        $filename = $this->saveOriginalImage($image, $imgPath, 'img-' . $index . '-' . time());
                        StudyInJapanImage::create([
                            'page_id' => $page->id,
                            'image' => $filename,
                        ]);
                    }
                }
                return redirect()->route('page.study-in-japan')->with('success', 'Study in Japan page content updated successfully.!!');
            } else {
                $image = $this->saveOriginalImage($request->file('image'), $imgPath);
                $pageImage = $this->saveOriginalImage($request->file('page_image'), $imgPath);
                $secondImage = $this->saveOriginalImage($request->file('second_image'), $imgPath);
                $page = StudyInJapan::create($validated + [
                        'questions' => $request->question,
                        'image' => $image,
                        'second_image' => $secondImage,
                        'page_image' => $pageImage,
                    ]);

                if (isset($request->images)) {
                    foreach ($request->images as $index => $image) {
                        $filename = $this->saveOriginalImage($image, $imgPath, 'img-' . $index . '-' . time());
                        StudyInJapanImage::create([
                            'page_id' => $page->id,
                            'image' => $filename,
                        ]);
                    }
                }
                return redirect()->route('page.study-in-japan')->with('success', 'Study in Japan page content added successfully.!!');
            }
        } catch (Exception) {
            return back()->with('error', 'Something went wrong please try again later.!!')->withInput();
        }
    }

    public function removeStudyInJapanImage($imageId): JsonResponse
    {
        try {
            $image = StudyInJapanImage::find($imageId);
            if (is_file('uploads/images/pages/study-in-japan/' . $image->image)) {
                unlink('uploads/images/pages/study-in-japan/' . $image->image);
            }
            $image->delete();
            return response()->json($image);
        } catch (Exception) {
            return response()->json('failed');
        }
    }

    public function serviceForStudentIndex(): Factory|View|Application
    {
        $page = ServiceForStudent::first() ?? new ServiceForStudent();
        return view('backend.pages.service_for_student', compact('page'));
    }

    public function serviceForStudentSave(Request $request): RedirectResponse
    {
        $imgValidation = isset($request->id)
            ? 'nullable|max:1024|mimes:jpg,jpeg,png|exclude'
            : 'required|max:1024|mimes:jpg,jpeg,png|exclude';
        $rules = [
            'main_title_en' => 'required',
            'main_title_jp' => 'required',
            'sub_title_en' => 'required',
            'sub_title_jp' => 'required',
            'title_en' => 'required',
            'title_jp' => 'required',
            'description_en' => 'required',
            'description_jp' => 'required',
            'services_title_en' => 'required',
            'services_title_jp' => 'required',
            'services.*.title_en' => 'required|exclude',
            'services.*.description_en' => 'required|exclude',
            'services.*.title_jp' => 'required|exclude',
            'services.*.description_jp' => 'required|exclude',
            'button_text_en' => 'required',
            'button_text_jp' => 'required',
            'link' => 'required',
            'image' => $imgValidation,
            'page_image' => $imgValidation,
            'services.*.image' => $imgValidation
        ];

        $validated = $request->validate($rules);
        $imgPath = 'uploads/images/pages/service/student';
        try {
            if (isset($request->id)) {
                $page = ServiceForStudent::findOrFail($request->id);

                $image = $request->hasFile('image')
                    ? $this->updateImage($page->image, $request->file('image'), $imgPath)
                    : $page->image;
                $pageImage = $request->hasFile('page_image')
                    ? $this->updateImage($page->page_image, $request->file('page_image'), $imgPath)
                    : $page->page_image;

                $page->update($validated + [
                        'image' => $image,
                        'page_image' => $pageImage,
                        'services' => $this->updatePropertyValues($request->services, $page->services, $imgPath, 'services-image-'),
                    ]);
                return redirect()->route('page.student-services')->with('success', 'Service for students page content updated successfully.!!');
            } else {
                $image = $this->saveOriginalImage($request->file('image'), $imgPath);
                $pageImage = $this->saveOriginalImage($request->file('page_image'), $imgPath);
                ServiceForStudent::create($validated + [
                        'image' => $image,
                        'page_image' => $pageImage,
                        'services' => $this->setPropertyValues($request->services, $imgPath, 'services-image-'),
                    ]);

                return redirect()->route('page.student-services')->with('success', 'Service for students page content added successfully.!!');
            }
        } catch (Exception $e) {
            $errorMessage = 'Service for student Save: ' . $e->getMessage();
            Log::error('[' . now() . '] ' . $errorMessage);
            return back()->with('error', 'Something went wrong please try again later.!!');
        }
    }


    public function serviceForClientIndex(): Factory|View|Application
    {
        $page = ServiceForClient::first() ?? new ServiceForClient();
        return view('backend.pages.service_for_client', compact('page'));
    }

    public function serviceForClientSave(Request $request): RedirectResponse
    {
        $imgValidation = isset($request->id)
            ? 'nullable|max:1024|mimes:jpg,jpeg,png|exclude'
            : 'required|max:1024|mimes:jpg,jpeg,png|exclude';
        $rules = [
            'sub_title_en' => 'required',
            'sub_title_jp' => 'required',
            'title_en' => 'required',
            'title_jp' => 'required',
            'description_en' => 'required',
            'description_jp' => 'required',
            'services_title_en' => 'required',
            'services_title_jp' => 'required',
            'services.*.title_en' => 'required|exclude',
            'services.*.description_en' => 'required|exclude',
            'services.*.title_jp' => 'required|exclude',
            'services.*.description_jp' => 'required|exclude',
            'button_text_en' => 'required',
            'button_text_jp' => 'required',
            'link' => 'required',
            'page_image' => $imgValidation,
            'services.*.image' => $imgValidation
        ];

        $validated = $request->validate($rules);
        $imgPath = 'uploads/images/pages/service/client';
        try {
            if (isset($request->id)) {
                $page = ServiceForClient::findOrFail($request->id);

                $pageImage = $request->hasFile('page_image')
                    ? $this->updateImage($page->page_image, $request->file('page_image'), $imgPath)
                    : $page->page_image;

                $page->update($validated + [
                        'page_image' => $pageImage,
                        'services' => $this->updatePropertyValues($request->services, $page->services, $imgPath, 'services-image-'),
                    ]);
                return redirect()->route('page.client-services')->with('success', 'Service for clients page content updated successfully.!!');
            } else {
                $pageImage = $this->saveOriginalImage($request->file('page_image'), $imgPath);
                ServiceForClient::create($validated + [
                        'page_image' => $pageImage,
                        'services' => $this->setPropertyValues($request->services, $imgPath, 'services-image-'),
                    ]);

                return redirect()->route('page.client-services')->with('success', 'Service for clients page content added successfully.!!');
            }
        } catch (Exception $e) {
            $errorMessage = 'Service for client Save: ' . $e->getMessage();
            Log::error('[' . now() . '] ' . $errorMessage);
            return back()->with('error', 'Something went wrong please try again later.!!');
        }
    }

    public function updateImage($oldIMage, $newImage, $path): array|string
    {
        $this->deleteImage($path . '/' . $oldIMage);
        return $this->saveOriginalImage($newImage, $path);
    }

    public function setPropertyValues($properties, $imgPath, $filePrefix): array
    {
        foreach ($properties as $index => $property) {
            $imageName = $this->saveOriginalImage($property['image'], $imgPath, $filePrefix . $index . '-' . time());
            $properties[$index]['image'] = $imageName;
        }
        return $properties;
    }

    public function updatePropertyValues($properties, $oldProperties, $imgPath, $filename): array
    {
        foreach ($properties as $index => $property) {
            $imageName = $oldProperties[$index]['image'] ?? '';
            if (isset($property['image'])) {
                if (isset($oldProperties[$index]['image'])) $this->deleteImage($imgPath . '/' . $oldProperties[$index]['image']);
                $imageName = $this->saveOriginalImage($property['image'], $imgPath, $filename . $index . '-' . time());
            }
            $properties[$index]['image'] = $imageName;
        }
        return $properties;
    }
}
