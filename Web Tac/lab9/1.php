<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
</head>
<body>
    <form action="" method="POST">
        <label for="name">Name :</label>
        <input type="text" name="name" placeholder="Enter Product Name" required />
        <button type="submit" name="submit">Submit</button>
    </form>

<!-- เอาค่าจาก jsonไปประมวลผลต่อ -->
    <?php
    if(isset($_POST['submit']))//ให้ทำงานเมื่อกดส่ง
    {
        $name = $_POST['name'];        
        $url = "http://10.0.15.12/lab9/restapis/rest/api.php?name=" . $name; /*กำหนดresoce*/
        $client = curl_init($url);
        curl_setopt($client,CURLOPT_RETURNTRANSFER,true); /*แปลจากสตริงได้ที่จากrespon แล้วเอามาอยู่ที่result*/
        $response = curl_exec($client);   
        $result = json_decode($response);
        echo "We have " . $result->data . " " . $name ."s."; /*เอาข้อมูลทีobject่ชื่อdata */
     }

   ?>




</body>
</html>