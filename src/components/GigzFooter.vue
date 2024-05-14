<template>
  <footer class="footer-container">
    <div class="footer-logo">
      <img src="../assets/GigzFooter.png" alt="Gigz Logo" />
    </div>
    <div class="footer-copyright">
      &copy; 2024 Gigz Inc
    </div>
    <div class="footer-socials">
      <a href="https://www.facebook.com/playgigz" aria-label="Facebook" class="social-icon">
        <i class="fab fa-facebook"></i>
      </a>
      <a href="https://twitter.com/playgigz" aria-label="Twitter" class="social-icon">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="https://twitter.com/playgigz" aria-label="Instagram" class="social-icon">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="#" aria-label="Spotify" class="social-icon">
        <i class="fab fa-spotify"></i>
      </a>
      <a href="https://www.youtube.com/@playgigz" aria-label="YouTube" class="social-icon">
        <i class="fab fa-youtube"></i>
      </a>
      <a href="https://www.tiktok.com/@playgigz" aria-label="TikTok" class="social-icon">
        <i class="fab fa-tiktok"></i>
      </a>
    </div>
    <div class="footer-links">
      <a href="#" class="footer-link">FAQ</a>
      <a href="#" class="footer-link">PRIVACY</a>
      <a href="#" class="footer-link">TERMS</a>
      <a href="#" class="footer-link">DO NOT SELL MY INFORMATION</a>
    </div>
  </footer>
</template>

<script>
export default {
  name: 'FooterComponent'
}
</script>

<style scoped>
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');

.footer-container {
  background-color: #000;
  color: #fff;
  text-align: center;
  padding: 40px 0; /* Increased padding for more spacing */
  font-family: 'Lab Grotesque', sans-serif;
  font-weight: bold;
}

.footer-logo img {
  width: 100px;
  margin-bottom: 20px; /* Increased margin-bottom for more spacing */
}

.footer-copyright {
  margin-bottom: 40px; /* Increased margin-bottom for more spacing */
  font-size: 14px;
}

.footer-socials {
  display: flex;
  justify-content: center;
  gap: 50px; /* Increased gap for more spacing */
  margin-bottom: 50px; /* Increased margin-bottom for more spacing */
}

.footer-socials .social-icon {
  color: #fff;
  font-size: 24px;
  text-decoration: none;
}

.footer-links {
  display: flex;
  justify-content: center;
  gap: 80px; /* Increased gap for more spacing */
  font-size: 12px;
  
  
}

.footer-links .footer-link {
  color: #A4A4A4;
  text-decoration: none;
}

.footer-links .footer-link:hover {
  text-decoration: underline;
}
</style>
