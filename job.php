<?php $title = "";
include "header.php"; ?>
<div class="details-box">
    <h1><?= $job['title'] ?></h1>
    <h2 strong>اسم الشركة:</strong> <?= $job['company_name'] ?></h2>
    <h2 strong>المكان:</strong> <?= $job['location'] ?></h2>
    <h2 strong>نوع العمل:</strong> <?= $job['job_type'] ?></h2>
    <h1>الوصف الوظيفي</h1>
    <h3><?= $job['description'] ?></h3>
    <h1>المهارات المطلوبة</h1>
    <ul>
        <?php foreach (explode(',', $job['tags']) as $tag): ?>
            <li><?= trim($tag) ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="jobs" class="btn">رجوع للوظائف</a>
</div>
<?php include "footer.php"; ?>