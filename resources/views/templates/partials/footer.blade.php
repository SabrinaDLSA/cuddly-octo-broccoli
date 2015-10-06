<div class="row">
  <div class="large-12 columns">
          <hr>
  </div>
</div>
<footer class="footer">
  <div class="row">
    <div class="large-6 columns">
      <h2 class="Fredericka">Series.com</h2>
    </div>
    <div class="large-6 columns">
      <legend>Contact Us:</legend>
      <ul class="inline-list">
        <li class="white">+985 558 548 </li>
        <li class="white">+855 166 235 </li>
        <li class="white">sabrina@gmail.com </li>
      </ul>
        <ul class="inline-list">
          <li><a href="#"><img class="img_red" src="img/Icons/facebook.png" alt="" /></a></li>
          <li><a href="#"><img class="img_red" src="img/Icons/twitter.png" alt="" /></a></li>
          <li><a data-reveal-id="Email"  href="#"><img class="img_red" src="img/Icons/email.png" alt="" /></a></li>
          <li><a href="#"><img class="img_red" src="img/Icons/skype.png" alt="" /></i></a></li>
        </ul>
      </div>
    </div>
      <div class="row">
          <div class="small-6 large-centered columns">
            <p>Copyright (c) 2015 Copyright Holder All Rights Reserved.</p>
          </div>
      </div>
      <div class="row">
          <div class="small-3 large-centered columns">
            <p><a data-reveal-id="terms" class="white"href="#">Terms of Use</a> | <a data-reveal-id="Privacy" class="white" href="#">Privacy Policy</a></p>
          </div>
      </div>
</footer>

<div id="terms" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 id="modalTitle">Terms Of Use</h2>
  <p class="lead">Your couch.  It is mine.</p>
  <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<div id="Privacy" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 id="modalTitle">Privacy Policy</h2>
  <p class="lead">Your couch.  It is mine.</p>
  <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<div id="Email" class="reveal-modal small" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 id="modalTitle">Contact Us</h2>
  <p class="lead">Your couch.  It is mine.</p>
  <div class="" align="center">
            {!! Form::open(['route'=>'mail.store', 'method' => 'POST']) !!}
            <fieldset>
              <div class="row">
                <div class="large-6 columns">
                    {!! Form::text('Name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                </div>
                <div class="large-6 columns">
                    {!! Form::text('Email', null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
                </div>
              </div>
                <br>
                <br>
                <div class="row">
                  <div class="large-12 columns">
                      {!! Form::textarea('Message', null, ['placeholder' => 'Message', 'class' => 'form-control'])!!}
                  </div>
                </div>
                <br>
                {!! Form::submit('Save Changes' , array('class' => 'button')) !!}
            </fieldset>
            {!! Form::close() !!}
          </div>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
