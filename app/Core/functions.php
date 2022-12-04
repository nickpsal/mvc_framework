<?php
    function show($stuff)
    {
        echo "<pre>";
        print_r($stuff);
        echo "</pre>";
    }

    function esc($str) {
        return htmlspecialchars($str);
    }

    function redirect($page) {
        header("Location: " . ROOT . "/" . $page);
        die();
    }

    function ismethodPost() {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            return true;
        }else{
            return false;
        }
    }

    function ismethodGet() {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            return true;
        }else{
            return false;
        }
    }
