<?php

namespace App\Models\Page;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\Page\StudyInJapanImage
 *
 * @property int $id
 * @property int $page_id
 * @property string $image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read string $image_link
 * @property-read \App\Models\Page\StudyInJapan $japanPage
 * @method static Builder|StudyInJapanImage newModelQuery()
 * @method static Builder|StudyInJapanImage newQuery()
 * @method static Builder|StudyInJapanImage query()
 * @method static Builder|StudyInJapanImage whereCreatedAt($value)
 * @method static Builder|StudyInJapanImage whereId($value)
 * @method static Builder|StudyInJapanImage whereImage($value)
 * @method static Builder|StudyInJapanImage wherePageId($value)
 * @method static Builder|StudyInJapanImage whereUpdatedAt($value)
 * @mixin Eloquent
 */
class StudyInJapanImage extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = "study_in_japan_image";

    protected $appends = ['image_link'];

    public function getImageLinkAttribute(): string
    {
        return asset('uploads/images/pages/study-in-japan/' . $this->image);
    }

    public function japanPage(): BelongsTo
    {
        return $this->belongsTo(StudyInJapan::class, 'page_id', 'id');
    }
}
