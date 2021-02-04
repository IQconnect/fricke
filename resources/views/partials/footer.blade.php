@php
  $madeby = option('logo-madeby')['url'];
  $logo = option('logo');
  $contact = option("contact-header");
  $certyfikaty = option('certyfikaty');
  $contact_logo = option('contact-logo');
  $contact_place = option('contact-place');
  $contact_placet = option('contact-placet');
  $contact_odzial = option('contact-odzial');
  $contact_odzialt = option('contact-odzialt');
  $contact_prod = option('contact-prod');
  $contact_prodt = option('contact-prodt');
@endphp

@include('layouts.components.map')

<footer class="footer">
  <div class="footer__logo">
    <a href="{{ home_url('/') }}">
      <img src="{{ $logo['url'] }}" alt="{{ $logo['url'] }}">
    </a>
  </div>
  <div class="footer__content">
    <div class="footer__contact">
          <h3 class="footer__maintitle">
            Kontakt
          </h3>
          <div class="footer__row">
          <div class="footer__col">
            <h3 class="footer__title">
              {!! $contact_placet !!}
            </h3>
            {!! $contact_place !!}
          </div>
          <div class="footer__col">
            <h3 class="footer__title">
              {!! $contact_odzialt !!}
            </h3>
            {!! $contact_odzial !!}
          </div>
          <div class="footer__col">
            <h3 class="footer__title">
              {!! $contact_prodt !!}
            </h3>
            <div class="footer__icon">
            @include('blocks.icon')
          </div>
          </div>
      </div>
      <div class="footer__row footer__row--bottom">
        <div class="footer__copyright text text--white">
          {{ option("copyright") }}
        </div>
        <div class="footer__iqlogo">
          <a href="http://iqconnect.pl">
            <img src="{{  option('iqlogo')['url'] }}" alt="{{  option('iqlogo')['url'] }}">
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>
