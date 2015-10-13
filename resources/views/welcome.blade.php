@extends('templates.main')
@section('header')
  @include('templates.partials.header')
@endsection
@section('navigation')
  @include('templates.partials.nav-bar')
@endsection
@section('content')
<br>
    <div class="row">
      <div class="large-12 small-12 columns">
        <div class="row" >
          <h2 align="center" id="subtitle">Last Updated Series</h2>
          <div class="row"  data-equalizer-mq="large-up" >
              @foreach($series as $s)
                <div class=" large-3 columns" align="center" data-equalizer-watch>
                  <div class="grey">
                    <a href="/series/{{$s->id}}" ><img class="imagen_cuadrada"  align="center" src="/storage/{{$s->photo}}"/></a>
                  </div>
                  <h6 class="panel">{{$s->name}}</h6>
                </div>
              @endforeach
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="large-12 columns">
        <div class="row">
          <h2 align="center" id="subtitle">Last Updated Actors</h2>
          @foreach($series as $s)
            <div class="large-3 small-6 columns">
              <img src="http://placehold.it/250x250&text=Thumbnail"/>
              <h6 class="panel">{{$s->name}}</h6>
            </div>
          @endforeach
        </div>
      </div>
    </div>
     <div class="large-12 columns">
              <hr>
      </div>
@endsection
@section('footer')
  @include('templates.partials.footer')
@stop
