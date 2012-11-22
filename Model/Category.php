<?php

class Category extends AppModel {

	public $hasMany = array('Post');

	public $actsAs = array('Tree');

	public $brwConfig = array(
		'fields' => array(
			'no_add' => array('post_count'),
			'no_edit' => array('post_count'),
			'filter' => array('post_count'),
		),
	);

	public $brwConfigPerAuthUser = array(
		'Author' => array(
			'type' => 'all', // may be 'owned', 'all', 'none', 'custom'
			'brwConfig' => array(
				'actions' => array(
					'add' => false, 'edit' => false, 'delete' => false,
				),
			),
		),
	);


}