<?php
class GkjsController extends AppController{


    var $uses = array('Gkj');
    public $name = "Gkjs";
    public $layout = "utama";
    var $components = array('RequestHandler');

    public function index(){
        $data = $this->paginate('Gkj');
        $this->set('data', $data);
        $this->set('judul', 'Daftar Alamat Gkj');
        $gkjs = $this->Gkj->find('all');
        //pr($profiles);

        $this->set('gkjs', $gkjs);
    }

    public function index_user(){
       // $this->layout = "utamauser";
        $data = $this->paginate('Gkj');
        $this->set('data', $data);
        $this->set('judul', 'Daftar Alamat Gkj');
        $gkjs = $this->Gkj->find('all');
        //pr($profiles);

        $this->set('gkjs', $gkjs);
    }

    public function tambah(){
        $this->set('judul', 'Tambah Alamat Gereja');
        if($this->request->is('post')){
            $this->Gkj->create();
            $this->Gkj->save($this->request->data);
            debug($this->request->data);
            $this->redirect('/Gkjs');

        }

    }

    public function edit($userid = null) {

        $this->set('judul', 'Edit Alamat');
        if ($userid != null) {
            // ambil data dari tabel database
            $datauser = $this->Gkj->find('first', array(
                'conditions' => array(
                    'Gkj.id' => $userid
                )
            ));
            $this->set('data', $datauser);
        } else {
            $this->redirect(array('controller'=>'Gkjs', 'action'=>'index'));
        }
    }

    function simpan() {
        if (!empty($this->data)) {
            if ($this->Gkj->save($this->data)){
                //$this->Session->setFlash('Edit Data Staff Berhasil', 'default', array('class' => 'success'));
            }
            $this->redirect(array('action'=>'index'));
        }
        $this->redirect(array('controller'=>'Gkjs', 'action'=>'index'));
    }

    function hapus($userid = null) {
        $this->set('judul','Hapus Alamat');
        if ($userid != null) {
            if($this->Gkj->delete($userid)){
                $this->Session->setFlash('Data Pengurus telah terhapus','default',array('class'=>'success'));
            }
            else{
                $this->Session->setFlash("data tidak dapat dihapus.");
            }
            $this->redirect(array('action'=>'index'));

        } else {
            $this->redirect(array('controller'=>'Gkj', 'action'=>'index'));
        }
    }
}