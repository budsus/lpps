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
 
class Event extends FullCalendarAppModel {
	var $name = 'Event';
	var $displayField = 'nama_acara';
	var $validate = array(
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

        )
	);

	var $belongsTo = array(
		'Facility' => array(
			'className' => 'FullCalendar.Facility',
			'foreignKey' => 'fasilitas_id'
		),
        'Client' => array(
			'className' => 'FullCalendar.Client',
			'foreignKey' => 'client_id'
		)
	);

}
?>
