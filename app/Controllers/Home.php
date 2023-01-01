<?php
    defined('ROOTPATH') OR exit('Access Denied!');
    class Home{
        use Controller;
        public function index($data = []){
            //$data['user_username'] = empty($_SESSION['user']) ? 'User' : $_SESSION['user']->user_username;
            //echo __METHOD__;
            //echo get_called_class();
            $this->view('home', $data); 
        }
    }