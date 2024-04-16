<?php

namespace App\Models\Page;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Page\ClientPage
 *
 * @property int $id
 * @property string|null $main_title_en
 * @property string|null $main_title_jp
 * @property string|null $page_description_en
 * @property string|null $page_description_jp
 * @property string|null $button_text_en
 * @property string|null $button_text_jp
 * @property string|null $link
 * @property string|null $image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read string|null $image_link
 * @method static Builder|ClientPage newModelQuery()
 * @method static Builder|ClientPage newQuery()
 * @method static Builder|ClientPage query()
 * @method static Builder|ClientPage whereButtonTextEn($value)
 * @method static Builder|ClientPage whereButtonTextJp($value)
 * @method static Builder|ClientPage whereCreatedAt($value)
 * @method static Builder|ClientPage whereId($value)
 * @method static Builder|ClientPage whereImage($value)
 * @method static Builder|ClientPage whereLink($value)
 * @method static Builder|ClientPage whereMainTitleEn($value)
 * @method static Builder|ClientPage whereMainTitleJp($value)
 * @method static Builder|ClientPage wherePageDescriptionEn($value)
 * @method static Builder|ClientPage wherePageDescriptionJp($value)
 * @method static Builder|ClientPage whereUpdatedAt($value)
 * @mixin Eloquent
 */
class ClientPage extends Model
{
    use HasFactory;

    protected $table = "client_page";

    protected $guarded = [];

    protected $appends = ['image_link'];

    public function getImageLinkAttribute(): ?string
    {
        return isset($this->image) ? asset('uploads/images/pages/client/' . $this->image) : null;
    }
}
