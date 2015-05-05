<?php 

class InputController {
    
    static private $instance = null;

    static public function getInstance() {
        if (null === self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    private function __construct(){}
    private function __clone(){}

    function cleanGet($get_var) {
        return (isset($_GET[$get_var]) && trim($_GET[$get_var]) != "") ? $this->cleanInput($_GET[$get_var]) : '';
    }

    function cleanPost($post_var) {     
        return (isset($_POST[$post_var]) && trim($_POST[$post_var]) != '') ? $this->cleanInput($_POST[$post_var]) : '';
    }

    function cleanInput($input) {
        return trim(htmlspecialchars(strip_tags($input), ENT_QUOTES, "UTF-8"));
    }

}
