<?php 

class User extends Controller{
    public function index() {
        $data['judul'] = "Index";
        $this->view("templates/header", $data);
        $this->view("user/index");
        $this->view("templates/footer", $data);
    }

    public function profile() {
        $data['judul'] = "Index";
        $this->view("user/profile", $data);
    }
}
