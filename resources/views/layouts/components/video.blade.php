@php
$video = $data['videos'];
$title = $data['video_title'];
@endphp

<section class="section video">
	<h2 class="news__title title">
        {!! $title !!}
            </h2>
	<div class="video__wrapcarousel video-carousel">
	@foreach ($video as $item)
		<div class="video__cell">
			<p class="video__playtitle">{!! $item['video_name'] !!}</p>
			<a href="{{ $item['link']['url'] }}" class="video__wrapper" data-fancybox target="_blank">

					<img class="video__bg" src="{{ $item['image']['url'] }}" alt="{{ $item['video']['title'] }}" />
					<img class="video__play" src="@asset("images/redplay.png")" alt="play" />
				</a>
		</div>

	@endforeach
</div>
  </section>
