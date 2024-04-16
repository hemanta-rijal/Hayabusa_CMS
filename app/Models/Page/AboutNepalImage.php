<?php

namespace App\Models\Page;

use App\Models\Event;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\Page\AboutNepalImage
 *
 * @property int $id
 * @property int $page_id
 * @property string $image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \App\Models\Page\AboutNepalPage $event
 * @property-read string $image_link
 * @method static Builder|AboutNepalImage newModelQuery()
 * @method static Builder|AboutNepalImage newQuery()
 * @method static Builder|AboutNepalImage query()
 * @method static Builder|AboutNepalImage whereCreatedAt($value)
 * @method static Builder|AboutNepalImage whereId($value)
 * @method static Builder|AboutNepalImage whereImage($value)
 * @method static Builder|AboutNepalImage wherePageId($value)
 * @method static Builder|AboutNepalImage whereUpdatedAt($value)
 * @mixin Eloquent
 */
class AboutNepalImage extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = "about_nepal_image";

    protected $appends = ['image_link'];

    public function getImageLinkAttribute(): string
    {
        return asset('uploads/images/pages/about_nepal/' . $this->image);
    }

    public function event(): BelongsTo
    {
        return $this->belongsTo(AboutNepalPage::class, 'page_id', 'id');
    }
}
