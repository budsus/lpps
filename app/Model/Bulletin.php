<?php
class Bulletin extends AppModel {
    public $displayField='judul';

    public $hasMany = array('Buybulletin');
    public $actsAs = array(
        'Upload.Upload' => array(
            'cover' => array('fields' => array('dir' => 'cover_dir'))
        )
    );
}
?>