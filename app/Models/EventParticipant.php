<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\EventParticipant
 *
 * @property int $id
 * @property int $event_id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string|null $detail
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \App\Models\Event $event
 * @method static Builder|EventParticipant newModelQuery()
 * @method static Builder|EventParticipant newQuery()
 * @method static Builder|EventParticipant query()
 * @method static Builder|EventParticipant whereCreatedAt($value)
 * @method static Builder|EventParticipant whereDetail($value)
 * @method static Builder|EventParticipant whereEmail($value)
 * @method static Builder|EventParticipant whereEventId($value)
 * @method static Builder|EventParticipant whereId($value)
 * @method static Builder|EventParticipant whereName($value)
 * @method static Builder|EventParticipant wherePhone($value)
 * @method static Builder|EventParticipant whereUpdatedAt($value)
 * @mixin Eloquent
 */
class EventParticipant extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class, "event_id", 'id');
    }
}
