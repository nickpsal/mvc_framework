<?php
    class Logout{
        use Controller;
        public function index($data = []){
            if (!empty($_SESSION['user'])) {
                unset($_SESSION['user']);
                redirect('home');
            }
        }
    }