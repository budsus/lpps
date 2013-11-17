<?php
    class ImagepathsController extends AppController{
        var $uses = 'Imagepath';
        public $name = "Imagepaths";
        public $layout = "utama";

        public function index(){

     }
        public function upload($check){

            $facilities=$this->Imagepath->Facility->find('list');

            $this->set('judul', 'Manajemen fasilitas');
            $this->set('facilities',$facilities);
            $uploadData = array_shift($check);

            if ( $uploadData['size'] == 0 || $uploadData['error'] !== 0) {
                return false;
            }

            $uploadFolder = 'files'. DS .'webroot/img';
            $fileName = time() . '.pdf';
            $uploadPath =  $uploadFolder . DS . $fileName;

            if( !file_exists($uploadFolder) ){
                mkdir($uploadFolder);
            }

            if (move_uploaded_file($uploadData['tmp_name'], $uploadPath)) {
                $this->set('filename', $fileName);
                return true;
            }

            return false;
        }


    }
?>