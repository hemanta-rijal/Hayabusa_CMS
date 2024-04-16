<div class="banner__section" data-aos="fade-up">
    <div class="banner__section--content">
        <div class="banner__section--content--left">
            <div class="title">{{ $helpBanner->{'title_' . config('app.locale')} }}</div>
            <div class="desc">
                {{ $helpBanner->{'sub_title_' . config('app.locale')} }}
            </div>
            <button onclick="window.location='{{ $helpBanner->link }}'" class="button">
                {{ $helpBanner->{'button_text_' . config('app.locale')} }}
            </button>

        </div>
        <div class="banner__section--content--right">
            <img src={{ $helpBanner->image_link }} class="banner-image" />
        </div>
    </div>

</div>
