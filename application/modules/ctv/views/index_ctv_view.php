<?php 

$login = array(
	'name'	=> 'login',
	'id'	=> 'login',    
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'maxsize'	=> 30,
    'class'=>'input-large span10'

);

$password = array(
	'name'	=> 'password',    
	'id'	=> 'password',
	'maxsize'	=> 30,
        'class'=>'input-large span10',
        'type'=>'password'
);
?>
<div id="wapper_login">
        <!--<div class="name_product"></div>-->
        <div class="content" id="content">
            <form  method="post" accept-charset="utf-8"> 
<div class="swap_input" style="margin-top: 52px; ">
    <div class="label">Tên đăng nhập</div>
    <?php echo form_input($login); ?>
</div>
<div class="swap_input">
    <div class="label">Mật khẩu</div>
    <?php echo form_input($password); ?>            
</div>
<div class="account_login">
    <a href="javascript:;" onclick="forgot_pass();">Quên mật khẩu</a>
</div>
<input type="submit" class="button_login" title="Đăng nhập" id="btnDangnhap" value="Đăng nhập" name="btnDangnhap">
</form></div>
<div id="div_forgot_pass" style="display: none;">
<div class="swap_input" style="margin-top: 82px;margin-bottom: 22px;">
    <div class="label">Địa chỉ Email</div>
    <input type="text" name="email" id="email" value="">
</div>

<div class="account_login">
    <a href="javascript:;" onclick="form_login();">Màn hình đăng nhập</a>
</div>
<input type="submit" class="button_login" title="Quên mật khẩu" id="btnDangnhap" onclick="send_pass();" value="Gửi mật khẩu" name="btnDangnhap">
</div>        </div>
        <!--<div class="version">Version: 2.0</div>
        <div class="copy">Copyright 2010 - All rights reserved.</div>-->
    </div>
    <div id="wapper_error">
        <?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
        <?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>        
    </div>