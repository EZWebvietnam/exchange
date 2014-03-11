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
                    <a href="http://gamebank.vn/">
                        <div class="menu" style="width: 100px">Trang Chủ</div>
                    </a>
                </li>
                <li>
                    <a href="http://pay.gamebank.vn/">
                        <div class="menu" style="width: 100px">Nạp tiền</div>
                    </a>
                    <ul class='MenuDropDown'>
                        <li><a href="http://pay.gamebank.vn">&nbsp;Nạp tiền</a></li>
                        <li><a href="http://pay.gamebank.vn/?mod=wdr">&nbsp;Rút tiền</a></li>
                        <li><a href="#">&nbsp;Chuyển tiền</a></li>
                    </ul>
                </li>
                <li>
                    <a href="http://card.gamebank.vn/">
                        <div class="menu" style="width: 100px">Mua thẻ</div>
                    </a>
                    <ul class='MenuDropDown'>
                        <li><a href="http://card.gamebank.vn/?mod=zxu">&nbsp;Nạp Zing Xu</a></li>
                        <li><a href="http://card.gamebank.vn/?mod=bbac">&nbsp;Nạp Bạc Gate FPT</a></li>
                        <li><a href="http://card.gamebank.vn/?mod=cad">&nbsp;Mã thẻ cào</a></li>
                        <li><a href="http://card.gamebank.vn/?mod=mob">&nbsp;Topup điện thoại</a></li>
                    </ul>
                </li>
                <li>
                    <a href="http://key.gamebank.vn">
                        <div class="menu" style="width:100px;">Key Game</div>
                    </a>
                </li>
                <li>
                    <a href="http://san.gamebank.vn/">
                        <div class="menu" style="width: 130px">Sàn giao dịch</div>
                    </a>
                </li>
                <li>
                    <a href="http://diendan.gamebank.vn/">
                        <div class="menu" style="width: 100px">Diễn Đàn</div>
                    </a>
                </li>
                <li>
                    <a href="http://his.gamebank.vn/">
                        <div class="menu" style="width: 100px">Lịch sử</div>
                    </a>
                    <ul style="visibility: hidden; display: block; ">
                        <li><a href="http://his.gamebank.vn">&nbsp;Lịch sử</a></li>
                        <li><a href="http://his.gamebank.vn?mod=tctt">&nbsp;Tra cứu thẻ nạp</a></li>
                        <li><a href="http://his.gamebank.vn?mod=tcsl">&nbsp;Tra cứu sản lượng</a></li>
                    </ul>
                </li>
                <li class="first">
                    <a href="http://id.gamebank.vn/">
                        <div class="menu" style="width: 100px">Tài khoản</div>
                    </a>
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
                            <div class="block">
                                <div class="breadcumb"><a href="http://id.gamebank.vn">Gamebank id</a> &gt; <a href="http://id.gamebank.vn">Quản lý tài khoản</a> &gt; <span>Bổ sung thông tin cá nhân</span></div>
                                <div class="title-block">
                                    <div class="title-block-left">
                                        <h2>Đổi mật khẩu cấp 1</h2>
                                    </div>
                                    <div class="title-block-right">&nbsp;</div>
                                    <div class="clear"></div>
                                </div>
                                <div class="note_label">(<span class="note_text">*</span>) Thông tin bắt buộc nhập</div>
                                <form id="frmChangepass" name="frmChangepass"  method="post">
                                    <?php

                                        $old_password = array(
                                            'name'    => 'old_password',
                                            'id'    => 'password',
                                            'value' => set_value('old_password'),
                                            'size'     => 30,
                                            'required'=>'',
                                            'oninput'=>"check_valid_input('password','pass')",
                                            'oninvalid'=>"check_valid_input('password','pass')",
                                            'class'=> "txt-input txt_160 keyboardInput",
                                             'maxlength'=>32
                                        );

                                        $new_password = array(
                                            'name'    => 'new_password',
                                            'id'    => 'sPassWord1',
                                            'value' => set_value('new_password'),
                                            'maxlength'    => $this->config->item('password_max_length', 'tank_auth'),
                                            'size'    => 30,
                                            'required'=>'',
                                            'oninput'=>"check_valid_input('sPassWord1','pass')",
                                            'oninvalid'=>"check_valid_input('sPassWord1','pass')",
                                            'class'=> "txt-input txt_160 keyboardInput",
                                             'maxlength'=>32,
                                             'style'=>'float:left'
                                        );

                                        $confirm_new_password = array(
                                            'name'    => 'confirm_new_password',
                                            'id'    => 'confirm_new_password',
                                            'maxlength'    => $this->config->item('password_max_length', 'tank_auth'),
                                            'value' => set_value('confirm_new_password'),
                                            'size'     => 30,
                                            'required'=>'',
                                            'oninput'=>"check_valid_input('sPassWord1','confirm_new_password')",
                                            'oninvalid'=>"check_valid_input('sPassWord1','confirm_new_password')",
                                            'class'=> "txt-input txt_160 keyboardInput",
                                             'maxlength'=>32,
                                             'style'=>'float:left'
                                        );
                                    ?>
                                    <div class="body-block">
                                        <div class="body-block-left">
                                            <div class="message"></div>
                                            <div class="div-label">Mật khẩu hiện tại <span class="note_text">*</span></div>
                                            <div class="div-content"><?php echo form_password($old_password)?>
                                            </div>
                                            <font color="red"><p><?php echo form_error($old_password['name']); ?><?php echo isset($errors[$old_password['name']])?$errors[$old_password['name']]:''; ?></p></font>
                                            <div class="clear"></div>
                                            <div class="div-label">Mật khẩu mới <span class="note_text">*</span></div>
                                            <div class="div-content">
                                                <?php echo form_password($new_password)?>
                                                <font color="red"><p><?php echo form_error($new_password['name']); ?><?php echo isset($errors[$new_password['name']])?$errors[$new_password['name']]:''; ?></p></font>
                                                <div class="stronglevel">
                                                    <div class="text_pass">&nbsp;Mức độ bảo mật</div>
                                                    <div class="meter" id="meta1"></div>
                                                    <div class="meter" id="meta2"></div>
                                                    <div class="meter" id="meta3"></div>
                                                    <div class="meter" id="meta4"></div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="div-label">Xác nhận mật khẩu <span class="note_text">*</span></div>
                                            <div class="div-content"><?php echo form_password($confirm_new_password);?>
                                            </div>
                                            <font color="red"><p><?php echo form_error($confirm_new_password['name']); ?><?php echo isset($errors[$confirm_new_password['name']])?$errors[$confirm_new_password['name']]:''; ?></p></font>
                                            <div class="clear"></div>
                                            <div class="div-label">Mã kiểm tra <span class="note_text">*</span></div>
                                            <div class="div-content"><?php echo $image?><br /></div>
                                            <div class="clear"></div>
                                            <div class="div-label">Nhập mã kiểm tra <span class="note_text">*</span></div>
                                            <div class="div-content"><input required oninput="check_valid_input('sVerifyCode','VerifyCode');" oninvalid="check_valid_input('sVerifyCode','VerifyCode');" class="txt-input txt_260" id="sVerifyCode"  name="sVerifyCode"></div>
                                            <?php 
                                            if(isset($errors['captcha']))
                                            {
                                            ?>
                                              <p><?php echo $errors['captcha'];?></p>
                                            <?php }?>
                                            <div class="clear"></div>
                                            <div class="div-label">&nbsp;</div>
                                            <div class="div-content div-submit"><input value="Đồng ý" name="btnchangpass1" class="submit-input"  type="submit"><input class="submit-input" value="Hủy Bỏ" onclick="window.location='http://id.gamebank.vn/profile'"  type="button"></div>
                                            <div class="clear"></div>
                                        </div>
                                        <div style="display: none;"><input type='text' name="code_security" id="code_security" value="" /></div>
                                        <div class="body-block-right"><img src="<?php echo base_url();?>template/ezwebvietnam/home/libs/images/icon-right-2.jpg" /></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="body-block-bottom">&nbsp;</div>
                                </form>
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