<?php
/*
 * Model/Event.php
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
 
class Event extends AppModel {
	var $name = 'Event';
	var $displayField = 'nama_acara';
    var $captcha = '';
    var $validate = array(
        'captcha'=>array(
            'rule' => array('matchCaptcha'),
            'message'=>'Anda salah memasukkan kode diatas'
        ),
		'nama_pemesan' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),

		'start' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
        'nama_acara' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'harus terisi'
            ),
        ),
        'end' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
        'Tanggal' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            ),
        ),
        'details'=>array(
            'notempty'=>array(
                'rule'=>array('notempty')
            )

        ),
        'terbayar'=>array(
            'notempty'=>array(
                'rule'=>array('notempty')
            ),
            'salary' => array(
                'rule' => array('money', 'left'),
                'message' => 'masukkan format uang'
            )
        )
	);

    function matchCaptcha($inputValue)	{
        return $inputValue['captcha']==$this->getCaptcha(); //return true or false after comparing submitted value with set value of captcha
    }

    function setCaptcha($value)	{
        $this->captcha = $value; //setting captcha value
    }

    function getCaptcha()	{
        return $this->captcha; //getting captcha value
    }

	var $belongsTo = array(
		'Facility' => array(
			'className' => 'FullCalendar.Facility',
			'foreignKey' => 'fasilitas_id'
		),

	);

    var $hasOne=array(
        'Client' => array(
            'className' => 'FullCalendar.Client',
            'foreignKey' => 'event_id',
            'dependent' => true
        )
    );

}
?>
