<?php
/*
 * Controllers/EventTypesController.php
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
 
class FacilitiesController extends FullCalendarAppController {

	var $name = 'Facilities';
    //var $layout='pemesanan';
        var $paginate = array(
            'limit' => 15
        );

	function index() {
        $this->set('judul','Pemesanan Fasilitas');
		$this->Facility->recursive = 0;
		$this->set('facilities', $this->paginate());
	}

	function view($id = null) {
        $this->set('judul','Pemesanan Fasilitas');
		if(!$id) {
			$this->Session->setFlash(__('Invalid event type', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('Facility', $this->Facility->read(null, $id));
	}

	function add() {
        $this->set('judul','Pemesanan Fasilitas');
		if (!empty($this->data)) {
			$this->EventType->create();
			if ($this->EventType->save($this->data)) {
				$this->Session->setFlash(__('The event type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event type could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
        $this->set('judul','Pemesanan Fasilitas');
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid event type', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Facility->save($this->data)) {
				$this->Session->setFlash(__('The event type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event type could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Facility->read(null, $id);
		}
	}

	function delete($id = null) {
        $this->set('judul','Pemesanan Fasilitas');
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for event type', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EventType->delete($id)) {
			$this->Session->setFlash(__('Event type deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Event type was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
