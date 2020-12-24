<?php

namespace preloader;


function debug()
{
    $vars = func_get_args();
    $backtrace = debug_backtrace();
    foreach ($vars as $var) {
        var_dump($var);
    }
    exit;
}