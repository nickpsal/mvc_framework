<?php
    trait Controller {
        public function view($view, $data = []){
            $filename = "../app/Views/" . $view . ".view.php";
            if (file_exists($filename)){
                require $filename;
            }else {
                require "../app/Views/404.view.php";
            }
        }

        public function req_files($view) {
            $filename = "../app/Views/includes/" . $view . ".php";
            if (file_exists($filename)) {
                require $filename;
            }
        }
    }