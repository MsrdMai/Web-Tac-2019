<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Itim&display=swap" rel="stylesheet">
</head>
<body>
<style>
    body{
        margin:20;
        font-family: 'Itim', cursive;
        text-align : center;
        color:white;
        background:black;
    }
    h1{
        color:pink;}
       
    hr{
        background:white;
        width:50%;
    }
    b{
        color:yellow;
        font-size:20;
    }
    * {
                 box-sizing:border-box;
                }

    @media screen and (max-width:500px) {
                 body {
                 width:85%;
                 }

    </style>
    <h1>Movies90</h1>
    <br>
    <br><br>
<?php
      

        $url = "http://10.0.15.12/lab9/restapis/movies90"; 
        $client = curl_init($url);
        curl_setopt($client,CURLOPT_RETURNTRANSFER,true); 
        $response = curl_exec($client);   
        $result = json_decode($response);
        $count = 0;
        

        foreach ($result as $value) {  
            $count++; 
            echo "&emsp; <b>  $count. $value->title </b>  ( $value->year ) <br>";
            $num = count($value->cast);
            echo "&emsp; <b> Cast :  </b>" ;

             foreach($value->cast as $num){    
                 echo "- ".$num.'<br>';
         }
            $num2 = count($value->genres);
            echo "&emsp; <b> Genres :  </b>" ;

             foreach($value->genres as $num2){    
                 echo "- ".$num2.'<br>';
         }
             echo '<br><hr><br>';     
        }
        // echo "&emsp; <b> Cast : </b>" . json_encode($value->cast[0]) ." <br>";
            // echo "&emsp; <b> Genres : </b>". json_encode($value->genres)." <br><br><br><br>";  
   ?>
<br>
</body>
</html>