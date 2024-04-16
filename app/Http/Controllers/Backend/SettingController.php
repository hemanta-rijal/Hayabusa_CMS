<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use App\Traits\ImageTrait;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use ImageTrait;

    public string $image_path = 'uploads/images/settings';

    public function index()
    {
        $settings = Setting::latest()->first() ?? new Setting();
        return view('backend.settings.index', compact('settings'));
    }

    public function save(SettingRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        try {
            if (isset($request->id)) {
                $settings = Setting::whereid($request->id)->firstOrFail();
                if (isset($request->logo)) {
                    $this->deleteImage($this->image_path . '/' . $settings->logo);
                    $validated['logo'] = $this->saveOriginalImage($request->logo);
                }
                if (isset($request->logo_secondary)) {
                    $this->deleteImage($this->image_path . '/' . $settings->logo_secondary);
                    $validated['logo_secondary'] = $this->saveOriginalImage($request->logo_secondary);
                }
                $settings->update($validated);
                return back()->with('success', 'Settings updated successfully.!!');
            } else {
                $validated['logo'] = $this->saveOriginalImage($request->logo);
                $validated['logo_secondary'] = $this->saveOriginalImage($request->logo_secondary);

                Setting::create($validated);
                return back()->with('success', 'Settings created successfully.!!');
            }
        } catch (Exception) {
            return back()->with('error', 'Something went wrong please try again later.!!')->withInput();
        }
    }
}
