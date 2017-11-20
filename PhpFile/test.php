<?php
session_start();
?>
<?php
    class Session{
        public static function exits($key){
            return (isset($_SESSION[$key])) ? true : false;
        }
        public static function delete($key){
            // return self::exits($key) ? session_unset($_SESSION[$key]) : null;

        }
        public static function put($key, $value){
            return $_SESSION[$key] = $value;
        }
        public static function get($key){
            return self::exits($key) ? $_SESSION[$key] : null;
        }
    }
?>
<?php
   $array=array("a"=>"banana","b"=>"apple","c"=>"orange");
   
   print_r(array_search("banana", $array));
?> 