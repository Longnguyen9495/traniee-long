<?php
    $nummber = 2;
    switch ($nummber)
    {
        case 0:
            echo 'số 0';
            break;
        case 1:
            echo 'số 1';
            break;
        case 2:
            echo 'số 2';
            break;
        case 3:
            echo 'số 3';
            break;
        case 4:
            echo 'số 4';
            break;
        default:
            echo 'không tìm thấy điều kiện';
            break;
    }
?>
<br>
<?php 
    $name = 'hehe';
    switch ($name)
    {
        case 'long':
            echo 'tên long';
            break;
        case 'hưng':
            echo 'tên hưng';
            break;
        case 'phú':
            echo 'tên phú';
            break;
        case 'chiến':
            echo 'tên chiến';
            break;
        case 'văn anh':
            echo 'tên văn anh';
            break;
        default:
            echo 'không tìm thấy tên';
            break;
    }
?>
<br>
<br>
<?php
   $number = 12;
    $midle = null;
    switch ($number)
    {
        case 12 : // nếu $number = 12
            $midle = $number % 2; // lấy số dư
            switch ($midle)
            {
                case 0 : // nếu số dư = 0
                    echo 'Số chẵn';
                    break;
                default :
                    echo 'Số lẽ';
                    break;
            }
            break;
        default: // nếu không phải 12 thì không làm gì
            break;
    }
?>