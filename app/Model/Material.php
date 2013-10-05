<?php
class Material extends AppModel {
    public $displayField='nama';

    public $actsAs = array(
        'Upload.Upload' => array(
            'judul' => array('fields' => array('dir' => 'materipembinaan_dir'))
        )
    );
}
?>