@php
    $tabs = $data['tabs'];
    $index = rand();
@endphp

@if($tabs)
<section class="section tabs">
    <div class="container">
        <header class="tabs__header">
            <ul class="tabs__nav" data-tabs="{{ $index }}">
                @foreach ($tabs as $tab)
                <li class="tabs__item">
                    @php
                        $name = $tab['content']['name'];
                    @endphp
                    <button class="button tabs__button @if($loop->first) -is-active @endif" data-tab={{ replace_ws($name) }} data-tab-id="{{ $index }}" data-tab-index={{ $loop->index }} data-tab-number={{ $loop->index + 1 }}>
                        {{ $name }}
                    </button>
                </li>
                @endforeach
            </ul>
        </header>
        <div class="tabs__content-wrapper" data-tabs-content={{ $index }}>
            @foreach ($tabs as $tab)
            @php
                $title = $tab['content']['title'];
                $text = $tab['content']['text'];
                $link = $tab['content']['link'];
                $img = $tab['img']['ID'];
            @endphp
            <div class="tabs__content @if($loop->first) -is-active @endif" data-tab-content>
                <div class="tabs__wrapimg">
                {!! image($img, 'full', 'tabs__img') !!}
                </div>
                <div>
                    <h3 class="tabs__title title">
                        {!! $title !!}
                    </h3>
                    <p class="tabs__text text">
                        {!! $text !!}
                    </p>
                    @if ($link)
                    <a class="tabs__link button" href="{{ $link['url'] }}" target={{$link['target']}}>
                        {{ $link['title'] }}
                    </a>
                </div>

                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- @dump($tabs) --}}
