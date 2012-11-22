<?php

class City extends AppModel {

	public $belongsTo = array('Country');

	public $hasMany = array('Author');

	public $brwConfig = array(
		'parent' => 'Country',
	);

}