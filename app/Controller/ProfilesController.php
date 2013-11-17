<?php
class ProfilesController extends AppController{


    var $uses = array('Profile');
    public $name = "Profiles";
    public $layout = "utama";
    var $components = array('RequestHandler');

    public function index(){
        $data = $this->paginate('Profile');
        $this->set('data', $data);
        $this->set('judul', 'Profil');
        $profiles = $this->Profile->find('all');
        //pr($profiles);

        $this->set('profiles', $profiles);
    }

    public function index_user(){
        $this->layout = "utamauser";
        $data = $this->paginate('Profile');
        $this->set('data', $data);
        $this->set('judul', 'Profil');
        $profiles = $this->Profile->find('all');
        //pr($profiles);

        $this->set('profiles', $profiles);
    }

    public function tampil(){
        $this->set('judul', 'Profil LPPS');
        $profiles = $this->Profile->find('all');
        //pr($profiles);

        $this->set('profiles', $profiles);

        }

    public function edit($userid = null) {
        $this->set('judul', 'Edit');
        if ($userid != null) {
            // ambil data dari tabel database
            $datauser = $this->Profile->find('first', array(
                'conditions' => array(
                    'Profile.id' => $userid
                )
            ));
            $this->set('data', $datauser);
        } else {
            $this->redirect(array('controller'=>'Profiles', 'action'=>'index'));
        }
    }

    function simpan() {
        if (!empty($this->data)) {
            if ($this->Profile->save($this->data)){
                //$this->Session->setFlash('Edit Data Staff Berhasil', 'default', array('class' => 'success'));
            }
            $this->redirect(array('action'=>'index'));
        }
        $this->redirect(array('controller'=>'Profiles', 'action'=>'index'));
    }
   }






?>