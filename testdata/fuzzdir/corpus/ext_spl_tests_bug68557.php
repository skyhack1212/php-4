<?php
mkdir(__DIR__ . DIRECTORY_SEPARATOR . 'tmp');
touch(__DIR__ . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . 'a');
touch(__DIR__ . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . 'b');

$d = new DirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . 'tmp');

$d->seek(0);
$path0 = $d->current()->getPathname();

$d->seek(1);
$path1 = $d->current()->getPathname();

$d->seek(2);
$path2 = $d->current()->getPathname();

$d->seek(0);
var_dump($path0 === $d->current()->getPathname());

$d->seek(1);
var_dump($path1 === $d->current()->getPathname());

$d->seek(2);
var_dump($path2 === $d->current()->getPathname());

$d->seek(0);
var_dump($path0 === $d->current()->getPathname());
?>
