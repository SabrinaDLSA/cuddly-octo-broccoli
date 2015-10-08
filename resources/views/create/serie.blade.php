@extends('templates.main')
@section('header')
  @include('templates.partials.header')
@endsection
@section('navigation')
  @include('templates.partials.nav-bar')
@endsection
@section('content')
<div class="row">
    <div class="large-8 small-centered  columns">
      <fieldset><legend>Add a new Serie</legend>
        {!! Form::open(['route'=>'series.store', 'method' => 'POST']) !!}
      <div class="row">
        <div class="large-6 columns">
          <label>Name:
            {!! Form::text('name', null, ['placeholder' => 'Serie Name', 'class' => 'form-control']) !!}
          </label>
        </div>
        <div class="large-6 columns">
          <label>Photo:
            {!! Form::file('file', ['class'=>'btn btn-default btn-file']) !!}
          </label>
        </div>
      </div>
      <div class="row">
        <div class="large-4 columns">
          <label>Genre:
             {!! Form::select('genre', $genre)  !!}
          </label>
        </div>
        <div class="large-4 columns">
          <label>Start Date:
               {!! Form::input('date', 'start', null, ['class'=> 'form-control']) !!}
          </label>
        </div>
        <div class="large-4 columns">
          <label>Finish Date:
               {!! Form::input('date', 'finish', null, ['class'=> 'form-control']) !!}
          </label>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <label>Textarea Label
            {!! Form::textarea('description', null, ['placeholder' => 'Message', 'class' => 'form-control'])!!}
          </label>
        </div>
      </div>
      {!! Form::submit('Save Changes' , array('class' => 'button')) !!}
      </fieldset>
    </div>
    {!! Form::close() !!}
</div>
@endsection
@section('footer')
  @include('templates.partials.footer')
@stop
