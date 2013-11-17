<?php
class StaffsController extends AppController{


    var $uses = array('Staff');
    public $name = "Staffs";
    public $layout = "utama";
    var $components = array('RequestHandler');

    public function index(){
        $data = $this->paginate('Staff');
        $this->set('data', $data);
        $this->set('judul', 'Profil Staff');
        $staffs = $this->Staff->find('all');
        //pr($profiles);

        $this->set('staffs', $staffs);
    }

    public function index_user(){
        $this->layout = "utamauser";
        $data = $this->paginate('Staff');
        $this->set('data', $data);
        $this->set('judul', 'Profil Staff');
        $staffs = $this->Staff->find('all');
        //pr($profiles);

        $this->set('staffs', $staffs);
    }

    public function tambah(){
        $this->set('judul', 'Tambah Staff');
        if($this->request->is('post')){
            $this->Staff->create();
            $this->Staff->save($this->request->data);
            debug($this->request->data);
            $this->redirect('/Staffs');

        }

    }

    public function edit($userid = null) {

        $this->set('judul', 'Edit Data Staffs');
        if ($userid != null) {
            // ambil data dari tabel database
            $datauser = $this->Staff->find('first', array(
                'conditions' => array(
                    'Staff.id' => $userid
                )
            ));
            $this->set('data', $datauser);
        } else {
           $this->redirect(array('controller'=>'Staffs', 'action'=>'index'));
        }
    }

    /*public function edit($id) {
        // Has any form data been POSTed?
        if ($this->request->is('post')) {
            // If the form data can be validated and saved...
            if ($this->Staff->save($this->request->data)) {
                // Set a session flash message and redirect.
                $this->Session->setFlash('Recipe Saved!');
                return $this->redirect('/recipes');
            }
        }

        // If no form data, find the recipe to be edited
        // and hand it to the view.
        $this->set('staffs', $this->Recipe->findById($id));
    }*/

    function simpan() {
        if (!empty($this->data)) {
            if ($this->Staff->save($this->data)){
                //$this->Session->setFlash('Edit Data Staff Berhasil', 'default', array('class' => 'success'));
            }
            $this->redirect(array('action'=>'index'));
        }
        $this->redirect(array('controller'=>'Staffs', 'action'=>'index'));
    }

    function hapus($userid = null) {
        $this->set('judul','Hapus Data Staff');
        if ($userid != null) {
            if($this->Staff->delete($userid)){
                $this->Session->setFlash('Data staff telah terhapus','default',array('class'=>'success'));
            }
            else{
                $this->Session->setFlash("data tidak dapat dihapus.");
            }
            $this->redirect(array('action'=>'index'));

        } else {
            $this->redirect(array('controller'=>'Staffs', 'action'=>'index'));
        }
    }

}
?>