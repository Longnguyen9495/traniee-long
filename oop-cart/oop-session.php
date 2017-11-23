
<?php
session_start();
class Product
{
    public $nike = array("id"=>"1", "name"=>"Nike", "price"=>"30");
    public $adidas = array("id"=>"2", "name"=>"Adidas", "price"=>"20");
    public $vans = array("id"=>"3", "name"=>"Vans", "price"=>"50");
    public $converse = array("id"=>"4", "name"=>"Converse", "price"=>"40");
    // Thiết lập mảng
    public function getAllcart()
    {
        $product =
            [
                'nike' => $this->nike,
                'adidas' => $this->adidas,
                'vans' => $this->vans,
                'converse' => $this->converse
            ];
        return $product;
    }
}
class Session
{
    // Kiểm tra phần tử có trống hay không
    // @param string $key
    // @return boolean

    public static function null($key)
    {
        return ($_SESSION[$key] != null ) ? true : false;
    }
    // Kiểm tra phần tủ có trong mảng hay không
    // @param string $key
    // @return boolean
    public static function exits($key)
    {
        return (isset($_SESSION[$key])) ? true : false;
    }
    // Gắn mảng với biến là $key có giá trị value = $value
    // @param string $key
    // @param string|array $value
    // @return string|array
    public static function put($key, $value)
    {
        return $_SESSION[$key] = $value;
    }
    // Lấy giá trị mà mảng truyền vào
    // @param string $key
    // @return string|array
    public static function get($key)
    {
        return self::exits($key) ? $_SESSION[$key] : null;
    }
    // Xóa một giá trị trong mảng
    // @param string $key
    // @return void
    public static function delete($key)
    {
        return self::exits($key) ? session_unset($_SESSION[$key]) : null;
    }
}
class Cart extends Product
{
    // Thêm giá trị vào mảng
    public static function insertCart($key, $value)
    {
        foreach ($product as $key => $value);
    }
    // Kiểm tra giỏ hàng xem có hay % giỏ hàng có trống hay không
    public static function exitsCart()
    {
//        if (!isset($_product['id']))
    }
    // Update giá trị mới vào trong mảng
    public static function updateCart()
    {
    }
    // Xóa mảng
    public static function deleteCart()
    {

    }
}
$shoppingCart = new Cart();
$productCart =  $shoppingCart->getAllcart();