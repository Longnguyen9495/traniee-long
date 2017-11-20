<?php
    $vatgia['wesave'][] = array("name"=>"1", "year"=>21,"job"=>"it");
    $vatgia['wesave'][] = array("name"=>"2", "year"=>2,"job"=>"it");
    $vatgia['wesave'][] = array("name"=>"3", "year"=>23,"job"=>"it");
    $vatgia['nhanh'][] = array("name"=>"4", "year"=>24,"job"=>"it");
    $vatgia['nhanh'][] = array("name"=>"5", "year"=>25,"job"=>"it");
    $vatgia['nhanh'][] = array("name"=>"6", "year"=>26,"job"=>"it");
    $vatgia['nhanh'][] = array("name"=>"7", "year"=>27,"job"=>"it");
    $vatgiaNum = array_merge($vatgia['wesave'], $vatgia['nhanh']);
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8">
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Year</th>
                <th>Job</th>
            </tr>    
        </thead>
        <tbody>
            <?php foreach($vatgiaNum as $key => $value){
                $classred = $key % 2 == 0 ? null :  'danger';
            ?>
            <tr class="<?php echo $classred ?>">
                <td><?php echo $value['name']?></td>
                <td><?php echo $value['year']?></td>
                <td><?php echo $value['job']?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>