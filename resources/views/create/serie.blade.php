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
  <br>
  <div class="row">
        <div class="large-8 small-centered  columns">
          <fieldset><legend>Add a new Serie</legend>
            {!! Form::open(['route'=>'series.store', 'files' => true, 'method' => 'POST']) !!}
          <div class="row">
            <div class="large-6 columns">
              <label>Name:
                {!! Form::text('name', null, ['placeholder' => 'Serie Name', 'class' => 'form-control']) !!}
                  @if ($errors->has('name'))<p style="color:red;">{!!$errors->first('name')!!}</p>@endif
              </label>
            </div>
            <div class="large-6 columns">
              <label>Photo:
                {!! Form::file('file', ['class'=>'btn btn-default btn-file']) !!}
                  @if ($errors->has('file'))<p style="color:red;">{!!$errors->first('file')!!}</p>@endif
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-4 columns">
              <label>Genre:
                 {!! Form::select('genre', $genre)  !!}
                   @if ($errors->has('genre'))<p style="color:red;">{!!$errors->first('genre')!!}</p>@endif
              </label>
            </div>
            <div class="large-4 columns">
              <label>Start Date:
                   {!! Form::input('date', 'start', null, ['class'=> 'form-control']) !!}
                     @if ($errors->has('start'))<p style="color:red;">{!!$errors->first('start')!!}</p>@endif
              </label>
            </div>
            <div class="large-4 columns">
              <label>Finish Date:
                   {!! Form::input('date', 'finish', null, ['class'=> 'form-control']) !!}
                     @if ($errors->has('finish'))<p style="color:red;">{!!$errors->first('finish')!!}</p>@endif
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Textarea Label
                {!! Form::textarea('description', null, ['placeholder' => 'Message', 'class' => 'form-control'])!!}
                  @if ($errors->has('description'))<p style="color:red;">{!!$errors->first('description')!!}</p>@endif
              </label>
            </div>
          </div>
          <div class="" align="center">
            {!! Form::submit('Save Changes' , array('class' => 'button')) !!}
          </div>
          </fieldset>
        </div>
        {!! Form::close() !!}
    </div>
</div>
</div>
@endsection
@section('footer')
  @include('templates.partials.footer')
@stop
