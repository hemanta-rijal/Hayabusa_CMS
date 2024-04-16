<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Client
 *
 * @property int $id
 * @property string $name_en
 * @property string|null $name_jp
 * @property string $image
 * @property int $position
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read string|null $image_link
 * @method static Builder|Client newModelQuery()
 * @method static Builder|Client newQuery()
 * @method static Builder|Client query()
 * @method static Builder|Client whereCreatedAt($value)
 * @method static Builder|Client whereId($value)
 * @method static Builder|Client whereImage($value)
 * @method static Builder|Client whereNameEn($value)
 * @method static Builder|Client whereNameJp($value)
 * @method static Builder|Client wherePosition($value)
 * @method static Builder|Client whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Client extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['image_link'];

    public function getImageLinkAttribute(): ?string
    {
        return isset($this->image) ? asset('uploads/images/client/' . $this->image) : null;
    }
}
