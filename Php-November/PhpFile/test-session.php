<?php
session_start();
?>
<?php
    class Session_Class{
        public static function exits($number){
            return (isset($_SESSION[$number])) ? true : false;
        }
        public static function delete($number){
            return self::exits($number) ? session_unset($_SESSION[$number]) : null;
        }
        public static function put($number, $value){
            return $_SESSION[$number] = $value;
        }
        public static function get($number){
            return self::exits($number) ? $_SESSION[$number] : null;
        }
    }
    class Vatgia {
        public $value_1 = "HUNG";
        public $value_2 = "";
        public $value_3 = "";
        public $value_4 = "";
        public $value_5 = "";
        public $value_6 = "";
        public $value_7 = "";
        public $value_8 = "";
        public $value_9 = "";
        public function getInformation(){
            $user = 
            [
                'ITVG' => $this->value_1,
                '123.doc' => $this->value_2,
                'telesales' => $this->value_3,
                'PUB' => $this->value_4,
                'ITVG' => $this->value_5,
                'ITVG' => $this->value_6,
                'ITVG' => $this->value_7,
                'ITVG' => $this->value_8,
                'ITVG' => $this->value_9,
            ];
            return $user;
        }
    }
    $vatgia = new Vatgia();
    $info = $vatgia->getInformation();
    Session_Class::put('Vatgia', $info);
    echo '<pre>';
    var_dump(Session_Class::get('Vatgia'));
?>









