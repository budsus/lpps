<?php

class UsersController extends AppController{

    public $name = "users";
    public $layout = "utama";
    public function index(){

    }
    public function tambah(){

        if($this->request->is('post')){

            $this->Users->save($this->request->data);
            $this->redirect('/Facilities');

        }
    }
}
?>