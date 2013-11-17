<?php

class FacilitiesController extends AppController{

    var $uses = array('Facility','User','Galery','Event','Client','Tempevent','Booker');
    public $name = "Facilities";

    public $layout = "utama";
    var $components = array('Session');
   // var $components = array('RequestHandler');
    public function beforeFilter(){
        if(!$this->Session->check('user')){

            $this->layout='facility';
        }}
    public function index(){


        $data = $this->paginate('Facility');
        $this->set('data', $data);
        $this->set('judul', 'Manajemen fasilitas');
    }




    public function tambah(){
        $this->set('judul', 'Manajemen fasilitas');



        if($this->request->is('post')){

          //$this->Facility->create();
          // $this->Facility->set($this->request->data);
          // pr($this->request->data);
     //  if($this->Facility->validates()){
           //$errors = $this->Facility->invalidFields();
           // pr($errors);
          // debug($this->Facility->saveAssociated($this->request->data));
          // pr(var_dump($this->Facility->invalidFields()));
            if($this->Facility->saveAssociated($this->request->data))
            $this->Session->setFlash("Penambahan fasilitas berhasil!");
       // }
            else{
                $this->Session->setFlash("Penambahan fasilitas gagal!");
            }


        }

    }

    function Ubah(){

        if (!empty($this->data)) {

            if ($this->Facility->save($this->data)){
                $this->Session->setFlash('Ubah Fasilitas berhasil', 'default', array('class' => 'success'));
            }
            $this->redirect(array('action'=>'index'));
        }
        $this->redirect(array('controller'=>'facilities', 'action'=>'index'));

    }
    public function detailFasilitas($id){
        $this->layout='facility';
        $fasilitas=$this->Facility->findById($id);
        $fotoFasilitas=$this->Galery->find('all', array(
            'conditions' => array(
                'facility_id' => $id
            )
        ));

        $this->set('judul',$fasilitas['Facility']['nama']);
        $this->set('fasilitas',$fasilitas);
        $this->set('fotoFasilitas',$fotoFasilitas);
    }

    function captcha()	{
        $this->autoRender = false;
        $this->layout='ajax';
        if(!isset($this->Captcha))	{ //if Component was not loaded throug $components array()
            $this->Captcha = $this->Components->load('Captcha', array(
                'width' => 150,
                'height' => 50,
                'theme' => 'default', //possible values : default, random ; No value means 'default'
            )); //load it
        }
        $this->Captcha->create();
    }
    public function pesan($id=null){
        App::uses('CakeTime', 'Utility');
        // pr($id);
        $this->layout='facility';
        $data = $this->Facility->findById($id);
        $this->set('data', $data);
        $acara=$this->Event->find('all',array('conditions'=>array('fasilitas_id'=>$id)));
        //pr($acara);
        $this->set('judul', 'Pesan Fasilitas');
        if($this->request->is('post')){

            if(!isset($this->Captcha))	{ //if Component was not loaded throug $components array()
                $this->Captcha = $this->Components->load('Captcha'); //load it
            }
            $this->Event->create();
            $this->Event->setCaptcha($this->Captcha->getVerCode()); //getting from component and passing to model to make proper validation check
            $this->Event->set($this->request->data);

            if($this->Event->validates())	{ //as usual data save call'

                //$this->Signup->save($this->request->data);//save or something
                // validation passed, do something
                $start=$this->Event->deconstruct('start',$this->request->data['Event']['start']);
                $end=$this->Event->deconstruct('start',$this->request->data['Event']['end']);
               $startdate=CakeTime::fromString($start);
                $enddate=CakeTime::fromString($end);


                // $start=$this->Time->format('Y m d h:i:A',$tes,null);
                if(!empty($acara)){
                    foreach($acara as $a):

                        $timestart=CakeTime::fromString($a['Event']['start']);
                        $timeend=CakeTime::fromString($a['Event']['end']);

                        if(!$this->Event->find('all',array('conditions'=>array(
                                    $startdate.' BETWEEN '. $timestart.' AND '. $timeend

                                )
                                )

                            )&& !$this->Event->find('all',array('conditions'=>array(
                                $enddate.' BETWEEN '. $timestart.' AND '. $timeend

                            )))){
                            $this->Event->saveAssociated($this->request->data);
                            $this->Session->setFlash('Pemesanan Fasilitas berhasil');

                        }
                        else{
                            $this->Session->setFlash('Fasilitas pada jam tersebut sudah terpesan');
                        }
                    endforeach;
                }
                else{
                    $this->Event->saveAssociated($this->request->data);
                    $this->Session->setFlash('Pemesanan Fasilitas berhasil');
                }
               //pr($start);



               // $this->redirect('/Facilities/indexUser');
            }	else	{ //or
                $this->Session->setFlash('Pemesanan Fasilitas gagal');
                //pr($this->Signup->validationErrors);
                //something do something else
            }
            // $this->Session->setFlash('pemesanan fasilitas berhasil!');
            //
        }
    }
    function indexUser(){

        $this->layout='facility';
        $data = $this->paginate('Facility');
        $this->set('data', $data);
        $this->set('judul', 'Fasilitas');
//pr($data);
    }

    public function upload($id=null){
        $total=$this->Facility->find('count');
        /*if($total==0){
            $this->Session->setFlash("Belum ada data fasilitas, harap uplo terlebih dahulu");
            $this->redirect(array('action'=>'tambah'));
        }*/
        $facilities =$this->Galery->Facility->find('list');
        $datafasilitas = $this->Facility->find('first', array(
            'conditions' => array(
                'Facility.id' => $id
            )
        ));
        $this->set('facilities',$datafasilitas);
        $this->set('judul', 'Manajemen fasilitas');

        if($this->request->is('post')){
            $this->Galery->set($this->request->data);
            //pr($this->Galery->validates());
            if($this->Galery->validates()){
               //pr($this->request->data);
                $this->Galery->save($this->request->data);
                $this->Session->setFlash("Penambahan foto berhasil");
                $this->redirect(array('controller'=>'facilities', 'action'=>'lihat',$id));
            }
            else{
                //$errors = $this->Galery->validationErrors;
               // $this->Session->setFlash("Penambahan foto gagal");
            }
       // pr($this->request->data);

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
                    "Data Fasilitas telah terhapus",
                    "default",
                    array("class"=>"success")
                );
            } else {
                $this->Session->setFlash("Data tidak dapat dihapus.");
            }
            $this->redirect(array("controller"=>"Facilities", "action"=>"lihat"));
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

    function lihat($id){
        $this->set('judul', 'Daftar foto fasilitas');
        $fasilitas=$this->Facility->findById($id);
        $fotoFasilitas = $this->Galery->find('all', array(
            'conditions' => array(
                'facility_id' => $id
            )
        ));
        $this->set('fasilitas',$fasilitas);
        $this->set('fotoFasilitas',$fotoFasilitas);
        //pr(count($fotoFasilitas));
    }
    function hapusfoto($id){
        App::uses('Folder', 'Utility');
        App::uses('File', 'Utility');
        $foto=$this->Galery->findById($id);
        $idfasilitas=$foto['Galery']['facility_id'];
        pr($foto);
        $dir = new Folder('{ROOT}webroot{DS}files{DS}galery{DS}photo{DS}'.$id);
        $files = $dir->find($foto['Galery']['photo']);

        //$contents = $files->read();\
        if ($this->Galery->delete($id)) {
            $this->Session->setFlash(
                "Foto Fasilitas telah terhapus",
                "default",
                array("class"=>"success")
            );
        } else {
            $this->Session->setFlash("Foto tidak dapat dihapus.");
        }
        $this->redirect(array("controller"=>"Facilities", "action"=>"lihat",$idfasilitas));
        $dir->delete();
    }

}
?>