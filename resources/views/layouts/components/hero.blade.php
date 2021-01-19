@php
    $hero = $data['hero'];
    $links= $data['links'];
@endphp

{{-- @dump($hero) --}}

@if($hero)
<section class="hero">
    @foreach ($hero as $item)
    @php
        $img = $item['img'];
        $title = $item['content']['title'];
        $text = $item['content']['text'];
        $link = $item['content']['link'];
        $movie = $item['movie'];
    @endphp
    <div class="hero__cell">
        @if ($movie)
        <video class="hero__image" playsinline="" autoplay="" muted="" loop="" poster="{{ $image['url'] }}">
            <source src="{{ $movie['url'] }}" type="video/mp4">
        </video>
        @else
        {!! image($img['ID'], 'full', 'hero__image') !!}
        @endif
        <div class="hero__wrapper container">
            <div class="hero__content"  data-0="opacity: 1;" data-300="opacity: 0;">
                @if ($title)
                <h2 class="hero__title title">
                    {!! $title !!}
                </h2>
                @endif
                @if($text)
                <p class="hero__text text">
                    {!! $text !!}
                </p>
                @endif
                @if ($link)
                <a class="hero__link button" href="{{ $link['url'] }}" target={{$link['target']}}>
                    {{ $link['title'] }}
                </a>
                @endif
            </div>
        </div>
    </div>
    @endforeach
    <ul class="hero__nav">
        @foreach ($links as $item)
        @php
        $sitelink = $item['sitelink'];
        @endphp

        <li class="hero__items">
            @if ($sitelink)
                <a class="hero__btn" href="{{ $sitelink['url'] }}" target={{$sitelink['target']}}>
                    {{ $sitelink['title'] }} @include('svg.arrow-round')
                </a>
                @endif

            {{-- <button class="hero__btn" data-index="{{ $loop->index }}">
                {{ $item['content']['name'] }} @include('svg.arrow-round')
            </button> --}}
        </li>
        @endforeach
    </ul>
</section>

@endif
