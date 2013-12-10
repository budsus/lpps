<?php
    class Facility extends AppModel{
        public $displayField='nama';
        public $hasMany=array(
            'Galery',
        );

        var $validate = array(
            'nama' => array (
                'notempty' => array(
                    'rule' => 'notempty',
                    'message' => 'Nama fasilitas harus terisi.'
                )
            ),
            'keterangan' => array (
                'notempty' => array(
                    'rule' => 'notempty',
                    'message' => 'keterangan harus terisi'
                )
            ),
            'biaya' => array (
                'notempty' => array(
                    'rule' => 'notempty',
                    'message' => 'Biaya harus terisi.'
                )


            ),
            'jumlah' => array (
                'notempty' => array(
                    'rule' => 'notempty',
                    'message' => 'Jumlah fasilitas harus terisi.'
                ),
                'minimal' => array(
                    'rule' => 'naturalNumber',
                    'message' => 'tidak boleh bernilai 0'
                )
                ,'angka' => array(
                    'rule' => 'numeric',
                    'message' => 'Harus berupa angka'
                )

            )
        );
    }
?>