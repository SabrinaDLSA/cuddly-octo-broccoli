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
      <div class="large-12 columns">
        <div class="row">
          <h2 align="center" id="subtitle">Last Updated Series</h2>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="large-12 columns">
        <div class="row">
          <h2 align="center" id="subtitle">Las updates Actors</h2>
        </div>
      </div>
    </div>
@endsection
@section('footer')
  @include('templates.partials.footer')
@stop
