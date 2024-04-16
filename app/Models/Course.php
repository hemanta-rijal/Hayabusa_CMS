<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Course
 *
 * @property int $id
 * @property string $name_en
 * @property string $name_jp
 * @property int $position
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection<int, \App\Models\SubCourse> $subCourses
 * @property-read int|null $sub_courses_count
 * @method static Builder|Course newModelQuery()
 * @method static Builder|Course newQuery()
 * @method static Builder|Course query()
 * @method static Builder|Course whereCreatedAt($value)
 * @method static Builder|Course whereId($value)
 * @method static Builder|Course whereNameEn($value)
 * @method static Builder|Course whereNameJp($value)
 * @method static Builder|Course wherePosition($value)
 * @method static Builder|Course whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function subCourses(): HasMany
    {
        return $this->hasMany(SubCourse::class, "course_id", "id");
    }
}
