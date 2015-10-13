<nav class="left_bar_nav">
  <ul class="off-canvas-list">
    <li><label>Admin Actions</label></li>
    <li><a href="#" data-dropdown="drop" aria-controls="drop1" aria-expanded="false" >Series</a>
      <ul id="drop"class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
        <li><a href="/series">List Series</a></li>
        <li><a href="{{route('series.create')}}">Add New Serie</a></li>
        <li><a data-reveal-id="addGenre" href="#">Add Genre</a></li>
      </ul>
    </li>
    <li><a href="#" data-dropdown="drop1" aria-controls="drop1" aria-expanded="false" >Actors</a>
      <ul id="drop1"class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
        <li><a href="{{route('series.show')}}">List Serie</a></li>
        <li><a href="{{route('actors.show')}}">List Actor</a></li>
        <li><a href="{{route('characters.show')}}">List Character</a></li>
      </ul>
    </li>
    <li><a href="#" data-dropdown="drop2" aria-controls="drop1" aria-expanded="false" >Characters</a>
      <ul id="drop2"class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
        <li><a href="{{route('series.create')}}">Add New Serie</a></li>
        <li><a href="{{route('actors.create')}}">Add New Actor</a></li>
        <li><a href="{{route('characters.create')}}">Add New Character</a></li>
      </ul>
    </li>
    <li><a href="#" data-dropdown="drop3" aria-controls="drop1" aria-expanded="false" >Comics</a>
      <ul id="drop3"class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
        <li><a href="{{route('series.create')}}">Add New Serie</a></li>
        <li><a href="{{route('actors.create')}}">Add New Actor</a></li>
        <li><a href="{{route('characters.create')}}">Add New Character</a></li>
      </ul>
    </li>
    <li><a href="#" data-dropdown="drop4" aria-controls="drop1" aria-expanded="false" >Music</a>
      <ul id="drop4"class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
        <li><a href="{{route('series.create')}}">Add New Serie</a></li>
        <li><a href="{{route('actors.create')}}">Add New Actor</a></li>
        <li><a href="{{route('characters.create')}}">Add New Character</a></li>
      </ul>
    </li>
    <li><a href="#" data-dropdown="drop5" aria-controls="drop1" aria-expanded="false" >Singers</a>
      <ul id="drop5"class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
        <li><a href="{{route('series.create')}}">Add New Serie</a></li>
        <li><a href="{{route('actors.create')}}">Add New Actor</a></li>
        <li><a href="{{route('characters.create')}}">Add New Character</a></li>
      </ul>
    </li>
    <li><a href="#" data-dropdown="drop5" aria-controls="drop1" aria-expanded="false" >Users</a>
      <ul id="drop5"class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
        <li><a href="{{route('series.create')}}">Add New User</a></li>
        <li><a href="{{route('actors.create')}}">Delete User</a></li>
        <li><a href="{{route('characters.create')}}">Add New Character</a></li>
      </ul>
    </li>
  </ul>
</nav>
<div id="addGenre" class="reveal-modal tiny" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <div class="" align="center">
      {!! Form::open(['route'=>'genre.store', 'method' => 'POST']) !!}
            <fieldset><legend>Add a Genre:</legend>
              <div class="row">
                <div class="large-10 large-centered columns">
                  <label for="">Genre:
                    {!! Form::text('name', null, ['placeholder' => 'Genre Name', 'class' => 'form-control']) !!}
                  </label>
                </div>
                </div>
                                <br>
                {!! Form::submit('Yes' , array('class' => 'tiny button')) !!}
                <a class=" tiny custom-close-reveal-modal button" href="#">No</a>
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </fieldset>
            {!! Form::close() !!}
  </div>
</div>
