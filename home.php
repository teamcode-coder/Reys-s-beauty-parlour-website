<?php include('header.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reya's Beauty Lounge</title>


</head>

<body>

<!-- 🔥 INTRO SCREEN -->
<div class="intro">
  <h1 class="intro-text">Welcome to Reya's Beauty Parlour ✨</h1>
</div>


<!-- 🔥 SLIDER -->
<section class="slider">

  <div class="slide active">
    <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9">
    <div class="content">
      <h1>Glow Like Never Before</h1>
      <p>Professional Beauty Services</p>
    </div>
  </div>

  <div class="slide">
    <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348">
    <div class="content">
      <h1>Luxury Makeover</h1>
      <p>Bridal & Party Makeup</p>
    </div>
  </div>

  <div class="slide">
    <img src="https://images.unsplash.com/photo-1519415510236-718bdfcd89c8">
    <div class="content">
      <h1>Hair & Skin Care</h1>
      <p>Premium Salon Experience</p>
    </div>
  </div>

</section>


<script>

/* INTRO HIDE AFTER 3 SEC */
setTimeout(()=>{
  document.querySelector(".intro").style.opacity="0";
  setTimeout(()=>{
    document.querySelector(".intro").style.display="none";
  },1000);
},3000);


/* SLIDER */
let slides = document.querySelectorAll(".slide");
let index = 0;

function showSlide(){
  slides.forEach(s=>s.classList.remove("active"));
  slides[index].classList.add("active");

  index++;
  if(index>=slides.length) index=0;
}

setInterval(showSlide,3000);

</script>

</body>
</html>