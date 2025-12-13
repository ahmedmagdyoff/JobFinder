<?php require_once "config.php"; ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JobFinder - <?= $title ?></title>
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/login.css" rel="stylesheet" />
    <link href="assets/css/companies.css" rel="stylesheet" />
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
                    <a href="jobs.php">الوظائف</a>
                    <a href="companies.php">الشركات</a>
                    <a href="blog.php">المدونة</a>
                    <a href="contact.php">اتصل بنا</a>
                </nav>
            </div>
            <div class="login">
                <a href="login.php" class="login-btn">تسجيل الدخول</a>
            </div>
        </div>
    </header>