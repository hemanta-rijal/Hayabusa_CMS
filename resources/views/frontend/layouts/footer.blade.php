@php
    $about = [['title' => 'About Hayabusa', 'route' => 'frontend.about'], ['title' => 'Our Clients', 'route' => 'frontend.clients'], ['title' => 'Our Courses', 'route' => 'frontend.services.courses'], ['title' => 'News / Blogs', 'route' => 'frontend.blogs.blogs'], ['title' => 'Testimonials', 'route' => 'frontend.testimonials'], ['title' => 'FAQs', 'route' => 'frontend.faqs'], ['title' => 'Events', 'route' => 'frontend.events']];
    $courses = [['title' => 'JLPT', 'route' => 'frontend.about'], ['title' => 'JFT', 'route' => 'frontend.about'], ['title' => 'Skills', 'route' => 'frontend.about'], ['title' => 'Language Courses', 'route' => 'frontend.about'], ['title' => 'Interview Preparation', 'route' => 'frontend.about']];

@endphp

<footer id="footer">
    <div class="footer__top">
        <div class="footer__top--content">
            <div class="footer__top--content--left">
                <div class="title">
                    {{ $contactBanner->{'title_'. config('app.locale')} }}
                </div>
            </div>
            <div class="footer__top--content--right">
                <div class="desc">
                    {{ $contactBanner->{'sub_title_'. config('app.locale')} }}
                </div>
                <button onclick="window.location='{{ $contactBanner->link }}'" class="button">
                    {{ $contactBanner->{'button_text_'. config('app.locale')} }}
                </button>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="footer__bottom__container">
            <div class="item logo__container">
                <img src="{{ $siteData->logo_secondary_link }}" />
                <p>{{ $siteData->{'about_' . config('app.locale')} }}</p>
            </div>
            <div class="item">
                <h2>About Us</h2>
                @foreach ($about as $item)
                    <p class="link" onclick="window.location='{{ $item['route'] }}'">{{ $item['title'] }}</p>
                @endforeach
            </div>
            <div class="item">
                <h2>Our Courses</h2>
                @foreach ($courses as $item)
                    <p class="link" onclick="window.location='{{ $item['route'] }}'">{{ $item['title'] }}</p>
                @endforeach
            </div>
            <div class="item">
                <h2>Contact Us</h2>
                <p>+977-9851327209</p>
                <p>info@hayabusa.com.np</p>
                <p>Narayangopal Chowk-04 Kathmandu, Bagmati-Province 3 , Nepal</p>
            </div>
        </div>
    </div>
</footer>
