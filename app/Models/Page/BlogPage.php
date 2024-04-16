<?php

namespace App\Models\Page;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Page\BlogPage
 *
 * @property int $id
 * @property string|null $main_title_en
 * @property string|null $main_title_jp
 * @property string|null $image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read string|null $image_link
 * @method static Builder|BlogPage newModelQuery()
 * @method static Builder|BlogPage newQuery()
 * @method static Builder|BlogPage query()
 * @method static Builder|BlogPage whereCreatedAt($value)
 * @method static Builder|BlogPage whereId($value)
 * @method static Builder|BlogPage whereImage($value)
 * @method static Builder|BlogPage whereMainTitleEn($value)
 * @method static Builder|BlogPage whereMainTitleJp($value)
 * @method static Builder|BlogPage whereUpdatedAt($value)
 * @mixin Eloquent
 */
class BlogPage extends Model
{
    use HasFactory;

    protected $table = "blog_page";
    protected $guarded = [];

    protected $appends = ['image_link'];

    public function getImageLinkAttribute(): ?string
    {
        return isset($this->image) ? asset('uploads/images/pages/blog/' . $this->image) : null;
    }
}
