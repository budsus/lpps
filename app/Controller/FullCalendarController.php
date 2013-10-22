<?php
/*
 * Controller/FullCalendarController.php
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
 
class FullCalendarController extends AppController {
    var $components = array('Session');
    var $helpers = array('Html', 'Form', 'Session', 'Js'=>array('Jquery'));
    var $uses = array('Facility','Galery');
	var $name = 'FullCalendar';
    var $layout='kalendar';
	function index() {
        $this->set('judul','Pemesanan Fasilitas');
        $total=$this->Facility->find('count');
        if($total==0){
            $this->Session->setFlash("Belum ada data fasilitas, harap tambah terlebih dahulu");
          $this->redirect('/');
        }
        $this->set('judul','Pemesanan Fasilitas');
	}

}
?>
