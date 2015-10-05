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
  <div class="small-6 large-centered columns">
    <fieldset><legend>Welcome to login!</legend>
      <div class="row">
        <div class="large-6 columns"></div>
        <div class="large-6 columns">
          <div class="row">
            <div class="large-6 columns"></div>
            <div class="large-6 columns">
                <a href="{{route('register')}}">Register</a>
            </div>
          </div>
        </div>
      </div>
          <form method="POST" action="/login">
          {!! csrf_field() !!}
          <div class="row">
            <div class="small-8 large-centered columns">
                Email
                <input type="email" name="email" value="{{ old('email') }}">
              </div>
          </div>
          <div class="row">
            <div class="small-8 large-centered columns">
              Password
              <input type="password" name="password" id="password">
          </div>
        </div>
        <div class="row">
          <div class="large-12 columns">
            <div class="row">
              <div class="large-6 columns">
                <div class="row">
                  <div class="large-3 columns"></div>
                  <div class="large-9 columns">
                    <input type="checkbox" name="remember"> Remember Me
                  </div>
                </div>
              </div>
                <div class="large-6 columns">
                  <a href="#" >Lost your Password?</a>
                </div>
          </div>
        </div>
      </div>
      <br>
        <div class="row">
          <div class="small-3 small-centered columns">
              <button type="submit">Login</button>
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
