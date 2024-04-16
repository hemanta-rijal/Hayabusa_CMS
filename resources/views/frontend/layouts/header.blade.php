<header id="header" class="header sticky-top ">
    <div class="header-top">
        <div class="header-top--container">
            <div class="icons">
                @isset($siteData->linkedin)
                    <a href="{{ $siteData->linkedin }}" target="_blank">
                        <img src={{ asset('frontend/svgs/linkedin.svg') }} alt="linkedin" />
                    </a>
                @endisset
                @isset($siteData->youtube)
                    <a href="{{ $siteData->youtube }}" target="_blank">
                        <img src={{ asset('frontend/svgs/youtube.svg') }} alt="youtube" />
                    </a>
                @endisset
                @isset($siteData->facebook)
                    <a href="{{ $siteData->facebook }}" target="_blank">
                        <img src={{ asset('frontend/svgs/facebook.svg') }} alt="facebook" />
                    </a>
                @endisset
                @isset($siteData->instagram)
                    <a href="{{ $siteData->instagram }}" target="_blank">
                        <img src={{ asset('frontend/svgs/instagram.svg') }} alt="instagram"
                            style="width: 30px; height:auto" />
                    </a>
                @endisset
                @isset($siteData->tiktok)
                    <a href="{{ $siteData->tiktok }}" target="_blank">
                        <img src={{ asset('frontend/svgs/tik-tok.svg') }} alt="tiktok" style="width:18px; height:auto" />
                    </a>
                @endisset
                @isset($siteData->twitter)
                    <a href="{{ $siteData->twitter }}" target="_blank">
                        <img src={{ asset('frontend/svgs/twitter.svg') }} alt="twitter" />
                    </a>
                @endisset
            </div>
            <div class="time">
                <img src={{ asset('frontend/svgs/time.svg') }} alt="twitter" />
                <span class="details">{{ $siteData->{'operating_days_' . config('app.locale')} }}</span>
            </div>
            <div class="row lang-row">
                <label for="lang" class="text-white">Language</label>
                <select id="lang" class="form-select" onchange="changeLanguage(this.value)">
                    <option value="en" @if (app()->getLocale() == 'en') selected @endif>English</option>
                    <option value="jp" @if (app()->getLocale() == 'jp') selected @endif>Japanese</option>
                </select>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-top">
        <div class="header-bottom--container">
            <div class="logo__container">
                <img src="{{ $siteData->logo_link }}" alt="logo" class="logo"
                    onclick="window.location='{{ route('frontend.home') }}'" style="cursor: pointer" />
            </div>

            <nav class="navbar navbar-expand-md">
                <div class="container-xl">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse cnav" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            {{-- About Us Dropdown --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    About Us
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/about-us">About Hayabusa</a></li>
                                    <li><a class="dropdown-item" href="/our-client">Our Clients</a></li>
                                    <li><a class="dropdown-item" href="/nepal">About Nepal</a></li>
                                    <li><a class="dropdown-item" href="/testimonials">Testimonials</a></li>
                                    <li><a class="dropdown-item" href="/faqs">FAQs</a></li>
                                </ul>
                            </li>

                            {{-- Our Services Dropdown --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Our Services
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('frontend.services.courses') }}">Our Courses</a></li>
                                    <li><a class="dropdown-item" href="{{ route('frontend.services') }}">Services</a></li>
                                </ul>
                            </li>

                            {{-- About Japan Dropdown --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    About Japan
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/japan/about">About Japan</a></li>
                                    <li><a class="dropdown-item" href="/japan/study">Study in Japan</a></li>
                                    <li><a class="dropdown-item" href="/japan/work">Work in Japan</a></li>
                                </ul>
                            </li>

                            {{-- Clients Dropdown --}}
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Clients
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/clients/post">Post Your Requirement</a></li>
                                    <li><a class="dropdown-item" href="/clients/job">Current Job Openings</a></li>
                                </ul>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="/events">Events</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/blogs">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="button contact-button"
                                    onclick="window.location='{{ route('frontend.contact') }}'">Contact
                                    Us
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


            <div class="side-nav-toggle" onclick="toggleSideNav()">
                <img src={{ asset('frontend/icons/hamburger.png') }} />
            </div>
            <!-- Side Nav Bar -->
            <div class="side-nav">
                <ul class="side-nav-menu">
                    <div class="side-nav-toggle" onclick="toggleSideNav()">
                        <img src={{ asset('frontend/icons/close.png') }} />
                    </div>
                    <li class="nav-item"><a class="nav-link" href="/about-us">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/our-client">Our Clients</a></li>
                    <li class="nav-item"><a class="nav-link" href="/nepal">About Nepal</a></li>
                    <li class="nav-item"><a class="nav-link" href="/testimonials">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="/faqs">FAQs</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('frontend.services.courses') }}">Our Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('frontend.services') }}">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="/japan/about">About Japan</a></li>
                    <li class="nav-item"><a class="nav-link" href="/japan/study">Study in Japan</a></li>
                    <li class="nav-item"><a class="nav-link" href="/japan/work">Work in Japan</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="/clients/post">Post Your Requirement</a></li> --}}
                    {{-- <li class="nav-item"><a class="nav-link" href="/clients/job">Current Job Openings</a></li> --}}
                    <li class="nav-item"><a class="nav-link" href="/events">Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="/blogs">Blogs</a></li>
                    <li class="nav-item">
                        <button type="button" class="button"
                            onclick="window.location='{{ route('frontend.contact') }}'">Contact Us
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>


@push('custom-js')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            // JavaScript for toggle sub menus
            var subButtons = document.querySelectorAll('.sub-btn');
            subButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var subMenu = this.nextElementSibling;
                    subMenu.style.display = subMenu.style.display === 'none' ? 'block' : 'none';
                    var dropdown = this.querySelector('.dropdown');
                    dropdown.classList.toggle('rotate');
                });
            });
        });

        function toggleSideNav() {
            document.querySelector('.side-nav').classList.toggle('active');
        }

        function changeLanguage(language) {
            window.location.href = "{{ request()->url() }}?language=" + language;
        }
    </script>
@endpush
