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
        background : black;
     
    }
    td{
        text-align: center;
        width:100;
        height: 100;
        background : Aquamarine;
        
        
    }
  
    </style>


<br><br>
<?php   
$day_now=array("Sun"=>"1","Mon"=>"2","Tue"=>"3","Wed"=>"4","Thu"=>"5","Fri"=>"6","Sat"=>"7");   
$first_day=date("D",mktime(0,0,1,intval(date("m")),0,date("Y"))); 

$start_td=$day_now[$first_day]-1;      
$num_day= cal_days_in_month(CAL_GREGORIAN,4,2019);  
$num_day2=($num_day+$start_td);   
$num_day3=(7*ceil($num_day2/7));   


// echo  $num_day."<br>";
// echo  $num_day2."<br>" 32;
 // echo  $num_day3."<br>" 35;
// echo date('Y-m-t',strtotime("2019-04")); 
//$num_day = date("t");เดือนปัจจุบัน





?>   
<table id="calendar_css"  class="table table-bordered">   
<colgroup>   
<col class="holidayCol" />   
<col span="5" />   
<col class="holidayCol" />   
</colgroup>   
<thead >   
<tr >
<td colspan="7" class="monthTitle">

<h1>April 2019</h1>
</td>
</tr>
<tr >   
<td >Sunday </td>   
<td> Monday</td>   
<td> Tuesday</td>   
<td>Wednesday</td>   
<td> Thursday</td>   
<td>Friday </td>   
<td> Saturday</td>   


</tr>   
</thead>   
<?php for($i=1;$i <=$num_day3;$i++){ ?>   
<?php if($i%7==1){ ?>   
 
<?php } ?>   
<td   <?=(date("j")==$i-$start_td)?"class=\"current\"":""?>> <?=($i-$start_td>=1 && $i-$start_td <=$num_day)?$i-$start_td:" "?> </td>   
<?php if($i%7==0){ ?>   
</tr>   
<?php } ?>   
<?php } ?>   
</table>  