<?php
class SahabatsController extends AppController{


    var $uses = array('Sahabat');
    public $name = "Sahabats";
    public $layout = "utama";
    var $components = array('RequestHandler');

    public function index(){
        $data = $this->paginate('Sahabat');
        $this->set('data', $data);
        $this->set('judul', 'Sahabat LPPS');
        $sahabats = $this->Sahabat->find('all');
        //pr($profiles);

        $this->set('sahabats', $sahabats);
    }

    public function index_user(){
        $this->layout = "facility";
        $data = $this->paginate('Sahabat');
        $this->set('data', $data);
        $this->set('judul', 'Sahabat LPPS');
        $sahabats = $this->Sahabat->find('all');
        //pr($profiles);

        $this->set('sahabas', $sahabats);
    }

    public function tambah(){
        $this->set('judul', 'Tambah Sahabat');
        if($this->request->is('post')){
            $this->Sahabat->create();
            $this->Sahabat->save($this->request->data);
            debug($this->request->data);
            $this->redirect('/Sahabats');

        }

    }

    public function edit($userid = null) {

        $this->set('judul', 'Edit Data Sahabat');
        if ($userid != null) {
            // ambil data dari tabel database
            $datauser = $this->Sahabat->find('first', array(
                'conditions' => array(
                    'Sahabat.id' => $userid
                )
            ));
            $this->set('data', $datauser);
        } else {
            $this->redirect(array('controller'=>'Sahabats', 'action'=>'index'));
        }
    }

    function simpan() {
        if (!empty($this->data)) {
            if ($this->Sahabat->save($this->data)){
                //$this->Session->setFlash('Edit Data Staff Berhasil', 'default', array('class' => 'success'));
            }
            $this->redirect(array('action'=>'index'));
        }
        $this->redirect(array('controller'=>'Sahabats', 'action'=>'index'));
    }

    function hapus($userid = null) {
        $this->set('judul','Hapus Data Sahabat');
        if ($userid != null) {
            if($this->Sahabat->delete($userid)){
                $this->Session->setFlash('Data Sahabat telah terhapus','default',array('class'=>'success'));
            }
            else{
                $this->Session->setFlash("data tidak dapat dihapus.");
            }
            $this->redirect(array('action'=>'index'));

        } else {
            $this->redirect(array('controller'=>'Sahabat', 'action'=>'index'));
        }
    }
}