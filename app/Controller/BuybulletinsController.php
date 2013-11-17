<?php
// lokasi: app/controllers/main_controller.php
class  BuybulletinsController extends AppController {
    var $name = "Buybulletins";
    public $layout = "utama";
    public $uses = 'Buybulletin';
    var $paginate = array(
                        'limit' => 25,
                        'order' => array(
                            'Buybulletin.nama' => 'asc'
                        )
                    );

   function index() {
        $data = $this->paginate('Buybulletin');
        //$data = $this->Buy->Book->findById($id);
        $this->set('data', $data);
        $this->set('judul', 'Daftar Pembeli Bulletin');

        /*if(isset($this->passedArgs['Book.judul'])) {
            $this->paginate['conditions'][]['Books.judul LIKE'] = str_replace('*','%',$this->passedArgs['Book.judul']);
            $this->data['Book']['judul'] = $this->passedArgs['Book.judul'];
            $title[] = __('Judul',true).': '.$this->passedArgs['Book.judul'];
        }*/

        //$posts = $this->paginate(); 

    }

    function beli($id = null){
        $data = $this->Buybulletin->Bulletin->findById($id);
        $this->set('data', $data);
        $this->Buybulletin->Bulletin->find("list");
        $this->set('judul', 'Pesan Bulletin');
        if($this->request->is('post')){
            $this->Buybulletin->create();
            $this->Buybulletin->save($this->request->data);
            $this->redirect('/Bulletins');
        }
    }

    function hapus($userid = null) {
        $this->set('judul', 'Daftar Pembeli');
        if ($userid != null) {
            if ($this->Buybulletin->delete($userid)) {
                $this->Session->setFlash(
                        "Data " . $userid + " telah terhapus", 
                        "default",
                        array("class"=>"success")
                    );
            } else {
                $this->Session->setFlash("Data tidak dapat dihapus.");
            }
            $this->redirect(array("controller"=>"buybulletins", "action"=>"index"));
        } else {
            $this->redirect(array('controller'=>'buybulletins', 'action'=>'index'));
        }
       
    }

    function ubah($id = null) {
        $this->set('judul', 'Ubah Status Pembelian');
        if ($id != null) {
            $datauser = $this->Buybulletin->find('first', array(
                            'conditions' => array(
                                'Buybulletin.id' => $id
                            )
                        ));
            $this->set('data', $datauser);
        } else {
            $this->redirect(array('controller'=>'buybulletins', 'action'=>'index'));
        }
    }
    
    function simpan() {
        if (!empty($this->data)) {
            if ($this->Buybulletin->save($this->data)){
                $this->Session->setFlash('Ubah status pembelian berhasil', 'default', array('class' => 'success'));
            }
            $this->redirect(array('action'=>'index'));
        }
        $this->redirect(array('controller'=>'buybulletins', 'action'=>'index'));
    }
}
?>