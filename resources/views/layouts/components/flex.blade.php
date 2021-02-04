@php
    $flex = $data['flex'];
    $index = rand();
@endphp

@if($flex)
<section class="section flex">
    <div class="container container--slim">
        <div class="flex__content-wrapper" data-flex-content={{ $index }}>
            @foreach ($flex as $tab)
            @php
                $position = $tab['content']['position'];
                $title = $tab['content']['title'];
                $text = $tab['content']['text'];
                $link = $tab['content']['link'];
                $img = $tab['img']['ID'];
            @endphp
            <div class="flex__content flex__content--{{ $position }} @if($loop->first) -is-active @endif" data-tab-content>
                <div class="flex__wrappertext">
                    <h3 class="flex__title title">
                        {!! $title !!}
                    </h3>
                    <p class="flex__text text">
                        {!! $text !!}
                    </p>
                    @if ($link)
                    <a class="flex__link button" href="{{ $link['url'] }}" target={{$link['target']}}>
                        {{ $link['title'] }}
                    </a>
                </div>
                <div class="flex_wrapperimg">
                {!! image($img, 'full', 'flex__img') !!}
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- @dump($flex) --}}
