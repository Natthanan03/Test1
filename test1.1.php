<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operater</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Athiti&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Athiti', sans-serif;
        }
    </style>
</head>
<body>
    <?php
    $salary = 50000;
    if($salary<=49999){
    $bonus = $salary*3;
    $Amoney = $salary+$bonus;
    }elseif($salary<=99999){
    $bonus = $salary*2;
    $Amoney = $salary+$bonus;
    }else{
    $bonus = $salary*1;
    $Amoney = $salary+$bonus;
    }
    echo"เงินเดือน = " .$salary ."บาท" ."<br>";
    echo"ได้โบนัส = " .$bonus ."บาท" ."<br>";
    echo"รายรับสุทธิ = " .$Amoney ."บาท" ."<br>";
    ?>
</body>
</html>