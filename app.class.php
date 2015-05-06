<?php

require "viewController.class.php";
require "actionController.class.php";
require "rb.php";
require 'inputController.class.php';

class App {

	function showErrors() {
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
	}

	function start() {
		$viewController = new ViewController();
		$actioController = new ActionController();
	}

	function openDatabaseConnection() {
		R::setup( 'mysql:host=localhost;dbname=mydatabase', 'root', 'root');
	}
	
}