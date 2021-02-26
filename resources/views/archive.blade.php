@extends('layouts.app')

@section('content')
@php

$img = get_field('hero', $current->taxonomy.'_'.$current->term_id);

if(!$img)  $img = option('placowki')['img'];
//$hero_title =  single_cat_title("",false) ;
$hero = [
  'img' => $img,
  'content' => ['title'=>$hero_title],
];

@endphp

@include('layouts.components.small-hero', ['data'=>$hero])
<section class="section">

  <div class="container">
    @if (!have_posts())
    <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
    @endif
    <h2 class="blog__header title">
      {{ single_cat_title("",false) }}
    </h2>
    <div class="blog blog--all">
      @while (have_posts()) @php the_post() @endphp
        @include('blog.posts')
      @endwhile
    </div>
  </div>
</section>
@endsection
