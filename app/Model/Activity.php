<?php

class Activity extends AppModel{

    public $hasMany = array(
        'Participant' => array(
            'className' => 'Participant',
            'foreignKey' => 'activity_id',
            'dependent' => true
        )
    );

    public $validate = array(
        'nama_kegiatan' => array(
            'rule' => 'notEmpty',
            'message' => 'Nama Kegiatan harus diisi'
            ),
        'penyelenggaraan' => array(
            'rule' => 'notEmpty',
            'message' => 'Penyelenggaraan harus diisi. (Bulan diselenggarakannya kegiatan)'
        ),
        'deskripsi_singkat' => array(
            'rule' => 'notEmpty',
            'message' => 'Deskripsi singkat kegiatan harus diisi'
            )/*,
        'poster'=>array(
            'rule' => array('isValidMimeType', array('image/jpg', 'image/png','image/jpeg'), ),
            'message' => 'Format file harus berupa jpg atau png'
        )*/
        );
    public $actsAs = array(
        'Upload.Upload' => array(
            'brosur' => array(
                'fields' => array(
                    'dir' => 'brosur_dir'
                )
            ),
            'poster' => array(
                'fields' => array(
                    'dir' => 'poster_dir'
                )
            )
        )
    );
    public $helpers = array('Facebook.Facebook', 'Twitter.Twitter');
}
?>