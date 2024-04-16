<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\SubCourse
 *
 * @property int $id
 * @property int $course_id
 * @property string $name_en
 * @property string $name_jp
 * @property string $description_en
 * @property string $description_jp
 * @property string $image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \App\Models\Course $course
 * @property-read string $image_link
 * @method static Builder|SubCourse newModelQuery()
 * @method static Builder|SubCourse newQuery()
 * @method static Builder|SubCourse query()
 * @method static Builder|SubCourse whereCourseId($value)
 * @method static Builder|SubCourse whereCreatedAt($value)
 * @method static Builder|SubCourse whereDescriptionEn($value)
 * @method static Builder|SubCourse whereDescriptionJp($value)
 * @method static Builder|SubCourse whereId($value)
 * @method static Builder|SubCourse whereImage($value)
 * @method static Builder|SubCourse whereNameEn($value)
 * @method static Builder|SubCourse whereNameJp($value)
 * @method static Builder|SubCourse whereUpdatedAt($value)
 * @mixin Eloquent
 */
class SubCourse extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['image_link'];

    public function getImageLinkAttribute(): string
    {
        return asset('uploads/images/sub_course/' . $this->image);
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class, "course_id", "id");
    }
}
