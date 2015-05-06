<?php 

class ActionController {
	
	function ActionController() {
		$this->doAction();
	}

	function doAction() {
		$inputManager = InputController::getInstance();
		$action = $inputManager->cleanGet('action');
		$object = $inputManager->cleanGet('object');
		
		if (!empty($object)) {
			if ($action == 'add') {
				$cleanObject = $inputManager->cleanObject($object);
				$newObj = R::dispense($object);
				foreach ($cleanObject as $key => $value) {
					$newObj[$key] = $value;
				}
				$id = R::store($newObj);
			}
		}
	}


}