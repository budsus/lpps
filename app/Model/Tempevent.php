<?php
class Tempevent extends AppModel {
    var $name = 'Tempevent';
    var $validate = array(
        'nama_pemesan' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'harus terisi'
            ),
        ),

        'start' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'harus terisi'
            ),
        ),

        'end' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'harus terisi'
            ),
        ),
        'Tanggal' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'harus terisi'
            ),
        ),
        'details'=>array(
            'notempty'=>array(
                'rule'=>array('notempty'),
                'message' => 'harus terisi'
            )

        )
    );

    var $belongsTo = array(
        'Facility' => array(
            'className' => 'Facility',
            'foreignKey' => 'fasilitas_id'
        ),
        'Booker' => array(
            'className' => 'Booker',
            'foreignKey' => 'booker_id'
        )
    );
}

?>