<?php  
    $alpha = range('A', 'C');  
        for($i=0; $i<3; $i++){   
            for($j=3; $j>$i; $j--){  
                echo $alpha[$i];  
            }  
                echo "<br>";  
        }  
?>  