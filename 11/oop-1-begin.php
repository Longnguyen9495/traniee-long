<?php
    class MyParent{
        public $name = "phu";
        protected $_job = "IT";
        private $__date = "20/11/1999";
        public function InformationParentPublic(){
            $html = '<ul>';
                $html .= '<li>'.$this->name.'</li>';
                $html .= '<li>'.$this->_job.'</li>';
                $html .= '<li>'.$this->__date.'</li>';
            $html .= '</ul>';
            return $html;
        }
        protected function InformationParentProtected(){
            $html = '<ul>';
                $html .= '<li>'.$this->name.'</li>';
                $html .= '<li>'.$this->_job.'</li>';
                $html .= '<li>'.$this->__date.'</li>';
            $html .= '</ul>';
            return $html;
        }
        private function InformationParentPrivate(){
            $html = '<ul>';
                $html .= '<li>'.$this->name.'</li>';
                $html .= '<li>'.$this->_job.'</li>';
                $html .= '<li>'.$this->__date.'</li>';
            $html .= '</ul>';
            return $html;
        }
    }
    
    class Myclass extends MyParent{
        public $name = "long nguyễn";
        protected $_year = "1995";
        private $__job = "IT";
        const PI = 3.14;
        static $nameStatic = "Hưng";
        static $yearStatic = "27";
        static $jobStatic = "master";

        public function __construct($name,$year='1993',$job='ti'){
            $this->name =  $name;
            $this->_year = $year;
            $this->__job = $job;
        }
        
        public function getPi(){
            return self::PI.'<br>'; 
        }
        public static function getInformationStatic(){
            $html = '<ul>';
                $html .= '<li> Name :'.self::$nameStatic.'</li>';
                $html .= '<li> Year :'.self::$yearStatic.'</li>';
                $html .= '<li> Job:'.self::$jobStatic.'</li>';
            $html .= '</ul>';
            return $html;
        }
        public function getInfomation(){
        //   return $this->InformationParentPrivate();
            return $this->InformationParentProtected();
        }
        
    }
    $info =  new Myclass('hung');
    echo $info->getInfomation();
    echo Myclass::getInformationStatic();
    // echo $info->InformationParent();
    
?>