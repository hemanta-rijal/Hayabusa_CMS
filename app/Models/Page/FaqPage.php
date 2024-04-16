<?php

namespace App\Models\Page;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Page\FaqPage
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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string|null $image_link
 * @method static \Illuminate\Database\Eloquent\Builder|FaqPage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FaqPage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FaqPage query()
 * @method static \Illuminate\Database\Eloquent\Builder|FaqPage whereButtonTextEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqPage whereButtonTextJp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqPage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqPage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqPage whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqPage whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqPage whereMainTitleEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqPage whereMainTitleJp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqPage wherePageDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqPage wherePageDescriptionJp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqPage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FaqPage extends Model
{
    use HasFactory;

    protected $table = "faq_page";

    protected $guarded = [];

    protected $appends = ['image_link'];

    public function getImageLinkAttribute(): ?string
    {
        return isset($this->image) ? asset('uploads/images/pages/faq/' . $this->image) : null;
    }
}
