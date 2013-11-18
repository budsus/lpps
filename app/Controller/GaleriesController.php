<?php
/**
 * Created by JetBrains PhpStorm.
 * User: c032h
 * Date: 10/21/13
 * Time: 9:23 PM
 * To change this template use File | Settings | File Templates.
 */
class GaleriesController extends AppController{

    var $uses = array('Galery');
    public $name = "Galeries";
    public $layout = "utama";
    var $components = array('RequestHandler');

    public function index(){
        $this->set('data',$this->paginate('Galery'));
        $this->set('judul', 'Profile LPPS');
    }

public function upload(){
    if($this->request->is('post')){
        pr('tes');
        $this->Galery->save($this->request->data);
        $this->Session->setFlash("Penambahan Foto Berhasil");
        $this->redirest(array('controller'=>'galeries','action'=>'index'));
}}

}