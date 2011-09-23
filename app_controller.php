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
				'plugin' => 'brownie', 'controller' => 'contents', 'brw' => false,
				'action' => 'index', 'Post', 'Post.post_status_id' => PUBLISHED,
			),
			'Draft' => array(
				'plugin' => 'brownie', 'controller' => 'contents', 'brw' => false,
				'action' => 'index', 'Post', 'Post.post_status_id' => DRAFT,

			),
		),
		'Configuration' => array(
			//'Button label' => 'ModelName',
			'Categories' => 'Category',
			'Tags' => 'Tag',
			'Authors' => 'Author',
		),
	);

	//you can configure a different menu for each type of user
	var $brwMenuPerAuthUser = array(
		'Author' => array('a' => 'b'),
	);

	//or you can modify the main menu based on your user type
	function beforeRender() {
		$authModel = Configure::read('brwSettings.authModel');
		if ($authModel == 'Author') {
			$brwMenu = $this->brwMenu;
			unset($brwMenu['Configuration']['Authors']);
			$this->brwMenuPerAuthUser['Author'] = $brwMenu;
		}
		parent::beforeRender();
	}

}