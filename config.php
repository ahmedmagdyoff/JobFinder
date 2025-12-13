<?php
date_default_timezone_set("Africa/Cairo");
$conn = mysqli_connect("127.0.0.1", "root", "", "jobfinder");
if (!$conn) die("DB Error");
function timeAgo($datetime)
{
    $seconds = time() - strtotime($datetime);
    if ($seconds < 60) return "منذ {$seconds} ثانية";
    $minutes = floor($seconds / 60);
    if ($minutes < 60) return "منذ {$minutes} دقيقة";
    $hours = floor($minutes / 60);
    if ($hours < 24) return "منذ {$hours} ساعة";
    $days = floor($hours / 24);
    if ($days < 30) return "منذ {$days} يوم";
    $months = floor($days / 30);
    if ($months < 12) return "منذ {$months} شهر";
    $years = floor($months / 12);
    return "منذ {$years} سنة";
}