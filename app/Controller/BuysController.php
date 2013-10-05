<?php
// lokasi: app/controllers/main_controller.php
class  BuysController extends AppController {
    var $name = "Buys";
    public $layout = "utama";
    public $uses = 'Buy';
    var $paginate = array(
                        'limit' => 25,
                        'order' => array(
                            'Buy.nama' => 'asc'
                        )
                    );

   function index() {
        $data = $this->paginate('Buy');
        $this->set('data', $data);
        $this->set('judul', 'Daftar Pembeli Buku');

        /*if(isset($this->passedArgs['Book.judul'])) {
            $this->paginate['conditions'][]['Books.judul LIKE'] = str_replace('*','%',$this->passedArgs['Book.judul']);
            $this->data['Book']['judul'] = $this->passedArgs['Book.judul'];
            $title[] = __('Judul',true).': '.$this->passedArgs['Book.judul'];
        }*/

        //$posts = $this->paginate(); 
    }

    function beli(){
        $books = $this->Buy->Book->findById($id);
        $this->set('judul', 'Tambah Pembeli');
        if($this->request->is('post')){
            $this->Buy->create();
            $this->Buy->save($this->request->data);
            $this->redirect('/Buys');

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
}
?>