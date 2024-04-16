@php
    $details = [['particular' => 'Area', 'details' => '377,975 km2'], ['particular' => 'Capital', 'details' => 'Tokyo'], ['particular' => 'Population', 'details' => '124,40,000'], ['particular' => 'Official Language', 'details' => 'Japanese'], ['particular' => 'Demonym', 'details' => 'Japanese'], ['particular' => 'Prime Minister', 'details' => 'Fumio Kishida'], ['particular' => 'GDP (Total)', 'details' => '$6.139 Trillion'], ['particular' => 'GDP (Per Capita)', 'details' => '$49,044']];
    $life = [
        [
            'img' => 'frontend/jpgs/japan-life.png',
            'tab' => 'living',
            'title' => 'Living Expenses',
            'desc' => 'The living expenses of a Nepali student in Japan can vary depending on various factors such as the city they reside in, the lifestyle they lead, and their personal preferences.',
            'desc2' => 'Excluding the school tuition fees, it cost about ¥50,000 to ¥80,000 a month for hostel rental, utilities (electricity, gas, water) and food expenses depending on the residing location. Costs for textbooks, stationery, and other study materials can vary depending on the course and program. It is advisable to allocate around ¥5,000 to ¥10,000 per semester for such expenses.',
        ],
        [
            'img' => 'frontend/jpgs/japan-life.png',
            'tab' => 'job',
            'title' => 'Part-time Job',
            'desc' => 'The living expenses of a Nepali student in Japan can vary depending on various factors such as the city they reside in, the lifestyle they lead, and their personal preferences.',
            'desc2' => 'Excluding the school tuition fees, it cost about ¥50,000 to ¥80,000 a month for hostel rental, utilities (electricity, gas, water) and food expenses depending on the residing location. Costs for textbooks, stationery, and other study materials can vary depending on the course and program. It is advisable to allocate around ¥5,000 to ¥10,000 per semester for such expenses.',
        ],
        [
            'img' => 'frontend/jpgs/japan-life.png',
            'tab' => 'school',
            'title' => 'School Hostel',
            'desc' => 'The living expenses of a Nepali student in Japan can vary depending on various factors such as the city they reside in, the lifestyle they lead, and their personal preferences.',
            'desc2' => 'Excluding the school tuition fees, it cost about ¥50,000 to ¥80,000 a month for hostel rental, utilities (electricity, gas, water) and food expenses depending on the residing location. Costs for textbooks, stationery, and other study materials can vary depending on the course and program. It is advisable to allocate around ¥5,000 to ¥10,000 per semester for such expenses.',
        ],
        [
            'img' => 'frontend/jpgs/japan-life.png',
            'tab' => 'trasnport',
            'title' => 'Transportation',
            'desc' => 'The living expenses of a Nepali student in Japan can vary depending on various factors such as the city they reside in, the lifestyle they lead, and their personal preferences.',
            'desc2' => ' Excluding the school tuition fees, it cost about ¥50,000 to ¥80,000 a month for hostel rental, utilities (electricity, gas, water) and food expenses depending on the residing location. Costs for textbooks, stationery, and other study materials can vary depending on the course and program. It is advisable to allocate around ¥5,000 to ¥10,000 per semester for such expenses.',
        ],
        [
            'img' => 'frontend/jpgs/japan-life.png',
            'tab' => 'health',
            'title' => 'Healthcare',
            'desc' => 'The living expenses of a Nepali student in Japan can vary depending on various factors such as the city they reside in, the lifestyle they lead, and their personal preferences.',
            'desc2' => 'Excluding the school tuition fees, it cost about ¥50,000 to ¥80,000 a month for hostel rental, utilities (electricity, gas, water) and food expenses depending on the residing location. Costs for textbooks, stationery, and other study materials can vary depending on the course and program. It is advisable to allocate around ¥5,000 to ¥10,000 per semester for such expenses.',
        ],
    ];
    $gallery = ['frontend/jpgs/japan-life.png', 'frontend/jpgs/japan-life.png', 'frontend/jpgs/japan-life.png', 'frontend/jpgs/japan-life.png', 'frontend/jpgs/japan-life.png', 'frontend/jpgs/japan-life.png', 'frontend/jpgs/japan-life.png', 'frontend/jpgs/japan-life.png', 'frontend/jpgs/japan-life.png', 'frontend/jpgs/japan-life.png'];
    
@endphp

@extends('frontend.layouts.master')
@section('content')
    <div class="bgbanner">
        <img src={{ asset('frontend/jpgs/bg1.png') }} class="bgbanner__img" />
        <h2>About Japan</h2>
    </div>

    <div class="container">
        <div class="sub-title" data-aos="fade-up">Japan</div>
        <div class="heading" data-aos="fade-up">
            <div class="main-title ">Country of The Rising Sun</div>
        </div>

        <img src={{ asset('frontend/jpgs/about-japan.png') }} class="responsive-image" data-aos="fade-up" />
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6" data-aos="fade-up">
                <table class="table table-striped table-bordered" style="width: 90%">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th scope="col">Particular</th>
                            <th scope="col">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($details as $index => $item)
                            <tr>
                                <td>{{ $item['particular'] }}</td>
                                <td>{{ $item['details'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-xs-12 col-md-6" data-aos="fade-up">
                <div class="sub-title--grey">Introducing Hayabusa Consultancy and Training Center: Your Pathway to Japanese
                    Language Excellence and Study Abroad Adventures in Japan!
                </div>
                <p class="grey"> Hayabusa Consultancy and Training Center, situated in the heart of Nepal, is a premier
                    education consultancy dedicated to offering top-notch language courses and study abroad programs for
                    students seeking to explore the wonders of Japan. With a strong emphasis on linguistic proficiency and
                    cultural immersion, we strive to equip our students with the necessary skills and knowledge to thrive in
                    a Japanese-speaking environment.
                    <br /><br />
                    Introducing Hayabusa Consultancy and Training Center: Your Pathway to Japanese Language Excellence and
                    Study Abroad Adventures in Japan!
                </p>
            </div>
        </div>


    </div>

    <div class="services__section">
        <div class="bg-card bg-card--blue" onclick="window.location='{{ route('frontend.japan.study') }}'"
            data-aos="fade-up">
            <img src={{ asset('frontend/jpgs/stamp.png') }} class="stamp" />
            <div class="bg-card--main-title">Study in Japan</div>

        </div>
        <div class="bg-card bg-card--pink" onclick="window.location='{{ route('frontend.japan.work') }}'"
            data-aos="fade-up">
            <img src={{ asset('frontend/jpgs/stamp.png') }} class="stamp" />
            <div class="bg-card--main-title">Work in Japan</div>

        </div>
    </div>


    <div class="bg-grey">
        <div class="container">
            <div class="sub-title" data-aos="fade-up">About Japan</div>
            <div class="heading" data-aos="fade-up">
                <div class="main-title ">Whats life like in Japan?</div>
            </div>
            <div class="tabs__pink">
                <ul class="nav nav-tabs" id="myTab" role="tablist" data-aos="fade-up">
                    @foreach ($life as $index => $item)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link{{ $index == 0 ? ' active' : '' }}" id="nav-{{ $item['tab'] }}-tab"
                                data-bs-toggle="tab" data-bs-target="#nav-{{ $item['tab'] }}" type="button"
                                role="tab" aria-controls="nav-{{ $item['tab'] }}"
                                aria-selected="{{ $index == 0 ? 'true' : 'false' }}">
                                {{ $item['title'] }}
                            </button>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content" id="nav-tabContent" data-aos="fade-up">
                    @foreach ($life as $index => $item)
                        <div class="tab-pane fade{{ $index == 0 ? ' show active' : '' }}" id="nav-{{ $item['tab'] }}"
                            role="tabpanel" aria-labelledby="nav-{{ $item['tab'] }}-tab">
                            <div class="tab-container">
                                <img src={{ asset($item['img']) }} alt="" class="tab-image">
                                <div class="tab-details" style="flex: 0 0 73%">
                                    <h3> {{ $item['title'] }}</h3>
                                    <p> {{ $item['desc'] }} <br /><br />{{ $item['desc2'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="sub-title" data-aos="fade-up">Gallery</div>
        <div class="heading">
            <div class="main-title" data-aos="fade-up">Photos</div>
        </div>
        <div class="row" data-aos="fade-up" style="row-gap: 20px">
            @foreach ($gallery as $item)
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image" style="margin: 0px !important"> <a class="fancybox__image"
                            href={{ asset($item) }}><img src="{{ asset($item) }}" alt="image" /></a>

                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
