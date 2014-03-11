<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" />
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Gamebank ID</title>
      <link rel="shortcut icon" href="http://id.gamebank.vn/favicon.ico" type="image/vnd.microsoft.icon" />
      <link hi rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/ezwebvietnam/home/libs/css/style-1.11.css"/>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/ezwebvietnam/home/libs/css/keyboard.min.css"/>
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home/libs/js/jquery-1.8.2.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home/libs/js/error_message_html5.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home/libs/js/js-1.0.2.min.js"></script>
   </head>
   <body>
      <div id="MenuBG">&nbsp;</div>
      <div id="header">
         <div id="logo">
            <a href='http://gamebank.vn'><img src="http://id.gamebank.vn/logo.png" title="Gamebank" /></a>
         </div>
         <!--end #-->
         <div id="banner">
            <a href='http://id.gamebank.vn/policy' target='_new'><img src="<?php echo base_url();?>template/ezwebvietnam/home/libs/images/banner.png" title=""></a>
         </div>
      </div>
      <div id="menu">
         <script language="JavaScript" type="text/javascript">
            var IMG_URL ='http://localhost/exchange/template/ezwebvietnam/home';
            /*<![CDATA[*/
            $(document).ready(function() {
            
            $("#nav li").hover(function(){
            
            $(this).find('ul:first').css({ visibility: "visible",display: "none"}).show(400);
            },function(){
            $(this).find('ul:first').css({ visibility: "hidden"});
            
            });
            })
            /*]]>*/
         </script>
         <div class="home-icon"></div>
         <ul id="nav">
            <li>
               <a href="http://gamebank.vn/">
                  <div class="menu" style="width: 100px">Trang Chủ</div>
               </a>
            </li>
            <li>
               <a href="http://pay.gamebank.vn/">
                  <div class="menu" style="width: 100px">Nạp tiền</div>
               </a>
               <ul class='MenuDropDown'>
                  <li><a href="<?php echo base_url();?>thanh-vien/card">&nbsp;Nạp tiền</a></li>
                  
                  <li><a href="#">&nbsp;Chuyển tiền</a></li>
               </ul>
            </li>
            
         </ul>
         <div id="language-list">
            <img class="active" src="<?php echo base_url();?>template/ezwebvietnam/home/libs/images/vi.png" onclick="window.location.replace(window.location.pathname+'?l=vi');"/>&nbsp;&nbsp;
         </div>
      </div>
      <div id="wrapper">
         <div id="container-top">&nbsp;</div>
         <div id="container-border-left">
            <div id="container-border-right">
               <div id="container">
                  <div class="top-content">
                  </div>
                  <div class="clear"></div>
                  <div id="main-content">
                     <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home/libs/js/keyboard.js"></script>
                     <div id="login">
                        <div id="login-left">
                           <div id="notice-login"><span style="text-decoration:underline;">Lưu ý:</span><br>- Bạn có thể sử dụng Gamebank ID để đăng nhập tất cả các sản phẩm của Gamebank.<br>- <a style='color:red' href='http://gamebank.vn/news/canh-bao-an-toan-su-dung-dich-vu-gamebank' target='_new'>Cảnh báo an toàn sử dụng dịch vụ Gamebank</a></div>
                        </div>
                        <div id="title-login-left">&nbsp;</div>
                        <div id="title-login-right">LOGIN</div>
                        <div id="login-right">
                           <form name="form1" action="" method="post" enctype="application/x-www-form-urlencoded">
                            <?php 
                            //Create Form
                            
                            $login = array(
                                'name'    => 'username',
                                'id'    => 'user',
                                'value' => set_value('username'),
                                'maxlength'    => 80,
                                'size'    => 30,
                                'required'=>'',
                                'pattern'=>'[a-zA-Z0-9\_\.\@]{6,24}',
                                'oninput'=>"check_valid_input('user','username')",
                                "oninvalid"=>"check_valid_input('user','username')",
                                'title'=>"Tên đăng nhập sử dụng chữ cái, chữ số, gạch dưới và dấu chấm. Chiều dài từ 6-24 ký tự",
                                'style'=>"width: 220px; height: 25px; margin-left: 25px; padding-left: 5px; border: none;",
                                "maxlength"=>32,
                                'placeholder'=>'Tên đăng nhập'
                                
                            );
                            
                            $password = array(
                                'name'    => 'pwd',
                                'id'    => 'pass',
                                'value'=>set_value('pwd'),
                                'size'    => 30,
                                'required'=>'',
                                'pattern'=>'[a-zA-Z0-9\_\.\@]{6,24}',
                                'oninput'=>"check_valid_input('pass','pass');",
                                "oninvalid"=>"check_valid_input('pass','pass')",
                                'style'=>"width: 220px; height: 25px; margin-left: 25px; padding-left: 5px; border: none;",
                                "maxlength"=>32,
                                'placeholder'=>'Tên đăng nhập',
                                'class'=>'keyboardInput',
                                'placeholder'=>"Mật khẩu cấp 1"
                            ); 
                            ?>
                              <div style="display: none;"><input type='text' name="code_security" id="code_security" value="" /></div>
                              <div id="title-login">Đăng nhập</div>
                              <div>&nbsp;</div>
                              <p align="center" style="font-weight: bold; margin: 0px 0px -15px 0px; color: #d60000;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></p>
                              <p align="center" style="font-weight: bold; margin: 0px 0px -15px 0px; color: #d60000;"></p>
                              <div id="content-login"><?php echo form_input($login); ?></div>
                              <div id="content-login"><?php echo form_password($password); ?></div>
                              <input type="submit" name="btnLogin" id='btn-login'  value="Đăng nhập" style="margin-left: 115px;"/>
                              <p align="center" style="margin-top: 30px;"><a href="http://id.gamebank.vn/i/forgot">Quên thông tin tài khoản?</a> </p>
                              <p style="padding-top: 2px;" align="center"></p>
                              <p style="font-weight: bold; font-size: 14px;" align="center">Bạn chưa có tài khoản? <a href="<?php echo base_url();?>register">Đăng ký ngay</a></p>
                              <p style="font-size: 12px; padding: 30px 0px 20px 0px; text-align: center;"><em><span style="text-decoration: underline;">Chú ý:</span> Sử dụng mật khẩu cấp 1 để đăng nhập.</em></p>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="container-bottom">&nbsp;</div>
      </div>
      <div id="line-bottom">&nbsp;</div>
      <div id="footer">
         <!--footer-->
         <div id="left-footer">
            <p style="margin-top: 2px;">Copyright © 2008 - 2014 Gamebank</p>
            <p>Công ty Cổ phần Công Nghệ TMĐT RNG</p>
            <p><strong>Trụ sở Hà Nội:</strong> Số 11 - Đồng Bông - P.Dịch Vọng Hậu - Q.Cầu Giấy - Hà Nội &nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp; Tel: 04-3.939 3464 </p>
            <p><strong>Trụ sở TP.HCM:</strong> 41/4 Ngô Quyền - Phường 6 - Quận 10 - TP HCM &nbsp;&nbsp;&nbsp;-&nbsp;&nbsp; Tel: 08-3.853 3456</p>
            <p>Hotline: 0966.915.905 &nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp; Email: contact@gamebank.vn</p>
         </div>
         <!--end #left-footer-->
      </div>
   </body>
</html>