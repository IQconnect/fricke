@php
  $news = $data['news'];
@endphp

@if($news)
  <section class="news">
    <header class="news__header">
      <h2 class="news__title subtitle">
        {{ pll_e('Aktualności')}}
            </h2>
      <a class="news__btn button button--transparent button--red"
        href="{{ get_post_type_archive_link( 'posts' ) }}">
        {{ pll_e('Zobacz wszystkie')}}
      </a>
    </header>
    <div class="news-carousel">
      @foreach($news as $item)
        @php
          $id = $item->ID;
          $permalink = get_permalink($id);
          $img = get_post_thumbnail_id($id );
          $url = wp_get_attachment_image_url( $img, 'full' );
          $title = $item->post_title;
          $excerpt = $item->post_excerpt;
        @endphp
      <div class="news__cell">
          <a class="news__cellcontent" href="{{ $permalink }}">
              {!! image($img, 'realization', 'news__img') !!}
            <div class="news__content">
              <span class="news__count major-text">
                {{ $loop->index + 1 }}
              </span>
              <h3 class="news__name major-text">
                {{ $title }}
              </h3>
              <p class="news__text text">
                {{ $excerpt }}
              </p>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </section>
@endif
