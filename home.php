<?php include('header.php'); ?>

<!-- HERO SECTION -->
<section class="hero">
    <div class="hero-content">
        <h1>Welcome to Reya's Beauty Lounge</h1>
        <p>Professional beauty and salon services designed to make you feel confident and beautiful. Experience luxury treatments with our certified experts.</p>
        <div class="cta-buttons">
            <a href="booking.php" class="btn-primary">Book an Appointment</a>
            <a href="package.php" class="btn-secondary">Explore Packages</a>
        </div>
    </div>
</section>

<!-- FEATURES SECTION -->
<section class="features-section">
    <div class="features-container">
        <h2 class="section-title">Why Choose Reya's Beauty Lounge?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-crown"></i>
                </div>
                <h3>Premium Services</h3>
                <p>Experience luxury beauty treatments with the latest techniques and premium products for exceptional results.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <h3>Certified Experts</h3>
                <p>Our team consists of professionally trained and certified beauty experts with years of experience.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-spa"></i>
                </div>
                <h3>Hygienic Environment</h3>
                <p>We maintain the highest standards of cleanliness and hygiene for your safety and comfort.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-tag"></i>
                </div>
                <h3>Affordable Pricing</h3>
                <p>Premium quality beauty services at reasonable prices without compromising on quality.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Personalized Care</h3>
                <p>We tailor our services to meet your individual needs and preferences.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h3>Customer Satisfaction</h3>
                <p>Your satisfaction is our priority. We go the extra mile to exceed your expectations.</p>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>



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