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

class TempeventsController extends AppController {
    var $components = array('Session');
    function simpan2() {
        $this->set('judul','Pemesanan Fasilitas');
        if (!empty($this->data)) {

            if ($this->Tempevent->saveAssociated($this->data)){
                $this->Session->setFlash('Ubah Calon pemesan berhasil', 'default', array('class' => 'success'));
            }
            $this->redirect(array('controller'=>'Facilities','action'=>'index'));
        }
        $this->redirect(array('controller'=>'Facilities', 'action'=>'index'));
    }

}
?>