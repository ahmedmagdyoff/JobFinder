<?php $title = "تسجيل الدخول";
include "header.php"; ?>
<div class="login-container">
  <div class="login-header">
    <h1 class="logo">JobFinder</h1>
    <p>مرحباً بعودتك! الرجاء إدخال بياناتك</p>
  </div>

  <form id="loginForm">
    <div class="form-group">
      <label for="email">البريد الإلكتروني</label>
      <div class="input-wrapper">
        <input type="email" id="email" placeholder="name@company.com" required>
        <i class="fa-regular fa-envelope input-icon"></i>
      </div>
      <span class="error-msg" id="emailError"></span>
    </div>

    <div class="form-group">
      <div class="label-row">
        <label for="password">كلمة المرور</label>
        <a href="#" class="forgot-pass">نسيت كلمة المرور؟</a>
      </div>
      <div class="input-wrapper">
        <input type="password" id="password" placeholder="••••••••" required>
        <i class="fa-regular fa-eye input-icon toggle-password" id="togglePassword"></i>
      </div>
      <span class="error-msg" id="passwordError"></span>
    </div>

    <button type="submit" id="submitBtn" class="btn-primary">
      <span class="btn-text">تسجيل الدخول</span>
      <i class="fa-solid fa-circle-notch fa-spin loading-icon hidden"></i>
    </button>
  </form>

  <div class="divider">
    <span>أو</span>
  </div>

  <div class="login-footer">
    <p>ليس لديك حساب؟ <a href="#">أنشئ حساباً جديداً</a></p>
  </div>
</div>
<?php include "footer.php"; ?>