<div id="result">
<script type="text/javascript">
$(document).ready(function() {
    $("input").each(function() { 
        $("input.readonly").css('background-color','#f2f2f2');
    });
});
</script>
<style>
    #error_user
    {
        color: red;
    }
    
</style>
<div class="h-pop">
    <div class="h-icon"></div>
    <h3>Thêm thành viên</h3>
</div>
<div class="m-pop">
    <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/admin_cp/js/core/price_format.js"></script>
<form action="<?php echo base_url();?>ctv/systemctv/add_product" method="post" accept-charset="utf-8" id="adminform">
<table class="form" style="width: 550px;">
    <?php 
  //Create Form
      $username = array(
        'name'    => 'username',
        'id'    => 'username',
        'value' => set_value('username'),
        'maxlength'    => $this->config->item('username_max_length', 'tank_auth'),
        'size'    => 30
    );
    $displayname = array(
    'name'    => 'displayname',
    'id'    => 'displayname',
    'value'    => set_value('displayname'),
    'maxlength'    => 80,
    'size'    => 30);
     $password = array(
    'name'    => 'sPassWord1',
    'type'=>'password',
    'id'    => 'sPassWord1',
    'value' => set_value('sPassWord1'),
    'maxlength'    => $this->config->item('password_max_length', 'tank_auth'),
    'size'    => 30
    );
    $email = array(
    'name'    => 'sEmail',
    'id'    => 'sEmail',
    'value'    => set_value('sEmail'),
    'maxlength'    => 80,
    'size'    => 30);
  ?>
    <tr>
        <td class="label">Username</td>
        <td colspan="3">
        <?php echo form_input($username); ?><?php echo form_error($username['name'])?><br/>
        <div id="error_user"></div>
        </td>
        
    </tr>
    <tr>
        <td class="label">Password</td>
        <td colspan="3">
        <?php echo form_input($password); ?>
        </td>
    </tr>
    <tr>
        <td class="label">Email</td>
        <td colspan="3">
        <?php echo form_input($email); ?>
            <div id="error_email"></div>
        </td>
    </tr>
    <tr>
        <td class="label">Tên hiển thị</td>
        <td colspan="3">
        <?php echo form_input($displayname); ?>
        </td>
    </tr>
        <td></td>
        <td><input type="submit" class="bt100" name="bt_submit" value="Thêm"/></td>
    </tr>
    
</table>
    <script type="text/javascript">
$(document).ready(function() {
    $('#credit_limit').priceFormat();
    $('#discount').priceFormat();
    $('#username').change(function(){
        var username = $(this).val();
        $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>ctv/systemctv/check_account_ajax",
                data: {username:username},
                dataType: "json",
                success: function(data) {
                    if(data.error!=0)
                    {
                       $('#error_user').html(data.msg);
                    }
                    else
                    {
                       
                         $('#error_user').html(data.msg);
                    }
                }
            });
    });
    $('#sEmail').change(function(){
        var email = $(this).val();
        $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>ctv/systemctv/check_email_ajax",
                data: {email:email},
                dataType: "json",
                success: function(data) {
                    if(data.error!=0)
                    {
                       $('#error_email').html(data.msg);
                    }
                    else
                    {
                        $('#error_email').html(data.msg);
                    }
                }
            });
    });
    $("#adminform").validate({
        rules: {
            customer_address: "required",
            username:"required",
             sPassWord1:"required",
             sEmail:"required",
             displayname:"required"
        },
        messages:{
            customer_address: "Vui lòng chọn khóa học",
            username:"Vui lòng điền tên đăng nhập",
            sPassWord1:"Vui lòng điền mật khẩu",
            sEmail:"Vui lòng điền email",
            displayname:"Vui lòng điền tên hiển thị"
        }        
        ,submitHandler: function(form) {
            var page = 1;
            dataString = $("#adminform").serialize();
            $.ajax({
                type: "POST",
                url: $("#adminform").attr('action'),
                data: dataString,
                dataType: "json",
                success: function(data) {
                    if(data.error!=1)
                    {
                        $.fancybox.close();  
                        reload_callback("<?php echo base_url();?>ctv/systemctv/ajax_get_product",page,'result');
                        show_msg(data.msg);
                        
                    }
                    else
                    {
                        alert('ssss');
                    }
                }
            }); 
        }        
    });    
});
</script>
</form>
  
    
</div>
<script type="text/javascript">
$(document).ready(function() {
    $("a.grouped_elements").fancybox({
        'padding'            : 0,
        'titleShow' : false,
        'autoScale'            : false,
        'transitionIn'        : 'none',
        'transitionOut'        : 'none',
        'hideOnOverlayClick' : false,
        'hideOnContentClick' : false,
        'overlayShow' : true,
        'type'                : 'ajax'
    }); 
});
</script>
</div>  