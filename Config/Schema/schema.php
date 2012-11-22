<?php

App::uses('AuthComponent', 'Controller/Component');

class AppSchema extends CakeSchema {

	public function before($event = array()) {
		$db = ConnectionManager::getDataSource($this->connection);
		$db->cacheSources = false;
		return true;
	}


	public function after($event = array()) {
		if (isset($event['create']) and $event['create'] == 'tags') {
			$this->createBrwUsers();
			$this->createCountries();
			$this->createCities();
			$this->createAuthors();
			$this->createCategories();
			$this->createTags();
			$this->createPostStatuses();
			$this->createPosts();
		}
	}


	public $authors = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'city_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'last_login' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);
	public $brw_users = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'key' => 'unique', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'last_login' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'username' => array('column' => 'email', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);
	public $categories = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'parent_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'enabled' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'post_count' => array('type' => 'integer', 'null' => false, 'default' => null),
		'lft' => array('type' => 'integer', 'null' => true, 'default' => null),
		'rght' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);
	public $cities = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'country_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);
	public $countries = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);
	public $i18n = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'locale' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'key' => 'index', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'model' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'index', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'foreign_key' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'field' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'index', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'content' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'locale' => array('column' => 'locale', 'unique' => 0),
			'model' => array('column' => 'model', 'unique' => 0),
			'row_id' => array('column' => 'foreign_key', 'unique' => 0),
			'field' => array('column' => 'field', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);
	public $pages = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'author_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'body' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);
	public $post_statuses = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);
	public $posts = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'post_status_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'author_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'body' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);
	public $posts_tags = array(
		'post_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'tag_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('post_id', 'tag_id'), 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);
	public $tags = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	//methods to create random values

	public function getRandomEmail() {
		return strtolower(trim($this->getRandomString(1)) . '@' . trim($this->getRandomString(1))) . '.com';
	}


	public function getRandomHtmlText($wordsLow, $wordsHigh = null) {
		return '<p>' . $this->getRandomString($wordsLow, $wordsHigh) . '</p>';
	}


	public function getRandomDate() {
		return date('Y-m-d H:i:s', rand(date('U') - (60 * 60 * 24 * 300), date('U')));
	}


	public function getRandomString($wordsLow, $wordsHigh = null) {
		$lipsum = array(
			'Consectetur adipiscing elit. Etiam risus neque, vestibulum convallis consequat vitae, condimentum ac urna. Integer at nisl enim. Suspendisse rutrum bibendum orci, eget eleifend nunc porta id. Ut quis arcu eget libero sagittis blandit. Morbi volutpat tempus velit in accumsan. Sed vehicula magna eget enim posuere feugiat. Donec volutpat bibendum aliquet. Sed neque magna, hendrerit id semper at, pretium nec arcu. In sem libero, tristique et euismod sit amet, venenatis sit amet ante. Ut et risus eros. Etiam porttitor lorem sit amet nibh interdum euismod.',
			'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam risus neque, vestibulum convallis consequat vitae, condimentum ac urna. Integer at nisl enim. Suspendisse rutrum bibendum orci, eget eleifend nunc porta id. Ut quis arcu eget libero sagittis blandit. Morbi volutpat tempus velit in accumsan. Sed vehicula magna eget enim posuere feugiat. Donec volutpat bibendum aliquet. Sed neque magna, hendrerit id semper at, pretium nec arcu. In sem libero, tristique et euismod sit amet, venenatis sit amet ante. Ut et risus eros. Etiam porttitor lorem sit amet nibh interdum euismod.',
			'Osuere Phasellus commodo massa vel tellus viverra ultrices. Aenean nisl dolor, tincidunt quis ullamcorper eget, posuere vitae tortor. Donec a orci vel odio tempor ullamcorper eget ut lacus. Suspendisse venenatis, nibh ut elementum lobortis, sem elit tempus mi, non mattis orci enim non ante. Donec felis mi, suscipit in sagittis nec, molestie eget libero. Duis id ultricies ante. Fusce a nisl leo. Phasellus sollicitudin felis sit amet nisl ultricies molestie facilisis nisl auctor. Morbi ut sem enim, sed euismod est. Nullam accumsan leo sed turpis ullamcorper cursus. Maecenas non ante sem. Donec cursus bibendum magna, ut vestibulum tortor varius ac. Integer quis cursus enim. Aenean at turpis nulla, et ultrices ipsum.',
			'Donec ac ligula sit amet sem molestie posuere. Phasellus commodo massa vel tellus viverra ultrices. Aenean nisl dolor, tincidunt quis ullamcorper eget, posuere vitae tortor. Donec a orci vel odio tempor ullamcorper eget ut lacus. Suspendisse venenatis, nibh ut elementum lobortis, sem elit tempus mi, non mattis orci enim non ante. Donec felis mi, suscipit in sagittis nec, molestie eget libero. Duis id ultricies ante. Fusce a nisl leo. Phasellus sollicitudin felis sit amet nisl ultricies molestie facilisis nisl auctor. Morbi ut sem enim, sed euismod est. Nullam accumsan leo sed turpis ullamcorper cursus. Maecenas non ante sem. Donec cursus bibendum magna, ut vestibulum tortor varius ac. Integer quis cursus enim. Aenean at turpis nulla, et ultrices ipsum.',
			'Phasellus commodo massa vel tellus viverra ultrices. Aenean nisl dolor, tincidunt quis ullamcorper eget, posuere vitae tortor. Donec a orci vel odio tempor ullamcorper eget ut lacus. Suspendisse venenatis, nibh ut elementum lobortis, sem elit tempus mi, non mattis orci enim non ante. Donec felis mi, suscipit in sagittis nec, molestie eget libero. Duis id ultricies ante. Fusce a nisl leo. Phasellus sollicitudin felis sit amet nisl ultricies molestie facilisis nisl auctor. Morbi ut sem enim, sed euismod est. Nullam accumsan leo sed turpis ullamcorper cursus. Maecenas non ante sem. Donec cursus bibendum magna, ut vestibulum tortor varius ac. Integer quis cursus enim. Aenean at turpis nulla, et ultrices ipsum.',
			'Aliquam porta blandit facilisis. Sed rutrum luctus elit eu interdum. Aliquam et nulla vel lorem porttitor pellentesque. Donec eu lacus sed nulla dapibus posuere. Aenean a felis dui, et ornare lorem. Suspendisse sit amet purus lacus, sed feugiat nibh. Donec interdum tempor tristique. Etiam malesuada urna quis tortor commodo suscipit.',
			'Nulla vel lorem porttitor pellentesque. Donec eu lacus sed nulla dapibus posuere. Aenean a felis dui, et ornare lorem. Suspendisse sit amet purus lacus, sed feugiat nibh. Donec interdum tempor tristique. Etiam malesuada urna quis tortor commodo suscipit.',
			'Porttitor urna quis felis elementum convallis. Proin ut orci consectetur odio porta venenatis. Donec cursus eleifend condimentum. Vestibulum faucibus erat nec orci auctor eu laoreet justo vestibulum. Donec ac velit semper est egestas molestie. Suspendisse tempor mi vel turpis fringilla eu condimentum lectus vehicula. Nunc mollis dignissim enim, at blandit odio suscipit quis. Nulla non velit nec enim adipiscing tincidunt non sed turpis',
			'Proin ut orci consectetur odio porta venenatis. Donec cursus eleifend condimentum. Vestibulum faucibus erat nec orci auctor eu laoreet justo vestibulum. Donec ac velit semper est egestas molestie. Suspendisse tempor mi vel turpis fringilla eu condimentum lectus vehicula. Nunc mollis dignissim enim, at blandit odio suscipit quis. Nulla non velit nec enim adipiscing tincidunt non sed turpis',
			'In hac habitasse platea dictumst. Sed suscipit sem a augue cursus ut bibendum nisi pretium. Morbi mollis, lacus vitae lacinia vestibulum, tellus dolor venenatis arcu, ac sodales lorem lacus quis lectus. Morbi pretium tincidunt nulla, ac pharetra urna consequat et. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean eget turpis elit, et dapibus ipsum. Praesent felis eros, posuere sed ultrices vitae, dignissim nec sem. Phasellus viverra nisl at tellus consequat mattis. Ut egestas consectetur risus, eu condimentum purus aliquam sit amet. Sed dapibus massa quis augue vehicula sed interdum neque pulvinar. Proin et orci odio, ut luctus felis. Sed dapibus aliquet malesuada. Integer ac ipsum diam, vitae blandit diam. Nulla facilisi. Etiam semper vestibulum elit, venenatis volutpat ipsum feugiat',
			'Dictumst Sed suscipit sem a augue cursus ut bibendum nisi pretium. Morbi mollis, lacus vitae lacinia vestibulum, tellus dolor venenatis arcu, ac sodales lorem lacus quis lectus. Morbi pretium tincidunt nulla, ac pharetra urna consequat et. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean eget turpis elit, et dapibus ipsum. Praesent felis eros, posuere sed ultrices vitae, dignissim nec sem. Phasellus viverra nisl at tellus consequat mattis. Ut egestas consectetur risus, eu condimentum purus aliquam sit amet. Sed dapibus massa quis augue vehicula sed interdum neque pulvinar. Proin et orci odio, ut luctus felis. Sed dapibus aliquet malesuada. Integer ac ipsum diam, vitae blandit diam. Nulla facilisi. Etiam semper vestibulum elit, venenatis volutpat ipsum feugiat',
			'Sed suscipit sem a augue cursus ut bibendum nisi pretium. Morbi mollis, lacus vitae lacinia vestibulum, tellus dolor venenatis arcu, ac sodales lorem lacus quis lectus. Morbi pretium tincidunt nulla, ac pharetra urna consequat et. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean eget turpis elit, et dapibus ipsum. Praesent felis eros, posuere sed ultrices vitae, dignissim nec sem. Phasellus viverra nisl at tellus consequat mattis. Ut egestas consectetur risus, eu condimentum purus aliquam sit amet. Sed dapibus massa quis augue vehicula sed interdum neque pulvinar. Proin et orci odio, ut luctus felis. Sed dapibus aliquet malesuada. Integer ac ipsum diam, vitae blandit diam. Nulla facilisi. Etiam semper vestibulum elit, venenatis volutpat ipsum feugiat',
			'Suscipit sem a augue cursus ut bibendum nisi pretium. Morbi mollis, lacus vitae lacinia vestibulum, tellus dolor venenatis arcu, ac sodales lorem lacus quis lectus. Morbi pretium tincidunt nulla, ac pharetra urna consequat et. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean eget turpis elit, et dapibus ipsum. Praesent felis eros, posuere sed ultrices vitae, dignissim nec sem. Phasellus viverra nisl at tellus consequat mattis. Ut egestas consectetur risus, eu condimentum purus aliquam sit amet. Sed dapibus massa quis augue vehicula sed interdum neque pulvinar. Proin et orci odio, ut luctus felis. Sed dapibus aliquet malesuada. Integer ac ipsum diam, vitae blandit diam. Nulla facilisi. Etiam semper vestibulum elit, venenatis volutpat ipsum feugiat',
			'Sem a augue cursus ut bibendum nisi pretium. Morbi mollis, lacus vitae lacinia vestibulum, tellus dolor venenatis arcu, ac sodales lorem lacus quis lectus. Morbi pretium tincidunt nulla, ac pharetra urna consequat et. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean eget turpis elit, et dapibus ipsum. Praesent felis eros, posuere sed ultrices vitae, dignissim nec sem. Phasellus viverra nisl at tellus consequat mattis. Ut egestas consectetur risus, eu condimentum purus aliquam sit amet. Sed dapibus massa quis augue vehicula sed interdum neque pulvinar. Proin et orci odio, ut luctus felis. Sed dapibus aliquet malesuada. Integer ac ipsum diam, vitae blandit diam. Nulla facilisi. Etiam semper vestibulum elit, venenatis volutpat ipsum feugiat',
			'Augue cursus ut bibendum nisi pretium. Morbi mollis, lacus vitae lacinia vestibulum, tellus dolor venenatis arcu, ac sodales lorem lacus quis lectus. Morbi pretium tincidunt nulla, ac pharetra urna consequat et. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean eget turpis elit, et dapibus ipsum. Praesent felis eros, posuere sed ultrices vitae, dignissim nec sem. Phasellus viverra nisl at tellus consequat mattis. Ut egestas consectetur risus, eu condimentum purus aliquam sit amet. Sed dapibus massa quis augue vehicula sed interdum neque pulvinar. Proin et orci odio, ut luctus felis. Sed dapibus aliquet malesuada. Integer ac ipsum diam, vitae blandit diam. Nulla facilisi. Etiam semper vestibulum elit, venenatis volutpat ipsum feugiat',
			'Cursus ut bibendum nisi pretium. Morbi mollis, lacus vitae lacinia vestibulum, tellus dolor venenatis arcu, ac sodales lorem lacus quis lectus. Morbi pretium tincidunt nulla, ac pharetra urna consequat et. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean eget turpis elit, et dapibus ipsum. Praesent felis eros, posuere sed ultrices vitae, dignissim nec sem. Phasellus viverra nisl at tellus consequat mattis. Ut egestas consectetur risus, eu condimentum purus aliquam sit amet. Sed dapibus massa quis augue vehicula sed interdum neque pulvinar. Proin et orci odio, ut luctus felis. Sed dapibus aliquet malesuada. Integer ac ipsum diam, vitae blandit diam. Nulla facilisi. Etiam semper vestibulum elit, venenatis volutpat ipsum feugiat',
			'Bibendum nisi pretium. Morbi mollis, lacus vitae lacinia vestibulum, tellus dolor venenatis arcu, ac sodales lorem lacus quis lectus. Morbi pretium tincidunt nulla, ac pharetra urna consequat et. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean eget turpis elit, et dapibus ipsum. Praesent felis eros, posuere sed ultrices vitae, dignissim nec sem. Phasellus viverra nisl at tellus consequat mattis. Ut egestas consectetur risus, eu condimentum purus aliquam sit amet. Sed dapibus massa quis augue vehicula sed interdum neque pulvinar. Proin et orci odio, ut luctus felis. Sed dapibus aliquet malesuada. Integer ac ipsum diam, vitae blandit diam. Nulla facilisi. Etiam semper vestibulum elit, venenatis volutpat ipsum feugiat',
			'Nisi pretium. Morbi mollis, lacus vitae lacinia vestibulum, tellus dolor venenatis arcu, ac sodales lorem lacus quis lectus. Morbi pretium tincidunt nulla, ac pharetra urna consequat et. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean eget turpis elit, et dapibus ipsum. Praesent felis eros, posuere sed ultrices vitae, dignissim nec sem. Phasellus viverra nisl at tellus consequat mattis. Ut egestas consectetur risus, eu condimentum purus aliquam sit amet. Sed dapibus massa quis augue vehicula sed interdum neque pulvinar. Proin et orci odio, ut luctus felis. Sed dapibus aliquet malesuada. Integer ac ipsum diam, vitae blandit diam. Nulla facilisi. Etiam semper vestibulum elit, venenatis volutpat ipsum feugiat',
			'Pretium Morbi mollis, lacus vitae lacinia vestibulum, tellus dolor venenatis arcu, ac sodales lorem lacus quis lectus. Morbi pretium tincidunt nulla, ac pharetra urna consequat et. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean eget turpis elit, et dapibus ipsum. Praesent felis eros, posuere sed ultrices vitae, dignissim nec sem. Phasellus viverra nisl at tellus consequat mattis. Ut egestas consectetur risus, eu condimentum purus aliquam sit amet. Sed dapibus massa quis augue vehicula sed interdum neque pulvinar. Proin et orci odio, ut luctus felis. Sed dapibus aliquet malesuada. Integer ac ipsum diam, vitae blandit diam. Nulla facilisi. Etiam semper vestibulum elit, venenatis volutpat ipsum feugiat',
			'Morbi mollis, lacus vitae lacinia vestibulum, tellus dolor venenatis arcu, ac sodales lorem lacus quis lectus. Morbi pretium tincidunt nulla, ac pharetra urna consequat et. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean eget turpis elit, et dapibus ipsum. Praesent felis eros, posuere sed ultrices vitae, dignissim nec sem. Phasellus viverra nisl at tellus consequat mattis. Ut egestas consectetur risus, eu condimentum purus aliquam sit amet. Sed dapibus massa quis augue vehicula sed interdum neque pulvinar. Proin et orci odio, ut luctus felis. Sed dapibus aliquet malesuada. Integer ac ipsum diam, vitae blandit diam. Nulla facilisi. Etiam semper vestibulum elit, venenatis volutpat ipsum feugiat',
		);
 		shuffle($lipsum);
		$words = explode(' ', join($lipsum, ''));
		$ret = '';
		$limit = empty($wordsHigh) ? $wordsLow : rand($wordsLow, $wordsHigh);
		for ($i = 0; $i < $limit; $i++) {
			$ret .= $words[$i] . ' ';
		}
		return $ret;
	}


	//methods to fill the database with data

	public function createBrwUsers() {
		ClassRegistry::init('BrwUser')->save(array('email' => 'demo@browniephp.org', 'password' => '123'));
	}


	public function createTags() {
		$tags = array(1 => 'php', 'cakephp', 'html', 'css', 'javascript', 'git', 'jquery', 'phpunit');
		$Tag = ClassRegistry::init('Tag');
		foreach ($tags as $id => $name) {
			$Tag->save(array('id' => $id, 'name' => $name));
		}
	}


	public function createCountries() {
		$countries = array(
			1 => 'Argentina', 2 => 'Brazil', 3 => 'China', 4 => 'France',
			5 => 'Japan', 6 => 'Spain', 7 => 'Russia', 8 => 'United States of America',
		);
		$Country = ClassRegistry::init('Country');
		foreach ($countries as $id => $name) {
			$Country->save(array('id' => $id, 'name' => $name));
		}
	}


	public function createCities() {
		$City = ClassRegistry::init('City');
		$City->saveAll(array(
			array('name' => 'Buenos Aires', 'country_id' => 1),
			array('name' => 'Rio', 'country_id' => 2),
			array('name' => 'Paris', 'country_id' => 4),
			array('name' => 'New York', 'country_id' => 8),
			array('name' => 'San Francisco', 'country_id' => 8),
			array('name' => 'Miami', 'country_id' => 8),
		));
	}


	public function createPostStatuses() {
		ClassRegistry::init('PostStatus')->saveAll(array(
			array('id' => 1, 'name' => 'Draft'),
			array('id' => 2, 'name' => 'Published'),
		));
	}


	public function createCategories() {
		$Category = ClassRegistry::init('Category');
		$Category->saveAll(array(
			array('id' => 1, 'name' => $this->getRandomString(rand(1, 3)), 'parent_id' => null),
			array('id' => 2, 'name' => $this->getRandomString(rand(1, 3)), 'parent_id' => null),
			array('id' => 3, 'name' => $this->getRandomString(rand(1, 3)), 'parent_id' => null),
			array('id' => 4, 'name' => $this->getRandomString(rand(1, 3)), 'parent_id' => null),
			array('id' => 5, 'name' => $this->getRandomString(rand(1, 3)), 'parent_id' => 1),
			array('id' => 6, 'name' => $this->getRandomString(rand(1, 3)), 'parent_id' => 1),
			array('id' => 7, 'name' => $this->getRandomString(rand(1, 3)), 'parent_id' => 1),
			array('id' => 8, 'name' => $this->getRandomString(rand(1, 3)), 'parent_id' => 5),
			array('id' => 9, 'name' => $this->getRandomString(rand(1, 3)), 'parent_id' => 5),
			array('id' => 10, 'name' => $this->getRandomString(rand(1, 3)), 'parent_id' => 5),
		), array('callbacks' => false));
		$Category->recover();
	}


	public function createAuthors() {
		$Author = ClassRegistry::init('Author');
		$countCities = ClassRegistry::init('City')->find('count');
		for ($id = 1; $id < 10; $id++) {
			$Author->save(array(
				'id' => $id,
				'name' => $this->getRandomString(1) . ' ' . $this->getRandomString(1),
				'email' => $this->getRandomEmail(),
				'password' => Security::hash('123'),
				'city_id' => rand(1, $countCities),
			));
		}
	}


	public function createPosts() {
		$Post = ClassRegistry::init('Post');
		$countCategories = $Post->Category->find('count');
		for ($id = 1; $id < 100; $id++) {
			$Post->save(array(
				'id' => $id,
				'title' => $this->getRandomString(2, 6),
				'date' => $this->getRandomDate(),
				'post_status_id' => rand(1, 2),
				'author_id' => rand(1, 10),
				'category_id' => rand(1, $countCategories),
				'body' => $this->getRandomHtmlText(10, 100),
			));
		}
	}

}
