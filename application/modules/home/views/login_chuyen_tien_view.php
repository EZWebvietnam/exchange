<div class="block">
    <div class="breadcumb"><a href="<?php echo base_url();?>thanh-vien">BEST RESELLER ID</a> &gt; <a href="<?php echo base_url();?>thanh-vien">Quản lý tài khoản</a> &gt; <span>Chuyển tiền</span></div>
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
                'name'    => 'pass_access',
                'id'    => 'pass_access',
                'value' => set_value('pass_access'),
                'size'     => 30,
                'required'=>'',
                'oninput'=>"check_valid_input('pass_access','pass_access')",
                'oninvalid'=>"check_valid_input('pass_access','pass_access')",
                'class'=> "txt-input txt_160 keyboardInput"
            );
            $transaction_id = array(
                'name'    => 'transaction_id',
                'id'    => 'transaction_id',
                'value' => $transaction_id,
                'type'=>'hidden',
                'size'     => 30
            );

        ?>
        <div class="body-block">
            <div class="body-block-left">
                <div class="message">Mật khẩu giao dịch đã được gửi đến email của bạn, vui lòng check mail!</div>
                <div class="div-label">Mật khẩu giao dịch: <span class="note_text">*</span></div>
                <div class="div-content"><?php echo form_password($old_password)?>
                </div>
                <font color="red"><p><?php 
                echo form_error($old_password['name']); ?></p></font>
                <div class="clear"></div>
                                 
               
                <div class="clear"></div>
                <?php echo form_input($transaction_id);?>
                <div class="div-label">&nbsp;</div>
                <div class="div-content div-submit"><input value="Đồng ý" name="btnchangpass1" class="submit-input"  type="submit"></div>
                <div class="clear"></div>
            </div>
            <div style="display: none;"><input type='text' name="code_security" id="code_security" value="" /></div>
            <div class="body-block-right"><img src="<?php echo base_url();?>template/ezwebvietnam/home/libs/images/icon-right-2.jpg" /></div>
            <div class="clear"></div>
        </div>
        <div class="body-block-bottom">&nbsp;</div>
    </form>
                            </div>