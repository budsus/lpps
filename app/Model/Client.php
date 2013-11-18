<?php

class Client extends AppModel{
    var $name = 'Client';
    var $displayField = 'nama_depan';
    var $hasOne = array(
        'Event' => array(
            'className' => 'FullCalendar.Event',
            'foreignKey' => 'client_id',
            'dependent' => true,
        )
    );

    var $validate = array(
        'nama_depan' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message'=>'tidak boleh kosong'
            ),
        ),
        'nama_belakang' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message'=>'tidak boleh kosong'
            ),
        ),
        'email' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message'=>'tidak boleh kosong'
            ),
            'email' => array(
                'rule' => 'email',
                'message' => 'Email harus valid'
            )
        ),
        'telepon' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message'=>'tidak boleh kosong'
            ),
            'numeric' => array(
                'rule' => array('numeric'),
                'message'=>'harus angka'
            ),
        ),
    );
}
?>