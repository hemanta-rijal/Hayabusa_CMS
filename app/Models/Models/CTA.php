<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CTA extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = ['main_title_en','main_title_jp','sup_title_en','sup_title_jp','image','link'];

    protected $table = 'ctas';

    protected $appends = ['image_link'];

    public function getImageLinkAttribute(): ?string
    {
        return isset($this->image) ? asset('uploads/images/cta/' . $this->image) : null;
    }
}
