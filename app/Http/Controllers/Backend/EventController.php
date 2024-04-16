<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use App\Models\EventImage;
use App\Models\EventParticipant;
use App\Traits\ImageTrait;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Throwable;

class EventController extends Controller
{
    use ImageTrait;

    public string $image_path = 'uploads/images/event';

    /**
     * Display a listing of the resource.
     *
     * @return Factory|View|Application
     */
    public function index(): Factory|View|Application
    {
        $events = Event::withCount('participants')->orderByDesc('created_at')->get();
        return view('backend.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $event = new Event();
        return view('backend.events.add', compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EventRequest $request
     * @return RedirectResponse
     * @throws Throwable
     */
    public function store(EventRequest $request): RedirectResponse
    {
        try {
            DB::beginTransaction();

            $thumbnail = $this->saveOriginalImage($request->thumbnail);
            $event = Event::create($request->validated() + [
                    'thumbnail' => $thumbnail
                ]);
            if (isset($request->images)) {
                foreach ($request->images as $index => $image) {
                    $filename = $this->saveOriginalImage($image, 'uploads/images/event/gallery', $event->slug . '-img-' . $index . '-' . time());
                    EventImage::create([
                        'event_id' => $event->id,
                        'image' => $filename,
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('events.index')->with('success', 'Event Added Successfully!!!');
        } catch (Exception) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to add event, Try again.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Event $event
     * @return Application|Factory|View
     */
    public function edit(Event $event): View|Factory|Application
    {
        return view('backend.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EventRequest $request
     * @param Event $event
     * @return RedirectResponse
     * @throws Throwable
     */
    public function update(EventRequest $request, Event $event): RedirectResponse
    {
        try {
            DB::beginTransaction();

            $thumbnail = $event->thumbnail;
            if (isset($request->thumbnail)) {
                $this->deleteImage($this->image_path . '/' . $event->thumbnail);
                $thumbnail = $this->saveOriginalImage($request->thumbnail);
            }
            if (isset($request->images)) {
                foreach ($request->images as $index => $image) {
                    $filename = $this->saveOriginalImage($image, 'uploads/images/event/gallery', $event->slug . '-img-' . $index . '-' . time());
                    EventImage::create([
                        'event_id' => $event->id,
                        'image' => $filename,
                    ]);
                }
            }

            $event->update($request->validated() + [
                    'thumbnail' => $thumbnail
                ]);
            DB::commit();
            return redirect()->route('events.index')->with('success', 'Event Updated Successfully!!!');
        } catch (Exception) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to update event, Try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Event $event
     * @return RedirectResponse
     */
    public function destroy(Event $event): RedirectResponse
    {
        $this->deleteImage($this->image_path . '/' . $event->thumbnail);
        foreach ($event->images as $image) {
            $this->deleteImage('uploads/images/event/gallery/' . $image->image);
            $image->delete();
        }
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event Deleted Successfully!!!');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Event $event
     * @return Factory|View|Application
     */
    public function participants(Event $event): Factory|View|Application
    {
        $participants = $event->participants;
        return view('backend.events.participants', compact('participants', 'event'));
    }

    public function removeImage(Event $event, $imageId): JsonResponse
    {
        try {
            $image = EventImage::find($imageId);
            if (is_file('uploads/images/event/gallery/' . $image->image)) {
                unlink('uploads/images/event/gallery/' . $image->image);
            }
            $image->delete();
            return response()->json($image);
        } catch (Exception) {
            return response()->json('failed');
        }
    }
}
