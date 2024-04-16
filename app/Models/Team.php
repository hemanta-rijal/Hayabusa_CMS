<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Team
 *
 * @property int $id
 * @property string $name_en
 * @property string $name_jp
 * @property string $designation_en
 * @property string $designation_jp
 * @property string $image
 * @property int $position
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read string|null $image_link
 * @method static Builder|Team newModelQuery()
 * @method static Builder|Team newQuery()
 * @method static Builder|Team query()
 * @method static Builder|Team whereCreatedAt($value)
 * @method static Builder|Team whereDesignationEn($value)
 * @method static Builder|Team whereDesignationJp($value)
 * @method static Builder|Team whereId($value)
 * @method static Builder|Team whereImage($value)
 * @method static Builder|Team whereNameEn($value)
 * @method static Builder|Team whereNameJp($value)
 * @method static Builder|Team wherePosition($value)
 * @method static Builder|Team whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Team extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['image_link'];

    public function getImageLinkAttribute(): ?string
    {
        return isset($this->image) ? asset('uploads/images/team/' . $this->image) : null;
    }
}
