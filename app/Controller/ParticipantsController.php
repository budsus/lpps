<?php

class ParticipantsController extends AppController{
    public $layout = "utama";

    public function add($id){
        $this->set('judul', 'Pendaftaran Peserta');
        $activities = $this->Participant->Activity->findById($id);
        $this->set('data',$activities);

        if($this->request->is('post')){
            $this->Participant->save($this->request->data);
            $this->redirect('/activities');
        }
    }

    function participantList($id = null) {
        $this->set('judul', 'Daftar Peserta yang telah terdaftar');
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $participants = $this->Participant->findAllByActivityId($id);
        if (!$participants) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('participants', $participants);
    }
}