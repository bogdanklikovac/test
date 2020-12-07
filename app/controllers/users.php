<?php

class Users extends Controller {

    public function register() {
        $this->view('users/register');
    }

    public function login() {
        $this->view('users/login');
    }


    public function create() {
        $model = $this->model('User');

        $username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST,'password');

        // Validation
        if(empty($username)){
            $model->errors['username'] = 'Username field is empty';
        }
        if(empty($email)) {
            $model->errors['email'] = 'Email field is empty';
        }
        if(empty($password)) {
            $model->errors['password'] = 'Password field is empty';
        }

        $model->username = $username;
        $model->email = $email;
        $model->password = md5($password);

        if(empty($model->errors)) {
            $model->createUser();
            $session = $this->model('Session');
            $session::init();
            $session::set('loggedIn', true);
            header('location: ?url=home/index');
        }

        $this->view('users/register', ['errors' => $model->errors]);
    }

    public function run() {


        $model = $this->model('User');
        $username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST,'password');

        $model->username = $username;
        $model->password = md5($password);


        $result = $model->login();
        $count = $result->rowCount();
        if($count > 0) {
            // login
            $session = $this->model('Session');
            $session::init();
            $session::set('loggedIn', true);

            header('location: ?url=admin/index');
        } else {
            // show error
            $this->view('users/register');
        }
    }


    public function logout() {
        $session = $this->model('Session');
        $session::init();
        $session::destroy();

        header('location: ?url=users/login');
    }
}