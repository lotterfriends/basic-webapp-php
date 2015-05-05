<?php 

require 'inputController.class.php';

class ViewController {
	
	private static $DEFAULT_VIEW = 'home';

	function ViewController() {
		$this->showView();
	}

	function showView() {
		$inputManager = InputController::getInstance();
		$view = $inputManager->cleanGet('view');
		if (empty($view)) {
			$view = self::$DEFAULT_VIEW;
		}
		echo $view;
		// load view
	}


}
