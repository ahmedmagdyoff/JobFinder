<?php require_once "config.php";
$id;
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $job = mysqli_fetch_assoc(mysqli_query($conn, "
        SELECT jobs.*, companies.name AS company_name
        FROM jobs
        JOIN companies ON jobs.company_id = companies.id
        WHERE jobs.id = $id
        LIMIT 1
        "));
    $title = $job['title'];
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JobFinder - <?= $title ?></title>
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/login.css" rel="stylesheet" />
    <link href="assets/css/blog.css" rel="stylesheet" />
    <link href="assets/css/jobs.css" rel="stylesheet" />
    <link href="assets/css/job.css" rel="stylesheet" />
    <link href="assets/css/companies.css" rel="stylesheet" />
    <link href="assets/css/contact.css" rel="stylesheet" />
    <link href="assets/css/calculator.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;900&display=swap" rel="stylesheet" />
</head>

<body>
    <header>
        <div class="content">
            <div class="logo">
                <a href="/" class="logo">
                    <h1>JobFinder</h1>
                </a>
            </div>
            <div class="menu">
                <nav>
                    <a href="/">الرئيسية</a>
                    <a href="jobs">الوظائف</a>
                    <a href="companies">الشركات</a>
                    <a href="blog">المدونة</a>
                    <a href="contact">اتصل بنا</a>
                </nav>
            </div>
            <div class="login">
                <a href="login" class="login-btn">تسجيل الدخول</a>
            </div>
        </div>
    </header>