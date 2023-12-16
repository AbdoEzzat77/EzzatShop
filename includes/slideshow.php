<section class="py-5">
    <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-inner">

 <?php foreach($slides as $sld): ?>

  <div class="carousel-item <?php if($sld=='s3.jpg') echo 'active' ?>">
  <img src="images/slide/<?=$sld?>"class="d-block w-100" alt="...">
 
 </div>
 <?php endforeach; ?>

 </div>
  </div><!--  carousel-inner -->

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div><!-- container -->
</section>

