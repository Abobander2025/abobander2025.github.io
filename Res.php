<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]>
<html dir="rtl" lang="ar" class="ie8"><![endif]-->
<!--[if IE 9 ]>
<html dir="rtl" lang="ar" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="rtl" lang="ar">
<!--<![endif]-->

<!-- Mirrored from www.afaqalsyola.com.sa/index.php?route=information/information&information_id=2 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 17:43:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>طلبات الخدمة</title>
    <base />
        <meta name="description" content="شروط الخدمة"/>
            <meta name="keywords" content="شروط الخدمة"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="image/catalog/logoafaq.png" rel="icon"/>
            <script src="catalog/view/theme/default/js/jquery-1.11.0.min.js"></script>
    <script src="catalog/view/theme/default/js/bootstrap.min.js"></script>
    <link href="catalog/view/theme/default/font-awesome/css/all.css" rel="stylesheet">
    <!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css"/> -->

    
    <!-- My Files -->
    <link rel="stylesheet" href="catalog/view/theme/default/css/bootstrap.css">
    <link rel="stylesheet" href="catalog/view/theme/default/css/style.css">
    <link rel="stylesheet" href="catalog/view/theme/default/css/animate.css">
    <link rel="stylesheet" href="catalog/view/theme/default/css/responsive.css">
    <link rel="stylesheet" href="catalog/view/theme/default/css/owl.carousel.css">

        
    <script src="catalog/view/javascript/common.js" type="text/javascript"></script>
    <script src="catalog/view/theme/default/js/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script src="catalog/view/theme/default/js/owl.carousel.min.js"></script>

<style>
     #mother{
   width: 100%;
   font-size: 20px;
 }

 
   #tbl th{
     background-color: black;
     color: white;
     padding: 10px;
     text-align:center;
     font-family: Times New Roman;
     border: 1px solid white;
   }
    
   
 #tbl td{
    padding: 10px;
    border: 1px solid black;
   }

    .bt{
        margin-top: 30px;
    }
   .fi{
    position:fixed;
    background-color:#fff;
    margin-bottom:10px;
   }
    
 </style>
        

</head>
<body class="information-information">
<?php
include('config.php');
 $cr_db='';
 $cr_tb='';
 $con=mysql_connect($host,$user,$pass);
 mysql_select_db($db);
 if($con)
 //echo "connect";

 $id_name='';
 $full_name='';
 $whats_no='';
 $whats_pre='';
 $bap_statue='تمت المعاملة';
 $bap_statue1='';
 $id_name1Err='';
 $bap_statue1Err='';
 $err='';
 //$a= false;
 $res=mysql_query("select * from baptizing");
 $sqls='';
 
 //if($_SERVER['REQUEST_METHOD']=='POST'){
  if(empty($_POST['id_name'])){
    $empnoErr="no";
    }else{
   
     $id_name=$_POST['id_name'];
    }
     if(empty($_POST['bap_statue'])){
    $bap_statue1Err="no";
    }else{
    $bap_statue=$_POST['bap_statue'];
    }
    
 $sqls='';
 if(isset($_POST['del'])){
    $sqls="delete from baptizing where id_name='$id_name'";
    mysql_query($sqls);
    header("location: res.php");
   }
 if(isset($_POST["update"])){
    $sqls="UPDATE baptizing SET bap_statue ='$bap_statue' where id_name='$id_name'";
    $r=mysql_query($sqls);
      header("location: res.php");
    }
    ?>




<!--========================================================================-->
<div class="the-after"></div>
<!--========================================================================-->

 <!--<div class="message wow animated fadeInDown data-wow-duration="1s">
<a href="index50d0.html?route=information/information&amp;information_id=28">
  <p> 
    عزيزي العميل ومقدم الخدمه
لوحظ في الفتره الاخيره استغلال تعميدات وتغيير مسميات معامله لتعميد لقحات الصحه نخلي مسؤوليتنا الكامله وفي حال اتضح لدينا سنرفع للجهات المختصه بكامل المعلومات لا اتخاذ الإجراءات القانونيةوجل بلاي
    </p> 
    </a>
    <span><i class="fas fa-times-circle"></i></span>

</div>-->


<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-6 col-xs-9">
                <div class="logo">
                    <a href="index9328.php?route=common/home">
                        <img src="image/catalog/logoafaq.png" alt="آفاق السيولة للوساطة" data-toggle="tooltip" data-placement="bottom" title="آفاق السيولة للوساطة">
                    </a>
                </div>
            </div><!--col-md-9-->

            <div class="col-md-3 col-sm-6 col-xs-3">
                <a href="tel:009660558241997">
                <div class="info-call">
                    <div class="col-sm-8 col-xs-6">
                        <h3> 009660558241997 </h3>
                    </div><!--col-sm-8-->

                    <div class="col-sm-4 col-xs-6">
                        <i class="fas fa-phone-volume"></i>
                    </div><!--col-sm-8-->
                </div><!--info-call-->
                </a>
                <div class="hidden-xx">
                    <i class="fas fa-bars" onclick="mySidenav()"></i>
                </div>
            </div><!--col-md-3-->
        </div>
    </div>
</div>
<!--==============================================================================-->
<div id="mySidenav" class="sidenav">
    <div class="col-xs-12">
        <a href="javascript:void(0)" class="closebtn"  onclick="closeNav()"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
    </div>


    <div class="col-sm-12 col-xs-12">
        <div class="big-menu-nav">
            <a href="index9328.php?route=common/home">
                <img src="image/catalog/logoafaq.png" alt="آفاق السيولة للوساطة" data-placement="top" title="آفاق السيولة للوساطة">
            </a>
            <ul class="menu-nav">
                <li><a href="index9328.php?route=common/home"> <i class="fas fa-angle-left"></i> الرئيسية </a> </li>

                <li><a href="accounts.php?route=common/home"> <i class="fas fa-angle-left"></i> حسابات المستخدمين </a> </li>

                <li><a href="messages.php?route=common/home"> <i class="fas fa-angle-left"></i> الرسائل والإستفسارات </a> </li>

                <li><a href="indexc38e.html?route=information/faq"> <i class="fas fa-angle-left"></i>  كيف استخدم الموقع ؟ </a> </li>

                <li><a href="index3aa6.html?route=information/information&amp;information_id=2"> <i class="fas fa-angle-left"></i>  شروط الخدمة  </a> </li>

                <li><a href="baptizing.php?route=information/faq"> <i class="fas fa-angle-left"></i> طلب تعميد</a> </li>

            </ul>
        </div><!--big-menu-->
    </div><!--col-sm-12-->
</div><!--sidenav-->
<!--==============================================================================-->
<div class="main-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <ul class="all-menu">
                    <li><a href="index9328.php?route=common/home"> الرئيسية </a></li>

                    <li><a href="accounts.php?route=common/home"> <i class="fas fa-angle-left"></i> حسابات المستخدمين </a> </li>

                    <li><a href="messages.php?route=common/home"> <i class="fas fa-angle-left"></i> الرسائل والإستفسارات </a> </li>


                    <li><a href="indexc38e.html?route=information/faq">  كيف استخدم الموقع ؟ </a> </li>

                    <li><a href="index3aa6.html?route=information/information&amp;information_id=2"> شروط الخدمة </a></li>

                    <li><a href="baptizing.php?route=information/information&amp;information_id=2"> طلب تعميـــد </a></li>


                </ul>
                
            </div><!--col-md-12-->
        </div>
    </div>
</div>


<section class="terms-service">
    <div class="container">
        <div class="row">
            
            <div class="col-sm-12 col-xs-12">
                <h3>بيانات طالبين الخدمة</h3>
        
            </div>
           

            <div class="col-sm-12 col-xs-12">
                <div class="terms-content">
                
          
                <div id="mother">

   </div>

 </div>
 <form  method="POST">

<table width="600px%" class="fi"  style="text-align:center">

<tr>
<td class="f">رقم المعاملة
</td>
<td><input type="number" class="dd" placeholder="أدخل هنا رقم المعاملة التي تريد التعامل معها" name="id_name" style="width:100%">
</td></tr>
<tr>
    <td>نوع العملية</td>
    <td style="float:right"> <button name="update" style="color:green; margin-left:20px; width:99%">تم التعميد</button>
    <button name="del" style="color:red; width:99%">حذف المعاملة</button></td>
</tr>
</table>

</form>
  <table id='tbl' style="margin-top:12%">
   <tr>
   <th>م</th>
   <th>الإسم الكامل</th>
   <th>رقم الواتس</th>
   <th>واتس مقدم الخدمة</th>

   <th>فترة التعميد</th>
   <th>مبلغ التعميد</th>
   <th>التفاصيل</th>
   <th>وقت التقديم</th>
   <th>تاريخ التقديم</th>
   <th>إسم حساب المقدم</th>
   <th>الحالة </th>

   <!--<th><button></button></th>-->
   </tr>
   <?php
     while($row=mysql_fetch_array($res)){
     echo "<tr>";
     echo "<td>".$row['id_name']."</td>";
     echo "<td>".$row['full_name']."</td>";
          echo "<td>".$row['whats_no']."</td>";
               echo "<td>".$row['whats_pre']."</td>";
               echo "<td>".$row['bap_intrval']." أيام"."</td>";
               echo "<td>".$row['bap_mount']." ر.س"."</td>";
               echo "<td>".$row['details']."</td>";
               echo "<td>".$row['bap_date']."</td>";
               echo "<td>".$row['bap_hr']."</td>";
               echo "<td>".$row['countname']."</td>";
               echo "<td>".$row['bap_statue']."</td>";

               //echo "<td>"."<button></button>"."</td>";
               echo "</tr>";
     }
   ?>
   
  </table><br>
  </div>
<?php echo '<div class="title">'.$err.'</div>'; ?>

  






























                    
                     




                </div>
            </div>

        </div>
    </div>
</section>


<script type="text/javascript">
    /*$(document).ready(function () {
        $("#formcommission").keyup(function () {
            var commession_value = null;
            var productPrice = parseFloat( $(this).val() );
           var commession =  (commession_value * productPrice) / 100 ;
            $("#commissionvalue").text(commession.toFixed(2));
        });

        $('#formcommission').on('keyup keydown keypress change paste', function() {
            if ($(this).val() == '') {
                $("#commissionvalue").text('0');
            }
        });

    });*/
</script>
<div class="footer">
    <div class="container">
        <div class="row"><br><br>
       
</div>

<script type="text/javascript">
    $(document).ready(function () {
        //clear inputs
        $('#email').click(function () {
            if ($(this).val() == 'email') {
                $(this).attr('value', '');
            }
        });

        //save data
        $('#submitNewsletter').click(function () {
            //validate form
            errors = 0;
            if ( $('#email').val() == '') {
                //$('#email').css('border','solid red 1px');
                mail_error = '<div class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>من فضلك أضف البريد الإليكترونى</div>';
                $('#newsletter .alert').css("display", "none");
                $('#newsletter').append(mail_error);
                errors++;
            } else {
                //$('#email').css('border','0px');
                //$('#newsletter .alert').css("display", "none");
            }

            var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if ( $('#email').val() != '' && !($('#email').val().match(pattern))) {
                mail_error_1 = '<div class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>من فضلك البريد الإليكترونى الذى أدخلته غير مناسب !</div>';
                $('#newsletter .alert').css("display", "none");
                $('#newsletter').append(mail_error_1);
                errors++;
            } else {
                //$('#newsletter .alert').css("display", "none");
            }

            /*if ( $('#email').val() == 'email' ) {
                mail_error_2 = '<div class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>من فضلك هذا البريد مسجل لدينا من قبل !</div>';
                $('#newsletter .alert').css("display", "none");
                $('#newsletter').append(mail_error_2);
                errors++;
            } else {
                //$('#newsletter .alert').css("display", "none");
            }*/

            //submit data
            if (errors == 0) {
                $.ajax({
                    url: 'https://www.afaqalsyola.com.sa///index.php?route=module/rfnewsletter/save',
                    type: 'POST',
                    data: {
                        /*name: $('#name').val(),*/
                        email: $('#email').val()
                    },
                    success: function (retorno) {
                        //show sucess message
                        //$('#newsletter').html('تم بنجاح');
                        //mail_success = '<div class="alert alert-success alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>تم الإشتراك فى النشرة البريدية بنجاح !</div>';
                        $('#newsletter .alert').css("display", "none");
                        //$('#newsletter').append(mail_success);
                        $('#newsletter').append(retorno);
                    }
                });
            }
        });
    });
</script>
                </div>
            </div><!--col-md-3-->
  
  

<script src="catalog/view/theme/default/js/script.js"></script>
</body>

<!-- Mirrored from www.afaqalsyola.com.sa/index.php?route=information/information&information_id=2 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 17:43:41 GMT -->
</html>