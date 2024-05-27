<?php

namespace App\Models\Page;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Page\AboutNepalPage
 *
 * @property int $id
 * @property string|null $main_title_en
 * @property string|null $main_title_jp
 * @property string|null $page_sub_title_en
 * @property string|null $page_sub_title_jp
 * @property string|null $page_title_en
 * @property string|null $page_title_jp
 * @property string|null $page_description_en
 * @property string|null $page_description_jp
 * @property string|null $image
 * @property string|null $page_image
 * @property array|null $details
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read string|null $image_link
 * @property-read string|null $page_image_link
 * @property-read Collection<int, \App\Models\Page\AboutNepalImage> $images
 * @property-read int|null $images_count
 * @method static Builder|AboutNepalPage newModelQuery()
 * @method static Builder|AboutNepalPage newQuery()
 * @method static Builder|AboutNepalPage query()
 * @method static Builder|AboutNepalPage whereCreatedAt($value)
 * @method static Builder|AboutNepalPage whereDetails($value)
 * @method static Builder|AboutNepalPage whereId($value)
 * @method static Builder|AboutNepalPage whereImage($value)
 * @method static Builder|AboutNepalPage whereMainTitleEn($value)
 * @method static Builder|AboutNepalPage whereMainTitleJp($value)
 * @method static Builder|AboutNepalPage wherePageDescriptionEn($value)
 * @method static Builder|AboutNepalPage wherePageDescriptionJp($value)
 * @method static Builder|AboutNepalPage wherePageImage($value)
 * @method static Builder|AboutNepalPage wherePageSubTitleEn($value)
 * @method static Builder|AboutNepalPage wherePageSubTitleJp($value)
 * @method static Builder|AboutNepalPage wherePageTitleEn($value)
 * @method static Builder|AboutNepalPage wherePageTitleJp($value)
 * @method static Builder|AboutNepalPage whereUpdatedAt($value)
 * @mixin Eloquent
 */
class AboutNepalPage extends Model
{
    use HasFactory;

    protected $table = "about_nepal_page";

    protected $guarded = [];

    protected $casts = [
        'details' => 'array'
    ];

    protected $appends = ['image_link', 'page_image_link','section_one_image','section_two_image'];

    public function getImageLinkAttribute(): ?string
    {
        return isset($this->image) ? asset('uploads/images/pages/about_nepal/' . $this->image) : null;
    }

    public function getPageImageLinkAttribute(): ?string
    {
        return isset($this->page_image) ? asset('uploads/images/pages/about_nepal/' . $this->page_image) : null;
    }

    public function getSectionOneImageAttribute(): ?string
    {
        return isset($this->section_1_image) ? asset('uploads/images/pages/about_nepal/' . $this->section_1_image) : null; 
    }
    public function getSectionTwoImageAttribute(): ?string
    {
        return isset($this->section_2_image) ? asset('uploads/images/pages/about_nepal/' . $this->section_2_image) : null; 
    }

    public function images(): HasMany
    {
        return $this->hasMany(AboutNepalImage::class, 'page_id', 'id');
    }
}
