<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactBannerRequest;
use App\Models\ContactBanner;
use App\Models\Setting;
use App\Traits\ImageTrait;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ContactBannerController extends Controller
{
    use ImageTrait;

    public string $image_path = 'uploads/images/banner/contact';

    public function index(): Factory|View|Application
    {
        $banner = ContactBanner::latest()->first() ?? new Setting();
        return view('backend.banners.contact', compact('banner'));
    }

    public function save(ContactBannerRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        try {
            if (isset($request->id)) {
                $banner = ContactBanner::whereid($request->id)->firstOrFail();
                if (isset($request->background_image)) {
                    $this->deleteImage($this->image_path . '/' . $banner->background_image);
                    $validated['background_image'] = $this->saveOriginalImage($request->background_image);
                }
                $banner->update($validated);
                return back()->with('success', 'Contact Banner updated successfully.!!');
            } else {
                $validated['background_image'] = $this->saveOriginalImage($request->background_image);

                ContactBanner::create($validated);
                return back()->with('success', 'Contact Banner created successfully.!!');
            }
        } catch (Exception) {
            return back()->with('error', 'Something went wrong please try again later.!!')->withInput();
        }
    }
}
