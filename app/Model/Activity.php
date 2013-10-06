<?php

class Activity extends AppModel{
    public $displayField='nama_kegiatan';
    public $validate = array(
        'nama_kegiatan' => array(
            'rule' => 'notEmpty',
            'message' => 'Nama Kegiatan harus diisi'
            ),
        'penyelenggaraan' => array(
            'rule' => 'notEmpty',
            'message' => 'Penyelenggaraan harus diisi. (Bulan diselenggarakannya kegiatan)'
        )
        );
    public $actsAs = array(
        'Upload.Upload' => array(
            'brosur' => array(
                'fields' => array(
                    'dir' => 'brosur_dir'
                )
            )
        )
    );
    public $helpers = array('Facebook.Facebook');

    public $hasMany=array(
        'Participant'
    );
}
?>