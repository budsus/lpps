<?php

class Participant extends AppModel{

    public $belongsTo = array(
        'Activity'
    );

    public $validate = array(
        'nama_lengkap' => array(
            'rule' => 'notEmpty',
            'message' => 'Nama Lengkap harus diisi'
        ),
        'alamat' => array(
            'rule' => 'notEmpty',
            'message' => 'Alamat harus diisi.'
        ),
        'telp' => array(
            'rule' => 'notEmpty',
            'message' => 'Nomor telepon/hp harus diisi.'
        )
    );

}
?>