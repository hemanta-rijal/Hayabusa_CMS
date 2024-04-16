<?php

namespace App\Models\Page;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Page\ServiceForStudent
 *
 * @property int $id
 * @property string|null $main_title_en
 * @property string|null $main_title_jp
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
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read array $images
 * @method static Builder|ServiceForStudent newModelQuery()
 * @method static Builder|ServiceForStudent newQuery()
 * @method static Builder|ServiceForStudent query()
 * @method static Builder|ServiceForStudent whereButtonTextEn($value)
 * @method static Builder|ServiceForStudent whereButtonTextJp($value)
 * @method static Builder|ServiceForStudent whereCreatedAt($value)
 * @method static Builder|ServiceForStudent whereDescriptionEn($value)
 * @method static Builder|ServiceForStudent whereDescriptionJp($value)
 * @method static Builder|ServiceForStudent whereId($value)
 * @method static Builder|ServiceForStudent whereImage($value)
 * @method static Builder|ServiceForStudent whereLink($value)
 * @method static Builder|ServiceForStudent whereMainTitleEn($value)
 * @method static Builder|ServiceForStudent whereMainTitleJp($value)
 * @method static Builder|ServiceForStudent wherePageImage($value)
 * @method static Builder|ServiceForStudent whereServices($value)
 * @method static Builder|ServiceForStudent whereServicesTitleEn($value)
 * @method static Builder|ServiceForStudent whereServicesTitleJp($value)
 * @method static Builder|ServiceForStudent whereSubTitleEn($value)
 * @method static Builder|ServiceForStudent whereSubTitleJp($value)
 * @method static Builder|ServiceForStudent whereTitleEn($value)
 * @method static Builder|ServiceForStudent whereTitleJp($value)
 * @method static Builder|ServiceForStudent whereUpdatedAt($value)
 * @mixin Eloquent
 */
class ServiceForStudent extends Model
{
    use HasFactory;

    protected $table = 'service_for_student';

    protected $guarded = [];

    protected $casts = [
        'services' => 'array'
    ];

    protected $appends = ['images'];

    public function getImagesAttribute(): array
    {
        $path = 'uploads/images/pages/service/student/';

        return [
            'image' => asset($path . $this->image),
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
