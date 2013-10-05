<?php

class FacilitiesController extends AppController{

    var $uses = array('Facility','Galery');
    public $name = "Facilities";
    public $layout = "utama";

    var $components = array('RequestHandler');
    public function index(){
        $data = $this->paginate('Facility');
        $this->set('data', $data);
        $this->set('judul', 'Manajemen fasilitas');
    }
    public function tambah(){
        $this->set('judul', 'Manajemen fasilitas');



        if($this->request->is('post')){
            /*if ( !empty($this->request->data['Facility']) && !empty($this->request->data['Imagepath'][0]['photo']['name']))  {

                $this->Facility->saveAssociated($this->request->data);

            }
            else{
                pr($this->request->data['Imagepath'][0]['photo']);
                $this->Session->setFlash("File yang diupload kosong");

            }*/
           // pr($this->request->data);
           // if (!empty($this->request->data['Facility']) && !empty($this->request->data['Galery'][0]['photo']['name'])) {
            $this->Facility->saveAssociated($this->request->data);
            $this->Session->setFlash("Penambahan fasilitas berhasil!");
            //}
        }

    }

    function Ubah(){

        if (!empty($this->data)) {

            if ($this->Facility->save($this->data)){
                $this->Session->setFlash('Ubah akun berhasil', 'default', array('class' => 'success'));
            }
            $this->redirect(array('action'=>'index'));
        }
        $this->redirect(array('controller'=>'facilities', 'action'=>'index'));

    }

    public function upload(){
        $total=$this->Facility->find('count');
        if($total==0){
            $this->Session->setFlash("Belum ada data fasilitas, harap tambah terlebih dahulu");
            $this->redirect(array('action'=>'tambah'));
        }
        $facilities =$this->Galery->Facility->find('list');

        $this->set('facilities',$facilities);
        $this->set('judul', 'Manajemen fasilitas');
        if($this->request->is('post')){

            $this->Galery->save($this->request->data);
            $this->Session->setFlash("Penambahan foto berhasil");
        }
    }

    function edit($id = null) {
        //pr($this->data);
        $this->set('judul', 'Ubah Akun Pemakai');
        if ($id != null) {

            // ambil data dari tabel database
            $datafasilitas = $this->Facility->find('first', array(
                'conditions' => array(
                    'Facility.id' => $id
                )
            ));
            $this->set('data', $datafasilitas);
        } else {
            $this->redirect(array('controller'=>'facilities', 'action'=>'index'));
        }

    }

    function hapus($facilityID = null) {
        $this->set('judul', 'Manajemen Akun Pemakai');
        if ($facilityID != null) {
            if ($this->Facility->delete($facilityID)) {
                $this->Session->setFlash(
                    "Data Fasilitas " . $facilityID + " telah terhapus",
                    "default",
                    array("class"=>"success")
                );
            } else {
                $this->Session->setFlash("Data tidak dapat dihapus.");
            }
            $this->redirect(array("controller"=>"Facilities", "action"=>"index"));
        } else {
            $this->redirect(array('controller'=>'Facilities', 'action'=>'index'));
        }
        // percobaan: tanpa login
        // kunjungi http://localhost/latihan/users
        // bisakah?
    }

    function download(){

        $this->viewClass = 'Media';
        $params = array(
            'id' => 'os-eclipse-android-a4.pdf',
            'name' => 'os-eclipse-android-a4',
            'mimeType' => 'app/pdf',
            'download' => true,
            'extension' => 'pdf',
            'path' => APP . 'webroot/files/galery/photo/14' . DS
        );

        $this->set($params);
        $this->autoLayout = false;

    }


}
?>