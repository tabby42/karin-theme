@extends('layouts.app')

@section('content')
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
  {{-- @php(var_dump($event_loop) ) --}}
  <div class="row boxed-row">
   @foreach ($event_loop as $event)
      <article @php(post_class())>
        <header>
          <h2 class="entry-title">{!! $event['title'] !!}
          </h2>
           <span class="badge badge-info">
            <span class="event-date">
              {!! $event['event_date'] !!}
            </span>|
            <span class="event-time">
              {!! $event['event_time'] !!}
            </span>
          </span><br>
           <span class="badge badge-info">
            <span class="event-location">
              {!! $event['location'] !!}
            </span><br>
            <span class="event-address">
              {!! $event['address'] !!}
            </span>
          </span>
        </header>
        <div class="entry-summary">
         {!! $event['content'] !!}
        </div>
        @if ($event['is_workshop'] == 1)
          <button type="button" class="btn btn-primary btn-lg inverse" data-toggle="modal" data-target="#kt-mail-modal">anmelden</button>
        @endif
      </article>
    @endforeach
  </div>
 
  {!! get_the_posts_navigation() !!}
@endsection