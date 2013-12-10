<?php

class ParticipantsController extends AppController{
    public $layout = "utama";
    var $components = array('Session');

    public function add($id){
        $this->set('judul', 'Pendaftaran Peserta');
        $activities = $this->Participant->Activity->findById($id);
        $this->set('data',$activities);

        if($this->request->is('post')){
            $this->Participant->save($this->request->data);
            $this->Session->setFlash("Anda berhasil mendaftar!");
            $this->redirect(array(
                    'controller' => 'participants',
                    'action' => 'participantList',
                    $id)
            );
        }
    }

    function participantList($id = null) {
        $this->set('judul', 'Daftar Peserta yang telah terdaftar', 'default', array('class' => 'success'));
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $participants = $this->Participant->findAllByActivityId($id);
        if(!$participants)
        {
            $this->Session->setFlash("Belum ada peserta yang mendaftar!");
        }
        $this->set('participants', $participants);
    }

    function edit($id = null) {
        $this->set('judul', 'Ubah Detail Peserta');
        if ($id != null) {
            $datapeserta = $this->Participant->find('first', array(
                'conditions' => array(
                    'Participant.id' => $id
                )
            ));
            $this->set('data', $datapeserta);
        } else {
            $this->redirect('/activities');
        }
    }

    function save() {
        if (!empty($this->data)) {
            if ($this->Participant->save($this->data)){
                $this->Session->setFlash('Ubah data peserta berhasil', 'default', array('class' => 'success'));
            }
            $this->redirect(array(
                    'controller' => 'participants',
                    'action' => 'participantList',
                    $this->data['Participant']['activity_id'])
            );
        }
        $this->redirect(array('controller'=>'activities', 'action'=>'index'));
    }

    function delete($id = null) {
        if ($id != null) {
            if ($this->Participant->delete($id)) {
                $this->Session->setFlash('Data peserta telah dihapus.');
                $this->redirect(array('controller'=>'activities', 'action'=>'index'));
            } else {
                $this->Session->setFlash("Data tidak dapat dihapus.");
            }
            $this->redirect('/activities');
        } else {
            $this->redirect('/activities');
        }
    }
}