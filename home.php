<?php include('header.php'); ?>

<div class="slider">

  <div class="slides">

    <div class="slide active">
      <img src="images/logo.jpeg">
      
    </div>

    <div class="slide">
      <img src="images/logo.jpeg">
       </div>

    <div class="slide">
      <img src="images/logo.jpeg">
      </div>

  </div>

</div>

<script>
let slides = document.querySelectorAll('.slide');
let index = 0;

function showSlide(){
  slides.forEach((slide) => slide.classList.remove('active'));
  slides[index].classList.add('active');

  index++;
  if(index >= slides.length){
    index = 0;
  }
}

setInterval(showSlide, 3000);
</script>