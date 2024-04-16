<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\HelpBannerRequest;
use App\Models\HelpBanner;
use App\Models\Setting;
use App\Traits\ImageTrait;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class HelpBannerController extends Controller
{
    use ImageTrait;

    public string $image_path = 'uploads/images/banner/help';

    public function index(): Factory|View|Application
    {
        $banner = HelpBanner::latest()->first() ?? new Setting();
        return view('backend.banners.help', compact('banner'));
    }

    public function save(HelpBannerRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        try {
            if (isset($request->id)) {
                $banner = HelpBanner::whereid($request->id)->firstOrFail();
                if (isset($request->background_image)) {
                    $this->deleteImage($this->image_path . '/' . $banner->background_image);
                    $validated['background_image'] = $this->saveOriginalImage($request->background_image);
                }
                if (isset($request->image)) {
                    $this->deleteImage($this->image_path . '/' . $banner->image);
                    $validated['image'] = $this->saveOriginalImage($request->image);
                }
                $banner->update($validated);
                return back()->with('success', 'Help Banner updated successfully.!!');
            } else {
                $validated['background_image'] = $this->saveOriginalImage($request->background_image);
                $validated['image'] = $this->saveOriginalImage($request->image);

                HelpBanner::create($validated);
                return back()->with('success', 'Help Banner created successfully.!!');
            }
        } catch (Exception) {
            return back()->with('error', 'Something went wrong please try again later.!!')->withInput();
        }
    }
}
