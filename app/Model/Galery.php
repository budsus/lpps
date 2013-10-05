<?php
class Galery extends AppModel{
    var $name = 'Galery';
    var $useTable = 'galeries';
    public $belongsTo=array(
        'Facility'
    );
    /*var $actsAs = array(
        'MeioUpload.MeioUpload' => array('filename')


    );*/
    /*public $actsAs = array(
        'Uploader.Attachment' => array(
            'image' => array(
                'tempDir' => TMP,
                'uploadDir' => '/var/www/app/webroot/uploads/',
                'finalPath' => '/img/uploads/',
                'dbColumn' => 'dir',
                'nameCallback' => 'formatName'
            )
        )
    );


    public function formatName($name, $file) {
        return sprintf('%s-%s', $name, $file->size());
    }*/

    public $actsAs = array(
        'Upload.Upload' => array(
            'photo' => array(
                //'path' => '{ROOT}webroot{DS}files{DS}{model}{DS}{field}{DS}',
                'fields' => array(
                    'dir' => 'photo_dir'
                )
            )
        )
    );

    public $validate = array(
        'photo' => array(
            'fileRule1'=>array(
                'rule'=>array('fileSize', '>', '0MB'),
                'message'=>'File harus terisi'
            ),
            'fileRule2'=>array(
                'rule' => array('isValidMimeType', array('image/jpg', 'image/png'), ),
                'message' => 'Format file harus berupa jpg atau png'
            )

        )
    );



}
?>