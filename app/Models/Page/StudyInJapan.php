<?php

namespace App\Models\Page;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Page\StudyInJapan
 *
 * @property int $id
 * @property string|null $main_title_en
 * @property string|null $main_title_jp
 * @property string|null $secondary_sub_title_en
 * @property string|null $secondary_sub_title_jp
 * @property string|null $secondary_title_en
 * @property string|null $secondary_title_jp
 * @property string|null $page_description_en
 * @property string|null $page_description_jp
 * @property string|null $secondary_page_description_en
 * @property string|null $secondary_page_description_jp
 * @property string|null $button_text_en
 * @property string|null $button_text_jp
 * @property string|null $link
 * @property string|null $image
 * @property string|null $second_image
 * @property string|null $page_image
 * @property array|null $questions
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read string|null $image_link
 * @property-read string|null $page_image_link
 * @property-read string|null $second_image_link
 * @property-read Collection<int, \App\Models\Page\StudyInJapanImage> $images
 * @property-read int|null $images_count
 * @method static Builder|StudyInJapan newModelQuery()
 * @method static Builder|StudyInJapan newQuery()
 * @method static Builder|StudyInJapan query()
 * @method static Builder|StudyInJapan whereButtonTextEn($value)
 * @method static Builder|StudyInJapan whereButtonTextJp($value)
 * @method static Builder|StudyInJapan whereCreatedAt($value)
 * @method static Builder|StudyInJapan whereId($value)
 * @method static Builder|StudyInJapan whereImage($value)
 * @method static Builder|StudyInJapan whereLink($value)
 * @method static Builder|StudyInJapan whereMainTitleEn($value)
 * @method static Builder|StudyInJapan whereMainTitleJp($value)
 * @method static Builder|StudyInJapan wherePageDescriptionEn($value)
 * @method static Builder|StudyInJapan wherePageDescriptionJp($value)
 * @method static Builder|StudyInJapan wherePageImage($value)
 * @method static Builder|StudyInJapan whereQuestions($value)
 * @method static Builder|StudyInJapan whereSecondImage($value)
 * @method static Builder|StudyInJapan whereSecondaryPageDescriptionEn($value)
 * @method static Builder|StudyInJapan whereSecondaryPageDescriptionJp($value)
 * @method static Builder|StudyInJapan whereSecondarySubTitleEn($value)
 * @method static Builder|StudyInJapan whereSecondarySubTitleJp($value)
 * @method static Builder|StudyInJapan whereSecondaryTitleEn($value)
 * @method static Builder|StudyInJapan whereSecondaryTitleJp($value)
 * @method static Builder|StudyInJapan whereUpdatedAt($value)
 * @mixin Eloquent
 */
class StudyInJapan extends Model
{
    use HasFactory;

    protected $table = "study_in_japan";

    protected $guarded = [];

    protected $casts = [
        'questions' => 'array'
    ];

    protected $appends = ['image_link', 'second_image_link', 'page_image_link'];

    public function getImageLinkAttribute(): ?string
    {
        return isset($this->image) ? asset('uploads/images/pages/study-in-japan/' . $this->image) : null;
    }

    public function getPageImageLinkAttribute(): ?string
    {
        return isset($this->page_image) ? asset('uploads/images/pages/study-in-japan/' . $this->page_image) : null;
    }

    public function getSecondImageLinkAttribute(): ?string
    {
        return isset($this->second_image) ? asset('uploads/images/pages/study-in-japan/' . $this->second_image) : null;
    }

    public function images(): HasMany
    {
        return $this->hasMany(StudyInJapanImage::class, 'page_id', 'id');
    }
}
