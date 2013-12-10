<?php
/*
 * Controller/EventsController.php
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */

class EventsController extends AppController {
    var $components = array('Session');
    var $uses = array('Tempevent','Event','Facility');
    var $helpers = array('Html', 'Form', 'Session', 'Js'=>array('Jquery'));
    public $layout = "utama";
	var $name = 'Events';
    //var $layout='pemesanan';
        var $paginate = array(
            'limit' => 15
        );

        function index() {

            $this->set('judul','Pemesanan Fasilitas');
		$this->Event->recursive = 1;
		$this->set('events', $this->paginate('Event'));
	}

	function view($id = null) {
        $this->set('judul','Pemesanan Fasilitas');
		if (!$id) {
			$this->Session->setFlash(__('Invalid event', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('event', $this->Event->read(null, $id));
	}

    public function pesan(){
        App::uses('CakeTime', 'Utility');
        // pr($id);
        //$this->layout='facility';
        $this->set('fasilitas', $this->Event->Facility->find('list'));
        //pr($acara);
        $this->set('judul', 'Pesan Fasilitas');
        if($this->request->is('post')){

            if(!isset($this->Captcha))	{ //if Component was not loaded throug $components array()
                $this->Captcha = $this->Components->load('Captcha'); //load it
            }
            $this->Event->create();
            $this->Event->setCaptcha($this->Captcha->getVerCode()); //getting from component and passing to model to make proper validation check
            $this->Event->set($this->request->data);

            if($this->Event->validates())
            { //as usual data save call'

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

                        if(!$this->Event->find
                            ('all',array
                                ('conditions'=>array
                                    (
                                        $startdate.' BETWEEN '. $timestart.' AND '. $timeend

                                    )
                                )

                            )&& !$this->Event->find
                               ('all',array
                                    ('conditions'=>array
                                        (
                                        $enddate.' BETWEEN '. $timestart.' AND '. $timeend

                                        )
                                    )
                                )
                          )
                        {
                            $this->Event->saveAssociated($this->request->data);
                            $this->Session->setFlash('Pemesanan Fasilitas berhasil');
                            break;

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
            }	else
                { //or
                    $this->Session->setFlash('Pemesanan Fasilitas gagal');
                //pr($this->Signup->validationErrors);
                //something do something else
                }
            // $this->Session->setFlash('pemesanan fasilitas berhasil!');
            //
        }
    }

	function add() {
        $this->set('judul','Pemesanan Fasilitas');

       $this->Event->recursive = 1;
        $this->set('events', $this->paginate('Tempevent'));
       // $this->data['end']=19:00;
        //pr($this->data);
        $total=$this->Event->Facility->find('count');
        if($total==0){
            $this->Session->setFlash(__('Belum ada fasilitas, silahkan tambah fasilitas terlebih dahulu', true));
            $this->redirect(array('controller'=>'FullCalendar','action' => 'index'));
        }
        $facilities=$this->Event->Facility->find('list');
        //pr($facilities);
        $this->set('judul','Pemesanan Fasilitas');
		if (!empty($this->data)) {
			$this->Event->create();
			if ($this->Event->saveAssociated($this->data)) {
				$this->Session->setFlash(__('The event has been saved', true));
				//$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event could not be saved. Please, try again.', true));
			}
		}
		$this->set('fasilitas', $this->Event->Facility->find('list'));
	}

	public function edit($id = null) {
        $this->set('judul','Pemesanan Fasilitas');
/*
       // $facilityID=$this->Facility->findAllbyId('all');
        $this->set('judul','Edit Pemesanan Fasilitas');
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid event', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Event->saveAssociated($this->data)) {
				$this->Session->setFlash(__('Pemesanan berhasil', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Pemesanan gagal. Silahkan coba lagi', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Event->read(null, $id);
		}

        //$this->set('client', $this->Event->Client->find('list'));
*/
       /* $this->set('fasilitas', $this->Event->Facility->find('list'));
        if ($this->request->is('post')) {
            // If the form data can be validated and saved...
            if ($this->Event->saveAssociated($this->request->data)) {
                // Set a session flash message and redirect.
                $this->Session->setFlash('Pemesanan berhasil diubah!');
                $this->redirect(array('action' => 'index'));
            }
        }*/

       /* if (empty($this->data)) {
            //$this->set('fasilitas', $this->Event->Facility->find('list'));
            //$this->data = $this->Event->read(null, $id);
        }
        else {
            if ($this->Event->saveAssociated($this->data)) {

                $this->Session->setFlash('Your post has been updated.');
                $this->redirect(array('action' => 'index'));
            }
        }*/
        if ($id != null) {
            // ambil data dari tabel database
            $datauser = $this->Event->find('first', array(
                'conditions' => array(
                    'Event.id' => $id
                )
            ));
            $this->set('fasilitas', $this->Event->Facility->find('list'));
            $this->data =$datauser ;
            $this->Session->setFlash("Ubah data pemesanan berhasil");
        }
    }

   /*function editTemp($id = null) {
        $this->set('judul','Pemesanan Fasilitas');

        if ($id != null) {
            // ambil data dari tabel database
            $datauser = $this->Tempevent->find('first', array(
                'conditions' => array(
                    'Tempevent.id' => $id
                )
            ));
            $this->set('fasilitas', $this->Tempevent->Facility->find('list'));
            $this->data =$datauser ;
        }
    }*/
    function editTemp($id = null) {
        $this->set('judul','Pemesanan Fasilitas');

        if ($id != null) {
            // ambil data dari tabel database
            $datauser = $this->Tempevent->find('first', array(
                'conditions' => array(
                    'Tempevent.id' => $id
                )
            ));
            $this->set('fasilitas', $this->Tempevent->Facility->find('list'));
            $this->data =$datauser ;
            $this->set('data',$datauser);
        }
    }

    function simpan() {
    $this->set('judul','Pemesanan Fasilitas');
    if (!empty($this->data)) {

        if ($this->Event->saveAssociated($this->data)){
            $this->Session->setFlash('Pemesanan berhasil', 'default', array('class' => 'success'));
        }
        $this->Session->setFlash("Ubah data pemesanan berhasil");
        $this->redirect(array('action'=>'index'));
    }
    $this->redirect(array('controller'=>'main', 'action'=>'index'));
}



	function delete($id = null,$clientid=null) {
        $this->set('judul','Pemesanan Fasilitas');
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for event', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Event->delete($id,true) ) {
			$this->Session->setFlash(__('Event berhasil dihapus', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Event was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

    function deleteTemp($id = null,$clientid=null) {
        $this->set('judul','Pemesanan Fasilitas');
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for event', true));
            $this->redirect(array('action'=>'index'));
        }
        if ($this->Tempevent->delete($id) && $this->Tempevent->Booker->delete($clientid)) {
            $this->Session->setFlash(__('Data berhasil dihapus', true));
            $this->redirect(array('action'=>'add'));
        }
        $this->Session->setFlash(__('Event was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

        // The feed action is called from "webroot/js/ready.js" to get the list of events (JSON)
	function feed($id=null) {

		$this->layout = "ajax";
		$vars = $this->params['url'];
		$conditions = array('conditions' => array('UNIX_TIMESTAMP(start) >=' => $vars['start'], 'UNIX_TIMESTAMP(start) <=' => $vars['end']));
		$events = $this->Event->find('all', $conditions);
		foreach($events as $event) {
			if($event['Event']['all_day'] == 1) {
				$allday = true;
				$end = $event['Event']['start'];
			} else {
				$allday = false;
				$end = $event['Event']['end'];
			}
            if($event['Event']['status'] == 'Belum verifikasi' || $event['Event']['status'] == 'Belum Verifikasi')
            {

            }
            else{
                $data[] = array(
                    'id' => $event['Event']['id'],
                    'title'=>$event['Event']['nama_acara'],
                    'start'=>$event['Event']['start'],
                    'end' => $end,
                    'allDay' => $allday,
                    'url' => Router::url('/') . 'events/edit/'.$event['Event']['id'],
                    'details' => $event['Event']['details'],
                    'className' => $event['Facility']['color']
                );
            }

		}

		$this->set("json", json_encode($data));
	}

        // The update action is called from "webroot/js/ready.js" to update date/time when an event is dragged or resized
	function update() {
		$vars = $this->params['url'];
		$this->Event->id = $vars['id'];
		$this->Event->saveField('start', $vars['start']);
		$this->Event->saveField('end', $vars['end']);
		$this->Event->saveField('all_day', $vars['allday']);
	}

}
?>
