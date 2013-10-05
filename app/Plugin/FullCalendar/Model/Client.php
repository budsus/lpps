<?php

class Client extends FullCalendarAppModel{
    var $name = 'Client';
    var $displayField = 'nama_depan';
    var $hasMany = array(
        'Event' => array(
            'className' => 'FullCalendar.Event',
            'foreignKey' => 'id',
            'dependent' => false,
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
        ),
    );
}
?>