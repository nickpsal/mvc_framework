<?php
    class Signup{
        use Controller;
        public function index($data = []){
            if (!empty($data)) {
                extract($data);
            }
            if (ismethodPost()) {
                $user = new User();
                if ($user->validate_register($_POST)) {
                    $user->insert($_POST);
                    redirect('login');
                }else {
                    $data['errors'] = $user->errors;
                }  
            }
            $this->view('signup', $data); 
        }
    }