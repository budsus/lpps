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
 
class FullCalendarController extends FullCalendarAppController {
    var $uses = array('Facility','Galery');
	var $name = 'FullCalendar';
    //var $layout='pemesanan';
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
