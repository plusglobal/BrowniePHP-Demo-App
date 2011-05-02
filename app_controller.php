<?php

class AppController extends Controller {

	var $components = array('Session', 'Brownie.panel');

	var $companyName = 'Demo app';
	var $brwMenu = array(
		'Posts' => array(
			//'Button Labek' => array()
			'Published' => array(
				'plugin' => 'brownie', 'controller' => 'contents',
				'action' => 'view', 'PostStatus', '2',
			),
			'Draft' => array(
				'plugin' => 'brownie', 'controller' => 'contents',
				'action' => 'view', 'PostStatus', '1',
			),
		),
		'Configuration' => array(
			//'Button label' => 'ModelName',
			'Cateogories' => 'Category',
			'Tags' => 'Tag'
		),
	);

}