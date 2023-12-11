<?php
$sourceDir = '/home';
$destinationRar = './ok.rar';

// اجرای دستور rar در خط فرمان برای فشرده‌سازی دایرکتوری
$cmd = "rar a -r $destinationRar $sourceDir";
$output = shell_exec($cmd);

echo "فایل RAR با موفقیت ایجاد شد!";
?>
