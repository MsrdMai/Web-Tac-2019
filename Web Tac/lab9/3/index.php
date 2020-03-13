<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Itim&display=swap" rel="stylesheet">

    
</head>
<body class="container p-3">
<style>
    body{
        margin:20;
        font-family: 'Itim', cursive;
        color:white;
        background:black;
        align:center;
    }

    img{
        width:400px;
        height:300px;
        
        
    }
    h1{
        color:pink;
       
    }
    b{
        color:yellow;
        font-size:20;
    }
    hr{
        background:white;
        width:50%;
    }



     @media screen and (max-width:700px) {
                 body {
                 width:90%;
                 font-size:50%;
                 }

                 img{
        width:100px;
        height:50px;
        
        
    }  
              

    } 

 

   
    </style>
<br><center>
<h1>Country</h1>
<br>
<?php
      

        $url = "http://10.0.15.12/lab9/restapis/10countries"; 
        $client = curl_init($url);
        curl_setopt($client,CURLOPT_RETURNTRANSFER,true); 
        $response = curl_exec($client);   
        $result = json_decode($response);


        foreach ($result as $value) {  

            echo "&emsp;  Name : <b>" .  $value->name ."</b> <br>";
            echo "&emsp;  Capital : " .  $value->capital ." <br>";
            echo "&emsp;  Population : " .  $value->population ." <br>";
            echo "&emsp;  Region : " .  $value->region ." <br>";
           
            echo "&emsp;  Location : " ;
            $num = count($value->latlng);
            foreach($value->latlng as $num){    
           
                 echo "&emsp;" .$num ;     }
            echo "<br>";
            echo "&emsp;  Borders : " ;
            $num2 = count($value->borders);
            foreach($value->borders as $num2){    
           
                 echo "&emsp;" .$num2 ;     }

                 echo "<br><br>";

 ?>
           
            <img src="<?php echo $value->flag ?>" />

    <?php  echo "<br><hr><br>";}

    ?></center>
</body>
</html>