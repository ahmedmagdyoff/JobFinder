<?php $title = "تسجيل الدخول";
include "header.php"; ?>
<div class="login">
  <div class="container">
    <div class="box">
      <div class="header">
        <h1 class="title">تسجيل الدخول</h1>
      </div>
      <div class="content">
        <form method="post">
          <div class="email">
            <label for="email">البريد الإلكتروني</label>
            <input type="email" name="email" placeholder="أدخل بريدك الإلكتروني" required />
          </div>
          <div class="password">
            <label for="password">كلمة المرور</label>
            <input type="password" name="password" placeholder="أدخل كلمة مرورك" required />
          </div>
          <input type="submit" value="تسجيل الدخول" />
        </form>
      </div>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>