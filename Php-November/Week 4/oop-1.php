<?php
function array_counti_value($key)
{
    $newArray = array();
    foreach ($key as $value)
    {
        if (!array_key_exists(($value), $newArray))
        {
            $newArray[$value] = 0;
        }else
        {
            $newArray[$value] += 1;
        }
    }
    return $newArray;
}
$name = '3,4,5,6,7,8,4,4,5,6,2,2,5,3,3,5,5,3,3,3,5,5,2,1,6,6,7,8,8,9';
$newName = explode(',', $name);
echo '<pre>';
//print_r($arrayName);
print_r(array_counti_value($newName));
?>
<?php
    $num = 12312321125345;
    $sum = '';
    $rem = '';
    for ($i = 0; $i<=strlen($num); $i++)
    {
        $rem = $sum % 10;
        $sum = $num + $rem;
        $num = $num/10;
    }
    echo $num;
?>
