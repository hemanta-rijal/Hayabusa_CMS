@extends('frontend.layouts.master')
@section('content')
    <div class="bgbanner">
        <img src={{ $page->image_link }} class="bgbanner__img" />
        <h2>{{ $page->{'main_title_' . config('app.locale')} }}</h2>
    </div>
    <div class="container">
        <div class="d-flex align-items-start vertical-tabs">
            <div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical" data-aos="fade-up">
                <button class="nav-link text-secondary">
                    {{ $page->{'course_section_title_' . config('app.locale')} }}
                </button>
                @foreach ($courses as $parentIndex => $course)
                    <div class="course__list">
                        <div class="underlined__heading">{{ $course->{'name_' . config('app.locale')} }}</div>
                        @foreach ($course->subCourses as $index => $subCourse)
                            <button class="nav-link{{ $index == 0 && $parentIndex == 0 ? ' active' : '' }}"
                                id="v-pills-tab-{{ $parentIndex }}-{{ $index }}" data-bs-toggle="pill"
                                data-bs-target="#v-pills-content-{{ $parentIndex }}-{{ $index }}" type="button"
                                role="tab" aria-controls="v-pills-content-{{ $parentIndex }}-{{ $index }}"
                                aria-selected="{{ $index == 0 && $parentIndex == 0 ? 'true' : 'false' }}">
                                {{ $subCourse->{'name_' . config('app.locale')} }}
                            </button>
                        @endforeach
                    </div>
                @endforeach
            </div>
            <div class="tab-content" id="v-pills-tabContent" style="width: 60%" data-aos="fade-up">
                @foreach ($courses as $parentIndex => $course)
                    @foreach ($course->subCourses as $index => $subCourse)
                        <div class="tab-pane fade{{ $index == 0 && $parentIndex == 0 ? ' show active' : '' }}"
                            id="v-pills-content-{{ $parentIndex }}-{{ $index }}" role="tabpanel"
                            aria-labelledby="v-pills-tab-{{ $parentIndex }}-{{ $index }}">
                            <h2>{{ $subCourse->{'name_' . config('app.locale')} }}</h2>
                            <img src={{ $subCourse->image_link }} />
                            <p>{!! $subCourse->{'description_' . config('app.locale')} !!}</p>
                            <button class="button" onclick="window.location='{{ route('frontend.contact') }}'">
                                @lang('site.course.enquire_btn')
                            </button>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection


@push('custom-js')
<script>
    $(document).ready(function () {
        $('.nav-link').on('click', function () {
            // Remove 'active' class from all tabs
            $('.nav-link').removeClass('active');

            // Add 'active' class to the clicked tab
            $(this).addClass('active');

            // Hide all tab content
            $('.tab-pane').removeClass('show active');

            // Show the corresponding tab content
            $($(this).data('target')).addClass('show active');
        });
    });
</script>

@endpush