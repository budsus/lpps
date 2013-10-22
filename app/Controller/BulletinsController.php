<?php
class BulletinsController extends AppController{
	var $name = "Bulletins";
    public $layout = "utama";
	public $uses = 'Bulletin';
    var $components = array('Session');
    var $paginate = array(
                        'limit' => 25,
                        'order' => array(
                            'Bulletin.judul' => 'asc'
                        )
                    );
	
	function index() {
        $data = $this->paginate('Bulletin');
        $this->set('data', $data);
        $this->set('judul', 'Daftar Bulletin LPPS');
    }
	
	public function tambah(){
        $this->set('judul', 'Tambah Bulletin');
        if($this->request->is('post')){
            $this->Bulletin->create();
            $this->Bulletin->save($this->request->data);
            $this->redirect('/Bulletins');
        }
    }

	function hapus($userid = null) {
        $this->set('judul', 'Tambah Buku');
        if ($userid != null) {
            if ($this->Bulletin->delete($userid)) {
                $this->Session->setFlash(
                        "Data bulletin " . $userid + " telah terhapus", 
                        "default",
                        array("class"=>"success")
                    );
            } else {
                $this->Session->setFlash("Data tidak dapat dihapus.");
            }
            $this->redirect(array("controller"=>"bulletins", "action"=>"index"));
        } else {
            $this->redirect(array('controller'=>'bulletins', 'action'=>'index'));
        }
    }

    function ubah($userid = null) {
        $this->set('judul', 'Ubah Detail Bulletin');
        if ($userid != null) {
            $datauser = $this->Bulletin->find('first', array(
                            'conditions' => array(
                                'Bulletin.id' => $userid
                            )
                        ));
            $this->set('data', $datauser);
        } else {
            $this->redirect(array('controller'=>'bulletins', 'action'=>'index'));
        }
    }
    
    function simpan() {
        if (!empty($this->data)) {
            if ($this->Bulletin->save($this->data)){
                $this->Session->setFlash('Ubah detail buku berhasil', 'default', array('class' => 'success'));
            }
            $this->redirect(array('action'=>'index'));
        }
        $this->redirect(array('controller'=>'bulletins', 'action'=>'index'));
    }
}