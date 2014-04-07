
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="Tra cứu, thống kê lịch sử, sản lượng, thông tin giao dịch, nạp tiền, rút tiền, mua và nạp thẻ game, thẻ gate, thẻ điện thoại, zing xu, bạc fpt, thẻ vtc vcoin, hướng dẫn tích hợp thanh toán." />
        <meta name="keywords" content="Tra cứu, thống kê, giao dịch online, thẻ game, thẻ gate, bạc fpt, zing xu, vtc vcoin, mua bán, nạp tiền, rút tiền, nạp thẻ, tích hợp nạp thẻ, thanh toán trực tuyến. " />


        <title>Gamebank - Trang tra cứu, thống kê lịch sử, sản lượng, thông tin hoạt   động giao dịch: nạp và rút tiền, mua và nạp thẻ game, thẻ gate, thẻ điện   thoại, thẻ vtc vcoin, zing xu, bạc fpt</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/ezwebvietnam/home/libs/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/ezwebvietnam/home/libs/style-1.0.css" />
        <script src="<?php echo base_url();?>template/ezwebvietnam/home/libs/scripts/script.js" type="text/javascript"></script>
        <script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>template/ezwebvietnam/home/libs/scripts/dropdown.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home/libs/scripts/function.js"></script>
        <script type="text/javascript">
            if (top.frames.length != 0)
                top.location = self.document.location;
        </script>


    </head>
    <body>
        <div align="center">
            <div class="bannerSite">
                <div class="bannerMain" align="left"><div class="logodiv" style="float:left;"><img src="http://gamebank.vn/logo.png"/></div><div style="float:right; margin-top:10px; margin-right:3px;"><img src="http://gamebank.vn/images/weblink/banner.gif" /></div></div>
            </div>

            <div class="bgmenu" align="center">
                <div class="menuContain" align="left">
                    <div class="homeIcon"></div>
                    <ul id="nav">
                <li>
                    <a href="<?php echo base_url();?>">
                        <div class="menu" style="width: 100px">Trang Chủ</div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>thanh-vien/card">
                        <div class="menu" style="width: 100px">Nạp tiền</div>
                    </a>
                    <ul class='MenuDropDown'>
                        <li><a href="<?php echo base_url();?>thanh-vien/card">&nbsp;Nạp tiền</a></li>
                        <li><a href="<?php echo base_url();?>thanh-vien/rut-tien">&nbsp;Rút tiền</a></li>
                        <li><a href="<?php echo base_url();?>thanh-vien/chuyen-tien">&nbsp;Chuyển tiền</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <div class="menu" style="width: 100px">Lịch sử</div>
                    </a>
                    <ul class='MenuDropDown'>
                        <li><a href="<?php echo base_url();?>thanh-vien/lich-su-chuyen-tien">&nbsp;Lịch sử Chuyển tiền</a></li>
                        <li><a href="<?php echo base_url();?>thanh-vien/lich-su-rut-tien">&nbsp;Lịch sử Rút tiền</a></li>
                        <li><a href="<?php echo base_url();?>thanh-vien/lich-su-nap-the">&nbsp;Lịch sử Nạp thẻ</a></li>
                        <li><a href="<?php echo base_url();?>thanh-vien/lich-su-he-thong">&nbsp;Lịch sử Hệ thống</a></li>
                    </ul>
                </li>
            </ul>
                </div>
            </div>


            <div style="width:950px; height:19px; margin:0px; float:none; border-color:#F60; border-width:0px; border-style:solid; font-size:11px; text-align:left;">
                
            </div>

            <div style="width:950px; height:auto; margin-top:0px; float:none;">
                <div style="width:215px; height:500px; float:left;">
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
        <?php
        if(!empty($blance_user))
        {
        ?>
        <td width="80" align="right"><span style="color:#060;font-weight:bold"><?php echo number_format($blance_user[0]['blance'])?></span></td>
        <?php } else {?>
        <td width="80" align="right"><span style="color:#060;font-weight:bold">0</span></td>
        <?php } ?>
        <td width="23" align="right">VNĐ</td>
      </tr>
      <tr>
        <td>Có thể sử dụng:</td>
        <?php
        if(!empty($blance_user))
        {
        ?>
        <td align="right"><span style="color:#03C;font-weight:bold"><?php echo number_format($blance_user[0]['blance'])?></span></td>
        <?php } else {?>
        <td align="right"><span style="color:#03C;font-weight:bold">0</span></td>
        <?php } ?>
        <td align="right">VNĐ</td>
      </tr>
      <tr>
        <td>Số tài khoản:</td>
        
        <td align="right"><span style="color:#03C;font-weight:bold"><?php echo $this->session->userdata('account_number');?></span></td>

      </tr>
    </table>
    <div style="border-style:solid; border-color:#999; width:180px; border-width:1px; border-bottom:0;"></div>
</div>
<div class="text11tahoma" style="padding-top:7px;" align="left">
<div class="litxtbtomlogin"><img src="<?php echo base_url();?>template/ezwebvietnam/home/images/li.gif" />&nbsp;&nbsp;<a href="<?php echo base_url();?>thanh-vien/doi-mat-khau"><span id="changePass">Đổi mật khẩu</span></a></div>
<div class="litxtbtomlogin"><img src="<?php echo base_url();?>template/ezwebvietnam/home/images/li.gif" />&nbsp;&nbsp;<a href="http://id.gamebank.vn"><span id="infoAcc">Thông tin tài khoản</span></a></div>
<div class="litxtbtomlogin"><img src="<?php echo base_url();?>template/ezwebvietnam/home/images/li.gif" />&nbsp;&nbsp;<a href="<?php echo base_url();?>logout"><span id="logout">Thoát</span></a></div>
</div>
</div>
                    </div>

                    <div id="loginformTop" style="margin-top:15px;">
                        <div class="textformTop">
                            Liên hệ - Hỗ trợ
                        </div>
                    </div>
                    <div class="loginformContain" style="height:235px;" align="center">
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
                                    source.innerHTML = "<a href=\"" + linkLS + "\"><img src='" + imgOnline + "'/></a>";
                                }
                                else
                                    source.innerHTML = "<img src='" + imgOffline + "'/>";

                            </script>
                            <!-- End Live Support-->
                        </div>
                        <div class="divhr" style="width:200px;"></div>

                        <div class="text11tahoma" align="left">
                            <div style="margin-top:7px; height:17px;">
                                <div style="float:left; margin-left:5px;">Trụ sở tại <strong>Hà Nội</strong>:</div><div style="float:right; margin-right:5px;"><a href="http://gamebank.vn/images/gamebankhn.jpg" title="Bản đồ trụ sở Gamebank tại TPHCM" target="_blank">Bản đồ</a></div></div>
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

                </div>
                <?php echo $this->load->view($main_content);?>
            </div>

            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"><tr><td>
                        <div style="height:100px; background-image:url(<?php echo base_url();?>template/ezwebvietnam/home/libs/images/bgfooter.png); margin-top:15px;" align="center">
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
                var pageTracker = _gat._getTracker("UA-7411650-5");
                pageTracker._trackPageview();
            } catch (err) {
            }</script>
        <script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
        </script>
        <script type="text/javascript">
            try {
                _uacct = "UA-7411650-5";
                urchinTracker();
            } catch (err) {
            }</script>
    </body>
</html>
