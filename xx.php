<html>
<head>

<style>
 body{
   background-color: #FF9933;
   font-family: Tahoma, Geneva, sans-serif;
 }
 #mother{
   width: 100%;
   font-size: 20px;
 }
 #main{
 float:left;
 padding-top : 5px;
 }
 img{
 width:40%;
 height:30%;
 border-radius:30%;
 }
 .aside{
   float: right;
   text-align: center;
   width: 300px;
   border-radius: 5px;
   padding: 10px;
   font-size: 20px;
   background-color:white;
   color:black;
   box-shadow: 0px 0px 5px black;
   height: 90%;
 }
 
   #tbl th{
     background-color: black;
     color: white;
     font-size: 20px;
     padding: 10px;

   }
    
    #tbl tr{
     background-color: rgba(0,0,0,0.2);
     color: white;
    
   }
 #tbl td{
    padding: 10px;
   }

 input{
   padding: 10px 5px;
   border:2px solid black;
   text-align: center;
   font-size: 17px;
   font-family: Tahoma, Geneva, sans-serif;
   border: none;
   margin: 2px 0;
   background: #ddd;
   outline: none;
     
 }

    .bt{
        margin-top: 50px;
    }
   

    }
 </style>
</head>
<body dir="rtl">
 <?php
 $host='localhost';
 $user='root';
 $pass='';
 $db='syola';
 $cr_db='';
 $cr_tb='';
 $con=mysql_connect($host,$user,$pass);
 mysql_select_db($db);
 if($con)
 echo "connect";

 $full_name='';
 $whats_no='';
 $whats_pre='';
 $err='';
 $a= false;
 $res=mysql_query("select * from baptizing");
 
 ?>
<div id="mother">

   </div>

 </div>
 <div id='main'>
  <table id='tbl'>
   <tr>
   <th>الإسم الكامل</th>
   <th>رقم الواتس</th>
   <th>واتس مقدم الخدمة</th>
   <th>الإيميل</th>
   <th>فترة التعميد</th>
   <th>مبلغ التعميد</th>
   <th>التفاصيل</th>
   </tr>
   <?php
     while($row=mysql_fetch_array($res)){
     echo "<tr>";
     echo "<td>".$row['full_name']."</td>";
          echo "<td>".$row['whats_no']."</td>";
               echo "<td>".$row['whats_pre']."</td>";
               echo "<td>".$row['email']."</td>";
               echo "<td>".$row['bap_intrval']."</td>";
               echo "<td>".$row['bap_mount']."</td>";
               echo "<td>".$row['details']."</td>";
               echo "</tr>";
     }
   ?>
  </table>
  </div>
<?php echo '<div class="title">'.$err.'</div>'; ?>

  
</div>
</body>
</html>























