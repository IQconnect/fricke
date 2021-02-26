<article>
	<a href="{{ get_permalink() }}" class="blog__item">
	  <div class="blog__image">
		  {!! get_the_post_thumbnail('', 'full', array('alt'=> 'blog')) !!}
		  <div class="blog__cover">
		  <div>
			  <i class="fas fa-search blog__icon"></i>
			  <span class="text text--medium blog__text">
			  Czytaj więcej
			  </span>
		  </div>
		  </div>
	  </div>
	  <div class="blog__content">
		  <span class="text blog__tags">
			 {{ get_the_date()  }}
		  </span>
		  <h3 class="blog__title">
			{{ the_title() }}
		  </h3>
		  <p class="text text--small">
			{{ esc_html(get_the_excerpt()) }}
		  </p>
	  </div>
	</a>
  </article>
