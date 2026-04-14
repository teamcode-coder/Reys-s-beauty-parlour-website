<?php include('header.php'); ?>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<div class="service-container">

  <h1 class="title">Our Services ✨</h1>

  <div class="service-grid">

    <!-- Beauty -->
    <div class="service-box">
      <div class="icon"><i class="fas fa-spa"></i></div>
      <h2>Beauty Boost Packages 💅</h2>
      <ul>
        <li><i class="fas fa-check"></i> Facial</li>
        <li><i class="fas fa-check"></i> Threading</li>
        <li><i class="fas fa-check"></i> Waxing</li>
        <li><i class="fas fa-check"></i> Pedicure</li>
        <li><i class="fas fa-check"></i> Manicure</li>
      </ul>
    </div>

    <!-- Hair -->
    <div class="service-box">
      <div class="icon"><i class="fas fa-cut"></i></div>
      <h2>Hair Services 💇‍♀️</h2>
      <ul>
        <li><i class="fas fa-check"></i> Hair Cut</li>
        <li><i class="fas fa-check"></i> Hair Smoothing</li>
        <li><i class="fas fa-check"></i> Hair Botox</li>
        <li><i class="fas fa-check"></i> Nano Plastia</li>
        <li><i class="fas fa-check"></i> Advanced Hair Cut</li>
        <li><i class="fas fa-check"></i> Hair Colouring</li>
        <li><i class="fas fa-check"></i> Henna Application</li>
      </ul>
    </div>

    <!-- Relaxation -->
    <div class="service-box">
      <div class="icon"><i class="fas fa-leaf"></i></div>
      <h2>Relaxation Rebond Package 🌿</h2>
      <ul>
        <li><i class="fas fa-check"></i> Full Body Massage</li>
        <li><i class="fas fa-check"></i> Full Body Polishing</li>
        <li><i class="fas fa-check"></i> Head Oil Massage</li>
        <li><i class="fas fa-check"></i> Hair Spa</li>
        <li><i class="fas fa-check"></i> Keratin Hair Spa</li>
      </ul>
    </div>

  </div>

</div>
<script>
const cards = document.querySelectorAll(".service-box");

cards.forEach(card => {
  card.addEventListener("mousemove", (e) => {
    const rect = card.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    const centerX = rect.width / 2;
    const centerY = rect.height / 2;

    const rotateX = -(y - centerY) / 10;
    const rotateY = (x - centerX) / 10;

    card.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.05)`;
  });

  card.addEventListener("mouseleave", () => {
    card.style.transform = "rotateX(0) rotateY(0) scale(1)";
  });
});
</script>
<div class="why-section">

  <h2 class="why-title">Why Choose Us 💎</h2>

  <div class="why-cards">

    <div class="why-card">
      <div class="why-inner">
        <div class="why-front">
          <i class="fas fa-user-check"></i>
          <h3>Certified Experts</h3>
        </div>
        <div class="why-back">
          <p>Our team is professionally trained and certified.</p>
        </div>
      </div>
    </div>

    <div class="why-card">
      <div class="why-inner">
        <div class="why-front">
          <i class="fas fa-star"></i>
          <h3>Premium Products</h3>
        </div>
        <div class="why-back">
          <p>We use only high-quality branded products.</p>
        </div>
      </div>
    </div>

    <div class="why-card">
      <div class="why-inner">
        <div class="why-front">
          <i class="fas fa-shield-alt"></i>
          <h3>Hygienic Care</h3>
        </div>
        <div class="why-back">
          <p>Clean and safe environment for all services.</p>
        </div>
      </div>
    </div>

    <div class="why-card">
      <div class="why-inner">
        <div class="why-front">
          <i class="fas fa-tags"></i>
          <h3>Affordable</h3>
        </div>
        <div class="why-back">
          <p>Best quality services at reasonable prices.</p>
        </div>
      </div>
    </div>

  </div>

</div>