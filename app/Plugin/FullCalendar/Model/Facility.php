<?php
/*
 * Model/EventType.php
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
 
class Facility extends FullCalendarAppModel {
	var $name = 'Facility';
	var $displayField = 'nama';
	var $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
	);

	var $hasMany = array(
		'Event' => array(
			'className' => 'FullCalendar.Event',
			'foreignKey' => 'id',
			'dependent' => false,
		)
	);

}
?>
