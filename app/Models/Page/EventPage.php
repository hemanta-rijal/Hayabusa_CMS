<?php

namespace App\Models\Page;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Page\EventPage
 *
 * @property int $id
 * @property string|null $main_title_en
 * @property string|null $main_title_jp
 * @property string|null $sup_title_en
 * @property string|null $sup_title_jp
 * @property string|null $title_en
 * @property string|null $title_jp
 * @property string|null $sub_title_en
 * @property string|null $form_sub_title_jp
 * @property string|null $form_title_en
 * @property string|null $form_title_jp
 * @property string|null $form_sub_title_en
 * @property string|null $sub_title_jp
 * @property string|null $button_text_en
 * @property string|null $button_text_jp
 * @property string|null $link
 * @property string|null $image
 * @property string|null $detail_image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read string|null $detail_image_link
 * @property-read string|null $image_link
 * @method static Builder|EventPage newModelQuery()
 * @method static Builder|EventPage newQuery()
 * @method static Builder|EventPage query()
 * @method static Builder|EventPage whereButtonTextEn($value)
 * @method static Builder|EventPage whereButtonTextJp($value)
 * @method static Builder|EventPage whereCreatedAt($value)
 * @method static Builder|EventPage whereDetailImage($value)
 * @method static Builder|EventPage whereFormSubTitleEn($value)
 * @method static Builder|EventPage whereFormSubTitleJp($value)
 * @method static Builder|EventPage whereFormTitleEn($value)
 * @method static Builder|EventPage whereFormTitleJp($value)
 * @method static Builder|EventPage whereId($value)
 * @method static Builder|EventPage whereImage($value)
 * @method static Builder|EventPage whereLink($value)
 * @method static Builder|EventPage whereMainTitleEn($value)
 * @method static Builder|EventPage whereMainTitleJp($value)
 * @method static Builder|EventPage whereSubTitleEn($value)
 * @method static Builder|EventPage whereSubTitleJp($value)
 * @method static Builder|EventPage whereSupTitleEn($value)
 * @method static Builder|EventPage whereSupTitleJp($value)
 * @method static Builder|EventPage whereTitleEn($value)
 * @method static Builder|EventPage whereTitleJp($value)
 * @method static Builder|EventPage whereUpdatedAt($value)
 * @mixin Eloquent
 */
class EventPage extends Model
{
    use HasFactory;

    protected $table = "event_page";
    protected $guarded = [];

    protected $appends = ['image_link', 'detail_image_link'];

    public function getImageLinkAttribute(): ?string
    {
        return isset($this->image) ? asset('uploads/images/pages/event/' . $this->image) : null;
    }

    public function getDetailImageLinkAttribute(): ?string
    {
        return isset($this->detail_image) ? asset('uploads/images/pages/event/' . $this->detail_image) : null;
    }
}
