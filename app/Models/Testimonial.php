<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Testimonial
 *
 * @property int $id
 * @property string $name_en
 * @property string $name_jp
 * @property string $tagline_en
 * @property string $tagline_jp
 * @property string $testimonial_en
 * @property string $testimonial_jp
 * @property string|null $image
 * @property string|null $youtube
 * @property string $type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read string $image_link
 * @method static Builder|Testimonial newModelQuery()
 * @method static Builder|Testimonial newQuery()
 * @method static Builder|Testimonial query()
 * @method static Builder|Testimonial whereCreatedAt($value)
 * @method static Builder|Testimonial whereId($value)
 * @method static Builder|Testimonial whereImage($value)
 * @method static Builder|Testimonial whereNameEn($value)
 * @method static Builder|Testimonial whereNameJp($value)
 * @method static Builder|Testimonial whereTaglineEn($value)
 * @method static Builder|Testimonial whereTaglineJp($value)
 * @method static Builder|Testimonial whereTestimonialEn($value)
 * @method static Builder|Testimonial whereTestimonialJp($value)
 * @method static Builder|Testimonial whereType($value)
 * @method static Builder|Testimonial whereUpdatedAt($value)
 * @method static Builder|Testimonial whereYoutube($value)
 * @mixin Eloquent
 */
class Testimonial extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['image_link'];

    public function getImageLinkAttribute(): string
    {
        return asset('uploads/images/testimonial/' . $this->image);
    }
}
