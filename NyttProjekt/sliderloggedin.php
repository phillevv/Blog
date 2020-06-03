<!-- Slider på Start sidan -->    

<div id="carouselExampleCaptions" class="carousel slide shadow p-3 mb-5 bg-white rounded" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
   
        <?php include('toppostloggedin.php') ?>

    </div>
    <div class="carousel-item">
     <?php include('topbloggerloggedin.php') ?>

    </div>
    <div class="carousel-item">
        
         <?php include('newbloggerloggedin.php') ?>

    </div>
  </div>
  <a  class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span id="next"  class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span id="next"  class="sr-only">Previous</span>
  </a>
  <a   class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span id="next"  class="carousel-control-next-icon" aria-hidden="true"></span>
    <span id="next" class="sr-only">Next</span>
  </a>
</div> 