<?php
// lokasi: app/controllers/main_controller.php
class  BooksController extends AppController {
    var $name = "Books";
    public $layout = "utama";
    public $uses = 'Book';
    var $paginate = array(
                        'limit' => 25,
                        'order' => array(
                            'Book.judul' => 'asc'
                        )
                    );

   function index() {
        $data = $this->paginate('Book');
        $this->set('data', $data);
        $this->set('judul', 'Daftar Buku LPPS');

        /*if(isset($this->passedArgs['Book.judul'])) {
            $this->paginate['conditions'][]['Books.judul LIKE'] = str_replace('*','%',$this->passedArgs['Book.judul']);
            $this->data['Book']['judul'] = $this->passedArgs['Book.judul'];
            $title[] = __('Judul',true).': '.$this->passedArgs['Book.judul'];
        }*/

        //$posts = $this->paginate(); 
    }

    public function tambah(){
        $this->set('judul', 'Tambah Buku');
        if($this->request->is('post')){
            $this->Book->create();
            $this->Book->save($this->request->data);
            $this->redirect('/Books');

        }
    }

    function hapus($userid = null) {
        $this->set('judul', 'Tambah Buku');
        if ($userid != null) {
            if ($this->Book->delete($userid)) {
                $this->Session->setFlash(
                        "Data user " . $userid + " telah terhapus", 
                        "default",
                        array("class"=>"success")
                    );
            } else {
                $this->Session->setFlash("Data tidak dapat dihapus.");
            }
            $this->redirect(array("controller"=>"books", "action"=>"index"));
        } else {
            $this->redirect(array('controller'=>'books', 'action'=>'index'));
        }
       
    }

    function ubah($userid = null) {
        $this->set('judul', 'Ubah Detail Buku');
        if ($userid != null) {
            $datauser = $this->Book->find('first', array(
                            'conditions' => array(
                                'Book.id' => $userid
                            )
                        ));
            $this->set('data', $datauser);
        } else {
            $this->redirect(array('controller'=>'books', 'action'=>'index'));
        }
    }
    
    function simpan() {
        if (!empty($this->data)) {
            if ($this->Book->save($this->data)){
                $this->Session->setFlash('Ubah detail buku berhasil', 'default', array('class' => 'success'));
            }
            $this->redirect(array('action'=>'index'));
        }
        $this->redirect(array('controller'=>'books', 'action'=>'index'));
    }

    /*function cari(){
        /*if($this->request->is('post')){
            $judul = $this->request->data['Book']['judul'];
            $data= $this->Book->find('first', array(
                'conditions' => array(
                    'Book.judul' => $judul
                )
            ));
            debug($this->$data);
            $this->set('data', $data);
        }
        $url['action'] = 'index';
        
        foreach ($this->data as $k=>$v){ 
            foreach ($v as $kk=>$vv){ 
                $url[$k.'.'.$kk]=$vv; 
            } 
        }

        $this->redirect($url, null, true);
    }*/
}
?>