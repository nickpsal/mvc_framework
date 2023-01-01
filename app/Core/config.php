<?php
    defined('ROOTPATH') OR exit('Access Denied!');
    define("APP_NAME", "MVC Framework");
    define("APP_DESC", "MVC Framework Version 2");
    define("DEBUG", true);
    if ($_SERVER['SERVER_NAME'] == '127.0.0.1' or  $_SERVER['SERVER_NAME'] == 'localhost') {
        define('ROOT', 'http://127.0.0.1/mvc_framework/public');
        define('URL', 'http://127.0.0.1/mvc_framework');
        define('DB_HOST', 'localhost');
        define('DB_USER', 'root');
        define('DB_PASS', 'toor');
        define('DB_NAME', 'mvc_db');
    }else {
        define('ROOT', $_SERVER['HTTP_HOST'] . '/public');
        define('URL', $_SERVER['HTTP_HOST']);
        define('DB_HOST', 'localhost');
        define('DB_USER', 'root');
        define('DB_PASS', 'toor');
        define('DB_NAME', 'mvc_db');
    }
