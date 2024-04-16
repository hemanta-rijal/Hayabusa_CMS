<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Faq
 *
 * @property int $id
 * @property string $question_en
 * @property string $question_jp
 * @property string $answer_en
 * @property string $answer_jp
 * @property int $position
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Faq newModelQuery()
 * @method static Builder|Faq newQuery()
 * @method static Builder|Faq query()
 * @method static Builder|Faq whereAnswerEn($value)
 * @method static Builder|Faq whereAnswerJp($value)
 * @method static Builder|Faq whereCreatedAt($value)
 * @method static Builder|Faq whereId($value)
 * @method static Builder|Faq wherePosition($value)
 * @method static Builder|Faq whereQuestionEn($value)
 * @method static Builder|Faq whereQuestionJp($value)
 * @method static Builder|Faq whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Faq extends Model
{
    use HasFactory;

    protected $guarded = [];
}
