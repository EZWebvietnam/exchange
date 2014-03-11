<div class="block">
    <div class="breadcumb"><a href="http://id.gamebank.vn">Gamebank id</a> &gt; <a href="http://id.gamebank.vn">Quản lý tài khoản</a> &gt; <span>Bổ sung thông tin cá nhân</span></div>
    <div class="title-block">
        <div class="title-block-left">
            <h2>Chuyển tiền</h2>
        </div>
        <div class="title-block-right">&nbsp;</div>
        <div class="clear"></div>
    </div>
    <div class="note_label">(<span class="note_text">*</span>) Thông tin bắt buộc nhập</div>
    <form id="frmChangepass" name="frmChangepass"  method="post">
        <?php

            $old_password = array(
                'name'    => 'account_number',
                'id'    => 'account_number',
                'value' => set_value('account_number'),
                'size'     => 30,
                'required'=>'',
                'oninput'=>"check_valid_input('account_number','account_number')",
                'oninvalid'=>"check_valid_input('account_number','account_number')",
                'class'=> "txt-input txt_160 keyboardInput"
            );
             $money = array(
                'name'    => 'money',
                'id'    => 'money',
                'value' => set_value('money'),
                'size'     => 30,
                'required'=>'',
                'oninput'=>"check_valid_input('money','money')",
                'oninvalid'=>"check_valid_input('money','money')",
                'class'=> "txt-input txt_160 keyboardInput"
            );
            
        ?>
        <div class="body-block">
            <div class="body-block-left">
                <div class="message"></div>
                <div class="div-label">Số tài khoản đến: <span class="note_text">*</span></div>
                <div class="div-content"><?php echo form_input($old_password)?>
                </div>
                <font color="red"><p><?php 
                echo form_error($old_password['name']); ?></p></font>
                <div class="clear"></div>
               <div class="div-label">Số tiền: <span class="note_text">*</span></div>
                <div class="div-content"><?php echo form_input($money)?>
                </div>                   
                <font color="red"><p><?php echo form_error($money['name']); ?></p></font>
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