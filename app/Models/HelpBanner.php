<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\HelpBanner
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
 * @property string $image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read string|null $background_image_link
 * @property-read string|null $image_link
 * @method static Builder|HelpBanner newModelQuery()
 * @method static Builder|HelpBanner newQuery()
 * @method static Builder|HelpBanner query()
 * @method static Builder|HelpBanner whereBackgroundImage($value)
 * @method static Builder|HelpBanner whereButtonTextEn($value)
 * @method static Builder|HelpBanner whereButtonTextJp($value)
 * @method static Builder|HelpBanner whereCreatedAt($value)
 * @method static Builder|HelpBanner whereId($value)
 * @method static Builder|HelpBanner whereImage($value)
 * @method static Builder|HelpBanner whereLink($value)
 * @method static Builder|HelpBanner whereSubTitleEn($value)
 * @method static Builder|HelpBanner whereSubTitleJp($value)
 * @method static Builder|HelpBanner whereTitleEn($value)
 * @method static Builder|HelpBanner whereTitleJp($value)
 * @method static Builder|HelpBanner whereUpdatedAt($value)
 * @mixin Eloquent
 */
class HelpBanner extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['image_link', 'background_image_link'];

    public function getImageLinkAttribute(): ?string
    {
        return isset($this->image) ? asset('uploads/images/banner/help/' . $this->image) : null;
    }

    public function getBackgroundImageLinkAttribute(): ?string
    {
        return isset($this->background_image) ? asset('uploads/images/banner/help/' . $this->background_image) : null;
    }
}
