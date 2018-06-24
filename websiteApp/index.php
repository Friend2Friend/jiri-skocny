<?php

  include './includes/header.php';

?>

<main id='<?php echo strtolower($current_page)?>'>
  <!-- parallax section -->
  <section id="parallax">
    <div class="heading-parallax">
      <h1>WebApp</h1>
    </div>
    <div class="small-particles particles"></div>
    <div class="tiny-particles particles"> </div>
  </section>
  <!-- info section -->
  <section class='container' id="info">
    <h1>WebApp's from outer space!</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis adipisci aut, obcaecati vitae excepturi molestias corporis optio ipsum praesentium nobis?</p>
    <div class="btn">
      <button>
        find out more
      </button>
    </div>
    <div class="flex-box container">
      <a href="" class="box">
        <div class="text-box">
          <h3>Modern design</h3>
          <p>We are looking forward to best modern solutions.</p>
        </div>
      </a>
      <a href="" class="box">
        <div class="text-box">
          <h3>Speed</h3>
          <p>High speed, low cost.</p>
        </div>
      </a>
      <a href="" class="box">
        <div class="text-box">
          <h3>Professionality</h3>
          <p>Professionals from every corner of world.</p>
        </div>
      </a>
    </div>
  </section>
  <!-- carousel section -->
  <div class="container carousel-section">
    <aside id="carousel-wrapper" class='overflow-hidden'>
      <div class="carousel">
        <div class="carousel-box">
          <img src="./assets/images/image/img-4.jpeg" alt="img4">
        </div>
        <div class="carousel-box">
          <img src="./assets/images/image/img-1.jpg" alt="img1">
        </div>
        <div class="carousel-box">
          <img src="./assets/images/image/img-2.jpg" alt="img2">
        </div>
        <div class="carousel-box">
          <img src="./assets/images/image/img-3.jpeg" alt="img3">
        </div>
        <div class="carousel-box">
          <img src="./assets/images/image/img-4.jpeg" alt="img4">
        </div>
        <div class="carousel-box">
          <img src="./assets/images/image/img-1.jpg" alt="img1">
        </div>
      </div>
      <a href="#">
        <div id="left-arrow">
          <span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
        </div>
      </a>
      <a href="#">
        <div id="right-arrow">
          <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
        </div>
      </a>
    </aside>
  </div>
</main>

<?php

  include "./includes/footer.php";

?>
  
