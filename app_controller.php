<?php

class AppController extends Controller {

	var $components = array('Session', 'Brownie.panel', 'DebugKit.Toolbar');

	var $companyName = 'Demo app';

	/**
	* The menu should have the following structure:
	*
	* var $brwMenu = array(
	* 	'Category label' => array(
	*	 	'Button label' => array('controller' => ... ),
	* 		'Another button' => 'ModelName',
	* 	),
	* 	'Another category' => array(
	* 		etc...
	* 	),
	* ):
	*/
	var $brwMenu = array(
		'Posts' => array(
			//'Button Label' => array()
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
			'Categories' => 'Category',
			'Tags' => 'Tag'
		),
	);

}