<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" />
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Gamebank ID</title>
        <link rel="shortcut icon" href="http://id.gamebank.vn/favicon.ico" type="image/vnd.microsoft.icon" />
        <link hi rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/ezwebvietnam/home/libs/css/style-1.11.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/ezwebvietnam/home/libs/css/keyboard.min.css"/>
        <script type="text/javascript">
            var IMG_URL = 'http://id.gamebank.vn';
        </script>
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
                            <div class="hello">
                                <img src="<?php echo base_url();?>template/ezwebvietnam/home/libs/images/avatar.png" />
                                <span class="clr01">Chào bạn: </span> <strong class="clr02 welcome"><?php echo $this->session->userdata('username')?></strong> | <a href="<?php echo base_url();?>logout">Thoát</a>
                            </div>
                            <div id="money-info">
                                <div class="money-info-label">Tổng số tiền: </div>
                                <div class="money-info-content" id="total-money"><strong>2.250</strong> VNĐ</div>
                                <div class="money-info-label">Có thể sử dụng: </div>
                                <div class="money-info-content" id="avail-money"><strong>2.250</strong> VNĐ</div>
                                <div class="money-info-label">Chờ giao dịch: </div>
                                <div class="money-info-content" id="wait-money"><strong>0</strong> VNĐ</div>
                                <div id="money-arrow-boder"></div>
                                <div id="money-arrow"></div>
                            </div>
                            <?php echo $this->load->view($main_content);?>
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