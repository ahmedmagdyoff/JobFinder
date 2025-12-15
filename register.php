<?php $title = "تسجيل الدخول";
include "header.php"; ?>
<div class="signup-container">
  <div class="signup-header">
    <h1 class="logo">JobFinder</h1>
    <p>ابدأ رحلتك المهنية معنا اليوم</p>
  </div>

  <div class="account-type-toggle">
    <button class="toggle-btn active" id="btnSeeker" onclick="setAccountType('seeker')">
      <i class="fa-solid fa-user"></i> باحث عن عمل
    </button>
    <button class="toggle-btn" id="btnEmployer" onclick="setAccountType('employer')">
      <i class="fa-solid fa-briefcase"></i> صاحب عمل
    </button>
  </div>

  <form id="signupForm">
    <input type="hidden" id="accountType" name="accountType" value="seeker">

    <div class="form-group">
      <label for="fullname">الاسم بالكامل</label>
      <div class="input-wrapper">
        <input type="text" id="fullname" placeholder="مثال: أحمد محمد" required>
        <i class="fa-regular fa-user input-icon"></i>
      </div>
    </div>

    <div class="form-group">
      <label for="email">البريد الإلكتروني</label>
      <div class="input-wrapper">
        <input type="email" id="email" placeholder="name@company.com" required>
        <i class="fa-regular fa-envelope input-icon"></i>
      </div>
    </div>

    <div class="form-group">
      <label for="password">كلمة المرور</label>
      <div class="input-wrapper">
        <input type="password" id="password" placeholder="••••••••" required>
        <i class="fa-regular fa-eye input-icon toggle-password" data-target="password"></i>
      </div>
      <div class="password-strength">
        <div class="strength-bar"></div>
      </div>
    </div>

    <div class="form-group">
      <label for="confirmPassword">تأكيد كلمة المرور</label>
      <div class="input-wrapper">
        <input type="password" id="confirmPassword" placeholder="••••••••" required>
        <i class="fa-regular fa-eye input-icon toggle-password" data-target="confirmPassword"></i>
      </div>
      <span class="error-msg" id="matchError"></span>
    </div>

    <div class="checkbox-group">
      <input type="checkbox" id="terms" required>
      <label for="terms">أوافق على <a href="#">الشروط والأحكام</a> و <a href="#">سياسة الخصوصية</a></label>
    </div>

    <button type="submit" id="submitBtn" class="btn-primary">
      <span class="btn-text">إنشاء الحساب</span>
      <i class="fa-solid fa-circle-notch fa-spin loading-icon hidden"></i>
    </button>
  </form>

  <div class="signup-footer">
    <p>لديك حساب بالفعل؟ <a href="C:\Users\pc\OneDrive\Desktop\50win\videoprojec\صفحة انشاء حساب\index1.html">سجل الدخول هنا</a></p>
  </div>
</div>
<?php include "footer.php"; ?>