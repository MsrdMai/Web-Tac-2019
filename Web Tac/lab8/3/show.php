

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Bai+Jamjuree&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
<style>
    body{
        font-family: 'Bai Jamjuree', sans-serif;
        background: grey;
        color:white;
    }
    
    color{
        color:red;
    }

    </style>

<?php 
    $id = $_POST["iD"];
    $fname = $_POST["firstN"];
    $lname = $_POST["lastN"];
    $ads1 = $_POST["ads1"];
    $ads2 = $_POST["ads2"];
    $ads3 = $_POST["ads3"];
    $ads4 = $_POST["ads4"];
    $phone = $_POST["phone"];
    
   
?><center>
<br><br><div class="container">
<table  class="table" >
<thead>
<tr >
    <th>ลำดับ</th>

    <th>รายการ</th>
    <th>ผลลัพธ์</th>

</thead>
</tr>
<tbody>


<?php    $listt = array("หมายเลขบัตรประชาชน","ชื่อ","นามสกุล","ที่อยู่","อำเภอ/เขต","จังหวัด","รหัสไปรษณีย์","เบอร์โทรศัพท์");

        $value = array($id,$fname, $lname, $ads1, $ads2, $ads3, $ads4,$phone);

  
        

    for ($i = 0; $i < 8; $i++)  { 
        if($i == 8){
        break;
    } 


        if( strlen($value[$i]) < 5){?>
        
        <tr ><td > <?php 

           echo ($i+1); ?>
    </td>     
    <td><?php  
    echo $listt[$i]; ?></td>
    <td>
    <?php  echo "<color>".$value[$i]."<color>"; 
    
   ?>
   </td></tr> <?php
        }
    
    else {?>
    
    <tr ><td > <?php      
        echo ($i+1); ?>
    </td>     
    <td><?php  
    echo $listt[$i]; ?></td>
    <td>
    <?php  echo $value[$i]; 
    
   ?>
   </td></tr> <?php }}?>
    
  
   
 

</tbody>
   
</table>

 </div></center>
</body>
</html>



