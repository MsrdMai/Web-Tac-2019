

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
    
   
?>
<br><br><div class="container">
<table class="table">
<thead>
<tr >
    <th>ลำดับ</th>

    <th>รายการ</th>
    <th>ผลลัพธ์</th>

</thead>
</tr>
<tbody>


<?php    $listt = array("หมายเลขบัตรประชาชน"=>$id,"ชื่อ"=>$fname,"นามสกุล"=>$lname,"ที่อยู่"=>$ads1,"อำเภอ/เขต"=>$ads2,"จังหวัด"=>$ads3,
        "รหัสไปรษณีย์"=>$ads4,"เบอร์โทรศัพท์"=>$phone);


        
        $i = 1;
   
        
        
        foreach ($listt as $Name => $value){
               
                if($i == 9){
                    break;}
    
    
    
                if(strlen($value) < 5){?>  
        
                    
                    <tr ><td > <?php      
                     echo ($i); ?>
                    </td>     
                    <td><?php  
                        echo $Name; ?></td>
                    <td>
                    <?php  echo "<color>".$value."<color>"; ?>
                    </td></tr> <?php  }
    
 
    
            else { ?>  
        
                   
            <tr ><td > <?php      
                  echo ($i); ?>
                </td>     
            <td><?php  
                echo $Name; ?></td>
            <td>
            <?php  echo $value; 
    
        ?>
            </td></tr> <?php  }
         $i++;
        }?>


</tbody>
   
</table> </div>

</body>
</html>



