<?php
class PengurusesController extends AppController{


    var $uses = array('Pengurus');
    public $name = "Penguruses";
    public $layout = "utama";
    var $components = array('RequestHandler');

    public function index(){
        $data = $this->paginate('Pengurus');
        $this->set('data', $data);
        $this->set('judul', 'Profil Pengurus');
        $penguruses = $this->Pengurus->find('all');
        //pr($profiles);

        $this->set('penguruses', $penguruses);
    }

    public function index_user(){
        $this->layout = "utamauser";
        $data = $this->paginate('Pengurus');
        $this->set('data', $data);
        $this->set('judul', 'Profil Pengurus');
        $penguruses = $this->Pengurus->find('all');
        //pr($profiles);

        $this->set('penguruses', $penguruses);
    }

    public function tambah(){
        $this->set('judul', 'Tambah Pengurus');
        if($this->request->is('post')){
            $this->Pengurus->create();
            $this->Pengurus->save($this->request->data);
            debug($this->request->data);
            $this->redirect('/Penguruses');

        }

    }

    public function edit($userid = null) {

        $this->set('judul', 'Edit Data Pengurus');
        if ($userid != null) {
            // ambil data dari tabel database
            $datauser = $this->Pengurus->find('first', array(
                'conditions' => array(
                    'Pengurus.id' => $userid
                )
            ));
            $this->set('data', $datauser);
        } else {
            $this->redirect(array('controller'=>'Penguruses', 'action'=>'index'));
        }
    }

    function simpan() {
        if (!empty($this->data)) {
            if ($this->Pengurus->save($this->data)){
                //$this->Session->setFlash('Edit Data Staff Berhasil', 'default', array('class' => 'success'));
            }
            $this->redirect(array('action'=>'index'));
        }
        $this->redirect(array('controller'=>'Penguruses', 'action'=>'index'));
    }

    function hapus($userid = null) {
        $this->set('judul','Hapus Data Pengurus');
        if ($userid != null) {
            if($this->Pengurus->delete($userid)){
                $this->Session->setFlash('Data Pengurus telah terhapus','default',array('class'=>'success'));
            }
            else{
                $this->Session->setFlash("data tidak dapat dihapus.");
            }
            $this->redirect(array('action'=>'index'));

        } else {
            $this->redirect(array('controller'=>'Pengurus', 'action'=>'index'));
        }
    }
}