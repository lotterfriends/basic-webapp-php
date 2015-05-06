<?php 

require "lib/Smarty.class.php";

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
		$smarty = new Smarty;
		if ($smarty->templateExists($view . '.tpl')) {
			$smarty->display($view . '.tpl');
			$smarty->assign('images','templates/'); 
		} else {
			$smarty->display('404.tpl');
		}
	}


}