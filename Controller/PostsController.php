<?php

class PostsController extends AppController {

	function index() {
		$this->set('posts', $this->Post->find('all'));
	}

}