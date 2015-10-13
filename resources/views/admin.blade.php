@extends('templates.main')
@section('header')
  @include('templates.partials.header')
@endsection
@section('navigation')
  @include('templates.partials.nav-bar')
@endsection
@section('content')
<div data-equalizer>
  <div class="large-2 columns left_bar" data-equalizer-watch>
    @include('templates.partials.admin-nav')
  </div>
  <div class="large-10 columns" data-equalizer-watch>
    @include('templates.partials.alerts')
    <div class="row">
      <div class="large- columns">
          <h2 align="center" id="subtitle">Last Updated Series</h2>
      </div>
      <div class="large-6 columns">
          <h2 align="center" id="subtitle">Last Updated Series</h2>
      </div>
    </div>
  </div>
</div>
@endsection
@section('footer')
  @include('templates.partials.footer')
@stop
