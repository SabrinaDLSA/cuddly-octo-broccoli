<div class="contain-to-grid sticky">
  <nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: large">
        <ul class="title-area">
          <li class="name">
            <h1>
              <a href="{{route('home')}}">
                Series.com
              </a>
            </h1>
          </li>
          <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>
        <section class="top-bar-section">
          <ul class="left">
          <li class="active"><a href="{{route('home')}}">Home</a></li>
          <li class="has-dropdown">
            <a href="#">Series</a>
            <ul class="dropdown">
              <li><a href="#">Horror</a></li>
              <li><a href="#">Action</a></li>
              <li><a href="#">Romantic</a></li>
              <li><a href="#">Other</a></li>
              <li><a href="#">All</a></li>
            </ul>
          </li>
        </ul>
          <ul class="left">
            <li><a href="{{route('music')}}">Music</a></li>
            <li><a href="{{route('comic')}}">Comic</a></li>
            <li><a href="#">Actors</a></li>
            <li><a href="#">Characters</a></li>
          </ul>
          <ul class="right">
            <li class="has-form">
              <div class="row collapse">
                <div class="large-8 small-9 columns">
                  <input type="text" placeholder="Find Stuff">
                </div>
                <div class="large-4 small-3 columns">
                  <a href="#" class="button expand"><i class="fa fa-search"></i></a>
                </div>
              </div>
            </li>
            <li class="divider"></li>
            @if(!\Auth::check())
              <li><a href="{{route('login')}}"><i class="fa fa-sign-out"></i>Login</a></li>
            @else
              @if(\Auth::user()->rol == 'admin')
              <li><a href="/admin"><i class="fa fa-user"></i>Profile</a></li>
              @else
              <li><a href="{{route('profile')}}"><i class="fa fa-user"></i>Profile</a></li>
              @endif
              <li class="divider"></li>
              <li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i>Logout</a></li>
            @endif
            <li class="divider"></li>
          </ul>
        </section>
      </nav>
</div>
