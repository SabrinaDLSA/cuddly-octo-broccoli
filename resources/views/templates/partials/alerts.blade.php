<div class="large-8 large-offset-3 columns">
            @if(\Session::has('alert'))
                <div data-alert class="alert-box alert radius">
                  <strong>{{ Session::get('alert') }}</strong>
                  <a href="#" class="close">&times;</a>
                </div>
            @endif
</div>
<div class="large-8 large-offset-3 columns">
  @if(\Session::has('success'))
    <div data-alert class="alert-box success radius">
      <strong>{{ Session::get('success') }}</strong>
      <a href="#" class="close">&times;</a>
    </div>
  @endif
</div>
