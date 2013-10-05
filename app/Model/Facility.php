<?php
    class Facility extends AppModel{
        public $displayField='nama';
        public $hasMany=array(
            'Galery'
        );

        var $validate = array(
            'nama' => array (
                'notempty' => array(
                    'rule' => 'notempty',
                    'message' => 'Nama fasilitas harus terisi.'
                )
            ),
            'keterangan' => array (
                'email' => array(
                    'rule' => 'notempty',
                    'message' => 'keterangan harus terisi'
                )
            ),
            'biaya' => array (
                'notempty' => array(
                    'rule' => 'notempty',
                    'message' => 'Biaya harus terisi.'
                )
            )
        );
    }
?>