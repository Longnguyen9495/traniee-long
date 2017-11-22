<?php
     function sayhello($name = 'abc'){
         echo "tên của bạn là $name <br>";
     }
     sayhello("long");
     sayhello();
     sayhello('long');
     ?>
<?php 
    function names($name,$years,$date){
        echo "tên của bạn là $name, $years tuổi, sinh năm $date.<br>";
    }
    names("long","26","10/20/1222");
    names("long","26","10/20/1222");
    names("long","26","10/20/1222");
?>
<?php
    function adder(&$x){
        $x .= "mặc định hàm function php";
    }
    $y = 'hello ';
    adder($y);
    echo $y;
?>
<br>
<?php 
    function sayhellos(&$add){
        $add .= 'Tên của bạn là';
    }
    $name = 'long';
    sayhellos($name);
    echo $name;
?>
<br>
<?php
 function cube($n){
     return $n * $n * $n;
 }
 echo cube(3);
?>
<br>
<?php
    function sum_value($x){
        return ($x * $x) / 2;
    }
    echo sum_value(2);
?>
