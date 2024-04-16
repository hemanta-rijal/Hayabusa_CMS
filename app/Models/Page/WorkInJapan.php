<?php

namespace App\Models\Page;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Page\WorkInJapan
 *
 * @property int $id
 * @property string|null $main_title_en
 * @property string|null $main_title_jp
 * @property string|null $page_description_en
 * @property string|null $page_description_jp
 * @property string|null $button_text_en
 * @property string|null $button_text_jp
 * @property string|null $link
 * @property string|null $image
 * @property string|null $page_image
 * @property array|null $questions
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read string|null $image_link
 * @property-read string|null $page_image_link
 * @method static Builder|WorkInJapan newModelQuery()
 * @method static Builder|WorkInJapan newQuery()
 * @method static Builder|WorkInJapan query()
 * @method static Builder|WorkInJapan whereButtonTextEn($value)
 * @method static Builder|WorkInJapan whereButtonTextJp($value)
 * @method static Builder|WorkInJapan whereCreatedAt($value)
 * @method static Builder|WorkInJapan whereId($value)
 * @method static Builder|WorkInJapan whereImage($value)
 * @method static Builder|WorkInJapan whereLink($value)
 * @method static Builder|WorkInJapan whereMainTitleEn($value)
 * @method static Builder|WorkInJapan whereMainTitleJp($value)
 * @method static Builder|WorkInJapan wherePageDescriptionEn($value)
 * @method static Builder|WorkInJapan wherePageDescriptionJp($value)
 * @method static Builder|WorkInJapan wherePageImage($value)
 * @method static Builder|WorkInJapan whereQuestions($value)
 * @method static Builder|WorkInJapan whereUpdatedAt($value)
 * @mixin Eloquent
 */
class WorkInJapan extends Model
{
    use HasFactory;

    protected $table = "work_in_japan";

    protected $guarded = [];

    protected $casts = [
        'questions' => 'array'
    ];

    protected $appends = ['image_link', 'page_image_link'];

    public function getImageLinkAttribute(): ?string
    {
        return isset($this->image) ? asset('uploads/images/pages/work-in-japan/' . $this->image) : null;
    }

    public function getPageImageLinkAttribute(): ?string
    {
        return isset($this->page_image) ? asset('uploads/images/pages/work-in-japan/' . $this->page_image) : null;
    }
}
