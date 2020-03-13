<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<?php
    $url = "http://date.jsontest.com/";
    $response = file_get_contents($url);
    $result = json_decode($response);

    echo "Date :  $result->date <br>";
    echo "Milliseconds : $result->milliseconds_since_epoch  <br>";
    echo "Time : $result->time <br><br><br>";
    ?>

<?php
    $url = "http://10.0.15.12/lab9/restapis/superheroes";    
    $response = file_get_contents($url);
    $result = json_decode($response);
   
    echo "Squad Name : $result->squadName<br>";
    echo "Home Town : $result->homeTown<br>";    
    foreach ($result->members as $hero) {  
        echo "&emsp; Name : $hero->name<br>";
        echo "&emsp; Age : $hero->age<br>";            
    }
?>

</body>
</html>