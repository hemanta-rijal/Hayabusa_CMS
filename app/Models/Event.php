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
 * App\Models\Event
 *
 * @property int $id
 * @property string $slug
 * @property string $title_en
 * @property string $title_jp
 * @property string $host_en
 * @property string $host_jp
 * @property string $date_en
 * @property string $date_jp
 * @property string $time_en
 * @property string $time_jp
 * @property string $venue_en
 * @property string $venue_jp
 * @property string $location_en
 * @property string $location_jp
 * @property string $entry_fee_en
 * @property string $entry_fee_jp
 * @property string $description_en
 * @property string $description_jp
 * @property string $thumbnail
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read string $thumbnail_link
 * @property-read Collection<int, \App\Models\EventImage> $images
 * @property-read int|null $images_count
 * @property-read Collection<int, \App\Models\EventParticipant> $participants
 * @property-read int|null $participants_count
 * @method static Builder|Event newModelQuery()
 * @method static Builder|Event newQuery()
 * @method static Builder|Event query()
 * @method static Builder|Event whereCreatedAt($value)
 * @method static Builder|Event whereDateEn($value)
 * @method static Builder|Event whereDateJp($value)
 * @method static Builder|Event whereDescriptionEn($value)
 * @method static Builder|Event whereDescriptionJp($value)
 * @method static Builder|Event whereEntryFeeEn($value)
 * @method static Builder|Event whereEntryFeeJp($value)
 * @method static Builder|Event whereHostEn($value)
 * @method static Builder|Event whereHostJp($value)
 * @method static Builder|Event whereId($value)
 * @method static Builder|Event whereLocationEn($value)
 * @method static Builder|Event whereLocationJp($value)
 * @method static Builder|Event whereSlug($value)
 * @method static Builder|Event whereThumbnail($value)
 * @method static Builder|Event whereTimeEn($value)
 * @method static Builder|Event whereTimeJp($value)
 * @method static Builder|Event whereTitleEn($value)
 * @method static Builder|Event whereTitleJp($value)
 * @method static Builder|Event whereUpdatedAt($value)
 * @method static Builder|Event whereVenueEn($value)
 * @method static Builder|Event whereVenueJp($value)
 * @mixin Eloquent
 */
class Event extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['thumbnail_link'];

    public function getThumbnailLinkAttribute(): string
    {
        return asset('uploads/images/event/' . $this->thumbnail);
    }

    public function images(): HasMany
    {
        return $this->hasMany(EventImage::class, 'event_id', 'id');
    }

    public function participants(): HasMany
    {
        return $this->hasMany(EventParticipant::class, 'event_id', 'id');
    }
}
