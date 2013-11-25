<?php
class Album extends AppModel{
    public $displayField='nama';
    public $hasMany=array(
        'Galerifoto'
    );

    var $validate = array(
        'nama' => array (
            'notempty' => array(
                'rule' => 'notempty',
                'message' => 'Nama folder harus terisi.'
            )
        ),

    );
}
?>