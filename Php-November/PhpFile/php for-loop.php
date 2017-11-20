<br>
<?php
    $number = 11;
    for($number;$number <=20;$number++) {
        if($number % 2 == 0){
            echo 'không đạt điều kiện';
        }else{
            echo $number.'<br>';
        }
    }
?>
<?php
    $x = 2;
    for($x+1;$x<=10;$x++){
        echo "$x.<br>";
    }
?>
<br>
<?php
    $x = 10; 
    for($x+1;$x<=10;$x++)
    {
        echo "số thứ tự bắt đầu là. '$x'.'<br>'";
    }
?>
<?php
    for ($i = 1; $i <= 10; $i++)
    {
        if ($i == 5)
        {
            continue;
        }
        echo $i . ' ';
    }
?>
<?php
    $i = 20;
    while($i <= 200){
    echo $i.'-';
    $i++;
}
?>