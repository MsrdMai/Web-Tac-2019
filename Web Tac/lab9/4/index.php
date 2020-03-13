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
        color:white;
        background:black;
        font-size:20;
        
    }
    hr{
        background:white;
    }
   

    select{
        width:15%;
        height:5%;
    }

    h3{
        color:Aqua ; 
        
    }
    h2{
       color:yellow;
        /* background:linear-gradient(to right, red,orange,yellow,green,blue,indigo,violet); */
        background: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1)); /*Standard*/
        width:30%;
        
    }

    b{
        color:SpringGreen  ; 
        
    }
    h1{
        color:pink ; 
        
    }

    @media screen and (max-width:700px) {
                 body {
                 width:90%;
                 font-size:50%;
                 }

                 h2{
                width:100%;

    }  }

  
    </style>
    <h1>Nobel Prize  ( 2010-2018 ) </h1>
 

    <br>
    <form action="" method="POST">
        <label >เลือกปี :</label>
        <select  name="num">
        <option value="0">เลือกปี 2010-2018</option>
        <option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        </select>
        
        <button type="submit"  class="btn btn-warning" name="submit">ยืนยัน</button>
        
    </form><hr>
    <?php   

    if(isset($_POST['submit'])){
        $num = $_POST['num'];
        $url = "http://10.0.15.12/lab9/restapis/nobleprize100"; 
        $client = curl_init($url);
        curl_setopt($client,CURLOPT_RETURNTRANSFER,true); 
        $response = curl_exec($client);   
        $result = json_decode($response);
        $i = 0;
       
        echo "<h2>ผู้ได้รับรางวัล Nobel Prize Of $num </h2><br>";

       
        foreach ($result as $value) {

        if($value->year == $num){
        echo "&emsp; <h3>   $value->category   </h3><br>";
      

        $count = count($value->laureates);
       echo "<br>";
         
        foreach ($value->laureates as $count){
            echo  "&emsp; <b> ID : $count->id  </b><br>";
            echo  "&emsp; NAME : $count->firstname  <br>";
            echo  "&emsp; LASTNAME : $count->surname  <br>";
            echo  "&emsp; MOTIVATION : $count->motivation  <br>";
            echo "<hr><br>";
        }
    }
        
}

     
    }?>

   
</body>
</html>