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
 * App\Models\Page\AboutPage
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
 * @property string|null $team_sub_title_en
 * @property string|null $team_sub_title_jp
 * @property string|null $team_title_en
 * @property string|null $team_title_jp
 * @property string|null $team_description_en
 * @property string|null $team_description_jp
 * @property string|null $director_title_en
 * @property string|null $director_title_jp
 * @property string|null $director_tagline_en
 * @property string|null $director_tagline_jp
 * @property string|null $director_name_en
 * @property string|null $director_name_jp
 * @property string|null $director_description_en
 * @property string|null $director_description_jp
 * @property string|null $image
 * @property string|null $page_image
 * @property string|null $director_image
 * @property array|null $details
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read string|null $director_image_link
 * @property-read string|null $image_link
 * @property-read string|null $page_image_link
 * @property-read Collection<int, \App\Models\Page\AboutImage> $images
 * @property-read int|null $images_count
 * @method static Builder|AboutPage newModelQuery()
 * @method static Builder|AboutPage newQuery()
 * @method static Builder|AboutPage query()
 * @method static Builder|AboutPage whereCreatedAt($value)
 * @method static Builder|AboutPage whereDetails($value)
 * @method static Builder|AboutPage whereDirectorDescriptionEn($value)
 * @method static Builder|AboutPage whereDirectorDescriptionJp($value)
 * @method static Builder|AboutPage whereDirectorImage($value)
 * @method static Builder|AboutPage whereDirectorNameEn($value)
 * @method static Builder|AboutPage whereDirectorNameJp($value)
 * @method static Builder|AboutPage whereDirectorTaglineEn($value)
 * @method static Builder|AboutPage whereDirectorTaglineJp($value)
 * @method static Builder|AboutPage whereDirectorTitleEn($value)
 * @method static Builder|AboutPage whereDirectorTitleJp($value)
 * @method static Builder|AboutPage whereId($value)
 * @method static Builder|AboutPage whereImage($value)
 * @method static Builder|AboutPage whereMainTitleEn($value)
 * @method static Builder|AboutPage whereMainTitleJp($value)
 * @method static Builder|AboutPage wherePageDescriptionEn($value)
 * @method static Builder|AboutPage wherePageDescriptionJp($value)
 * @method static Builder|AboutPage wherePageImage($value)
 * @method static Builder|AboutPage wherePageSubTitleEn($value)
 * @method static Builder|AboutPage wherePageSubTitleJp($value)
 * @method static Builder|AboutPage wherePageTitleEn($value)
 * @method static Builder|AboutPage wherePageTitleJp($value)
 * @method static Builder|AboutPage whereTeamDescriptionEn($value)
 * @method static Builder|AboutPage whereTeamDescriptionJp($value)
 * @method static Builder|AboutPage whereTeamSubTitleEn($value)
 * @method static Builder|AboutPage whereTeamSubTitleJp($value)
 * @method static Builder|AboutPage whereTeamTitleEn($value)
 * @method static Builder|AboutPage whereTeamTitleJp($value)
 * @method static Builder|AboutPage whereUpdatedAt($value)
 * @mixin Eloquent
 */
class AboutPage extends Model
{
    use HasFactory;

    protected $table = "about_page";

    protected $guarded = [];

    protected $casts = [
        'details' => 'array'
    ];

    protected $appends = ['image_link', 'page_image_link', 'director_image_link'];

    public function getImageLinkAttribute(): ?string
    {
        return isset($this->image) ? asset('uploads/images/pages/about/' . $this->image) : null;
    }

    public function getPageImageLinkAttribute(): ?string
    {
        return isset($this->page_image) ? asset('uploads/images/pages/about/' . $this->page_image) : null;
    }

    public function getDirectorImageLinkAttribute(): ?string
    {
        return isset($this->page_image) ? asset('uploads/images/pages/about/' . $this->director_image) : null;
    }

    public function images(): HasMany
    {
        return $this->hasMany(AboutImage::class, 'page_id', 'id');
    }
}
