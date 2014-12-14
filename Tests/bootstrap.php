<?php
function loader($class)
{
    $file = strtolower($class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
}

spl_autoload_register('loader');
