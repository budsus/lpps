<?php
// lokasi: app/controllers/main_controller.php
class  BuysController extends AppController {
    var $name = "Buys";
    public $layout = "utama";
    public $uses = 'Buy';
    var $components = array('Session');
    var $paginate = array(
                        'limit' => 25,
                        'order' => array(
                            'Buy.nama' => 'asc'
                        )
                    );

    public function beforeFilter(){
        if(!$this->Session->check('user')){

            $this->layout='facility';
        }}

   function index() {
        $data = $this->paginate('Buy');
        //$data = $this->Buy->Book->findById($id);
        $this->set('data', $data);
        $this->set('judul', 'Daftar Pembeli Buku');
//pr($data);
        /*if(isset($this->passedArgs['Book.judul'])) {
            $this->paginate['conditions'][]['Books.judul LIKE'] = str_replace('*','%',$this->passedArgs['Book.judul']);
            $this->data['Book']['judul'] = $this->passedArgs['Book.judul'];
            $title[] = __('Judul',true).': '.$this->passedArgs['Book.judul'];
        }*/

        //$posts = $this->paginate(); 

    }
    function ubah($id = null) {
        $this->set('judul', 'Ubah Status Pembelian');
        if ($id != null) {
            $datauser = $this->Buy->find('first', array(
                'conditions' => array(
                    'Buy.id' => $id
                )
            ));
            $this->set('data', $datauser);
        } else {
            $this->redirect(array('controller'=>'Buys', 'action'=>'index'));
        }
    }
    function beli($id = null){

        $data = $this->Buy->Book->findById($id);
        $this->set('data', $data);
       //pr($data);
        $books=$this->Buy->Book->find("list");
        //pr($books);
        $this->set('books', $books);
        //pr($this->Buy->Book->find("list"));
        $this->set('judul', 'Pesan Buku');
        if($this->request->is('post')){
            $this->Buy->create();
            $this->Buy->save($this->request->data);
            $this->Session->setFlash("pesanan Anda sudah masuk proses");
            $this->redirect('/Books');

        }
    }

    function hapus($userid = null) {
        $this->set('judul', 'Daftar Pembeli');
        if ($userid != null) {
            if ($this->Buy->delete($userid)) {
                $this->Session->setFlash(
                        "Data user " . $userid + " telah terhapus", 
                        "default",
                        array("class"=>"success")
                    );
            } else {
                $this->Session->setFlash("Data tidak dapat dihapus.");
            }
            $this->redirect(array("controller"=>"buys", "action"=>"index"));
        } else {
            $this->redirect(array('controller'=>'Buys', 'action'=>'index'));
        }
       
    }

    function simpan() {
        if (!empty($this->data)) {
            if ($this->Buy->save($this->data)){
                $this->Session->setFlash('Ubah status pembelian berhasil', 'default', array('class' => 'success'));
            }
            $this->redirect(array('action'=>'index'));
        }
        $this->redirect(array('controller'=>'buys', 'action'=>'index'));
    }
}
?>