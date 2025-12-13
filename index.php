<?php $title = "أفضل فرص العمل في العالم العربي";
include "header.php"; ?>
<div class="home">
    <section class="hero-section">
        <div class="hero-content">
            <h2 class="hero-title">ابحث عن وظيفة أحلامك</h2>
            <p class="hero-subtitle">
                أكثر من 30,000 وظيفة جديدة يوميًا في مصر والخليج
            </p>
            <div class="search-bar-container">
                <div class="search-bar">
                    <input
                        type="text"
                        placeholder="المسمى الوظيفي أو المهارات..."
                        class="search-input" />
                    <input
                        type="text"
                        placeholder="المدينة أو العمل عن بُعد"
                        class="search-input" />
                    <button class="search-btn">بحث</button>
                </div>
            </div>
            <div class="stats-bar">
                <span>30,000+ وظيفة نشطة</span>
                <span class="separator">•</span>
                <span>8,500+ شركة موثقة</span>
                <span class="separator">•</span>
                <span>150,000+ طلب يومي</span>
            </div>
        </div>
    </section>
    <div class="container">
        <section class="latest-jobs-section">
            <div class="section-container">
                <h3 class="section-title">أحدث الوظائف المضافة</h3>
                <p class="section-subtitle">
                    تم إضافة هذه الوظائف خلال الـ 24 ساعة الأخيرة
                </p>
                <div class="jobs-grid">
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
                                <button class="apply-btn">تقديم الآن</button>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </div>
</div>
<?php include "footer.php"; ?>