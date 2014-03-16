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
    <h3>Tài khoản</h3>
</div>
<div class="m-pop">
    <script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/admin_cp/js/core/price_format.js"></script>
<form action="<?php echo base_url();?>ctv/systemctv/account/<?php echo $id_account?>" method="post" accept-charset="utf-8" id="adminform">
<table class="form" style="width: 550px;">
    
    <tr>
        <td class="label">Số tiền</td>
        <td colspan="3">
            <input type="text" value="" name="money" id="money"/>
        </td>
        
    </tr>
   <tr>
        <td class="label">Hành động</td>
        <td colspan="3">
            <select name="action">
                <option value="1">Cộng</option>
                <option value="0">Trừ</option>
            </select>
        
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
    
    
    $("#adminform").validate({
        rules: {
            money: "required"
        },
        messages:{
            money: "Vui lòng nhập số tiền"
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