<?php
session_start();
    class Session
    {
        
        /**
        * kiểm tra 1 key trong Session có tồn tại hay không 
        * @param string $key 
        * @return boolean 
        */
        public static function exits($key)
        {
            return isset($_SESSION[$key]) ? true : false;
        }
        
        /**
         * Gán session có thuộc tính là $key chứa giá trị là $value
         * @param string $key
         * @param string|array $value
         * @return string|array 
        */
        public static function put($key, $value)
        {
            return $_SESSION[$key] = $value;
        }
        
        /**
         * Lấy giá trị trong session ứng với $key truyền vào
         * @param string $key
         * @return string|array|null
        */
        
        public static function get($key)
        {
           return self::exits($key) ? $_SESSION[$key] : null;
        }
        
        /**
        * Xóa một giá trị ứng với $key truyền vào
        * @param string $key
        * @return void
        */ 
        public static function delete($key)
        {
            return self::exits($key) ? session_unset($_SESSION[$key]) : null;
        }
        
        /**
         * Thiết lập một session ứng với tên là $key và có value = $value (Nêu refesh là mất)
         * @param string $key
         * @param string|array $value
         * @return void  
        */
        public static function flash($key, $value)
        {
            if (self::exits($key))
            {
                self::delete($key);
            }else
            {
                self::put($key, $value);
            }
        }
        
        /**
         * Đếm giá trị của một $key
         * @param string $key
         * @return count($key)  
        */
        public static function count($key)
        {
            return self::exits($key) ? count($_SESSION[$key]) : null; 
        }
    }
    
    class Vatgia
    {
        public $itvg = array('hiệp','hung','long');
        public $pub = array('quy', 'phu');
        public $vpage = array( 'chien', 'van anh');
        public $doc = array( 'lan anh', 'dung');
        public $customer_service = array( 'hương', 'linh');
        public $mechant_care = array( 'như', 'bích');
        public $cam_cb = array( 'hoa', 'quyên');
        public $westay = array( 'hiếu', 'minh');
        public $wesave = array( 'công', 'tuấn anh');
        public $sales = array( 'hiệp', 'trang');
        public function getAllDepartment()
        {
            $user =
            [
                'ITVG' => $this->itvg,
                'PUB' => $this->pub,
                'VPAGE' => $this->vpage,
                '123.DOC' => $this->doc,
                'CUSTOMER_SERVICE' => $this->customer_service,
                'MECHANT_CARE' => $this->mechant_care,
                'CAM_CB' => $this->cam_cb,
                'WESTAY' => $this->westay,
                'WESAVE' => $this->wesave,
                'SALES' => $this->sales
            ];
            return $user;
        }
        // public function checkExitsUserNameDepartment($value,$keys)
        // {
            
        //     if(array_search($value,$this->keys) !== false)
        //     {
        //         echo 'tồn tại';
        //     }else
        //     {
        //         echo 'không tồn tại';
        //     }
   
        // }
    }

    $vatgia = new Vatgia();
    // echo $vatgia->checkExitsUserNameDepartment();
    $vatgia = $vatgia->getAllDepartment();
    Session::put('user', $vatgia);
    echo '<pre>';
    var_dump (Session::count('user'));
    





