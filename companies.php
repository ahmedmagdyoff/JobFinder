<?php $title = "الشركات";
include "header.php"; ?>
<div class="companies">
  <div class="container">
    <div class="header">
      <h1 class="title">الشركات</h1>
    </div>
    <div class="content">
      <div class="search">
        <input type="text" placeholder="ابحث عن شركة..." />
      </div>
      <div class="companies">
        <?php
        $companies = mysqli_query($conn, "SELECT * FROM companies");
        while ($company = mysqli_fetch_assoc($companies)) {
        ?>
          <div class="company-card">
            <img class="logo" src="assets/images/companies/<?= $company['logo'] ?>" alt="<?= $company['name'] ?>">
            <h3><?= $company['name'] ?></h3>
            <p><?= $company['description'] ?></p>
            <!-- <a href="#">زيارة</a> -->
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>