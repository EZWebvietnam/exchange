
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Trang thanh toán trực tuyến uy tín hàng đầu Việt Nam của Gamebank, Nạp tiền, từ thẻ cào điện thoại, thẻ game, thẻ gate, Nạp tiền bằng thẻ ATM, SMS Internet Banking, Thẻ thành toán quốc tế, tích hợp thanh toán" />
<meta name="keywords" content="Nạp tiền, chuyển tiền, rút tiền, thanh toán online, thẻ điện thoại, thẻ game, thẻ gate, giao dịch acc tại trụ sở gamebank" />
<title>Gamebank - Trang thanh toán online uy tín, nạp tiền tự động, nạp tiền qua atm, ngân hàng, nạp tiền bằng thẻ cào điện thoại - thẻ game.</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/ezwebvietnam/home/libs/main.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/ezwebvietnam/home/libs/style.css" />
<script src="<?php echo base_url();?>template/ezwebvietnam/home/libs/scripts/script.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>template/ezwebvietnam/home/libs/scripts/dropdown.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home/libs/scripts/function.js"></script>
<script type="text/javascript">
if (top.frames.length!=0)
top.location=self.document.location; 
</script>

</head>
<body>
<div align="center">
<div class="bannerSite">
<div class="bannerMain" align="left"><div class="logodiv" style="float:left;"><img src="http://gamebank.vn/logo.png"/></div>
<div style="float:right; margin-top:10px; margin-right:3px;"><a href='#'><img src="http://pay.gamebank.vn/images/banner-top.png?t1" /></a></div></div> <!-- http://gamebank.vn/images/weblink/banner.gif -->
</div>
<!-- Main menu start -->
<div class="bgmenu" align="center">
<div class="menuContain" align="left">
<div class="homeIcon"></div>
<ul id="nav">
<li><a href="http://gamebank.vn"><div class="menu" style="width:100px;">Trang Chủ</div></a></li>
<li><a href="http://pay.gamebank.vn"><div class="menuthis" style="background-image:url(<?php echo base_url();?>template/ezwebvietnam/home/images/bgmenu_og.png);">Nạp tiền</div></a>
    <ul>    
        <li><a href="http://pay.gamebank.vn">&nbsp;Nạp tiền</a></li>
        <li><a href="http://pay.gamebank.vn/?mod=wdr">&nbsp;Rút tiền</a></li>
        <li><a href="#">&nbsp;Chuyển tiền</a></li>
    </ul>
</li>
<li><a href="http://card.gamebank.vn"><div class="menu">Mua thẻ</div></a>
    <ul>    
        <li><a href="http://card.gamebank.vn/?mod=zxu">&nbsp;Nạp Zing Xu</a></li>
        <li><a href="http://card.gamebank.vn/?mod=bbac">&nbsp;Nạp Bạc Gate FPT</a></li>
        <li><a href="http://card.gamebank.vn/?mod=cad">&nbsp;Mã thẻ cào</a></li>
        <li><a href="http://card.gamebank.vn/?mod=mob">&nbsp;Topup điện thoại</a></li>
    </ul>
</li>

<li><a href="http://key.gamebank.vn"><div class="menu" style="width:100px;">Key Game</div></a></li>

<li><a href="http://san.gamebank.vn"><div class="menu" style="width:130px;">Sàn giao dịch</div></a></li>
<li><a href="http://diendan.gamebank.vn"><div class="menu">Diễn Đàn</div></a></li>
<li><a href="http://his.gamebank.vn"><div class="menu">Lịch sử</div></a>
    <ul>    
        <li><a href="http://his.gamebank.vn">&nbsp;Lịch sử </a></li>
        <li><a href="http://his.gamebank.vn?mod=tctt">&nbsp;Tra cứu thẻ nạp</a></li>
        <li><a href="http://his.gamebank.vn?mod=tcsl">&nbsp;Tra cứu sản lượng</a></li>
    </ul>

</li>
<li><a href="http://id.gamebank.vn"><div class="menu" style="border-right-width:0px;">Tài khoản</div></a></li>
</ul>
</div>
</div>
<!-- Main menu end -->
<!-- Submenu Start -->
<div style="width:950px; height:19px; margin:0px; float:none; border-color:#F60; border-width:0px; border-style:solid; font-size:11px; text-align:left;">
<div style="margin:1px;height:17px;">
<div style="margin-right:1px; width:60px; padding:1px; padding-right:3px; padding-left:3px; float:left"></div>
<a href="/"><div class='submenu'>Nạp tiền</div></a>
<a href="?mod=wdr"><div class='submenu'>Rút tiền</div></a>
<a href="#"><div class='submenu'>Chuyển tiền</div></a>
</div>
</div>
<!-- Submenu End -->
<div style="width:950px; height:auto; margin-top:0px; float:none;">
<div style="width:215px; height:540px; float:left;">
<div id="loginContainer">
<div id="loginformTop">
<div class="textformTop">
Tài khoản
</div>
</div>
<div class="loginformContain">

<div id="logedShowname"><?php echo $this->session->userdata('username')?><span style="color:#F30;"></span></div>

<div class="text11tahoma" style="padding-top:5px; color:#666;" align="center">
    <table width="195px" height="70px" border="0">
      <tr>
        <td width="78">Tổng số tiền:</td>
        <td width="80" align="right"><span style="color:#060;font-weight:bold">2.250</span></td>
        <td width="23" align="right">VNĐ</td>
      </tr>
      <tr>
        <td>Có thể sử dụng:</td>
        <td align="right"><span style="color:#03C;font-weight:bold">2.250</span></td>
        <td align="right">VNĐ</td>
      </tr>
      
    </table>
    <div style="border-style:solid; border-color:#999; width:180px; border-width:1px; border-bottom:0;"></div>
</div>
<div class="text11tahoma" style="padding-top:7px;" align="left">
<div class="litxtbtomlogin"><img src="<?php echo base_url();?>template/ezwebvietnam/home/images/li.gif" />&nbsp;&nbsp;<a href="http://id.gamebank.vn"><span id="changePass">Đổi mật khẩu</span></a></div>
<div class="litxtbtomlogin"><img src="<?php echo base_url();?>template/ezwebvietnam/home/images/li.gif" />&nbsp;&nbsp;<a href="http://id.gamebank.vn"><span id="infoAcc">Thông tin tài khoản</span></a></div>
<div class="litxtbtomlogin"><img src="<?php echo base_url();?>template/ezwebvietnam/home/images/li.gif" />&nbsp;&nbsp;<a href="logout.php"><span id="logout">Thoát</span></a></div>
</div>
</div>
</div>

<div id="loginformTop" style="margin-top:15px;">
<div class="textformTop">
Liên hệ - Hỗ trợ
</div>
</div>
<div class="loginformContain" style="height:205px;" align="center">
<div style="margin-top:7px; height:25px;">
<div style="float:left;margin-left:5px; background-color:#CCC;"><a href="ymsgr:sendIM?gamebankvn"><div id="yahooOnline"></div></a></div>
</div>

<div class="divhr" style="width:200px;"></div>
<div style="margin:5px 0px 5px 0px;">
<!--Live Support Code-->
<div id="ls"></div>

<script language="javascript" type="text/javascript">
    var imgOnline = "http://gamebank.vn/livesupport/images/Online3.png";
    var imgOffline = "http://gamebank.vn/livesupport/images/Offline3.png";
    var linkLS = "javascript:void(window.open('http://gamebank.vn/livesupport/chat.php?code=U0VSVkVSUEFHRQ__','','width=590,height=610,left=0,top=0,resizable=yes,menubar=no,location=yes,status=yes,scrollbars=yes'))";
    
    var d = new Date();

    var curr_hour = d.getHours();
    var curr_min = d.getMinutes();
    var source = document.getElementById("ls");
    
    if ((curr_hour >= 8 && curr_hour < 17) || (curr_hour == 17 && curr_min <= 30))    
    {        
        source.innerHTML = "<a href=\"" + linkLS + "\"><img src='" + imgOnline +"'/></a>";        
    }
    else 
        source.innerHTML = "<img src='" + imgOffline +"'/>";        

</script>
<!-- End Live Support-->
</div>
<div class="divhr" style="width:200px;"></div>

<div class="text11tahoma" align="left">
    <div style="margin-top:7px; height:17px;">
    <div style="float:left; margin-left:5px;">Trụ sở tại <strong>Hà Nội</strong>:</div><div style="float:right; margin-right:5px;"><a href="http://gamebank.vn/images/gamebankhn.jpg" title="Bản đồ trụ sở Gamebank tại Hà Nội" target="_blank">Bản đồ</a></div></div>
    <div style="margin-left:20px;height:17px;"><div class="homeMini"></div><div>&nbsp;Số 11 - Đồng Bông - Cầu Giấy</div></div>
    <div class="mobiIcon"></div>
    <div style="height:17px; float:left;">04-3.939.3464</div><div style="margin:0px 5px 0px 5px; float:right;">0966.915.905</div>
</div>
<div class="text11tahoma" align="left">
    <div style="margin-top:25px; height:17px;">
    <div style="float:left; margin-left:5px;">Trụ sở tại <strong>TPHCM</strong>:</div><div style="float:right; margin-right:5px;"><a href="http://gamebank.vn/images/gamebankhcm.gif" title="Bản đồ trụ sở Gamebank tại TPHCM" target="_blank">Bản đồ</a></div></div>
    <div style="margin-left:20px;height:17px;"><div class="homeMini"></div><div> 41/4 Ngô Quyền - P6 - Q10</div></div>
    <div class="mobiIcon"></div>
    <div style="height:17px; float:left;">08-3.853.3456</div><div style="margin:0px 5px 0px 5px; float:right;">0966.915.904</div>
</div>
</div>


<div style="padding-top:15px"><div  style="height:auto;padding:0" align="center"><a href="http://huongdan.gamebank.vn" > <img src="images/Huongdan.png"  /></a></div>
</div>

</div>
<div style="width:725px; height:inherit; margin-left:10px; float:right;"><div id="boxContent" align="left"><div class="textformTop" style="color:#000; float:left;">Nạp tiền vào tài khoản Gamebank</div>
<div id="relaLink"><a href="http://card.gamebank.vn/?mod=cad" style="color:#999;">Mua mã thẻ</a> | <a href="http://pay.gamebank.vn/" style="color:#999;">Nạp tiền</a></div>
</div>
<div id="ContentContainer" align="center" >

<div style="width:725px; height:120px;">
<div class="titleSLbox" align="left"><div class="sticktitleBig"></div>Giới thiệu Gamebank Pay</div>
<div style="height:100px;">
<div style="width:550px; height:100px; float:left; font-size:12px; font-family:Tahoma;">
<div style="width:400px; margin-top:20px;" align="left">
<b>Gamebank</b> luôn nỗ lực để mang đến cho khách hàng các phương &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <br />thức thanh toán - giao dịch đơn giản tại các trang web của <b>Gamebank</b>
</div>
</div>
<div style="width:190px; height:146px; position:relative; top:-20px; left:250px; background-image:url(images/ipad.jpg);"></div>
</div>
</div>

<div style="width:725px; height:240px;">
    <div style="width:725px;">
        <div class="titleSLbox" align="left" style="color:#000;"><div class="stickmethodBig"></div>Các phương thức nạp tiền vào Gamebank</div>
        <div class="titleFrm" align="left" style="margin-left:40px;"><div class="sticktitle"></div>Nạp tiền bằng tay (hoàn toàn không có phí)</div>
    </div>
    <div style="width:725; height:auto; margin-top:10px; background-color:#CC3;" align="left">
        <div style="width:180px; float:left;" align="center"><div style="width:132px; height:160px"><a href="?mod=atm"/><div class="show_box">
    <div class="imgbox" align="left">
    <img src="images/box_ATMimages.jpg" border="0"/>
    </div>
    <div class="show_text">Chuyển tiền qua ATM
    </div>
    </div></a></div></div>
        <div style="width:180px; float:left;" align="center"><div style="width:132px; height:160px"><a href="?mod=itb"/><div class="show_box">
    <div class="imgbox" align="left">
    <img src="images/box_internetbanking.jpg" border="0"/>
    </div>
    <div class="show_text">SMS/internet Banking
    </div>
    </div></a></div></div>
        <div style="width:180px; float:left;" align="center"><div style="width:132px; height:160px"><a href="?mod=inb"/><div class="show_box">
    <div class="imgbox" align="left">
    <img src="images/box_bank.jpg" border="0"/>
    </div>
    <div class="show_text">Nộp tại ngân hàng
    </div>
    </div></a></div></div>
        <div style="width:180px; float:left;" align="center"><div style="width:132px; height:160px"><a href="?mod=igb"/><div class="show_box">
    <div class="imgbox" align="left">
    <img src="images/box_gamebank.jpg" border="0"/>
    </div>
    <div class="show_text">Nộp tại Gamebank
    </div>
    </div></a></div></div>
    </div>       
    
</div>

<div style="width:725px; height:200px; margin-top:20px;">
    <div style="width:725px;">
        <div class="titleFrm" align="left" style="margin-left:40px;"><div class="sticktitle"></div>Nạp tiền tự động (mất phí tuỳ thuộc)</div>
        
    </div>
    <div style="width:725; height:auto; margin-top:10px; background-color:#CC3;" align="left">
        <div style="width:180px; float:left;" align="center"><div style="width:132px; height:160px"><a href="?mod=smc"/><div class="show_box">
    <div class="imgbox" align="left">
    <img src="images/box_ATMCardimages.jpg" border="0"/>
    </div>
    <div class="show_text">Nạp bằng thẻ nội địa
    </div>
    </div></a></div></div>
        <div style="width:180px; float:left;" align="center"><div style="width:132px; height:160px"><div class="dis_box">
    <div class="imgbox" align="left">
    <img src="images/box_dongabank.jpg" border="0"/>
    </div>
    <div class="show_text">Thẻ Đông Á Đa năng
    </div>
    </div></div></div>
        <div style="width:180px; float:left;" align="center"><div style="width:132px; height:160px"><a href="?mod=tel"/><div class="show_box">
    <div class="imgbox" align="left">
    <img src="images/box_tel.jpg" border="0"/>
    </div>
    <div class="show_text">Nạp tiền bằng thẻ cào
    </div>
    </div></a></div></div>
        <div style="width:180px; float:left;" align="center"><div style="width:132px; height:160px"><div class="dis_box">
    <div class="imgbox" align="left">
    <img src="images/box_bacgate.jpg" border="0"/>
    </div>
    <div class="show_text">Nạp bằng bạc Gate
    </div>
    </div></div></div>
    </div>
</div>

<div style="width:725px; height:200px; margin-top:20px;">
    <div style="width:725px;">
        <div class="titleFrm" align="left" style="margin-left:40px;"><div class="sticktitle"></div>Thanh toán quốc tế (mất phí tuỳ thuộc)</div>
    </div>

    <div style="width:725; height:auto; margin-top:10px; background-color:#CC3;" align="left">
        <div style="width:180px; float:left;" align="center"><div style="width:132px; height:160px"><a href="?mod=imc"/><div class="show_box">
    <div class="imgbox" align="left">
    <img src="images/box_CreditCard.jpg" border="0"/>
    </div>
    <div class="show_text">Nạp bằng CreditCard
    </div>
    </div></a></div></div>
        <div style="width:180px; float:left;" align="center"><div style="width:132px; height:160px"><div class="dis_box">
    <div class="imgbox" align="left">
    <img src="images/box_western.jpg" border="0"/>
    </div>
    <div class="show_text">Western Union
    </div>
    </div></div></div>
        <div style="width:180px; float:left;" align="center"><div style="width:132px; height:160px"><div class="dis_box">
    <div class="imgbox" align="left">
    <img src="images/box_Paypal.jpg" border="0"/>
    </div>
    <div class="show_text">Nạp từ Paypal
    </div>
    </div></div></div>
        <div style="width:180px; float:left;" align="center"><div style="width:132px; height:160px"><a href="?mod=dif"/><div class="show_box">
    <div class="imgbox" align="left">
    <img src="images/box_diferrent.jpg" border="0"/>
    </div>
    <div class="show_text">Phương thức khác
    </div>
    </div></a></div></div>
    </div>
</div>
</div>
<script type="text/javascript">
    $("div.show_box").hover(function(){
        $(this).css('background-image','url(<?php echo base_url();?>template/ezwebvietnam/home/images/moduleboxred.png)');},
    function(){
        $(this).css('background-image','url(<?php echo base_url();?>template/ezwebvietnam/home/images/moduleboxblue.png)');}
    );
</script></div>
</div>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"><tr><td>
<div style="height:100px; background-image:url(<?php echo base_url();?>template/ezwebvietnam/home/images/bgfooter.png); margin-top:15px;" align="center">
<div style=" width:950px; height:90px; font-family:Arial; font-size:12px; color:#333; padding-top:7px;" align="left">
<div style="height:18px;">Copyright © 2008 - 2014 Gamebank</div>
<div style="height:18px;">Công ty Cổ phần Công Nghệ TMĐT RNG</div>
<div style="height:18px;"><strong>Trụ sở Hà Nội:</strong> Số 11 - Đồng Bông - P.Dịch Vọng Hậu - Q.Cầu Giấy - Hà Nội &nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp; Tel: 04-3.939 3464</div>
<div style="height:18px;"><strong>Trụ sở TP.HCM:</strong> 41/4 Ngô Quyền - Phường 6 - Quận 10 - TP HCM &nbsp;&nbsp;&nbsp;-&nbsp;&nbsp; Tel: 08-3.853 3456</div>
<div style="height:18px;">Hotline: 0966.915.905 &nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp; Email: contact@gamebank.vn</div>
</div>
</div>
</td></tr></table>
</div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-7411650-9");
pageTracker._trackPageview();
} catch(err) {}
</script>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>

<script type="text/javascript">
try {
_uacct = "UA-7411650-9";
urchinTracker();
} catch(err) {}
</script>


<span id="WebRankTracker" style="display:none;">
<script type="text/javascript" src="http://xslt.alexa.com/site_stats/js/s/a?url=http://gamebank.vn"></script>
</span>

</body>
</html>
