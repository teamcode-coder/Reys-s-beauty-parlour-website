<?php include('header.php'); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- CONTACT SECTION -->
<section style="padding: 60px 20px; background: white;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <h2 class="section-title" style="margin-bottom: 60px;">Get In Touch With Us</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px; margin-bottom: 60px;">
            <!-- CONTACT INFO CARDS -->
            <div style="padding: 30px; background: #f8f9fa; border-radius: 15px; text-align: center;">
                <div style="font-size: 40px; color: #ff69b4; margin-bottom: 15px;">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3 style="color: #1a1a1a; margin-bottom: 10px;">Location</h3>
                <p style="color: #666;">2/14, N.N Road, Rathinapuram, Madurai - 625011</p>
            </div>

            <div style="padding: 30px; background: #f8f9fa; border-radius: 15px; text-align: center;">
                <div style="font-size: 40px; color: #ff69b4; margin-bottom: 15px;">
                    <i class="fas fa-phone"></i>
                </div>
                <h3 style="color: #1a1a1a; margin-bottom: 10px;">Phone</h3>
                <p style="color: #666;"><a href="tel:9842048388" style="color: #ff69b4; text-decoration: none;">9842048388</a></p>
            </div>

            <div style="padding: 30px; background: #f8f9fa; border-radius: 15px; text-align: center;">
                <div style="font-size: 40px; color: #ff69b4; margin-bottom: 15px;">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 style="color: #1a1a1a; margin-bottom: 10px;">Hours</h3>
                <p style="color: #666;">Mon - Sun<br>10:00 AM - 8:00 PM</p>
            </div>
        </div>

        <!-- CONTACT FORM & MAP -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
            <!-- CONTACT FORM -->
            <div>
                <h3 style="color: #1a1a1a; margin-bottom: 25px; font-size: 24px;">Send us a Message</h3>
                <form onsubmit="sendMsg(); return false;" style="background: #f8f9fa; padding: 30px; border-radius: 15px;">
                    <div style="margin-bottom: 20px;">
                        <input type="text" id="name" placeholder="Your Name" required 
                            style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 15px;">
                    </div>

                    <div style="margin-bottom: 20px;">
                        <input type="email" id="email" placeholder="Your Email" required 
                            style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 15px;">
                    </div>

                    <div style="margin-bottom: 20px;">
                        <textarea id="msg" placeholder="Your Message" required 
                            style="width: 100%; padding: 12px 15px; border: 1px solid #ddd; border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 15px; min-height: 120px; resize: vertical;"></textarea>
                    </div>

                    <button type="submit" class="btn-primary" style="width: 100%; padding: 14px; font-size: 16px; border: none; cursor: pointer;">
                        Send Message
                    </button>
                </form>

                <!-- SOCIAL LINKS -->
                <div style="margin-top: 30px; text-align: center;">
                    <h4 style="color: #1a1a1a; margin-bottom: 15px;">Connect With Us</h4>
                    <div style="display: flex; gap: 15px; justify-content: center;">
                        <a href="https://wa.me/919842048388" target="_blank" class="social-btn whatsapp" title="WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="https://instagram.com/" target="_blank" class="social-btn instagram" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://facebook.com/" target="_blank" class="social-btn facebook" title="Facebook">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- GOOGLE MAP -->
            <div>
                <h3 style="color: #1a1a1a; margin-bottom: 25px; font-size: 24px;">Visit Us</h3>
                <iframe style="width: 100%; height: 400px; border-radius: 15px; border: 1px solid #ddd;" 
                    src="https://www.google.com/maps?q=2/14,N.N.Road,Madurai&output=embed"></iframe>
            </div>
        </div>
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
  
  // Reset form
  document.querySelector('form').reset();
}
</script>

<?php include('footer.php'); ?>
