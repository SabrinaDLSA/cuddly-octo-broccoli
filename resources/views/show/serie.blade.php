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
  <div class="large-8 columns">
    <div class="row">
      <div class="large-12 small-12 columns">
        <div class="row" >
          <h2 align="center" id="subtitle">Last Updated Series</h2>
          <div  align="center" class="row" >
              <img align="center" align="center" src="/storage/{{$serie->photo}}"/>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="large-12 columns">
        <h2></h2>
        <p>
          {{$serie_info->description}}
        </p>
               <hr>
       </div>
    </div>
  </div>
  <div class="large-4 columns">

  </div>
</div>
@endsection
@section('footer')
  @include('templates.partials.footer')
@stop
