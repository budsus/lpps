<?php

class ActivitiesController extends AppController{

   // var $components = array('Twitter.Twitter');
    var $components = array('Session');
    public $layout = "utama";

    public function index(){
        $activities = $this->Activity->find('all');
        //pr($activities);
        $this->set('judul', 'Informasi Kegiatan LPPS');
        $this->set('activities',$activities);
    }

    public function index_user(){
        $activities = $this->Activity->find('all');
        //pr($activities);
        $this->set('judul', 'Informasi Kegiatan LPPS');
        $this->set('activities',$activities);
    }

    public function add(){
        $this->set('judul', 'Tambah Kegiatan Baru');
        if($this->request->is('post')){
            $this->Activity->save($this->request->data);
            $this->redirect('/activities');
        }
    }

    function edit($id = null) {
        $this->set('judul', 'Ubah Detail Kegiatan');
        if ($id != null) {
            $datakegiatan = $this->Activity->find('first', array(
                'conditions' => array(
                    'Activity.id' => $id
                )
            ));
            $this->set('data', $datakegiatan);
        } else {
            $this->redirect('/activities');
        }
    }

    function save() {
        if (!empty($this->data)) {
            if ($this->Activity->save($this->data)){
                $this->Session->setFlash('Ubah data berhasil', 'default', array('class' => 'success'));
            }
            $this->redirect('/activities');
        }
        $this->redirect(array('controller'=>'activities', 'action'=>'index'));
    }

    function detail($id = null) {
        $this->set('judul', 'Detail Kegiatan');
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Activity->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
    }

    function delete($id = null) {
        if ($id != null) {
            if ($this->Activity->delete($id)) {
                pr($id);
                h($id);
                //$this->Session->setFlash('The post with id: %s has been deleted.', h($id));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash("Data tidak dapat dihapus.");
            }
            $this->redirect('/activities');
        } else {
            $this->redirect('/activities');
        }
    }

    function download($id){
        $file=$this->Activity->findById($id);
        pr($file['Activity']['brosur']);
        $pathInfo = pathinfo($file['brosur_dir']);

        $this->viewClass = 'Media';
        $params = array(
            'id'        => $file['Activity']['brosur'],
            //'name'      => $pathInfo['filename'],
            'extension' => 'pdf',
            'download'  => true,
            'path'      => APP . 'webroot/files/activity/brosur/'.$file['Activity']['brosur_dir'] . DS
        );
        pr($params['path']);
        $this->set($params);
    }


    function connect() {
        $this->Twitter->setupApp('YOUR_CONSUMER_KEY', 'YOUR_CONSUMER_SECRET');
        $this->Twitter->connectApp('YOUR_CALLBAK_URL');
    }


}

?>