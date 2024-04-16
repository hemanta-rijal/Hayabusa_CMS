<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\ContactBanner
 *
 * @property int $id
 * @property string $title_en
 * @property string $title_jp
 * @property string $button_text_en
 * @property string $button_text_jp
 * @property string $sub_title_en
 * @property string $sub_title_jp
 * @property string $link
 * @property string $background_image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read string|null $background_image_link
 * @method static Builder|ContactBanner newModelQuery()
 * @method static Builder|ContactBanner newQuery()
 * @method static Builder|ContactBanner query()
 * @method static Builder|ContactBanner whereBackgroundImage($value)
 * @method static Builder|ContactBanner whereButtonTextEn($value)
 * @method static Builder|ContactBanner whereButtonTextJp($value)
 * @method static Builder|ContactBanner whereCreatedAt($value)
 * @method static Builder|ContactBanner whereId($value)
 * @method static Builder|ContactBanner whereLink($value)
 * @method static Builder|ContactBanner whereSubTitleEn($value)
 * @method static Builder|ContactBanner whereSubTitleJp($value)
 * @method static Builder|ContactBanner whereTitleEn($value)
 * @method static Builder|ContactBanner whereTitleJp($value)
 * @method static Builder|ContactBanner whereUpdatedAt($value)
 * @mixin Eloquent
 */
class ContactBanner extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['background_image_link'];

    public function getBackgroundImageLinkAttribute(): ?string
    {
        return isset($this->background_image) ? asset('uploads/images/banner/contact/' . $this->background_image) : null;
    }
}
