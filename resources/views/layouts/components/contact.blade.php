@php
$class = "contact__content";
$content = option("contact-contact");
$title = option("contact-header");
@endphp

<section class="section contact">
  <div class="container">
    <div class="contact__wrapper">
      <div class="contact__form">
        {!! do_shortcode( '[wpforms id="109" title="false"]') !!}
      </div>
      <div class="contact__info">
        <h3 class="contact__title major-text">
          {!! $title!!}
        </h3>
        <div class="contact__content">
          {!! $content !!}
        </div>
      </div>
    </div>
  </div>
</section>

{{-- @include('components.team') --}}
