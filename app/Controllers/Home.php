<?php
    class Home{
        use Controller;
        public function index($data = []){
            $data['user_username'] = empty($_SESSION['user']) ? 'User' : $_SESSION['user']->user_username;
            $this->view('home', $data); 
        }
    }