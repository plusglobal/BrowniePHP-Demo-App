<?php

class PostStatus extends AppModel {

	var $hasMany = array('Post');

	var $brwConfig = array(
		'actions' => array(
			'add' => false,
			'delete' => false,
			'edit' => false,
		),
	);

}