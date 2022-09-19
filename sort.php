<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort</title>
</head>
<body>
    <?php
        $edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");
        print_r($edades);
        echo "<br/>";
        asort($edades);
        print_r($edades);
    ?>
</body>
</html>