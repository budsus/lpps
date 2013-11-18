<?php

class FacilitiesController extends AppController{

    var $uses = array('Facility','Imagepath');
    public $name = "Facilities";
    public $layout = "utama";
    var $components = array('RequestHandler');
    public function index(){
        $this->set('judul', 'Manajemen fasilitas');
    }
    public function tambah(){
        $this->set('judul', 'Manajemen fasilitas');
        if($this->request->is('post')){
            $this->Facility->create();
            $this->Facility->save($this->request->data);
            debug($this->request->data);
            $this->redirect('/Facilities');

        }
    }

    public function upload(){
        $this->set('judul', 'Manajemen fasilitas');
        $this->Imagepath->validate['filename'] = array(
            'HttpPost' => array(
                'check' => false
            )
        );
        if (!empty($this->data)) {

            if ($this->Imagepath->save($this->data)) {
                $this->Session->setFlash('Tambah akun berhasil', 'default');

            } else {
                $this->Session->setFlash('Tambah akun gagal', 'default');

            }

        }

    }




}
?>