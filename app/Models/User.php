<?php
    defined('ROOTPATH') OR exit('Access Denied!');
    class User {
        use Model;
        protected $db_table = 'users';
        protected $allowedColumns = [
            'user_name',
            'user_surname',
            'user_email',
            'user_username',
            'user_password'
        ];
        public function validate_register($data) {
            $this->errors = [];
            if (empty($data['user_name'])) {
                $this->errors['name'] = "Name is required";
            }
            if (empty($data['user_surname'])) {
                $this->errors['surname'] = "Surname is required";
            }
            if (empty($data['user_email'])) {
                $this->errors['email'] = "email adress is required";
            }else if (!filter_var($data['user_email'], FILTER_VALIDATE_EMAIL)) {
                $this->errors['email_not_valid'] = "You dont type a valid email address";
            }
            if (empty($data['user_username'])) {
                $this->errors['username'] = "Username is required";
            }
            if (empty($data['user_password'])) {
                $this->errors['password1'] = "Password is required";
            }else if (strlen($data['user_password']) < 4) {
                $this->errors['password3'] = "Password is too short";
            }else if ($data['user_password'] != $data['confirmPassword']) {
                $this->errors['confirmPassword'] = "Password and confirm Password dont match";
            }
            if (empty($data['terms'])) {
                $this->errors['terms'] = "Please accept the terms";
            }
            if (empty($this->errors)) {
                return true;
            }
            return false;
        }

        public function validate_login($data) {
            $this->errors = [];
            if (empty($data['user_username'])) {
                $this->errors['username'] = "Username is required";
            }
            if (empty($data['user_password'])) {
                $this->errors['password'] = "Password is required";
            }
            if (empty($this->errors)) {
                return true;
            }
            return false;
        }
    }