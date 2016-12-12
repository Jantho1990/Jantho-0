<?php 
  $email = "jantho1990@gmail.com";
  $default = "nope.jpg";
  $size = 80;
  $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
 ?>
<?php echo $__env->make('includes._bodybeginning', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<header class="container-fluid">
  <div class="header-upper">
    <h2>
      <i class="fa fa-coffee" aria-hidden="true"></i><span>JANTHO</span>
    </h2>
    <hr>
    <nav id="nav">
      <ul>
        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Who I Am</a></li>
        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> What I Do</a></li>
        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Where I Work</a></li>
        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Spare Time</a></li>
        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Want To Know More?</a></li>
      </ul>
    </nav>
  </div>
  <div class="header-mid">
    <img class="my-face" src="<?php echo $grav_url; ?>" alt="and this is supposed to be Josh Anthony's face">
    <ul class="contact-me">
      <li><a target="_blank" href="mailto:jantho1990@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
      <li><a target="_blank" href="https://github.com/Jantho1990"><i class="fa fa-github" aria-hidden="true"></i></a></li>
      <li><a target="_blank" href="https://www.linkedin.com/in/josh-anthony-138818bb?trk=hp-identity-name"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
    </ul>
  </div>
  <div class="header-lower">
    <span>Copyright 2016 JANTHO.info</span>
    <span>All rights reserved.</span>
  </div>
</header>
