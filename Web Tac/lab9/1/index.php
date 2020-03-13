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
    }



    </style>
    <h1>Currency Converter</h1>

 <br>
    <form action="" method="POST">
        <label >From :</label>
        <select  name="from1">
        <option value="THB">THB</option>
        <option value="JPY">JPY</option>
        <option value="CNY">CNY</option>
        <option value="SGD">SGD</option>
        <option value="USD">USD</option>
        </select>
        <input type="text" name="from" /><br>

        <label>To : </label>
        <select name="to1" >
        <option value="THB">THB</option>
        <option value="JPY">JPY</option>
        <option value="CNY">CNY</option>
        <option value="SGD">SGD</option>
        <option value="USD">USD</option>        
        </select>
   
        <input type="text" value="<?php if(isset($_POST['submit'])){ echo swap();} ?>"/><br>
        <br>
       <br>

        <button type="submit"  class="btn btn-success" name="submit">Convert</button>
    </form>

    <?php
        function swap(){
        $from = $_POST['from'];
        $from1 = $_POST['from1'];
        $to1 = $_POST['to1'];

        $url = "https://api.exchangeratesapi.io/latest?base=" .$from1; 
        $client = curl_init($url);
        curl_setopt($client,CURLOPT_RETURNTRANSFER,true); 
        $response = curl_exec($client);   
        $result = json_decode($response);
        
        echo $result->rates->$to1 * $from; 
     }

   ?>


</body>
</html>