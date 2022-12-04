<?php
    class login{
        use Controller;
        public function index($data = []){
            if (!empty($data)) {
                extract($data);
            }
            if (ismethodPost()) {
                $user = new User();
                if ($user->validate_login($_POST)) {
                    $arr['user_username'] = $_POST['user_username'];
                    $row = $user->first($arr);
                    if ($row) {
                        if (password_verify($_POST['user_password'], $row->user_password)) {
                            $_SESSION['user'] = $row;
                            redirect('home');
                        }else {
                            $user->errors['cantLogin'] = "Wrong username or password or user dont exists";
                        }
                    }
                }
                $data['errors'] = $user->errors;
            }
            $this->view('login', $data); 
        }
    }