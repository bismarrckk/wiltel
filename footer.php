  <a href="https://wa.me/254718598249" class="whatsapp-float" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" />
  </a>
 <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about ">
          <h4>Wiltel</h4>
          <div class="footer-contact pt-3">
            <p>Tengecha Harambee Rd</p>
            <p>Kericho,Kenya</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+254 720625454</span></p>
            <p><strong>Email:</strong> <span>info@wiltel.co.ke</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="index.php">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="about.php">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="contact.php">Contact Us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="faq.php">FAQs</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="contact.php">Fiber Solutions</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="contact.php">Wireless Solutions</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="contact.php">CCTV Installation</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="contact.php">web/App development</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>You can also reach us through our social media platforms below</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>
  </footer>
   <section id="featured-services" class="featured-services section py-2 text-center" style="background: #106eea;color:#fff">
   <div class="container copyright text-center footer2" style="background: #106eea;color:#fff;padding:1rem">
     
   <p>All Rights Reserved | Copyright 2026 © Wiltel </p>
    </div>
   </section>
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script>
document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".php-email-form");

  form.addEventListener("submit", function (e) {
    e.preventDefault(); // STOP actual submit

    // Elements
    const loading = form.querySelector(".loading");
    const errorMessage = form.querySelector(".error-message");
    const sentMessage = form.querySelector(".sent-message");

    // Reset states
    loading.style.display = "block";
    errorMessage.style.display = "none";
    sentMessage.style.display = "none";

    // Simulate sending delay
    setTimeout(() => {
      loading.style.display = "none";
      sentMessage.style.display = "block";
      form.reset(); // clear form
    }, 1000);
  });
});
</script>
<canvas id="snow"></canvas>

<script>
const canvas = document.getElementById("snow");
const ctx = canvas.getContext("2d");

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const emojis = ["🎄"];
const flakes = Array.from({ length: 40 }, () => ({
  x: Math.random() * canvas.width,
  y: Math.random() * canvas.height,
  size: Math.random() * 18 + 12,
  speed: Math.random() * 1.2 + 0.5,
  emoji: emojis[Math.floor(Math.random() * emojis.length)]
}));

function draw() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  flakes.forEach(f => {
    ctx.font = `${f.size}px serif`;
    ctx.fillText(f.emoji, f.x, f.y);
    f.y += f.speed;

    if (f.y > canvas.height) {
      f.y = -20;
      f.x = Math.random() * canvas.width;
    }
  });
  requestAnimationFrame(draw);
}

draw();

window.addEventListener("resize", () => {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
});
</script>




  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>