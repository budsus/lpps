<?php
class ProfilesController extends AppController{


    var $uses = array('Profile');
    public $name = "Profiles";
    public $layout = "utama";
    var $components = array('RequestHandler');

    public function index(){
        $this->set('judul', 'Profile LPPS');
    }

    public function tampil(){
        $this->set('judul', 'Profil LPPS');
        $profiles = $this->Profile->find('all');
        //pr($profiles);

        $this->set('profiles', $profiles);

        }
    }

    function edit($userid = null) {
        $this->set('judul', 'Ubah Akun Pemakai');
        if ($userid != null) {
            // ambil data dari tabel database
            $datauser = $this->Staff->find('first', array(
                'conditions' => array(
                    'Staff.id' => $userid
                )
            ));
            $this->set('data', $datauser);
        } else {
            $this->redirect(array('controller'=>'Staff', 'action'=>'index'));
        }
    }




?>