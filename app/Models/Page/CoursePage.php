<?php

namespace App\Models\Page;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Page\CoursePage
 *
 * @property int $id
 * @property string|null $main_title_en
 * @property string|null $main_title_jp
 * @property string|null $course_section_title_en
 * @property string|null $course_section_title_jp
 * @property string|null $image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read string|null $image_link
 * @method static Builder|CoursePage newModelQuery()
 * @method static Builder|CoursePage newQuery()
 * @method static Builder|CoursePage query()
 * @method static Builder|CoursePage whereCourseSectionTitleEn($value)
 * @method static Builder|CoursePage whereCourseSectionTitleJp($value)
 * @method static Builder|CoursePage whereCreatedAt($value)
 * @method static Builder|CoursePage whereId($value)
 * @method static Builder|CoursePage whereImage($value)
 * @method static Builder|CoursePage whereMainTitleEn($value)
 * @method static Builder|CoursePage whereMainTitleJp($value)
 * @method static Builder|CoursePage whereUpdatedAt($value)
 * @mixin Eloquent
 */
class CoursePage extends Model
{
    use HasFactory;

    protected $table = "course_page";
    protected $guarded = [];

    protected $appends = ['image_link'];

    public function getImageLinkAttribute(): ?string
    {
        return isset($this->image) ? asset('uploads/images/pages/course/' . $this->image) : null;
    }
}
