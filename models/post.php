<?php

class Post extends AppModel {

	var $belongsTo = array(
		'Author', 'Category',
		'PostStatus'
	);
	var $hasAndBelongsToMany = array('Tag');
	var $order = array('date' => 'desc');

	var $brwConfig = array(
		'fields' => array(
			'filter' => array('post_status_id', 'category_id', 'author_id'),
		),
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

	var $brwConfigPerAuthUser = array(
		'Author' => array(
			'type' => 'owned', // may be 'owned', 'all', 'none'
			'brwConfig' => array(),
		),
	);

}