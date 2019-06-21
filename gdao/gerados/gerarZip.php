<?php

$dir = $_GET['nome'];

// the name of your zip archive to be created
$zipfile = $_GET['nome'].'.zip';

// DO NOT TOUCH BELOW IF YOU DONT KNOW WHAT IT IS
// all the process below

$filenames = array();

// function that browse the directory and all subdirectories inside

function browse($dir) {
global $filenames;
    if ($handle = opendir($dir)) {
        while (false !== ($file = readdir($handle))) {
            if ($file != "." && $file != ".." && is_file($dir.'/'.$file)) {
                $filenames[] = $dir.'/'.$file;
            }
            else if ($file != "." && $file != ".." && is_dir($dir.'/'.$file)) {
                browse($dir.'/'.$file);
            }
        }
        closedir($handle);
    }
    return $filenames;
}

browse($dir);

// creating zip archive, adding browsed files

$zip = new ZipArchive();

if ($zip->open($zipfile, ZIPARCHIVE::CREATE)!==TRUE) {
    exit("cannot open <$zipfile>\n");
}

foreach ($filenames as $filename) {
    $zip->addFile($filename,$filename);
}

$zip->close();

header("location:../index.php?nome=$dir");
?>