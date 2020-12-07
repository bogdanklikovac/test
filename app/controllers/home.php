<?php

    class Home extends Controller {

        public function index($errors = null) {

            $session = $this->model('Session');
            $session::init();
            $logged = $session::get('loggedIn');

            // Get approved comments
            $model = $this->model('Comments');
            $result = $model->getApprovedComments();
            $comments = $result->fetchAll(PDO::FETCH_ASSOC);

            // Get products
            $model = $this->model('Products');
            $res = $model->getProducts();
            $products = $res->fetchAll(PDO::FETCH_ASSOC);


            $this->view('home/index', ['comments' => $comments, 'products' => $products, 'logged' => $logged, 'errors' => $errors]);
        }

        public function create() {

            $model = $this->model('Comments');

            $name =$model->name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_STRING);
            $email = $model->email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
            $comment = $model->comment =  filter_input(INPUT_POST,'comment',  FILTER_SANITIZE_STRING);

            // Validation
            if(empty($name)){
                $model->errors['name'] = 'Name field is empty';
            }
            if(empty($email)) {
                $model->errors['email'] = 'Email field is empty';
            }
            if(empty($comment)) {
                $model->errors['comment'] = 'Comment field is empty';
            }

             $model->name = $name;
             $model->email = $email;
             $model->comment = $comment;

            if(empty($model->errors)) {
                $model->createComment();
            }

            $this->index($model->errors);
        }



    }