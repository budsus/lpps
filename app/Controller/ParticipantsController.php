<?php

class ParticipantsController extends AppController{

    public function add($id){

        $activities = $this->Participant->Activity->findById($id);
        $this->set('activity_id',$id);

        if($this->request->is('post')){
            $this->Participant->save($this->request->data);
            $this->redirect('/activities');
        }

        $this->set('activities', $activities);

    }

    function participantList($id = null) {

        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $participants = $this->Participant->findAllByIdKegiatan($id);
        if (!$participants) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('participants', $participants);
    }
}