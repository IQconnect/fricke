@php
$title = $data['contact_title'];
$content = $data['contact_text'];
$code = $data['contact_code'];
@endphp

<section class="section cmap">
  <div class="container">
    <div class="cmap__wrapper">
      <div class="cmap__info">
        <h3 class="cmap__title major-text">
          {!! $title !!}
        </h3>
        <div class="cmap__content">
          {!! $content !!}
        </div>
      </div>
      <div class="cmap__map">
        {!! do_shortcode( "[".$code."]" ); !!}
      </div>
    </div>
  </div>
</section>
