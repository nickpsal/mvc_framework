<?php
    session_start();
    /**  Path to this file **/
    define('ROOTPATH', __DIR__ . DIRECTORY_SEPARATOR);
    /** required files **/ 
    require "../app/Core/init.php";
    /**error display */
    DEBUG ? ini_set("display_errors", 1) : ini_set("display_errors", 0);
    /** check php version req **/
    check_min_php_version();
    check_extensions();
    $app = new App;