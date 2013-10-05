<?php
class MaterialsController extends AppController{
	var $name = "Materials";
    public $layout = "utama";
	public $uses= 'Material';
	var $paginate = array(
                        'limit' => 25,
                        'order' => array(
                            'Bulletin.judul' => 'asc'
                        )
                    );

	function index() {
        $data = $this->paginate('Material');
        $this->set('data', $data);
        $this->set('judul', 'Daftar Material LPPS');
    }
	
	function tambah(){
        $this->set('judul', 'Tambah Data Materi Pembinaan');
        if($this->request->is('post'))
        {
            $this->Material->save($this->request->data);
            $this->redirect('/Materials');
        }
	}

	function hapus($userid = null) {
        $this->set('judul', 'Tambah Buku');
        if ($userid != null) {
            if ($this->Material->delete($userid)) {
                $this->Session->setFlash(
                        "Data bulletin " . $userid + " telah terhapus", 
                        "default",
                        array("class"=>"success")
                    );
            } else {
                $this->Session->setFlash("Data tidak dapat dihapus.");
            }
            $this->redirect(array("controller"=>"materials", "action"=>"index"));
        } else {
            $this->redirect(array('controller'=>'materials', 'action'=>'index'));
        }
    }

    function ubah($userid = null) {
        $this->set('judul', 'Ubah Detail Material');
        if ($userid != null) {
            $datauser = $this->Material->find('first', array(
                            'conditions' => array(
                                'Material.id' => $userid
                            )
                        ));
            $this->set('data', $datauser);
        } else {
            $this->redirect(array('controller'=>'materials', 'action'=>'index'));
        }
    }
    
    function simpan() {
        if (!empty($this->data)) {
            if ($this->Material->save($this->data)){
                $this->Session->setFlash('Ubah detail material berhasil', 'default', array('class' => 'success'));
            }
            $this->redirect(array('action'=>'index'));
        }
        $this->redirect(array('controller'=>'materials', 'action'=>'index'));
    }

    function download($id){
        $file=$this->Material->findById($id);
    //  Configure::write('debug',0);
        $this->viewClass = 'Media';
        $params = array(
            'id' => $file['Material']['judul'],
           // 'name' => $file['Material']['judul'],
            'extension'=>'docx',
            'download' => true,
            'path' => APP. 'webroot/files/material/judul/'.$file['Material']['materipembinaan_dir'].DS
            );
  //pr($params[path]);
$this->set($params);

    }
}