<!-- BREADCRUMB -->
<div class="page-meta d-flex justify-content-between">
    <h2>{{ $title }}</h2>
    <nav class="breadcrumb-style-five  mb-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            @foreach($breadcrumbs as $name => $link)
                @if($loop->last)
                    <li class="breadcrumb-item active" aria-current="page">
                        <span>{{ $name }}</span>
                    </li>
                @else
                    <li class="breadcrumb-item">
                        <a href="{{ $link }}">
                            {{ $name }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ol>
    </nav>
</div>
<!-- /BREADCRUMB -->
