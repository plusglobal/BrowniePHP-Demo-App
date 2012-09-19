<?php

class Tag extends AppModel {

	public $hasAndBelongsToMany = array('Post');

	public $brwConfig = array(
		'fields' => array(
			'filter' => array('id' => true, 'name'),
		),
	);

}