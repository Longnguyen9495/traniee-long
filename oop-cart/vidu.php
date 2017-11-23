<?php
    $product = array();
    $product = array(
        "adidas" => array(
            'size' => 22,
            'quality' => "authenic",
            'stock' => '10',
        ),
        "nike" => array(
            'size' => 22,
            'quality' => "authenic",
            'stock' => '10',
        ),
        "converse" => array(
            'size' => 22,
            'quality' => "authenic",
            'stock' => '10',
        ),
        "Vans" => array(
            'size' => 22,
            'quality' => "authenic",
            'stock' => '10',
        ),
    );
//    // Thêm sản phẩm vào product
//    $product['Zaza'] = array(
//        "size" => 'full size',
//        "quality" => 'authenic',
//        "stock" => 20
//    );
//    echo '<pre>';
//    // Sửa sản phẩm nike có số lượng (stock) thay đổi trong product
//    $product['nike']['stock'] = 6;
//    echo '<pre>';
//    var_dump($product);
//    // Kiểm tra sản phẩm có tồn tại với từ khóa muốn xóa hay không
//    if (isset($product['nokia']))
//    {
//        $product['nokia'] = array(
//            "size" => 'full size',
//            "quality" => 'authenic',
//            "stock" => 20
//        );
//    }
//    // Xóa sản phẩm vans trong product
//    unset($product['vans']);
//    // Nhập biến ghi đè vào trong product
//    extract($product,EXTR_OVERWRITE,"long");

//    // Kiểm tra xem product có phải là mảng trống hay không
//    if (count($product) < 1)
//    {
//        echo 'bạn đã hết sản phẩm';
//    }else
//    {
//        echo 'Số lượng sản phẩm trong kho là :' . count($product). 'Sản phẩm';
//    }
    $arrayNumber = array("long"=> 22, "hung"=> 25,"diep"=> 40);
    sort($arrayNumber);
    echo '<pre>';
    print_r(array_push($arrayNumber, 'long'));
    echo '<Br>';
    print_r($arrayNumber);

?>

