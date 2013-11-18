<?php

class ParticipantsController extends AppController{
    public $layout = "utama";
    var $components = array('Session');
    public function add($id){




        $activities = $this->Participant->Activity->findById($id);
        $this->set('data',$activities);

        if($this->request->is('post')){
            $this->Participant->save($this->request->data);
            $this->redirect('/activities');
        }
    }

    function participantList($id = null) {

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