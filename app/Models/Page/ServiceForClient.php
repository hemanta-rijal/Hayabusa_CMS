<?php

namespace App\Models\Page;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Page\ServiceForClient
 *
 * @property int $id
 * @property string|null $image
 * @property string|null $sub_title_en
 * @property string|null $sub_title_jp
 * @property string|null $title_en
 * @property string|null $title_jp
 * @property string|null $description_en
 * @property string|null $description_jp
 * @property string|null $page_image
 * @property array|null $services
 * @property string|null $services_title_en
 * @property string|null $services_title_jp
 * @property string|null $button_text_en
 * @property string|null $button_text_jp
 * @property string|null $link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $images
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceForClient newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceForClient newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceForClient query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceForClient whereButtonTextEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceForClient whereButtonTextJp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceForClient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceForClient whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceForClient whereDescriptionJp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceForClient whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceForClient whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceForClient whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceForClient wherePageImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceForClient whereServices($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceForClient whereServicesTitleEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceForClient whereServicesTitleJp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceForClient whereSubTitleEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceForClient whereSubTitleJp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceForClient whereTitleEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceForClient whereTitleJp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceForClient whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ServiceForClient extends Model
{
    use HasFactory;

    protected $table = 'service_for_client';

    protected $guarded = [];

    protected $casts = [
        'services' => 'array'
    ];

    protected $appends = ['images'];

    public function getImagesAttribute(): array
    {
        $path = 'uploads/images/pages/service/client/';

        return [
            'page_image' => asset($path . $this->page_image),
            'services' => $this->getPropertyImageLinks($this->services, $path)
        ];
    }

    public function getPropertyImageLinks($properties, $path): array
    {
        $images = [];
        foreach ($properties ?? [] as $property) {
            $images[] = asset($path . $property['image']);
        }
        return $images;
    }
}
