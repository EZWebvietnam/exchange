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
                'name'    => 'card',
                'id'    => 'card',
                'value' => set_value('card'),
                'size'     => 30,
                'required'=>'',
                'oninput'=>"check_valid_input('card','pass')",
                'oninvalid'=>"check_valid_input('card','pass')",
                'class'=> "txt-input txt_160 keyboardInput"
            );

            
        ?>
        <div class="body-block">
            <div class="body-block-left">
                <div class="message"></div>
                <div class="div-label">Mã thẻ <span class="note_text">*</span></div>
                <div class="div-content"><?php echo form_input($old_password)?>
                </div>
                <font color="red"><p><?php echo form_error($old_password['name']); ?><?php echo isset($errors[$old_password['name']])?$errors[$old_password['name']]:''; ?></p></font>
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