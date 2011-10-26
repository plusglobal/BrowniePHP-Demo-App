<?php

class AuthorsController extends AppController {

	function index() {
		$this->set('authors', $this->Author->find('all'));
	}

}