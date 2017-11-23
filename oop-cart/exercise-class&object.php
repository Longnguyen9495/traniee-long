<?php
class Session
{
    // Kiểm tra session có tồn tại hay không
    public static function exits($key)
    {
        return isset($_SESSION[$key]) ? true : false;
    }
    // Gán giá trị vào session
    public static function put($key,$value)
    {
        return $_SESSION[$key] = $value;
    }
    // lấy thông tin có $key có giá trị $value
    public static function get($key)
    {
        return self::exits($key) ? $_SESSION[$key] : null;
    }
    // Xóa 1 giá trị với $key truyền vào
    public static function delete($key)
    {
        return self::exits($key) ? session_unset($_SESSION[$key]) : null;
    }
}
class ShoppingCart
{
    public $shose = "Adidas, Nike, Lascote";
    public $phone = "Iphone, Samsung, Nokia";
    public $fashion = "Chanel, Gucci, Versace";
    public function getAllInfo()
    {
        $html = '<ul>';
            $html .= '<li>'.$this->shose.'</li>';
            $html .= '<li>'.$this->phone.'</li>';
            $html .= '<li>'.$this->fashion.'</li>';
        $html .= '</ul>';
        return $html;
    }
}
$getInfo = new ShoppingCart();
$getInfo->getAllInfo();
Session::put('html',$getInfo);
echo '<pre>';
print_r(Session::get('html'));
?>