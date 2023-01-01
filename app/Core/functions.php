<?php
    defined('ROOTPATH') OR exit('Access Denied!');
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

    function check_min_php_version(){
        /**  Valid PHP Version? **/
        $minPHPVersion = '8.0';
        if (phpversion() < $minPHPVersion)
        {
            die("Your PHP version must be {$minPHPVersion} or higher to run this app. Your current version is " . phpversion());
        }
    }

    function check_extensions(){
        $required_extensions = [
            'gd',
            'mysqli',
            'pdo_mysql',
            'pdo_sqlite',
            'curl',
            'fileinfo',
            'intl',
            'exif',
            'mbstring',
        ];
        $not_loaded = [];
        foreach ($required_extensions as $ext) {
            if(!extension_loaded($ext)){
                $not_loaded[] = $ext;
            }
        }
        if(!empty($not_loaded)){
            show("Please load the following extensions in your php.ini file: <br>".implode("<br>", $not_loaded));
            die;
        }
    }

    /** load image. if not exist, load placeholder **/
    function get_image(mixed $file = '', string $type = 'post'): string {
        $file = $file ?? '';
        if (file_exists($file)) {
            return ROOT . "/" . $file;
        }
        if ($type == 'user') {
            return ROOT . "/assets/images/user.webp";
        } else {
            return ROOT . "/assets/images/no_image.jpg";
        }
    }

    /** returns pagination links **/
    function get_pagination_vars():array{
        $vars = [];
        $vars['page'] 		= $_GET['page'] ?? 1;
        $vars['page'] 		= (int)$vars['page'];
        $vars['prev_page'] 	= $vars['page'] <= 1 ? 1 : $vars['page'] - 1;
        $vars['next_page'] 	= $vars['page'] + 1;
        return $vars;
    } 

    function message(string $msg = null, bool $clear = false){
        $ses = new Core\Session();
        if(!empty($msg)){
            $ses->set('message',$msg);
        }else
        if(!empty($ses->get('message'))){
            $msg = $ses->get('message');
            if($clear){
            $ses->pop('message');
            }
            return $msg;
        }
        return false;
    }

    /** displays input values after a page refresh **/
    //for checked field
    function old_checked(string $key, string $value, string $default = ""):string{
        if(isset($_POST[$key])){
            if($_POST[$key] == $value){
            return ' checked ';
            }
        }else{
            if($_SERVER['REQUEST_METHOD'] == "GET" && $default == $value){
            return ' checked ';
            }
        }
        return '';
    }

    // for input field
    function old_value(string $key, mixed $default = "", string $mode = 'post'):mixed{
        $POST = ($mode == 'post') ? $_POST : $_GET;
        if(isset($POST[$key])){
            return $POST[$key];
        }
        return $default;
    }

    // for select field
    function old_select(string $key, mixed $value, mixed $default = "", string $mode = 'post'):mixed{
        $POST = ($mode == 'post') ? $_POST : $_GET;
        if(isset($POST[$key])){
            if($POST[$key] == $value)
            {
            return " selected ";
            }
        }else
        if($default == $value){
            return " selected ";
        }
        return "";
    }

