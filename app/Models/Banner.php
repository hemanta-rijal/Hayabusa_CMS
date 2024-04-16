<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Banner
 *
 * @property int $id
 * @property string $image
 * @property string $title_en
 * @property string $title_jp
 * @property string $description_en
 * @property string $description_jp
 * @property string $type
 * @property string|null $button_text_jp
 * @property string|null $button_text_en
 * @property string|null $button_link
 * @property string|null $email_title_en
 * @property string|null $email_title_jp
 * @property string|null $email_button_en
 * @property string|null $email_button_jp
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Banner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner query()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereButtonLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereButtonTextEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereButtonTextJp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereDescriptionJp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereEmailButtonEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereEmailButtonJp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereEmailTitleEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereEmailTitleJp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereTitleEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereTitleJp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Banner extends Model
{
    use HasFactory;
}
