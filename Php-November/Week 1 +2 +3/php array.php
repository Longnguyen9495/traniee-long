<?php 
    $number = array("long"=>"26","phu"=>"23","hung"=>"21");
    foreach ($number as $x => $y){
        echo $x.$y.'<br>';
    }
?>
<?php
    $number = array("long","long","4","5");
    if($number[0]!=$number[1]){
        if(($number[2]+$number[3]/2)){
            echo "Ticker";
        }else{
            echo 'không thực hiện được';
        }
    }else{
        echo 'không khả dụng';
    }
?>
<br>
<br>
<br>
<?php 
    $season=array("one","two","there","four");
    echo "số thứ tự là : $season[0],$season[1],$season[2] $season[3]";
?>
<br>
<?php
    $number = array ("1","2","5","4");
    if($number[0] = $number[1] !=0){
        if(($number[2] + $number[3]) <= 50){
            echo "đạt điều kiện";
        }else{
            echo 'sịt';
        }
    }else{
        echo 'không đạt điều kiện';
    }
?>
<br>
<?php 
    $number = array("a","b","c","d");
    switch($number[0]){
        case 'value1';
        echo "số 0";
        break;
        case 'value2';
        echo "số 1";
        break;
        case 'value3';
        echo "số 2";
        break;
        case 'value4';
        echo "số 3";
        break;
        default:
        echo "không tìm thấy dữ liệu";
    }
?>
<br>
<?php
    $name = array("big","medium","short","short","short2","short3");
    foreach ( $name as $x){
        echo $x.'<br>';
    }
?>
<br>
<?php
    $name = array("big","medium","short","short","short2","short3");
    echo count($name);
    
?>
<?php    
$emp = array  
  (  
  array(1,"sonoo",400000),  
  array(2,"john",500000),  
  array(3,"rahul",300000)  
  );  
  
for ($row = 0; $row < 3; $row++) {  
  for ($col = 0; $col < 3; $col++) {  
    echo $emp[$row][$col]."  ";  
  }  
  echo "<br/>";  
}  
?>