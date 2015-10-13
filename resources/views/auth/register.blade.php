@extends('templates.main')
@section('title'){{'Login'}}@endsection
@section('header')
  @include('templates.partials.header')
@endsection
@section('content')
<div class="row">
  <h2 class="Slabo">Enjoy your stay...</h2>
  <hr>
  <div class="row">
    <div class="large-2 columns">
      <a href="{{route('home')}}"><i class="fa fa-2x fa-arrow-left"></i></a>
    </div>
    <div class="large-10 columns"></div>
  </div>
  </div>
  <div class="row">
  <div class="small-6 large-centered columns">
    <fieldset><legend>Welcome to Register!</legend>
      <div class="row">
        <!-- resources/views/auth/register.blade.php -->
        <form method="POST" action="/register">
            {!! csrf_field() !!}
            <div class="row">
              <div class="small-8 large-centered columns">
                Name
                <input type="text" name="name" value="{{ old('name') }}">
                @if ($errors->has('name'))<p style="color:red;">{!!$errors->first('name')!!}</p>@endif
            </div>
          </div>
            <div class="row">
              <div class="small-8 large-centered columns">
                Email
                <input type="email" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))<p style="color:red;">{!!$errors->first('email')!!}</p>@endif
            </div>
          </div>
            <div class="row">
              <div class="small-8 large-centered columns">
                Password
                <input type="password" name="password">
                @if ($errors->has('password'))<p style="color:red;">{!!$errors->first('password')!!}</p>@endif
            </div>
          </div>
            <div class="row">
              <div class="small-8 large-centered columns">
                Confirm Password
                <input type="password" name="password_confirmation">
                @if ($errors->has('password_confirmation'))<p style="color:red;">{!!$errors->first('password_confirmation')!!}</p>@endif
            </div>
          </div>
          <div class="row">
            <div class="small-6 large-centered columns">
              <input type="checkbox" name="terms"> Terms & Conditions
              @if ($errors->has('terms'))<p style="color:red;">{!!$errors->first('terms')!!}</p>@endif
          </div>
        </div>
          <div class="row">
            <div class="small-3 small-centered columns">
                <button type="submit">Register</button>
            </div>
          </div>
        </form>
    </fieldset>
  </div>
</div>
@endsection
@section('footer')
  @include('templates.partials.footer')
@stop
