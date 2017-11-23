<?php
    // khởi tạo mảng kết hợp
    $color = 'red';
    $arrayNike = array(
        'color' => 'black',
        'size' => 'medium',
        'quality' => 'authenic'
    );
    echo '<h1> Array Extract </h1>';
    // Thêm phần tử vào mảng với giá trị hiện tại
    extract($arrayNike, EXTR_PREFIX_SAME, 'colorRed');
    echo "$color,$size, $quality, $colorRed_color";
    echo '<pre>';
    // Nếu xung đột sẽ bị ghi đè
    extract($arrayNike, EXTR_OVERWRITE, 'colorRed');
    echo "$color,$size, $quality, $colorRed_color";
    echo '<pre>';
    // Nếu xung đột sẽ không bị ghi đè
    extract($arrayNike, EXTR_SKIP );
    echo "$color,$size, $quality, $color ";
    echo '<pre>';
    // Nếu xung đột sẽ cung cấp 1 $key
    extract($arrayNike, EXTR_PREFIX_ALL , 'colorRed');
    echo "$color,$size, $quality";
    echo '<pre>';
    extract($arrayNike, EXTR_PREFIX_INVALID , 'colorRed');
    echo "$color,$size, $quality";
    echo '<pre>';
    extract($arrayNike, EXTR_PREFIX_ALL , 'colorRed');
    echo "$color,$size, $quality";
    echo '<pre>';
    extract($arrayNike, EXTR_PREFIX_IF_EXISTS , 'colorRed');
    echo "$color,$size, $quality";
    echo '<pre>';
    extract($arrayNike, EXTR_REFS , 'colorRed');
    echo "$color,$size, $quality";
    echo '<pre>';
    echo '<h1> Array intersect - Array diff - Explode </h1>';
    // Thiết lập mảng tổng gồm những mảng có chứa những phần tử giống nhau
    $arrayAdidas = array(
        'color' => 'black',
        'size' => 'medium',
        'quality' => 'authenic',
        'stock' => 'full'
    );
    var_dump($arrayAdidas);
    echo '<h1> array_key_exists </h1>';
    // Tìm giá trị có trong mảng hay không !
    if(array_key_exists('stock',$arrayNike))
    {
        echo 'oke'.'<br>';
    }else
    {
        echo 'miss'.'<br>';
    }
    print_r(array_intersect($arrayNike,$arrayAdidas));
    print_r(array_intersect_assoc($arrayNike,$arrayAdidas));
    print_r(array_intersect_key($arrayNike,$arrayAdidas));

    // Thiết lập mảng tổng với giá trị khác biệt
    print_r(array_diff($arrayNike,$arrayAdidas));
    // Điền vào mảng với các giá trị
    $arrayAdidas = array_fill(5,5,'colorss');
    $arrayNike = array_fill(-5, 5, 'colosd');
    $arrayShoe = array_fill(-5, 5, 'colosd');
    print_r($arrayShoe);
    // Tách chuỗi trong mảng
    $address = 'Tòa nhà siêu thị HC Số 102 thái thịnh đống đa hà nội';
    print_r(explode(" ",$address));
    echo '<h1> Array combine - Array push  - Array sort </h1>';
    // Gộp, thêm, sắp xếp giá trị trong mảng
    $name = "minh";
    $name = array("long", "huwng","chien","Phu","van anh");
    $year = array(22,25,27,30,21);
    // Thêm giá trị vào phần tử $name
    array_push($name, "chien","hieu");
    echo '<pre>';
    print_r($name);
    // Gộp 2 mảng $name có giá trị là $value
    $infor = array_combine($name, $year);
    print_r($infor);
    // Sắp xếp mảng theo bảng chữ cái alpha từ thấp -> cao
    sort($name);
    sort($year);
    print_r($name);
    print_r($year);
    // Sắp xếp mảng từ cao -> thấp
    rsort($name);
    rsort($year);
    print_r($name);
    print_r($year);
    // Sắp xếp mảng lấy từ giá trị value
    asort($infor);
    print_r($infor);
    // Sắp xếp mảng lấy từ key
    ksort($infor);
    print_r($infor);
?>

