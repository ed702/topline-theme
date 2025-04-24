<div class="footer-top-nav">
  <?php
    wp_nav_menu([
        'theme_location' => 'footer-menu',
        'container' => false,
        'menu_class' => 'footer-menu',
        'fallback_cb' => false
    ]);
  ?>


</div>


<footer class="main-footer">
    <div class="footer-top">
      <div class="footer-column logo">
      <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/Artboard_2__2_-removebg-preview.png" >
        <div class="logo-text">
          <p>TRAVEL AND TOURISM AGENCY</p>
        </div>
      </div>
  
      <div class="footer-column">
        <h4>القائمة الرئيسية</h4>
        <ul>
          <li><span>-</span><a href="#">الرئيسية</a></li>
          <li><span>-</span><a href="#">نبذة عنا</a></li>
          <li><span>-</span><a href="#">البرامج السياحية</a></li>
          <li><span>-</span><a href="#">خدمات السفر</a></li>
          <li><span>-</span><a href="#">التأشيرات</a></li>
        </ul>
      </div>
  
      <div class="footer-column">
        <h4>روابط تهمك</h4>
        <ul>
          <li><span>-</span><a href="#">عنوان الموقع أو رابط له</a></li>
          <li><span>-</span><a href="#">عنوان الموقع أو رابط له</a></li>
          <li><span>-</span><a href="#">عنوان الموقع أو رابط له</a></li>
          <li><span>-</span><a href="#">عنوان الموقع أو رابط له</a></li>
          <li><span>-</span><a href="#">عنوان الموقع أو رابط له</a></li>
        </ul>
      </div>
  
      <div class="footer-column contact">
        <h4>اتصل بنا</h4>
        <ul>
          <li><i class="fa-solid fa-location-dot"></i> حي - الزهور</li>
          <li><i class="fa-solid fa-phone"></i> 00966000000000</li>
          <li><i class="fa-solid fa-phone"></i> 00966000000000</li>
          <li><i class="fa-solid fa-envelope"></i> info@example.com</li>
        </ul>
      </div>
    </div>
  
    <div class="footer-bottom">
      <div class="copyright">
        <p> جميع الحقوق محفوظة لدى موقع أفراس للسفر والسياحة© 2024</p>
      </div>
  
      <div class="footer-icons">
        <div class="social">
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-telegram"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-tiktok"></i></a>
        </div>
</div>
</div>
  </footer>
  <?php wp_footer(); ?>


<script>
  const scrollTopBtn = document.getElementById("scrollTopBtn");

  window.onscroll = function () {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
      scrollTopBtn.style.display = "block";
    } else {
      scrollTopBtn.style.display = "none";
    }
  };

  scrollTopBtn.onclick = function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  };
</script>
</body>
</html>


