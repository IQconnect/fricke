@extends('layouts.app')

  @section('content')

  @php
    $current = get_queried_object();
    $nobd = true;

    if ($current->name == 'produkty') {
      $cats = get_categories();
      $hero = option('produkty');
    } else {
      $cats = get_categories();
      $products = get_posts( array(
        'post_type' => 'produkty',
        'category' => $current -> term_id,
        'numberposts' => -1,
      ) );

      $img = get_field('hero', $current->taxonomy.'_'.$current->term_id);

      if(!$img)  $img = option('produkty')['img'];
      $hero_title = option('produkty')['content'];
      $hero = [
        'img' => $img,
       // 'content' => ['title'=>$current->name],
        'content' => ['title'=>$hero_title['title']],
      ];
    }

  @endphp



  @if ($current->name == 'produkty'|| $current->name == 'products' )
  @include('layouts.components.small-hero', ['data'=>$hero])
    @include('layouts.components.cats', ['data'=>$cats])
  @else
  @include('layouts.components.small-hero', ['data'=>$hero,'asd'=>$nobd])
    @include('layouts.components.products', ['data'=>$products, 'cats'=>$cats ])
  @endif

  {{-- @dump($products)
  @dump($current -> term_id) --}}

@endsection
