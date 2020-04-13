<?php 
    class POST{
        private static $inst = null;
        // private function __construct() { }
        public static function ini() {
            if(is_null(self::$inst)){
                self::$inst = new self();
            }
            return self::$inst;
        }
        public function __GET($param){
            return $_POST[$param];
        }
    };
?>