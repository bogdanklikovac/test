<?php

class Admin extends Controller {

    public function index() {
        $model = $this->model('Comments');
        $result = $model->getComments();
        $res = $result->fetchAll(PDO::FETCH_ASSOC);

        $session = $this->model('Session');
        $session::init();
        $logged = $session::get('loggedIn');

        if($logged == false) {
            $session::destroy();
            header('location: ?url=users/login');
            exit;
        }
        $this->view('admin/index', ['res' => $res, 'logged' => $logged]);
    }

    public function approveComment($comment_id){

        $model = $this->model('Comments');
        $model->approveComment($comment_id);

        header('location: ?url=admin/index');
    }

    public function deleteComment($comment_id){

        $model = $this->model('Comments');
        $model->deleteComment($comment_id);

        header('location: ?url=admin/index');
    }

}