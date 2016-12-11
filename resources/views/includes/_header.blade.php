@php
  $email = "jantho1990@gmail.com";
  $default = "nope.jpg";
  $size = 80;
  $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
@endphp
@include('includes._bodybeginning')
<header class="container-fluid">
  <div class="header-upper">
    <h2>
      <i class="fa fa-coffee" aria-hidden="true"></i><span>JANTHO</span>
    </h2>
    <hr>
    <nav id="nav">
      <ul>
        <li>
          <a href="#">
            <i class="fa fa-caret-right" aria-hidden="true"></i> Who I Am
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-caret-right" aria-hidden="true"></i> What I Do
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-caret-right" aria-hidden="true"></i> What I Like
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="header-mid">
    <img src="{!! $grav_url !!}" alt="and this is supposed to be Josh Anthony's face">
    <ul>
      <li>jantho1990@gmail.com</li>
      <li><a href="https://github.com/Jantho1990">github.com/jantho1990</a></li>
    </ul>
  </div>
  <div class="header-lower">
    <span>Copyright 2016 JANTHO.info</span>
    <span>All rights reserved.</span>
  </div>
</header>
