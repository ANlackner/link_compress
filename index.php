<?php
require 'vendor/autoload.php';
use Cocur\Slugify\Slugify;


$slugify->addRule("i", "ey");
echo $slugify->slugify("Hi"); // hey


$url = new \ANlackner\link_compress\MyUrl();
echo $url->slugify('https://www.example.at', "Das ist ein langer Text");