@php
$projects = $data['placowki'];
$title = $data['placowki_title'];
@endphp

@if($projects)
  <section class="section projects">
    <h2 class="news__title title">
      {!! $title !!}
          </h2>
    <div class="container">
      <ul class="projects__list">
        @foreach($projects as $item)
          @php
            $img = get_post_thumbnail_id($item->ID);
            $permalink = get_permalink($item->ID);
          @endphp
          <li class="projects__item">
            <a class="projects__elem" href="{{ $permalink }}">
              <div class="projects__img-wrapper">
                {!! image($img, 'full', 'projects__img') !!}
              </div>
              <h3 class="projects__title">
                {{ $item->post_title }}
              </h3>
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </section>
@endif
