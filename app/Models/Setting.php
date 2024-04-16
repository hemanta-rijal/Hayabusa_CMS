<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Setting
 *
 * @property int $id
 * @property string $organization_name_en
 * @property string|null $organization_name_jp
 * @property string|null $email
 * @property string|null $email_2
 * @property string|null $contact_no
 * @property string|null $contact_no_2
 * @property string|null $address_en
 * @property string|null $address_jp
 * @property string|null $facebook
 * @property string|null $instagram
 * @property string|null $twitter
 * @property string|null $skype
 * @property string|null $linkedin
 * @property string|null $tiktok
 * @property string|null $youtube
 * @property string|null $whatsapp
 * @property string|null $line
 * @property string|null $map
 * @property string|null $logo
 * @property string|null $logo_secondary
 * @property string|null $prospectus
 * @property string|null $about_en
 * @property string|null $about_jp
 * @property string|null $copyright_text_en
 * @property string|null $copyright_text_jp
 * @property string|null $operating_days_en
 * @property string|null $operating_days_jp
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read string|null $logo_link
 * @property-read string|null $logo_secondary_link
 * @method static Builder|Setting newModelQuery()
 * @method static Builder|Setting newQuery()
 * @method static Builder|Setting query()
 * @method static Builder|Setting whereAboutEn($value)
 * @method static Builder|Setting whereAboutJp($value)
 * @method static Builder|Setting whereAddressEn($value)
 * @method static Builder|Setting whereAddressJp($value)
 * @method static Builder|Setting whereContactNo($value)
 * @method static Builder|Setting whereContactNo2($value)
 * @method static Builder|Setting whereCopyrightTextEn($value)
 * @method static Builder|Setting whereCopyrightTextJp($value)
 * @method static Builder|Setting whereCreatedAt($value)
 * @method static Builder|Setting whereEmail($value)
 * @method static Builder|Setting whereEmail2($value)
 * @method static Builder|Setting whereFacebook($value)
 * @method static Builder|Setting whereId($value)
 * @method static Builder|Setting whereInstagram($value)
 * @method static Builder|Setting whereLine($value)
 * @method static Builder|Setting whereLinkedin($value)
 * @method static Builder|Setting whereLogo($value)
 * @method static Builder|Setting whereLogoSecondary($value)
 * @method static Builder|Setting whereMap($value)
 * @method static Builder|Setting whereOperatingDaysEn($value)
 * @method static Builder|Setting whereOperatingDaysJp($value)
 * @method static Builder|Setting whereOrganizationNameEn($value)
 * @method static Builder|Setting whereOrganizationNameJp($value)
 * @method static Builder|Setting whereProspectus($value)
 * @method static Builder|Setting whereSkype($value)
 * @method static Builder|Setting whereTiktok($value)
 * @method static Builder|Setting whereTwitter($value)
 * @method static Builder|Setting whereUpdatedAt($value)
 * @method static Builder|Setting whereWhatsapp($value)
 * @method static Builder|Setting whereYoutube($value)
 * @mixin Eloquent
 */
class Setting extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['logo_link', 'logo_secondary_link'];

    public function getLogoLinkAttribute(): ?string
    {
        return isset($this->logo) ? asset('uploads/images/settings/' . $this->logo) : null;
    }

    public function getLogoSecondaryLinkAttribute(): ?string
    {
        return isset($this->logo_secondary) ? asset('uploads/images/settings/' . $this->logo_secondary) : null;
    }
}
