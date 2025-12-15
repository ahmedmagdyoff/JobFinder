<?php $title = "اتصل بنا";
include "header.php"; ?>
<div class="contact-container">
  <h1>تواصل معنا</h1>
  <p class="tagline">نحن هنا للإجابة على استفساراتك ومساعدتك في العثور على وظيفة أحلامك.</p>

  <section class="contact-links">
    <a href="mailto:info@yourjobfinder.com" class="contact-card" data-service="gmail">
      <i class="fas fa-envelope"></i>
      <span>Gmail</span>
    </a>

    <a href="https://wa.me/01125084496" target="_blank" class="contact-card" data-service="whatsapp">
      <i class="fab fa-whatsapp"></i>
      <span>WhatsApp</span>
    </a>

    <a href="https://www.facebook.com/mohamed.m.zaki.175826" target="_blank" class="contact-card" data-service="facebook">
      <i class="fab fa-facebook-f"></i>
      <span>Facebook</span>
    </a>

    <a href="https://instagram.com/YourJobFinder" target="_blank" class="contact-card" data-service="instagram">
      <i class="fab fa-instagram"></i>
      <span>Instagram</span>
    </a>
  </section>

  <section class="contact-form-section">
    <h2>أرسل لنا رسالة</h2>
    <form id="contactForm">
      <input type="text" placeholder="اسمك الكريم" required>
      <input type="email" placeholder="بريدك الإلكتروني" required>
      <textarea placeholder="رسالتك..." rows="5" required></textarea>
      <button type="submit" class="submit-button">إرسال</button>
    </form>
  </section>
</div>
<?php include "footer.php"; ?>