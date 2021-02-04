@extends('layouts.app')

  @section('content')

  @php
    $current = get_queried_object();

    $cats = get_categories();
    $projects = get_posts( array(
      'post_type' => 'placowki',
      'category' => $current -> term_id,
      'numberposts' => -1,
    ) );

    $img = get_field('hero', $current->taxonomy.'_'.$current->term_id);

    if(!$img)  $img = option('placowki')['img'];
    $hero_title = option('placowki')['content'];
    $hero = [
      'img' => $img,
      'content' => ['title'=>$hero_title['title']],
    ];


  @endphp

  @include('layouts.components.small-hero', ['data'=>$hero])
  @include('layouts.components.projects', ['data'=>$projects])

@endsection
