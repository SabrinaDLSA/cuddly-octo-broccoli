@extends('templates.main')
@section('header')
  @include('templates.partials.header')
@endsection
@section('navigation')
  @include('templates.partials.nav-bar')
@endsection
@section('content')
<div data-equalizer>
  <div class="large-2 columns " data-equalizer-watch>
    <nav class="left_bar">
      <ul class="off-canvas-list collapse">
        <li><label>Admin Actions</label></li>
        <li><a href="#">Insert</a></li>
        <li><a href="#">List</a></li>
        <li><a href="#">New</a></li>
      </ul>
    </nav>
  </div>
  <div class="large-10 columns" data-equalizer-watch>
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
