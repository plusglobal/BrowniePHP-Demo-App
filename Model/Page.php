<?php

class Page extends AppModel {

	public $belongsTo = array('Author');

	public $actsAs = array('Translate' => array('title', 'body'));

	public $brwConfig = array();

}