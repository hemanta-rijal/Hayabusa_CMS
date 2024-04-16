<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\BlogImage;
use App\Traits\ImageTrait;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Throwable;

class BlogController extends Controller
{
    use ImageTrait;

    public string $image_path = 'uploads/images/blog';

    /**
     * Display a listing of the resource.
     *
     * @return Factory|View|Application
     */
    public function index(): Factory|View|Application
    {
        $blogs = Blog::orderByDesc('created_at')->get();
        return view('backend.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $blog = new Blog();
        return view('backend.blogs.add', compact('blog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BlogRequest $request
     * @return RedirectResponse
     * @throws Throwable
     */
    public function store(BlogRequest $request): RedirectResponse
    {
        try {
            DB::beginTransaction();

            $thumbnail = $this->saveOriginalImage($request->thumbnail);
            $blog = Blog::create($request->validated() + [
                    'thumbnail' => $thumbnail
                ]);
            if (isset($request->images)) {
                foreach ($request->images as $index => $image) {
                    $filename = $this->saveOriginalImage($image, 'uploads/images/blog/gallery', $blog->slug . '-img-' . $index . '-' . time());
                    BlogImage::create([
                        'blog_id' => $blog->id,
                        'image' => $filename,
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('blogs.index')->with('success', 'Blog Added Successfully!!!');
        } catch (Exception) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to add blog, Try again.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Blog $blog
     * @return Application|Factory|View
     */
    public function edit(Blog $blog): View|Factory|Application
    {
        return view('backend.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BlogRequest $request
     * @param Blog $blog
     * @return RedirectResponse
     * @throws Throwable
     */
    public function update(BlogRequest $request, Blog $blog): RedirectResponse
    {
        try {
            DB::beginTransaction();

            $thumbnail = $blog->thumbnail;
            if (isset($request->thumbnail)) {
                $this->deleteImage($this->image_path . '/' . $blog->thumbnail);
                $thumbnail = $this->saveOriginalImage($request->thumbnail);
            }
            if (isset($request->images)) {
                foreach ($request->images as $index => $image) {
                    $filename = $this->saveOriginalImage($image, 'uploads/images/blog/gallery', $blog->slug . '-img-' . $index . '-' . time());
                    BlogImage::create([
                        'blog_id' => $blog->id,
                        'image' => $filename,
                    ]);
                }
            }

            $blog->update($request->validated() + [
                    'thumbnail' => $thumbnail
                ]);
            DB::commit();
            return redirect()->route('blogs.index')->with('success', 'Blog Updated Successfully!!!');
        } catch (Exception) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to update blog, Try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Blog $blog
     * @return RedirectResponse
     */
    public function destroy(Blog $blog): RedirectResponse
    {
        $this->deleteImage($this->image_path . '/' . $blog->thumbnail);
        foreach ($blog->images as $image) {
            $this->deleteImage('uploads/images/blog/gallery/' . $image->image);
            $image->delete();
        }
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog Deleted Successfully!!!');
    }

    public function removeImage(Blog $blog, $imageId): JsonResponse
    {
        try {
            $image = BlogImage::find($imageId);
            if (is_file('uploads/images/blog/gallery/' . $image->image)) {
                unlink('uploads/images/blog/gallery/' . $image->image);
            }
            $image->delete();
            return response()->json($image);
        } catch (Exception) {
            return response()->json('failed');
        }
    }
}
