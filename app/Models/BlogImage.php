<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\BlogImage
 *
 * @property int $id
 * @property int $blog_id
 * @property string $image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \App\Models\Blog $blog
 * @property-read mixed $image_link
 * @method static Builder|BlogImage newModelQuery()
 * @method static Builder|BlogImage newQuery()
 * @method static Builder|BlogImage query()
 * @method static Builder|BlogImage whereBlogId($value)
 * @method static Builder|BlogImage whereCreatedAt($value)
 * @method static Builder|BlogImage whereId($value)
 * @method static Builder|BlogImage whereImage($value)
 * @method static Builder|BlogImage whereUpdatedAt($value)
 * @mixin Eloquent
 */
class BlogImage extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['image_link'];

    public function getImageLinkAttribute()
    {
        return asset('uploads/images/blog/gallery/' . $this->image);
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id', 'id');
    }
}
