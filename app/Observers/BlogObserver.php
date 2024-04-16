<?php

namespace App\Observers;

use App\Models\Blog;
use Illuminate\Support\Str;

class BlogObserver
{
    /**
     * Handle the Blog "created" event.
     *
     * @param Blog $blog
     * @return void
     */
    public function creating(Blog $blog): void
    {
        $blog->slug = Str::slug($blog->title_en);
        // Check if the generated slug already exists
        $count = Blog::where('slug', $blog->slug)->count();
        if ($count > 0) {
            $blog->slug .= '-' . $count;
        }
    }

    /**
     * Handle the Blog "update" event.
     *
     * @param Blog $blog
     * @return void
     */
    public function updating(Blog $blog): void
    {
        if ($blog->isDirty('title_en')) {
            $blog->slug = Str::slug($blog->title_en);

            // Check if the generated slug already exists
            $count = Blog::where('slug', $blog->slug)->count();
            if ($count > 0) {
                $blog->slug .= '-' . $count;
            }
        }
    }
}
