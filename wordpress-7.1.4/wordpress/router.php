<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$file = __DIR__ . $uri;

// فایل‌های واقعی، از جمله فایل‌های PHP پیشخوان
if ($uri !== '/' && is_file($file)) {
    return false;
}

// فایل‌های واقعی دیگر
if ($uri !== '/' && is_dir($file)) {
    return false;
}

// درخواست‌های صفحات سایت
require __DIR__ . '/index.php';
