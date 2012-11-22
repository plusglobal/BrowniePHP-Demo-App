<?php

class Author extends AppModel {

	public $hasMany = array('Post', 'Page');

	public $belongsTo = array('City');

	public $brwConfig = array(
		'fields' => array(
			'filter' => array('email', 'id' => true, 'city_id'),
		),
		'paginate' => array('fields' => array('id', 'name', 'email', 'city_id')),
	);

}