<?php

/**
 * Created by PhpStorm.
 * UserModel: justi
 * Date: 26-2-2018
 * Time: 12:28
 */
class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->output->enable_profiler(FALSE);
        $this->load->model('User_model');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('index');
        $this->load->view('templates/footer');
    }

    public function save_user() {
        if(isset($_POST['submit'])) {
            $firstname = $_POST['first_name'];
            $lastname = $_POST['last_name'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $check = $this->User_model->checkUser($firstname, $lastname, $username, $password, $email);
            var_dump($check);
        }
    }
}