<?php
$sourceDir = '/home';
$destinationRar = './ok.rar';
$cmd = "rar a -r $destinationRar $sourceDir";
$output = shell_exec($cmd);
echo "فایل RAR با موفقیت ایجاد شد!";
?>
