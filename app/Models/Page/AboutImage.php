<?php

namespace App\Models\Page;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Page\AboutImage
 *
 * @property int $id
 * @property int $page_id
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Page\AboutPage $event
 * @property-read string $image_link
 * @method static Builder|AboutImage newModelQuery()
 * @method static Builder|AboutImage newQuery()
 * @method static Builder|AboutImage query()
 * @method static Builder|AboutImage whereCreatedAt($value)
 * @method static Builder|AboutImage whereId($value)
 * @method static Builder|AboutImage whereImage($value)
 * @method static Builder|AboutImage wherePageId($value)
 * @method static Builder|AboutImage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AboutImage extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = "about_image";

    protected $appends = ['image_link'];

    public function getImageLinkAttribute(): string
    {
        return asset('uploads/images/pages/about/' . $this->image);
    }

    public function event(): BelongsTo
    {
        return $this->belongsTo(AboutPage::class, 'page_id', 'id');
    }
}
