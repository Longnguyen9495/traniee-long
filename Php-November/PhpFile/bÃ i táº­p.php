<?php
session_start();
?>
<?php
    class Session{
        public static function put($key, $value){
            return $_SESSION[$key] = $value;
        }
        public static function get($key){
            if(isset($_SESSION[$key])){
                return $_SESSION[$key];
            }
        }
    }
    class User {
        public $name = "12";
        public $year = "123";
        public $job = "123";
        public function getInformation(){
            $user =
            [
                'name' => $this->name,
                'year' => $this->year,
                'job' => $this->job
            ];
            return $user;
        }
    }
    $user = new User();
    $info = $user->getInformation();
    Session::put('user', $info);
    echo '<pre>';
    var_dump (Session::get('user'));
?>

