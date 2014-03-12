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
        <div class="body-block">
            <div class="body-block-left">
                <div class="message"><?php 
                if($this->session->flashdata('error_trans'))
                {
                    echo $this->session->flashdata('error_trans');
                }
                ?></div>
                <div class="message">Thông tin giao dịch</div>
                <div class="div-label">Tài khoản nhận: </div>
                <div class="div-content"><?php echo $trans_detail[0]['username']?>
                </div>
                <div class="div-label">Số tiền: </div>
                <div class="div-content"><?php echo $trans_detail[0]['money']?>
                </div>
                <div class="div-label">Mã số giao dịch: </div>
                <div class="div-content"><?php echo $trans_detail[0]['transaction_id']?>
                </div>
                <div class="clear"></div>
                   
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