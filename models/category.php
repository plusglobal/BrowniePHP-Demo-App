<?php

class Category extends AppModel {

	var $hasMany = array('Post');


	var $brwConfigPerAuthUser = array(
		'Author' => array(
			'type' => 'all', // may be 'owned', 'all', 'none'
			'brwConfig' => array(
				'actions' => array(
					'add' => false, 'edit' => false, 'delete' => false,
				),
			),
		),
	);

}