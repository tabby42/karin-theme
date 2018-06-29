@extends('layouts.app')

@section('content')
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  <div class="row boxed-row">
    @while (have_posts()) @php(the_post())
      @include('partials.content-'.get_post_type())
    @endwhile
  </div>
 
  {!! get_the_posts_navigation() !!}
@endsection