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
 
class EventType extends AppModel {
    public $name = 'EventType';
	public $displayField = 'name';
	public $uses = 'event_types';
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
	);

	public $hasMany = array(
		'Event' => array(
			'className' => 'FullCalendar.Event',
			'foreignKey' => 'event_type_id',
			'dependent' => false,
		)
	);

}
?>
