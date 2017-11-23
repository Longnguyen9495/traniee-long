<?php
    echo '<h1>exercise-1</h1>';
    // khai báo, in về mảng
    $color = array('white', 'green', 'red', 'blue', 'black');
    echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
    echo '<h1>exercise-2</h1>';
    // Im ra mảng qua php & html
    $colorc1 = array('white', 'green', 'red');
    foreach ($colorc1 as $key => $value)
    {
        print_r($value.' ');
    }
    echo '<ul>';
    foreach ($colorc1 as $key => $value)
    {
        echo "<li>$value</li>";
    }
    echo '</ul>';
    echo '<h1>exercise-3</h1>';
    // In ra mảng giá trị bằng vòng lặp foreach
    $ceu = array(
        "Italy" => "Rome",
        "Luxembourg" => "Luxembourg",
        "Belgium" => "Brussels",
        "Denmark" => "Copenhagen",
        "Finland" => "Helsinki",
        "France" => "Paris",
        "Slovakia" => "Bratislava",
        "Slovenia" => "Ljubljana",
        "Germany" => "Berlin",
        "Greece" => "Athens",
        "Ireland" => "Dublin",
        "Netherlands" => "Amsterdam",
        "Portugal" => "Lisbon",
        "Spain" => "Madrid",
        "Sweden" => "Stockholm",
        "United Kingdom" => "London",
        "Cyprus" => "Nicosia",
        "Lithuania" => "Vilnius",
        "Czech Republic" => "Prague",
        "Estonia" => "Tallin",
        "Hungary" => "Budapest",
        "Latvia" => "Riga",
        "Malta" => "Valetta",
        "Austria" => "Vienna",
        "Poland" => "Warsaw");
    foreach ($ceu as $key => $value)
    {
        echo "Thủ đô của $key là $value".'<br>';
    }
    echo '<h1>exercise-4</h1>';
    // Xóa 1 phần tử trong mảng
    $x = array(1, 2, 3, 4, 5);
    unset($x[3]);
    $x = array_values($x);
    print_r($x);
    echo '<h1>exercise-5</h1>';
    // Lấy giá trị đầu tiên của mảng
    $colorc2 = array(4 => 'white', 6 => 'green', 11=> 'red');
    print_r(reset($colorc2));
    echo '<h1>exercise-6</h1>';
    // In mảng đa chiều
    function myFunctionJson($key,$value)
    {
        echo "<p> $key : $value </p>";
    }
    $json = '
    {"Title": "The Cuckoos Calling",
    "Author": "Robert Galbraith",
    "Detail": {
        "Publisher": "Little Brown"
    }}
    ';
    $arrayjson = json_decode($json, true);
    array_walk_recursive($arrayjson,'myFunctionJson');
    echo '<h1>exercise-7</h1>';
    // Chèn một mục mới vào vị trí bất kì trong mảng
    $x = '$';
    $number = array(1,2,3,4,5);
    array_splice($number,4,0,$x);
    foreach ($number as $key => $value)
    {
        echo "$value";
    }
    echo '<h1>exercise-8</h1>';
    // Sắp xếp mảng
    $arraySort = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
    // sắp xếp tăng dần dựa vào $value
    asort($arraySort);
    echo '<pre>';
    print_r($arraySort);
    // sắp xếp tăng dần dựa vào $key
    ksort($arraySort);
    echo '<pre>';
    print_r($arraySort);
    // sắp xếp giảm dần dựa vào $value
    arsort($arraySort);
    echo '<pre>';
    print_r($arraySort);
    // sắp xếp giảm dần dựa vào $key
    krsort($arraySort);
    echo '<pre>';
    print_r($arraySort);
    echo '<h1>exercise-9</h1>';
    // Tính trung bình, nhiệt độ cao nhất, thấp nhất trong mảng
    $recordedTemperatures = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
    $sumExplode = explode(',',$recordedTemperatures);
    $lenght = count($sumExplode);
    $total = 0;
        foreach ($sumExplode as $key => $value)
        {
            $total += $value;
        }
    $avg = $total / $lenght;
        echo "$avg";
    echo '<br>';
    // Tìm 5 giá trị cao, thấp nhất trong mảng
    echo "List of seven lowest temperatures : ";
    for ($i=0; $i<5;$i++)
    {
       echo $sumExplode[$i].',';
    }
    echo '<br>';
    echo "List of seven highest  temperatures : ";
    for ($i=($lenght-5); $i<$lenght;$i++)
    {
       echo $sumExplode[$i].',';
    }
    echo '<br>';
    echo '<h1>exercise-10</h1>';
    // Chưa làm
    echo '<h1>exercise-11</h1>';
    // Gộp làm 2 mảng với nhau
    $array1 = array(array(77, 87), array(23, 45));
    $array2 = array("w3resource", "com");
    $arrayMerge = array();
    foreach ($array2 as $key => $value)
    {
        $arrayMerge = array_unshift($array1[$key], $value);
    }
    print_r($array1);
    echo '<h1>exercise-12</h1>';
    // Thay đổi giá trị trong mảng in hoa và in thường
    $Color3 = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
    // Tạo chức năng xét duyệt in hoa hoặc in thường của mảng
    function array_change_value_case($input, $ucase)
    {
        $case = $ucase;
        $narray = array();
        if (!is_array($input))
        {
            return $narray;
        }
        // Xuất dữ liệu trong mảng | tìm điều kiện để xét duyệt in hoa or in thường
        foreach ($input as $key => $value)
        {
            if (is_array($value))
            {
                $narray[$key] = array_change_value_case($value, $case);
                continue;
            }
            $narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
        }
        return $narray;
    }
    $Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
    echo 'Actual array ';
    print_r($Color);
    echo 'Values are in lower case.';
    $myColor = array_change_value_case($Color,CASE_LOWER);
    print_r($myColor);
    echo 'Values are in upper case.';
    $myColor = array_change_value_case($Color,CASE_UPPER);
    print_r($myColor);
    // Liệt kê các số nằm trong khoảng từ 200 đến 250 mà chia hết cho 4
    print_r(implode(range(200,250,4),'<br>'));
    echo '<h1>exercise-14</h1>';
    // Đếm chiều dài giá trị dài nhất, ngắn nhất trong mảng
    $arrayText = array("abcd","abc","de","hjjj","g","wer");
    $new_array = array_map('strlen',$arrayText);
    echo "The shortest array length is " . min($new_array) . ". The longest array length is " . max($new_array).'.';
    echo '<h1>exercise-15</h1>';
    // Sắp xếp những số ngẫu nhiên trong mảng
    $arrayNumbers = range(10,20);
    shuffle($arrayNumbers);
    for ($x=0; $x< 10; $x++)
    {
        echo $arrayNumbers[$x].' ';
    }
    echo '<h1>exercise-16</h1>';
    // Viết một php để lấy key lớn nhất trong mảng
    $arrayValue = array('key'=>'value','key2'=>'value','key3'=>'value');
    $keyMax = max(array_keys($arrayValue));
    print_r($keyMax);
    echo '<h1>exercise-16</h1>';
    // chưa làm
    echo '<h1>exercise-17</h1>';
    // chưa làm

