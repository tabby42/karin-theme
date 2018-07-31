@extends('layouts.app')

@section('content')
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
  {{-- @php(var_dump($event_loop) ) --}}
  <div class="row">
   @foreach ($event_loop as $event)
      <article @php(post_class())>
        <header>
          {{-- icons --}}
          @if ($event['is_workshop'] == 1)
            <span class="event-icon">
              <img src="@asset('images/icon_kurs.svg')" alt="Theater Icon"/>
            </span>
          @endif
          @if ($event['is_workshop'] == 0)
            <span class="event-icon">
              <img src="@asset('images/icon_theater.svg')" alt="Kurs Icon"/>
            </span>
          @endif
          {{-- heading --}}
          <h2 class="entry-title">{!! $event['title'] !!}
          </h2>
          {{-- event info --}}
          <span class="badge badge-info">
            <span class="event-date">
              {!! $event['event_date'] !!}
            </span>
          </span>
          <span class="badge badge-info">
            <span class="event-time">
              {!! $event['event_time'] !!} Uhr
            </span>
          </span>
          <span class="badge badge-info">
            <span class="event-price">
              @if ($event['is_workshop'] == 1)
                Kosten:&nbsp;
              @endif
              @if ($event['is_workshop'] == 0)
                Eintritt:&nbsp;
              @endif
                {!! $event['price'] !!}
            </span>
          </span>
          <br>
          <span class="location-pin"><img src="@asset('images/location-pin-orange.svg')" alt="Location Pin Icon"/></span>
          <span class="badge badge-info pad-left">
            <span class="event-location">
              {!! $event['location'] !!}
            </span><br>
            <span class="event-address">
              {!! $event['address'] !!}
            </span><br>
          </span>
        </header>
        <div class="text-right position-relative">
          <button type="button" class="btn btn-primary btn-lg btn-details">details</button>
        </div>
        {{-- event-details --}}
        <div class="entry-summary">
         {!! $event['content'] !!}
          @if ($event['is_workshop'] == 1)
            <div class="text-right">
              <button type="button" class="btn btn-primary btn-lg inverse btn-workshop" data-toggle="modal" data-target="#kt-mail-modal">anmelden</button>
            </div>
          @endif
        </div>
      </article>
    @endforeach
  </div>
 
  {!! get_the_posts_navigation() !!}
@endsection