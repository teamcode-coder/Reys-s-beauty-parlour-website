<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Contact - Reya's Beauty Lounge</title>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

<section class="contact-section">

  <h1 class="title">Get In Touch </h1>

  <div class="contact-container">

    <!-- LEFT SIDE -->
    <div class="contact-left">

      <h2>Reya's Beauty Lounge</h2>

      <p><i class="fas fa-map-marker-alt"></i> 2/14, N.N Road, Rathinapuram, Madurai - 625011</p>

      <p><i class="fas fa-phone"></i> 9842048388</p>

      <!-- SOCIAL -->
      <div class="social">

        <!-- WhatsApp -->
        <a href="https://wa.me/919842048388" target="_blank" class="whatsapp">
          <i class="fab fa-whatsapp"></i>
        </a>

        <!-- Instagram (link change panniko) -->
        <a href="https://instagram.com/" target="_blank" class="instagram">
          <i class="fab fa-instagram"></i>
        </a>

      </div>

    </div>


    <!-- RIGHT SIDE FORM -->
    <div class="contact-right">

      <h2>Send Message</h2>

      <form onsubmit="sendMsg(); return false;">

        <input type="text" id="name" placeholder="Your Name" required>

        <input type="email" id="email" placeholder="Your Email" required>

        <textarea id="msg" placeholder="Your Message"></textarea>

        <button type="submit">Send Message</button>

      </form>

    </div>

  </div>


  <!-- GOOGLE MAP -->
  <div class="map">
    <iframe src="https://www.google.com/maps?q=2/14,N.N.Road,Madurai&output=embed"></iframe>
  </div>

</section>

<script>
function sendMsg(){
  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let msg = document.getElementById("msg").value;

  let url = "https://wa.me/919842048388?text="
    + "Name: " + name + "%0A"
    + "Email: " + email + "%0A"
    + "Message: " + msg;

  window.open(url, "_blank");
}
</script>

</body>
</html>