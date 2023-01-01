<?php
    defined('ROOTPATH') OR exit('Access Denied!');
    class _404{
        use Controller;
        public function index($data = []){
            $this->view('404'); 
        }
    }