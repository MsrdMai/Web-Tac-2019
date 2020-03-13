<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Result</title>

    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>

<style>
    body{
        font-family: 'Kanit', sans-serif;
   
    }
    td{
        width: 10;
    }
    </style>

    
    
    <?php

    $value = $_POST["txtMsg"];

    echo "<br>"."<h1>"."ตารางสูตรคูณแม่ ".$value."</h1>" ."<br>";

?>



<table id="editableTable" class="table table-bordered">                                 
	<thead>
		<tr>
		</tr>
	</thead>
	<tbody>
		<?php  for ($i = 1; $i < 13; $i++)  { ?>

		   <td><?php  echo $value ." x  ".$i  . " = " . $i * $value . "<br>"; ?></td>  				   				   				  
		   </tr>
		<?php } ?>
	</tbody>
</table>






</body>
</html>



