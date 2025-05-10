<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]>
<html dir="rtl" lang="ar" class="ie8"><![endif]-->
<!--[if IE 9 ]>
<html dir="rtl" lang="ar" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="rtl" lang="ar">
<!--<![endif]-->

<!-- Mirrored from www.afaqalsyola.com.sa//index.php?route=account/register by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 17:44:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> طلب تعميد</title>
    <base />
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

            <link href="catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet"
          media="screen"/>
    
    <script src="catalog/view/javascript/common.js" type="text/javascript"></script>
    <script src="catalog/view/theme/default/js/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script src="catalog/view/theme/default/js/owl.carousel.min.js"></script>


        <script src="catalog/view/javascript/jquery/datetimepicker/moment.min.js" type="text/javascript"></script>
        <script src="catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        
        <style>
  
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
        margin-top: 50px;
    }
 </style>
        

</head>

<body class="account-register">
<?php
include ('config.php');

 $cr_db='';
 $cr_tb='';
 $con=mysql_connect($host,$user,$pass);
 mysql_select_db($db);
 //Mysqli_set_charset($conn,"utf8mb4");
 if($con)
 //echo "connect done";
 $full_name='';
 $whats_no='';
 $whats_pre='';
 $email='بدون';
 $countname = 'بدون';
 $bap_intrval='';
 $bap_mount='';
 $details='';
 $bap_statue='contenu';
 $date1= date('d-m-Y');
 $date = date("H:i:s");
 $format ="d/m/Y H:i:s";
 $err='';
 $a= false;
if(empty($_POST['full_name']))
    {
        $a=true; 
    }
     else
         {
   $full_name=$_POST['full_name'];

  }
          if(empty($_POST['whats_no']))
    {
      $a=true;
    }
    else
    {
      $whats_no=$_POST['whats_no'];
}
          if(empty($_POST['whats_pre']))
    {
      $a=true;
    }
    else
    {
      $whats_pre=$_POST['whats_pre'];
}

if(empty($_POST['bap_intrval']))
{
  $a=true;
}
else
{
  $bap_intrval=$_POST['bap_intrval'];
}
if(empty($_POST['bap_mount']))
{
  $a=true;
}
else
{
  $bap_mount=$_POST['bap_mount'];
}
    if(empty($_POST['details']))
{
  $a=true;
}
else
{
  $details=$_POST['details'];
}


 $sqls='';
 if(!$a){
 if(isset($_POST["add"])){
  $sqls="insert into baptizing(full_name,whats_no,whats_pre,email,bap_intrval,bap_mount,details,bap_hr,bap_date,countname,bap_statue)values('$full_name','$whats_no','$whats_pre','$email','$bap_intrval','$bap_mount','$details','$date1','$date','$countname','$bap_statue')";
  //echo $sqls;
 $r=mysql_query($sqls);
 $err="added";
 //echo "DONE. $full_name";
 echo "<script>alert('تم تقديم طلبك بنجاح سوف يتم الرد عليك بواسطة رقمك الواتس الذي أدخلته');</script>";
 //header("location: baptizing1.php");


     }

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
                    <a href="index.php?route=common/home">
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
            <a href="index.php?route=common/home">
                <img src="image/catalog/logoafaq.png" alt="آفاق السيولة للوساطة" data-placement="top" title="آفاق السيولة للوساطة">
            </a>
            <ul class="menu-nav">
                <li><a href="index.php?route=common/home"> <i class="fas fa-angle-left"></i> الرئيسية </a> </li>


                <li><a href="indexc38e.html?route=information/faq"> <i class="fas fa-angle-left"></i>  كيف استخدم التطبيق ؟ </a> </li>

                <li><a href="index3aa6.html?route=information/information&amp;information_id=2"> <i class="fas fa-angle-left"></i>  شروط الخدمة  </a> </li>

                <li><a href="<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-6 col-xs-9">
                <div class="logo">
                    <a href="index.php?route=common/home">
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
            <a href="index.php?route=common/home">
                <img src="image/catalog/logoafaq.png" alt="آفاق السيولة للوساطة" data-placement="top" title="آفاق السيولة للوساطة">
            </a>
            <ul class="menu-nav">
                <li><a href="index.php?route=common/home"> <i class="fas fa-angle-left"></i> الرئيسية </a> </li>


                <li><a href="accounts.php?route=information/faq"> <i class="fas fa-angle-left"></i> حسابات المستخدمين </a> </li>

                <li><a href="index3aa6.html?route=information/information&amp;information_id=2"> <i class="fas fa-angle-left"></i>  شروط الخدمة  </a> </li>


                <li><a onclick="ok();"> <i class="fas fa-angle-left"></i>   للمراسلة أو الإستفسارات    </a> </li>

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
                    <li><a href="index.php?route=common/home"> الرئيسية </a></li>

            

                    <li><a href="indexc38e.html?route=information/faq">  كيف استخدم التطبيق ؟ </a> </li>

                    <li><a href="index3aa6.html?route=information/information&amp;information_id=2"> شروط الخدمة </a></li>

                    <li><a onclick="ok();">  للمراسلة أو الإستفسارات  </a></li>

                </ul>
                
            </div><!--col-md-12-->
        </div>
    </div>

                <li><a href="baptizing.html?route=information/contact"> <i class="fas fa-angle-left"></i>  إتصل بنا   </a> </li>

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
                    <li><a href="index.php?route=common/home"> الرئيسية </a></li>

                

                    <li><a href="indexc38e.html?route=information/faq">  كيف استخدم التطبيق ؟ </a> </li>

                    <li><a href="index3aa6.html?route=information/information&amp;information_id=2"> شروط الخدمة </a></li>


                    <li><a onclick="ok();">  للمراسلة أو الإستفسارات  </a></li>

                </ul>
                
            </div><!--col-md-12-->
        </div>
    </div>
</div>

<!--==========================================================================-->
<div class="road" style="height: 230px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <h4> <i class="fas fa-caret-left"></i>
                طلب تعميــد                </h4>
                <p> تضمن منصة آفاق للوساطة والتعميد بشكل آمن حقوق أصحاب الطلبات ومقدمي الخدمة والشركات بشكل كامل .
                من خلال هذه الخدمة كن مطمئنا عند تقديم طلب تعميد ، حيث تقوم هذه المنصة بدور الضامن و الوسيط بين صاحب الطلب وبين مقدمي الخدمة لحماية الحقوق.
                    فقط اختر مقدم الخدمة المناسب ثم اتفقوا على خدمة التعميد لدى منصة آفاق للوساطة 
                    الخطوات : </p>
            </div><!--col-sm-12-->
        </div>
    </div>
</div>
<!--==========================================================================-->
<div class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="login-page">



























                <form  method="POST">

                        <label>الإسم الكامل</label>
                        <input type="text" name="full_name" value="" placeholder="قم بكتابة الإسم الكامل ..."  />
                        
                        <label>اكتب رقم الواتس اب الخاص بك </label>
                        <input type="text" name="whats_no" value="" placeholder="اكتب رقم الواتس اب الخاص بك ..."  />

                        <label>اكتب رقم الواتس اب الخاص بمقدم الخدمة </label>
                        <input type="text" name="whats_pre" value="" placeholder="اكتب رقم الواتس اب الخاص بمقدم الخدمة ..."  />
                        
             
                        
                        <label>فترة التعميد</label>
                        <input type="number" name="bap_intrval" value="" placeholder="قم بكتابة  فترة التعميد بالأيام ..."  />
                        
                        <label>مبلغ التعميد </label>
                        <input type="text" name="bap_mount" value="" placeholder="مبلغ التعميـــــد ..."  />
                        
                        <label>تفاصيل المعاملة </label>
                        <input type="textarea" name="details" style="height: 200px;" value="" placeholder="قم بكتابة تفاصيل المعاملة  ..."  />

                        <?php
                         
                        
                         echo $date1; 
                         echo"<br>";
                         echo date($format); 
    ?>
                        
                        <input type="hidden" name="agree" value="1" />

                        <!--<input type="submit" value="إرسال">-->
                        <button name="add">إرسال</button>
                        </div>


                 













     

                        <p>  إذا كان لديك حساب معنا ، الرجاء الدخول إلى <a href="indexe223.php?route=account/login">صفحة تسجيل الدخول</a>. </p>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==========================================================================-->
<script type="text/javascript"><!--
    $('button[id^=\'button-custom-field\']').on('click', function () {
        var node = this;

        $('#form-upload').remove();

        $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

        $('#form-upload input[name=\'file\']').trigger('click');

        $('#form-upload input[name=\'file\']').on('change', function () {
            $.ajax({
                url: 'index.php?route=tool/upload',
                type: 'post',
                dataType: 'json',
                data: new FormData($(this).parent()[0]),
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    $(node).button('loading');
                },
                complete: function () {
                    $(node).button('reset');
                },
                success: function (json) {
                    $('.text-danger').remove();

                    if (json['error']) {
                        $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
                    }

                    if (json['success']) {
                        alert(json['success']);

                        $(node).parent().find('input').attr('value', json['file']);
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        });
    });
    //--></script>
<script type="text/javascript"><!--
    $('.date').datetimepicker({
        pickTime: false
    });

    $('.time').datetimepicker({
        pickDate: false
    });

    $('.datetime').datetimepicker({
        pickDate: true,
        pickTime: true
    });
    //--></script>
<script type="text/javascript"><!--
    $('select[name=\'country_id\']').on('change', function() {
        $.ajax({
            url: 'index.php?route=account/account/country&country_id=' + this.value,
            dataType: 'json',
            beforeSend: function() {
                $('select[name=\'country_id\']').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');
            },
            complete: function() {
                $('.fa-spin').remove();
            },
            success: function(json) {
                if (json['postcode_required'] == '1') {
                    $('input[name=\'postcode\']').parent().parent().addClass('required');
                } else {
                    $('input[name=\'postcode\']').parent().parent().removeClass('required');
                }

                html = '<option value=""> --- الرجاء الاختيار --- </option>';

                if (json['zone']) {
                    for (i = 0; i < json['zone'].length; i++) {
                        html += '<option value="' + json['zone'][i]['zone_id'] + '"';

                        if (json['zone'][i]['zone_id'] == '') {
                            html += ' selected="selected"';
                        }

                        html += '>' + json['zone'][i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value="0" selected="selected"> --- لا يوجد --- </option>';
                }

                $('select[name=\'zone_id\']').html(html);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    });

    $('select[name=\'country_id\']').trigger('change');
    //--></script>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="footer-content">
                    <a href="index.php?route=common/home">
                        <img src="image/catalog/logoafaq.png" data-toggle="tooltip" title="آفاق السيولة للوساطة" alt="آفاق السيولة للوساطة">
                    </a>

                    <p>
                        آفاق السيولة, نفتح سوياً آفاقاً جديدة من خدمات الوساطة . نعمل على مدار الساعة فى خدمة عملائنا الكرام.                    </p>
                </div>
            </div><!--col-md-3-->

            <div class="col-md-2 col-sm-12 col-xs-12">
                <div class="footer-content">
                    <ul>
                        <h4> معلومات </h4>
                        <li><a href="whous.html?route=information/information&amp;information_id=1"> من نحن </a> </li>
                                                <li><a href="condition.html?route=information/information&amp;information_id=2"> شروط الخدمة </a> </li>
                                                <li><a href="treaty.html?route=information/information&amp;information_id=4"> معاهدة إستخدام الموقع </a> </li>
                                                <li><a href="commission.html?route=information/information&amp;information_id=10"> عمولة الموقع </a> </li>
                                                <li><a href="Dtreaty.html?route=information/information&amp;information_id=11"> معاهدة اضافة الاعلان </a> </li>
                                            </ul>
                </div>
            </div><!--col-md-3-->

            <div class="col-md-2 col-sm-12 col-xs-12">
                <div class="footer-content">
                    <ul>
                        <h4> حساب شخصى </h4>

                                                <li>
                            <a href="index5502.php?route=account/register"> حساب جديد</a>
                        </li>

                        <li>
                            <a href="indexe223.php?route=account/login"> تسجيل دخول</a>
                        </li>

                        
                        <li>
                            <a onclick="ok();"> للمراسلة أو الإستفسار</a>
                        </li>
                        <script>
function ok(){
alert("قم بإنشاء حساب وتسجيل الدخول أولاُ");
}
</script>
                    </ul>
                </div>
            </div><!--col-md-3-->

            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="footer-content">
                    <h2> تواصل معنا </h2>
                    <h6> <i class="fas fa-phone"></i> <a href="tel:009660558241997">009660558241997</a> </h6>
                    <h6> <i class="fab fa-whatsapp"></i> <a href="https://api.whatsapp.com/send?phone=009660558241997" target="_blank">009660558241997</a> </h6>

                    <div id="newsletter">
<label for="">اشترك معنا ليصلك كل جديد</label>
    <input type="text" name="email" id="email" placeholder="البريد الالكتروني">
    <button id="submitNewsletter" type="button"> اشترك </button>
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
  
  
      <div class="col-md-12 col-xs-12" style="color: #fff;
    text-align: center;">
<p>الرقم الضريبي : 310144121300003</p>
<p>رقم السجل التجاري : 4030395830</p>
            </div>
  
  
            <div class="col-md-12 col-xs-12">
                <p class="copyright">© جميع الحقوق محفوظة - آفاق السيولة للوساطة - 2020</p>
            </div>
                   <div class="col-md-12 col-xs-12">
                    <a href="#"><p class="by">Design By we</p></a>
            </div>

        </div>
    </div>
</div>
<script src="catalog/view/theme/default/js/script.js"></script>





</body>

<!-- Mirrored from www.afaqalsyola.com.sa//index.php?route=account/register by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 17:44:22 GMT -->
</html>