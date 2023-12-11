<?php
$dirPath = '/home';
$zipFileName = 'ok.zip';

$zip = new ZipArchive();
if ($zip->open($zipFileName, ZipArchive::CREATE) === TRUE){
    $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dirPath));
    foreach ($files as $file){
        $filePath = $file->getRealPath();
        $relativePath = substr($filePath, strlen($dirPath) + 1);
        if (!is_dir($filePath)){
            $zip->addFile($filePath, $relativePath);
        }
    }
    $zip->close();
    echo 'دایرکتوری فشرده‌سازی و در فایل ' . $zipFileName . ' ذخیره شد.';
} else {
    echo 'خطا در ایجاد فایل زیپ';
}
?>
