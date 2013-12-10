<?php

class AlbumsController extends AppController{

    var $uses = array('Album','Galerifoto');
    public $name = "Albums";
    public $layout = "utama";
    var $components = array('Session');
    // var $components = array('RequestHandler');
    public function index(){
        $data = $this->paginate('Album');
        $this->set('data', $data);
        $this->set('judul', 'Album  foto');
    }

    public function index_user(){
        $data = $this->paginate('Album');
        //$this->layout = "utamauser";
        $this->set('data', $data);
        $this->set('judul', 'Album  foto');
    }


    public function tambah(){
        $this->set('judul', 'Album foto');



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
            $this->Album->saveAssociated($this->request->data);
            $this->Session->setFlash("Penambahan album berhasil!");
            //}
        }

    }

    function Ubah(){

        if (!empty($this->data)) {

            if ($this->Album->save($this->data)){
                $this->Session->setFlash('Ubah album berhasil', 'default', array('class' => 'success'));
            }
            $this->redirect(array('action'=>'index'));
        }
        $this->redirect(array('controller'=>'albums', 'action'=>'index'));

    }

    public function upload($id=null){
        $total=$this->Album->find('count');
        /*if($total==0){
            $this->Session->setFlash("Belum ada data fasilitas, harap tambah terlebih dahulu");
            $this->redirect(array('action'=>'tambah'));
        }*/
        $albums =$this->Galerifoto->Album->find('list');
        $dataalbum = $this->Album->find('first', array(
            'conditions' => array(
                'Album.id' => $id
            )
        ));
        $this->set('albums',$dataalbum);
        $this->set('judul', 'Album foto');
        if($this->request->is('post')){
            // pr($this->request->data);
            $this->Galerifoto->save($this->request->data);
            $this->Session->setFlash("Penambahan foto berhasil");
            $this->redirect(array('controller'=>'albums', 'action'=>'index'));
        }

        $fotoAlbum = $this->Galerifoto->find('all', array(
            'conditions' => array(
                'album_id' => $id
            )
        ));
        $this->set('fotoAlbum',$fotoAlbum);
    }

    function edit($id = null) {
        //pr($this->data);
        $this->set('judul', 'Ubah Album Foto');
        if ($id != null) {

            // ambil data dari tabel database
            $dataalbum = $this->Album->find('first', array(
                'conditions' => array(
                    'Album.id' => $id
                )
            ));
            $this->set('data', $dataalbum);
        } else {
            $this->redirect(array('controller'=>'albums', 'action'=>'index'));
        }

    }

    function hapus($albumID = null) {
        $this->set('judul', 'Manajemen album');
        if ($albumID != null) {
            if ($this->Album->delete($albumID)) {
                $this->Session->setFlash(
                    "Data album telah terhapus",
                    "default",
                    array("class"=>"success")
                );
            } else {
                $this->Session->setFlash("Data tidak dapat dihapus.");
            }
            $this->redirect(array("controller"=>"Albums", "action"=>"index"));
        } else {
            $this->redirect(array('controller'=>'Albums', 'action'=>'index'));
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
        $this->set('judul', 'Daftar foto');
        $album=$this->Album->findById($id);
        $fotoAlbum = $this->Galerifoto->find('all', array(
            'conditions' => array(
                'album_id' => $id
            )
        ));
        $this->set('album',$album);
        $this->set('fotoAlbum',$fotoAlbum);
        //pr(count($fotoFasilitas));
    }

    function lihat_user($id){
        //$this->layout = "utamauser";
        $this->set('judul', 'Daftar foto');
        $album=$this->Album->findById($id);
        $fotoAlbum = $this->Galerifoto->find('all', array(
            'conditions' => array(
                'album_id' => $id
            )
        ));
        $this->set('album',$album);
        $this->set('fotoAlbum',$fotoAlbum);
        //pr(count($fotoFasilitas));
    }

}
?>