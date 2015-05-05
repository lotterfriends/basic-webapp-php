<?php

require "viewController.class.php";
require "databaseController.class.php";

class App {

	function showErrors() {
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
	}

	function start() {
		$viewController = new ViewController();
	}

	function openDatabaseConnection() {
		$db = DatabaseController::getInstance();
		$db->openConnection();
		// print_r($db->query('SELECT * from places'));
	}
	
}
