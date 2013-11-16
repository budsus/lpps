<?php
class Book extends AppModel {
    public $displayField='judul';

    public $hasMany = array('Buy');
    public $actsAs = array(
        'Upload.Upload' => array(
            'cover' => array('fields' => array('dir' => 'cover_dir'))
        )
    );
}
?>