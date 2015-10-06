@extends('templates.main')
@section('header')
  @include('templates.partials.header')
@endsection
@section('navigation')
  @include('templates.partials.nav-bar')
@endsection
@section('content')
<div class="row">
  <h2>Welcome {{\Auth::user()->name}}</h2>
</div>
@endsection
@section('footer')
  @include('templates.partials.footer')
@stop
