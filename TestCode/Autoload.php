<?php

//Autoload function
function load($class){
    $currentDir= __DIR__;
    $truncateUpto= "Tansport Booking System";
    $x= strpos($currentDir, $truncateUpto) + strlen($truncateUpto);
    $filepath= substr($currentDir, 0, $x)."/model/{$class}.php";
    if (file_exists($filepath)) include_once $filepath;
}

spl_autoload_register('load');