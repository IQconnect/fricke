<footer class="footer">
	<div class="footer__wrapper">
	  <div class="container">
		{{-- <div class="footer__row footer__row--addmargin">
		 <div class="footer__col">
			 <h3 class="footer__title small-title">
			  {{ pll_e('kontakt') }}
			</h3>
			{!! $contact !!}
		  </div>
		  <div class="footer__col">
			@if (has_nav_menu('primary_navigation'))
			<h3 class="footer__title small-title">
			{!! $contact_footer_one !!}
		  </h3>
			  {!! wp_nav_menu(['theme_location' => 'footer_one', 'menu_class' => 'footer__menu']) !!}
			@endif
		  </div>
		  <div class="footer__col">
			@if (has_nav_menu('primary_navigation'))
			<h3 class="footer__title small-title">
			  {!! $contact_footer_two !!}
			</h3>
			  {!! wp_nav_menu(['theme_location' => 'footer_two', 'menu_class' => 'footer__menu']) !!}
			@endif
		  </div>
		  <div class="footer__col">
			@if (has_nav_menu('primary_navigation'))
			<h3 class="footer__title small-title">
			  {!! $contact_footer_three !!}
			</h3>
			  {!! wp_nav_menu(['theme_location' => 'footer_three', 'menu_class' => 'footer__menu']) !!}
			@endif
		  </div>
		</div> --}}
		<div class="footer__row">
		  {{-- <div class="footer__col">
			<img class="footer__logo" src="{{ $logo['url'] }}" alt="{{ $logo['alt'] }}">
			{!! $contact_logo !!}
		  </div> --}}
		  <div class="footer__col">
			<h3 class="footer__title small-title">
			  {!! $contact_placet !!}
			</h3>
			{!! $contact_place !!}
		  </div>
		  <div class="footer__col">
			<h3 class="footer__title small-title">
			  {!! $contact_odzialt !!}
			</h3>
			{!! $contact_odzial !!}
		  </div>
		  <div class="footer__col">
			<h3 class="footer__title small-title">
			  {!! $contact_prodt !!}
			</h3>
			{!! $contact_prod !!}
		  </div>
		</div>
	  </div>
	</div>
	<div class="footer__wrapper">
	  <div class="container">
		<div class="footer__row footer__row--copyright">
		  <p class="footer__copyright">
			{{ option("copyright") }}
		  </p>
			<a class="footer__by" href="http://iqconnect.pl">
			  <img class= "footer__byimg" src="{{ option('iqlogo')['url'] }}" alt="{{ option('iqlogo')['alt'] }}">
			</a>
		</div>
	  </div>
	</div>
  </footer>
