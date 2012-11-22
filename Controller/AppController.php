<?php

class AppController extends Controller {

	public $components = array(
		'Session',
		'Brownie.BrwPanel',
		'DebugKit.Toolbar',
	);

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
	public $brwMenu = array(
		'Posts' => array(
			//'Button label' => 'ModelName',
			'All' => 'Post',
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
		'Pages' => array(
			'Pages' => 'Page',
		),
		'Configuration' => array(
			'Categories' => 'Category',
			'Tags' => 'Tag',
			'Authors' => 'Author',
			'Countries' => 'Country',
			'Cities' => 'City',
		),
	);

	//you can configure a different menu for each type of user
	/*public $brwMenuPerAuthUser = array(
		'Author' => array(
			'Menu' => array(
				'Button name' => 'ModelName'
			),
		),
	);*/

	//or you can override the main menu based on your user type
	function beforeFilter() {
		if ($this->request['params']['plugin'] == 'Brownie' and AuthComponent::user('model') == 'Author') {
			$brwMenu = $this->brwMenu;
			pr($brwMenu);
			unset($brwMenu['Configuration']['Authors']);
			$this->brwMenuPerAuthUser = array('Author' => $brwMenu);
			pr($this->brwMenuPerAuthUser);
		}
		parent::beforeFilter();
	}

}