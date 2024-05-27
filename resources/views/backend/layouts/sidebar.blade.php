<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="navbar-nav theme-brand flex-row  text-center">
            <div class="nav-logo">
                <div class="nav-item theme-logo">
                    <a href="{{ route('dashboard') }}">
                        <img src="https://designreset.com/cork/html/src/assets/img/logo.svg" class="navbar-logo"
                            alt="logo">
                    </a>
                </div>
                <div class="nav-item theme-text">
                    <a href="{{ route('dashboard') }}" class="nav-link"> {{ config('app.name') }} </a>
                </div>
            </div>
            <div class="nav-item sidebar-toggle">
                <div class="btn-toggle sidebarCollapse">
                    @include('backend.shared.svg.chevron-left')
                </div>
            </div>
        </div>
        <div class="shadow-bottom"></div>

        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu {{ Route::is('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="dropdown-toggle" aria-expanded="false">
                    <div class="">
                        @include('backend.shared.svg.home')
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ Route::is('page.*') ? 'active' : '' }}">
                <a href="#pages" data-bs-toggle="collapse" aria-expanded="{{ Route::is('page.*') ? 'true' : 'false' }}"
                    class="dropdown-toggle {{ Route::is('page.*') ? '' : 'collapsed' }}">
                    <div class="">
                        @include('backend.shared.svg.align-justify')
                        <span>Pages</span>
                    </div>
                    <div>
                        @include('backend.shared.svg.chevron-right')
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ Route::is('page.*') ? 'show' : '' }}" id="pages"
                    data-bs-parent="#accordionExample">
                    <li class="{{ Route::is('page.course') ? 'active' : '' }}">
                        <a href="{{ route('page.course') }}"> Course </a>
                    </li>
                    <li class="{{ Route::is('page.event') ? 'active' : '' }}">
                        <a href="{{ route('page.event') }}"> Event </a>
                    </li>
                    <li class="{{ Route::is('page.blog') ? 'active' : '' }}">
                        <a href="{{ route('page.blog') }}"> Blog </a>
                    </li>
                    <li class="{{ Route::is('page.client') ? 'active' : '' }}">
                        <a href="{{ route('page.client') }}"> Client </a>
                    </li>
                    <li class="{{ Route::is('page.faq') ? 'active' : '' }}">
                        <a href="{{ route('page.faq') }}"> Faq </a>
                    </li>
                    <li class="{{ Route::is('page.about') ? 'active' : '' }}">
                        <a href="{{ route('page.about') }}"> About Company </a>
                    </li>
                    <li class="{{ Route::is('page.about-nepal') ? 'active' : '' }}">
                        <a href="{{ route('page.about-nepal') }}"> About Nepal </a>
                    </li>
                    <li class="{{ Route::is('page.work-in-japan') ? 'active' : '' }}">
                        <a href="{{ route('page.work-in-japan') }}"> Work in Japan </a>
                    </li>
                    <li class="{{ Route::is('page.study-in-japan') ? 'active' : '' }}">
                        <a href="{{ route('page.study-in-japan') }}"> Study in Japan </a>
                    </li>
                    <li class="{{ Route::is('page.student-services') ? 'active' : '' }}">
                        <a href="{{ route('page.student-services') }}"> Services for students </a>
                    </li>
                    <li class="{{ Route::is('page.client-services') ? 'active' : '' }}">
                        <a href="{{ route('page.client-services') }}"> Services for clients </a>
                    </li>
                </ul>
            </li>

            <li class="menu {{ Route::is('help-banner') || Route::is('contact-banner') ? 'active' : '' }}">
                <a href="#banners" data-bs-toggle="collapse"
                    aria-expanded="{{ Route::is('help-banner') || Route::is('contact-banner') ? 'true' : 'false' }}"
                    class="dropdown-toggle {{ Route::is('help-banner') || Route::is('contact-banner') ? '' : 'collapsed' }}">
                    <div class="">
                        @include('backend.shared.svg.flag')
                        <span>Banners</span>
                    </div>
                    <div>
                        @include('backend.shared.svg.chevron-right')
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ Route::is('help-banner') || Route::is('contact-banner') ? 'show' : '' }}"
                    id="banners" data-bs-parent="#accordionExample">
                    <li class="{{ Route::is('home-banner') ? 'active' : '' }}">
                        <a href="{{ route('home-banner') }}"> Home Banner </a>
                    </li>
                    <li class="{{ Route::is('help-banner') ? 'active' : '' }}">
                        <a href="{{ route('help-banner') }}"> Help Banner </a>
                    </li>
                    <li class="{{ Route::is('contact-banner') ? 'active' : '' }}">
                        <a href="{{ route('contact-banner') }}"> Contact Banner </a>
                    </li>
                    
                </ul>
            </li>

            <li class="menu {{ Route::is('courses.*') || Route::is('subCourses.*') ? 'active' : '' }}">
                <a href="#courses" data-bs-toggle="collapse"
                    aria-expanded="{{ Route::is('courses.*') || Route::is('subCourses.*') ? 'true' : 'false' }}"
                    class="dropdown-toggle {{ Route::is('courses.*') || Route::is('subCourses.*') ? '' : 'collapsed' }}">
                    <div class="">
                        @include('backend.shared.svg.book')
                        <span>Courses</span>
                    </div>
                    <div>
                        @include('backend.shared.svg.chevron-right')
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ Route::is('courses.*') || Route::is('subCourses.*') ? 'show' : '' }}"
                    id="courses" data-bs-parent="#accordionExample">
                    <li class="{{ Route::is('courses.*') ? 'active' : '' }}">
                        <a href="{{ route('courses.index') }}"> Course </a>
                    </li>
                    <li class="{{ Route::is('subCourses.*') ? 'active' : '' }}">
                        <a href="{{ route('subCourses.index') }}"> Sub Course </a>
                    </li>
                </ul>
            </li>

            <li class="menu {{ Route::is('clients.*') ? 'active' : '' }}">
                <a href="{{ route('clients.index') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        @include('backend.shared.svg.users')
                        <span>Clients</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ Route::is('events.*') ? 'active' : '' }}">
                <a href="{{ route('events.index') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        @include('backend.shared.svg.sunset')
                        <span>Events</span>
                    </div>
                </a>
            </li>
            <li class="menu {{ Route::is('cta.*') ? 'active' : '' }}">
                <a href="{{ route('ctas.index') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        @include('backend.shared.svg.sunset')
                        <span>CTA</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ Route::is('faqs.*') ? 'active' : '' }}">
                <a href="{{ route('faqs.index') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        @include('backend.shared.svg.help-circle')
                        <span>FAQs</span>
                    </div>
                </a>
            </li>
            <li class="menu {{ Route::is('contact.*') ? 'active' : '' }}">
                <a href="{{ route('contact.index') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        @include('backend.shared.svg.help-circle')
                        <span>Contact</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ Route::is('testimonials.*') ? 'active' : '' }}">
                <a href="{{ route('testimonials.index') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        @include('backend.shared.svg.mic')
                        <span>Testimonials</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ Route::is('blogs.*') ? 'active' : '' }}">
                <a href="{{ route('blogs.index') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        @include('backend.shared.svg.paperclip')
                        <span>Blogs</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ Route::is('teams.*') ? 'active' : '' }}">
                <a href="{{ route('teams.index') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        @include('backend.shared.svg.users')
                        <span>Teams</span>
                    </div>
                </a>
            </li>
            <li class="menu {{ Route::is('statistics.*') ? 'active' : '' }}">
                <a href="{{ route('statistics') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        @include('backend.shared.svg.settings')
                        <span>Statistics</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ Route::is('setting') ? 'active' : '' }}">
                <a href="{{ route('setting') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        @include('backend.shared.svg.settings')
                        <span>Settings</span>
                    </div>
                </a>
            </li>

        </ul>
    </nav>
</div>
<!--  END SIDEBAR  -->
