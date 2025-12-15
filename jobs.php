<?php $title = "الوظائف";
include "header.php"; ?>
<main class="jobs-container">
  <?php
  $jobs = mysqli_query($conn, "SELECT jobs.*, companies.name AS company_name FROM jobs JOIN companies ON jobs.company_id = companies.id ORDER BY jobs.created_at DESC");
  while ($job = mysqli_fetch_assoc($jobs)) {
  ?>
    <div class="job-card">
      <div class="card-body">
        <div class="card-meta">
          <span class="job-type"><?= $job['job_type'] ?></span>
          <span class="job-time"><?= timeAgo($job['created_at']) ?></span>
        </div>
        <h4 class="job-title"><?= $job['title'] ?></h4>
        <p class="job-company-location"><?= $job['company_name'] ?> - <?= $job['location'] ?></p>
        <div class="job-tags">
          <?php foreach (explode(',', $job['tags']) as $tag) { ?>
            <span class="job-tag"><?= trim($tag) ?></span>
          <?php } ?>
        </div>
        <a href="job.php?id=<?= $job['id'] ?>" class="apply-btn">تقديم الآن</a>
      </div>
    </div>
  <?php } ?>
</main>
<?php include "footer.php"; ?>