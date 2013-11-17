<?php
class GkisController extends AppController{


    var $uses = array('Gki');
    public $name = "Gkis";
    public $layout = "utama";
    var $components = array('RequestHandler');

    public function index(){
        $data = $this->paginate('Gki');
        $this->set('data', $data);
        $this->set('judul', 'Daftar Alamat Gki');
        $gkis = $this->Gki->find('all');
        //pr($profiles);

        $this->set('gkis', $gkis);
    }

    public function index_user(){
        $this->layout = "utamauser";
        $data = $this->paginate('Gki');
        $this->set('data', $data);
        $this->set('judul', 'Daftar Alamat Gki');
        $gkis = $this->Gki->find('all');
        //pr($profiles);

        $this->set('gkis', $gkis);
    }

    public function tambah(){
        $this->set('judul', 'Tambah Alamat Gereja');
        if($this->request->is('post')){
            $this->Gki->create();
            $this->Gki->save($this->request->data);
            debug($this->request->data);
            $this->redirect('/Gkis');

        }

    }

    public function edit($userid = null) {

        $this->set('judul', 'Edit Alamat');
        if ($userid != null) {
            // ambil data dari tabel database
            $datauser = $this->Gki->find('first', array(
                'conditions' => array(
                    'Gki.id' => $userid
                )
            ));
            $this->set('data', $datauser);
        } else {
            $this->redirect(array('controller'=>'Gkis', 'action'=>'index'));
        }
    }

    function simpan() {
        if (!empty($this->data)) {
            if ($this->Gki->save($this->data)){
                //$this->Session->setFlash('Edit Data Staff Berhasil', 'default', array('class' => 'success'));
            }
            $this->redirect(array('action'=>'index'));
        }
        $this->redirect(array('controller'=>'Gkis', 'action'=>'index'));
    }

    function hapus($userid = null) {
        $this->set('judul','Hapus Alamat');
        if ($userid != null) {
            if($this->Gki->delete($userid)){
                $this->Session->setFlash('Data Pengurus telah terhapus','default',array('class'=>'success'));
            }
            else{
                $this->Session->setFlash("data tidak dapat dihapus.");
            }
            $this->redirect(array('action'=>'index'));

        } else {
            $this->redirect(array('controller'=>'Gki', 'action'=>'index'));
        }
    }
}