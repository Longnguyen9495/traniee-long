<?php
require_once 'oop-session.php';
$total = 0;
// kiem tra xem ton tai gio hang khong va khac trong khogn
if (Session::exits('giohang') && Session::null('giohang'))
    {
        echo '<pre>';
        print_r(Session::get('product'));
    foreach ($getProduct as $val) {
        $total += $val['qty'];

    }
}
?>
<html>
<body>
<form action="" method="post">
    <h1 style="text-align: center;">Bạn Đã Mua <a href="interface.php"><?php echo count($getProduct) ?></a> Sản Phẩm</h1>
    <table border="1" border style="width: 100%; font-size: 15px;font-weight: 600;line-height: 25px;text-align: center;">
        <?php
            foreach ($getProduct as $key => $value){
        ?>
        <tr>
            <td>STT <?php echo $value['id'] ?></td>
            <td>Sản Phẩm <?php echo $value['name']?> </td>
            <td>Giá <?php echo $value['price']?></td>
            <td><a href="">Mua Ngay</a></td>
        </tr>
        <?php } ?>
    </table>
</form>
</body>
</html>