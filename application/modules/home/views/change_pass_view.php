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