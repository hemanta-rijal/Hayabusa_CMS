<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\EventImage
 *
 * @property int $id
 * @property int $event_id
 * @property string $image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \App\Models\Event $event
 * @property-read string $image_link
 * @method static Builder|EventImage newModelQuery()
 * @method static Builder|EventImage newQuery()
 * @method static Builder|EventImage query()
 * @method static Builder|EventImage whereCreatedAt($value)
 * @method static Builder|EventImage whereEventId($value)
 * @method static Builder|EventImage whereId($value)
 * @method static Builder|EventImage whereImage($value)
 * @method static Builder|EventImage whereUpdatedAt($value)
 * @mixin Eloquent
 */
class EventImage extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['image_link'];

    public function getImageLinkAttribute(): string
    {
        return asset('uploads/images/event/gallery/' . $this->image);
    }

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
}
