<?php

class UsersController extends AppController{
    var $uses = array('User');
    public $name = "users";
    var $components = array('Session');
    public $layout = "Facility";
    public function indexUser(){
        $users=$this->User->find('all');
        $this->set('user',$users);
        //pr($users);
    }


   function login(){
        if($this->request->is('post')){
            //1. cek variabel session user apakah sudah login?
        if (!$this->Session->check('user')) {
            //   1.1. cek data dari form kosong atau tidak
            if (!empty($this->data)) {
                //   1.2. jika tidak kosong, validasi login
                $user = $this->User->doLogin($this->data['User']);
                if (!$user) {
                    //   1.3. jika tidak valid kirim flash "login salah"
                    $this->Session->setFlash('Login Anda salah!');
                } else {
                    //   1.4. jika berhasil, simpan session user baru
                    $this->Session->write('user', $user);
                    $this->Session->setFlash('Login berhasil!',
                        'default', array('class'=>'success'));
                }
            }
        } else {
            //2. jika sudah login, kirim flash "Sudah login"
            $this->Session->setFlash('Anda sudah login!');
        }

        //3. redirect ke home
        $this->redirect(array('controller'=>'Profiles', 'action'=>'index'));
        }

    }

    function logout(){
        //1. cek variabel session 'user',
        //   jika ada maka dihapus var session
        if ($this->Session->check('user')) {
            $this->Session->destroy('user');
            $this->Session->setFlash('Logout berhasil!',
                'default', array('class'=>'success'));
        }
        //2. redirect
        $this->redirect(array('controller'=>'Profiles', 'action'=>'index'));
    }



   /* public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirect());
            }
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }*/
}
?>