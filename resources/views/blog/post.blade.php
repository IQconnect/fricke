<section class="section">
	<div class="container">
	  <article class="text content-page" @php post_class() @endphp>
		{!! do_shortcode('[flexy_breadcrumb]') !!}
		<h1 class="title">
		  {{ get_the_title() }}
		</h1>
		<div class="content-page__main">
		  {!! the_content() !!}
		</div>
	  </article>
	</div>
  </section>
