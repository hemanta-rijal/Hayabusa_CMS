<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Blog
 *
 * @property int $id
 * @property string $slug
 * @property string $title_en
 * @property string $title_jp
 * @property string $description_en
 * @property string $description_jp
 * @property string $thumbnail
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read string $thumbnail_link
 * @property-read Collection<int, \App\Models\BlogImage> $images
 * @property-read int|null $images_count
 * @method static Builder|Blog newModelQuery()
 * @method static Builder|Blog newQuery()
 * @method static Builder|Blog query()
 * @method static Builder|Blog whereCreatedAt($value)
 * @method static Builder|Blog whereDescriptionEn($value)
 * @method static Builder|Blog whereDescriptionJp($value)
 * @method static Builder|Blog whereId($value)
 * @method static Builder|Blog whereSlug($value)
 * @method static Builder|Blog whereThumbnail($value)
 * @method static Builder|Blog whereTitleEn($value)
 * @method static Builder|Blog whereTitleJp($value)
 * @method static Builder|Blog whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['thumbnail_link'];

    public function getThumbnailLinkAttribute(): string
    {
        return asset('uploads/images/blog/' . $this->thumbnail);
    }

    public function images(): HasMany
    {
        return $this->hasMany(BlogImage::class, 'blog_id', 'id');
    }
}
