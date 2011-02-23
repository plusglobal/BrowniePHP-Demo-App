<?php

class Post extends AppModel {

	var $belongsTo = array('Category', 'PostStatus');
	var $hasAndBelongsToMany = array('Tag');
	var $order = array('date' => 'desc');

	var $brwConfig = array(
		'images' => array(
			'main' => array(
				'name_category' => 'Main image',
				'sizes' => array('250x100'),
				'index' => true,
				'description' => false,
			),
			'gallery' => array(
				'name_category' => 'Images for gallery',
				'sizes' => array('150x100', '1024_1024'),
				'index' => false,
				'description' => true,
			),
		),
	);

}