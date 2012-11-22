<?php

class Country extends AppModel {

	public $hasMany = array('City');

	public $brwConfig = array();

}