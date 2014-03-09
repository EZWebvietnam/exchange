
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
		<head>
			<title>VinaMos.vn</title>
			<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
			<meta name="Author" content="tranchaulong@gmail.com" />
			<meta name="Publisher" content="tranchaulong@gmail.com" />
			<meta name="Copyright" content="tranchaulong@gmail.com" />
			<meta name="robots" content="all,index,follow" />
			<meta name="distribution" content="global" />
			<meta name="rating" content="general" />
			<meta name="keywords" content="internet marketing,marketing online,chien luoc marketing online,hoc marketing online,giai phap marketing online,thuc hanh marketing online,cong cu thuc thuc hanh marketing online,ung dung marketing online,he thong marketing online ,tu van marketing online, website thong minh , website ban hang ,khoa hoc marketing online ,hoc truc tuyen , hoi thao truc tuyen, tiet kiem chi phi marketing online ,kiem tien tren mang, kiem tien online, tiep thi marketing online, marketing" />
			<meta name="description" content="internet marketing,marketing online,chien luoc marketing online,hoc marketing online,giai phap marketing online,thuc hanh marketing online,cong cu thuc thuc hanh marketing online,ung dung marketing online,he thong marketing online ,tu van marketing online, website thong minh , website ban hang ,khoa hoc marketing online ,hoc truc tuyen , hoi thao truc tuyen, tiet kiem chi phi marketing online ,kiem tien tren mang, kiem tien online, tiep thi marketing online, marketing" />
			<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/ezwebvietnam/home/template/template_1/css.css" media="screen"  />
			<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/ezwebvietnam/home/template/template_1/jquery.countdown.css" media="screen"  />
			<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home/scripts/main.htm"></script>
			<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home/template/template_1/js/jquery-1.8.3.js"></script>
			<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home/template/template_1/js/jquery.tools.min.js"></script>
			<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home/template/template_1/js/jquery.countdown2.js"></script>
			<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home/template/template_1/js/jquery-ui.js"></script>

			<script type="text/javascript">
				var curent_price = 0;
				var curent_product_id = 0;
				var price_unit = "VND";
				var app_main_url = "";
				var my_safecode = "view";
				var app_ext = ".htm";
				var my_url = "U1";
				try{
					var new_reg_success = '<p><span style="color: rgb(51, 51, 51);"><span style="font-size: medium;"><span style="font-family: Arial;">Xin chúc mừng!</span></span></span></p>    <p><span style="color: rgb(51, 51, 51);"><span style="font-size: medium;"><span style="font-family: Arial;">Bạn đã đăng ký nhận quà thành công.</span></span></span></p>    <p><span style="color: rgb(51, 51, 51);"><span style="font-size: medium;"><span style="font-family: Arial;">Bạn hãy mở Email để nhận quà của chúng tôi.</span></span></span></p>    <p><span style="color: rgb(51, 51, 51);"><span style="font-size: medium;"><span style="font-family: Arial;">Thành công cho bạn.</span></span></span></p>';
				}catch(e){}
				var my_template = "template_1";
				var my_curent_page = "U1";
			</script>
			<script type="text/javascript" src="<?php echo base_url();?>template/ezwebvietnam/home/template/template_1/js/cart_script3.js"></script>

	
</head>
<body>
<div class="sidelinks-container"><h3><a href="#top">Top</a></h3></div>
<div id='banner' style="min-height:80px">
	<div class='banner_content'>
		<!--Widget-->
												<div style="width:1000px">
	<p style="margin:0;padding:0"><img alt="" src="https://vinamos.vn//uploads/1178/bannervinamos3.png" /></p>  
</div>
									<!--/Widget-->
	</div>
	<div class='banner_header'>
	</div>
	<div class='logo'>
		<img src='/uploads/.vinamos.vn/2013/02/25/715/1341760607-png1361787802.png' width='220' height='80' alt='' />
	</div>
	<div class='top_menu' >
		<a href="<?php echo base_url();?>" class="home">Trang chủ</a>
		<a href="/U1/contact.htm" class="contact">Liên hệ</a>
		<a href="#"  onclick="show_cart()"  class="cart">
			Giỏ hàng (<span id="product_number" style="color:#ef4232;font-weight:700">0</span>)
		</a>
	</div>
	<div class='login_form'>
					<form style='margin:0px;padding:0px' method='post' action='/login.htm'>
				<input style='float:right;margin-top:-5px' type="image" src="<?php echo base_url();?>template/ezwebvietnam/home/template/template_1/images/login.png" name="submit" value='submit' width="126" height="32" />
				<input type="text" name="username" size="20" style="width:160px;border:0;height:23px;color:#005398;font-style: italic; " onblur="if (this.value=='') this.value='Tài khoản...';" onfocus="if (this.value=='Tài khoản...') this.value='';" value='Tài khoản...' />
				<input type="password" name="password" size="20" style="width:160px;border:0;height:23px;color:#005398;font-style: italic;margin-left:38px" onblur="if (this.value=='') this.value='Mật khẩu...';" onfocus="if (this.value=='Mật khẩu...') this.value='';" value='Mật khẩu...' />
				<input type='checkbox' name='save_loginfo' value='1' id='save_loginfo' style='margin-left:10px' />
				<label for="save_loginfo" style='font: italic 13px Arial;color: #fff'>Ghi nhớ đăng nhập</label>
			</form>
			</div>
</div>

<div style='width:1000px;margin: 0 auto 0 auto;'>
	<ul id='menu'>
			    <?php 
            foreach($list_cate as $list_cate_menu)
            {
            ?>
			    <li>
				<a id="<?php echo $list_cate_menu['id_cate']?>" href='<?php echo base_url();?>p_c-<?php echo $list_cate_menu['id_cate']?>-<?php echo mb_strtolower(url_title(removesign($list_cate_menu['name'])))?>'>
			<?php echo $list_cate_menu['name']?></a>
			</li>
    	    <?php } ?>
    	    <li>
				<a  href='/U1/89p_hoi-thao.htm'>
			Hội Thảo		</a>
			</li>
    	    <li>
				<a  href='/U1/50c_tuyen-dung.htm'>
			Tuyển Dụng		</a>
			</li>
    	    <li>
				<a  href='/U1/13c_tin-tuc.htm'>
			Tin Tức		</a>
			</li>
    	</ul>
	<div style='clear:both'></div>
</div>
<div id='hide_content' style="display:none"></div>
<div id='process_loading' style="display:none"></div>
<div id='emailform' style="display:none">
	<div  style="float:right;cursor:pointer;margin:0" onclick="close_form()"><b>[x]</b></div>
	<div id="email_form_content">
		<div class="content">
			<p><embed height="160" loop="true" menu="true" play="true" pluginspage="http://www.macromedia.com/go/getflashplayer" src="https://vinamos.vn/uploads/popup-vinamos.swf" type="application/x-shockwave-flash" width="500"></embed></p>
		</div>
		<div class="formcontent">
		<center>
		<form id="email_form_content_table" name='emailform2' action='' method='post' onsubmit='return checkvaliemail()'>
			<table width="330">
				<tr>
					<td width="100">
						<span style="font-size:12px">Họ và tên:</span>
					</td>
					<td>
						<input type='text'  name='userrealname' id='userrealname' class="textbox" /><span id='userrealname_e' style="color:#f00;font-size:11px"></span>
					</td>
				</tr>
				<tr>
					<td width="100">
						<span style="font-size:12px">Email:</span>
					</td>
					<td>
						<input type='text'  name='useremail' id='useremail' class="textbox" /><span id='email_e' style="color:#f00;font-size:11px"></span>
					</td>
				</tr>
				<tr>
					<td width="100">
						<span style="font-size:12px">Điện thoại:</span>
					</td>
					<td>
						<input type='text'  name='userphone' id='userphone' class="textbox" /><span id='userphone_e' style="color:#f00;font-size:11px"></span>
					</td>
				</tr>
				<tr>
					<td width="100" valign="top">
						<span style="font-size:12px">Mã bảo mật:</span>
					</td>
					<td>
						<div style="float:left">
							<input type='text'  name='sercuritycode' id='sercuritycode'  class="textbox" style="width:50px" />
							<br />
							<a href="#" onclick="$('#se_image').attr('src','/captcha/captcha.php?' + new Date().getTime())">Đổi hình</a>
						</div>
						<span id='sercuritycode_e' style="color:#f00;font-size:11px"></span>
					</td>
				</tr>
			</table>
			<div style="clear:both"></div>
			<input type="submit" name="submit_email" value='   Gửi   '  />
		</form>
		<div id="email_form_content_loading" style="display:none"><br /><br /><br /><center><img src="<?php echo base_url();?>template/ezwebvietnam/home/template/template_1/images/ajax-loader.gif" alt="loading" /></center></div>
		</center>
		</div>
	</div>
</div>
<div id='cart_form' style="display:none">
	<div  style="float:right;cursor:pointer;margin:0" onclick="close_add_to_card_form()"><b>[x]</b></div>
	<div class="form_header">
		Thêm vào giỏ hàng
	</div>
	<div class="formcontent">
		<center>
		<div id='add_to_cart_form_div'>
			<form name='add_to_cart_form' action='' method='post' onsubmit='return add_to_cart()'>
				<table width="330">
					<tr>
						<td width="100">
							<span style="font-size:12px">Số lượng:</span>
						</td>
						<td>
							<input type='text'  name='product_num' id='product_num' class="textbox" onkeyup="cal_price_value();" /><span id='product_num_e' style="color:#f00;font-size:11px"></span>
						</td>
					</tr>
					<tr>
						<td width="100" valign="top">
							<span style="font-size:12px">Thành tiền:</span>
						</td>
						<td>
							<span id="cash"></span><span id="price_u"></span>
						</td>
					</tr>
				</table>
				<div style="clear:both"></div>
				<input type="submit" name="submit_email" value='   Thêm vào giỏ   '  />
			</form>
		</div>
		<div id="add_to_cart_form_result">
			<center>
				<b>
				Sản phẩm bạn vừa đặt đã được đưa vào giỏ hàng.<br />
				Hãy vào giỏ hàng để tiến hành đặt hàng.<br />
				</b>
				Xin chân thành cảm ơn<br /><br />
				<input type="submit" name="submit_email" value='   Vào giỏ hàng   ' onclick="close_add_to_card_form();show_cart();" /> 
				<input type="submit" name="submit_email" value='   Mua tiếp   ' onclick="close_add_to_card_form();" />
			</center>
		</div>
		</center>
	</div>
</div>
<div id='show_cart_form' style="display:none;text-align:left">
	<div  style="float:right;cursor:pointer;margin:0" onclick="close_show_cart_form()"><b>[x]</b></div>
	<div class="form_header">Giỏ hàng <img src="<?php echo base_url();?>template/ezwebvietnam/home/template/template_1/images/d_icon.png" width="30" alt="Xóa" style="cursor:pointer" onclick="if (confirm('Bạn có chăc muốn xóa?')) clear_cart()" /></div>
	<table cellspacing='0' cellpadding='0' width="475" style="float:left">
		<tr>
			<td width="50" align="center">
				Ảnh
			</td>
			<td>
				Tên sản phẩm
			</td>
			<td width="75" align="center">
				Đơn giá <br />VND
			</td>
			<td width="50" align="center">
				Số lượng
			</td>
			<td width="80" align="center">
				Thành tiền <br />VND
			</td>
			<td width="40" align="center">
				Xóa
			</td>
		</tr>
	</table>
	<div class="formcontent" style="height:280px;clear:both;margin-top:25px;overflow:auto;clear:both" onmouseover='$("#show_cart_form").draggable("disable");' onmouseout='$("#show_cart_form").draggable("enable");'>
		<div id="cart_content"></div>
	</div>
	<img src="<?php echo base_url();?>template/ezwebvietnam/home/template/template_1/images/dathang.png" class="add_cart_button" onclick="show_order_form()" style="padding-top:5px" />
</div>


<div id='show_order_form' style="display:none">
	<div  style="float:right;cursor:pointer;margin:0" onclick="close_show_order_form()"><b>[x]</b></div>
	<div class="form_header">
		Đặt hàng
	</div>
	<div style="clear:both;margin-top:25px;display:none" id="o_content_result"><p><span style="color: rgb(51, 51, 51);"><span style="font-size: medium;"><span style="font-family: Arial;">Ch&uacute;c mừng bạn đ&atilde; đăng k&yacute;&nbsp;th&agrave;nh c&ocirc;ng!</span></span></span></p>    <p><span style="color: rgb(51, 51, 51);"><span style="font-size: medium;"><span style="font-family: Arial;">Ch&uacute;ng t&ocirc;i đ&atilde; gửi th&ocirc;ng b&aacute;o&nbsp;về Email của bạn, bạn h&atilde;y kiểm tra Email của m&igrave;nh trong &iacute;t ph&uacute;t nữa.</span></span></span></p></div>
	<div class="formcontent" style="clear:both;margin-top:25px" id="o_content">
		<table cellspacing='2' cellpadding='0' width="480" >
			<tr>
				<td width="100" align="right">
					Họ và tên (*):
				</td>
				<td>
					<input type="text" id="o_realname" name="o_realname" size="30" />
				</td>
			</tr>
			<tr>
				<td width="100" align="right">
					Địa chỉ (*):
				</td>
				<td>
					<input type="text" id="o_address" name="o_address" size="30" />
				</td>
			</tr>
			<tr>
				<td width="100" align="right">
					Điện thoại (*):
				</td>
				<td>
					<input type="text" id="o_phone" name="o_phone" size="30" />
				</td>
			</tr>
			<tr>
				<td width="100" align="right">
					Email (*):
				</td>
				<td>
					<input type="text" id="o_email" name="o_email" size="30" />
				</td>
			</tr>
			<tr>
				<td width="100" align="right">
					Yahoo:
				</td>
				<td>
					<input type="text" id="o_yahoo" name="o_yahoo" size="30" />
				</td>
			</tr>
			<tr>
				<td width="100" align="right" valign="top">
					Mã bảo mật:
				</td>
				<td>
					<div style="float:left">
						<input type='text'  name='o_sercuritycode' id='o_sercuritycode'  style="width:50px" />
						<br />
						<a href="#" onclick="$('#se_image2').attr('src','/captcha/captcha.php?' + new Date().getTime())">Đổi hình</a>
					</div>
					<span id='sercuritycode_e' style="color:#f00;font-size:11px"></span>
				</td>
			</tr>
		</table>
		<center>
		<img src="<?php echo base_url();?>template/ezwebvietnam/home/template/template_1/images/dathang.png" class="add_cart_button" onclick="order_process()" style="padding-top:5px" />
		</center>
	</div>
	<div id="o_email_form_content_loading" style="display:none"><br /><br /><br /><center><img src="<?php echo base_url();?>template/ezwebvietnam/home/template/template_1/images/ajax-loader.gif" alt="loading" /></center></div>
</div>

<script type='text/javascript'>
	$(document).ready(function() {
		$("#hide_content").css("width",screen.width + 'px');
		$("#hide_content").css("height",screen.height + 'px');
		$("#emailform").css("left",((screen.width/2)-250) + 'px');
		$("#cart_form").css("left",((screen.width/2)-250) + 'px');
		$("#show_cart_form").css("left",((screen.width/2)-250) + 'px');
		$("#show_order_form").css("left",((screen.width/2)-250) + 'px');
		var checkform_email=getCookie('closeform');
		
if(checkform_email!="true"){
			$("#emailform").css("display","");
			$("#hide_content").css("display","");
			$("#emailform").draggable();
		}
		count_product_quantity();
		$("#product_num").keydown(function(event) {
			// Allow: backspace, delete, tab, escape, and enter
			if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
				 // Allow: Ctrl+A
				(event.keyCode == 65 && event.ctrlKey === true) || 
				 // Allow: home, end, left, right
				(event.keyCode >= 35 && event.keyCode <= 39)) {
					 // let it happen, don't do anything
					return;
			}else{
				// Ensure that it is a number and stop the keypress
				if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
					event.preventDefault(); 
				}   
			}
		});
	});
</script>
<div id="body_bg">
	<div id='main_body_content2'>
		<!--Widget-->
					<!--/Widget-->
		<div style="background:#fff;margin:0;padding:10px 10px 10px 0">
	<div style="moz-border-radius: 5px;-webkit-border-radius: 5px;background: #def3ff;padding: 10px;">
			<div style="clear:both">
	<div style="float:left;background:url(<?php echo base_url();?>template/ezwebvietnam/home/uploads/tivi.png) top left no-repeat;width:603px;height:401px;padding:36px 36px 36px 38px">
    <?php 
    foreach($clip_top as $cl_top)
    {
    ?>
    <iframe allowfullscreen="" frameborder="0" height="338" name="video" src="//www.youtube.com/embed/<?php echo $cl_top['code']?>" width="600"></iframe>
    <?php } ?>
    </div>    
    <div style="float:right;width:258px;">  
    <?php 
    foreach($list_clip_right as $l_c_r)
    {
    ?>
    <div style="border:1px solid #00436f;padding:10px;margin:5px;font-size:12px;color:#fff;background:#fff">  <table>  	  		
    <tr>  			
    <td width="88">
    <img alt="" height="50" src="<?php echo base_url();?>file/uploads/no_image.gif" style="border: 4px solid rgb(0, 113, 187);" width="80" /></td>  			
    <td width="200"><a href="//www.youtube.com/embed/<?php echo $l_c_r['code']?>" target="video"><b><?php echo $l_c_r['title']?></b></a></td>  		</tr>  	  </table>  </div> 
    <?php } ?>   
    <div style="clear:both">&nbsp;</div>  
</div>		</div>
	
</div>

	<div style='clear:both'></div>
	<div style="background:#fff;margin:0;padding:10px 10px 10px 0">
<style>
.infiniteCarousel {
  width: 960px;
  position: relative;
  height: 185px;
  background:url(<?php echo base_url();?>template/ezwebvietnam/home/template/template_1/images/product_special_bg.png) center center no-repeat;
}

.infiniteCarousel .wrapper {
  width: 880px; /* .infiniteCarousel width - (.wrapper margin-left + .wrapper margin-right) */
  overflow: auto;
  height: 220px;
  margin: 0 40px;
  position: absolute;
  top: 0;
}

.infiniteCarousel ul a img {
  border: 5px solid #0e7aff;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
}

.infiniteCarousel .wrapper ul {
  width: 1px; /* single item * n */
  list-style-image:none;
  list-style-position:outside;
  list-style-type:none;
  margin:0;
  padding:0;
  position: absolute;
  top: 0;
}

.infiniteCarousel ul li {
  display:block;
  float:left;
  margin: 0px;
  height: 220px;
  width: 220px;
}

.infiniteCarousel ul li img {
    -webkit-transition: border-color 400ms;
}

.infiniteCarousel ul:hover li img {
  border-color: #000;
}

.infiniteCarousel ul:hover li:hover img {
  border-color: #333;
}

.infiniteCarousel ul li a img {
  display:block;
}

.infiniteCarousel .arrow {
  display: block;
  height: 36px;
  width: 37px;
  background: url(<?php echo base_url();?>template/ezwebvietnam/home/template/template_1/images/product_special_arrow.png) no-repeat 0 0;
  text-indent: -999px;
  position: absolute;
  top: 74px;
  cursor: pointer;
  outline: 0;
}

.infiniteCarousel .forward {
  background-position: 0 0;
  right: 0;
}

.infiniteCarousel .back {
  background-position: 0 -72px;
  left: 0;
}

.infiniteCarousel .forward:hover {
  background-position: 0 -36px;
}

.infiniteCarousel .back:hover {
  background-position: 0 -108px;
}
</style>
<div class="product_special">
	<div class="header"><i>ĐẶT BIỆT</i></div>
		 <div class="infiniteCarousel">
		  <div class="wrapper">
			<ul>
            <?php 
            foreach($list_product as $l_p)
            {
            ?>
							<li>
					<a href="<?php echo base_url()?>p_c-<?php echo $l_p['id_cate'] ?>-<?php echo mb_strtolower(url_title(removesign($l_p['name']))) ?>/p_p-<?php echo $l_p['id_product'] ?>-<?php echo mb_strtolower(url_title(removesign($l_p['title']))) ?>">
                    <?php 
                    if(file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/product/'.$l_p['img']) && is_file($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/product/'.$l_p['img']) && $l_p['img']!='')
                    {
                    ?>
						<img src="<?php echo base_url();?>file/uploads/product/<?php echo $l_p['img']?>" width="180" alt="<?php echo $l_p['title']?>" />
                        <?php } else { ?>
                        <img src="<?php echo base_url();?>file/uploads/no_image.gif" width="180" alt="<?php echo $l_p['title']?>" />
                        <?php } ?>
					</a>
				</li>
			<?php } ?>				
						</ul>        
		  </div>
		</div>
	
</div>

<script type="text/javascript" charset="utf-8">

(function () {
    $.fn.infiniteCarousel = function () {
        function repeat(str, n) {
            return new Array( n + 1 ).join(str);
        }
        
        return this.each(function () {
            // magic!
            var $wrapper = $('> div', this).css('overflow', 'hidden'),
                $slider = $wrapper.find('> ul').width(9999),
                $items = $slider.find('> li'),
                $single = $items.filter(':first')
                
                singleWidth = $single.outerWidth(),
                visible = Math.ceil($wrapper.innerWidth() / singleWidth),
                currentPage = 1,
                pages = Math.ceil($items.length / visible);
                
            /* TASKS */
            
            // 1. pad the pages with empty element if required
            if ($items.length % visible != 0) {
                // pad
                $slider.append(repeat('<li class="empty" />', visible - ($items.length % visible)));
                $items = $slider.find('> li');
            }
            
            // 2. create the carousel padding on left and right (cloned)
            $items.filter(':first').before($items.slice(-visible).clone().addClass('cloned'));
            $items.filter(':last').after($items.slice(0, visible).clone().addClass('cloned'));
            $items = $slider.find('> li');
            
            // 3. reset scroll
            $wrapper.scrollLeft(singleWidth * visible);
            
            // 4. paging function
            function gotoPage(page) {
                var dir = page < currentPage ? -1 : 1,
                    n = Math.abs(currentPage - page),
                    left = singleWidth * dir * visible * n;
                
                $wrapper.filter(':not(:animated)').animate({
                    scrollLeft : '+=' + left
                }, 500, function () {
                    // if page == last page - then reset position
                    if (page > pages) {
                        $wrapper.scrollLeft(singleWidth * visible);
                        page = 1;
                    } else if (page == 0) {
                        page = pages;
                        $wrapper.scrollLeft(singleWidth * visible * pages);
                    }
                    
                    currentPage = page;
                });
            }
            
            // 5. insert the back and forward link
            $wrapper.after('<a href="#" class="arrow back"></a><a href="#" class="arrow forward"></a>');
            
            // 6. bind the back and forward links
            $('a.back', this).click(function () {
                gotoPage(currentPage - 1);
                return false;
            });
            
            $('a.forward', this).click(function () {
                gotoPage(currentPage + 1);
                return false;
            });
            
            $(this).bind('goto', function (event, page) {
                gotoPage(page);
            });
            
            // THIS IS NEW CODE FOR THE AUTOMATIC INFINITE CAROUSEL
            $(this).bind('next', function () {
                gotoPage(currentPage + 1);
            });
        });
    };
})(jQuery);

$(document).ready(function () {
    // THIS IS NEW CODE FOR THE AUTOMATIC INFINITE CAROUSEL
    var autoscrolling = true;
    
    $('.infiniteCarousel').infiniteCarousel().mouseover(function () {
        autoscrolling = false;
    }).mouseout(function () {
        autoscrolling = true;
    });
    
    setInterval(function () {
        if (autoscrolling) {
            $('.infiniteCarousel').trigger('next');
        }
    }, 2000);
});


</script>
<div style="clear:both;height:50px"></div>
</div>	<!--Widget-->
					<!--/Widget-->
	</div>
	<div id="footer">
<div style="height:30px;padding:7px 10px 0 10px;color:#fff;margin:0 0 10px 0">
	<div style="float:left">
		<a href="/U1"><font color="#ffffff">Trang chủ</font></a> 
								</div>
</div>
<p style="text-align: center;"><span style="color:#FFF0F5;"><span style="font-size: small; font-family: Arial; line-height: 1.6em;">&nbsp; &nbsp;&nbsp;</span><span style="font-family: Arial; line-height: 1.6em; font-size: 16px;"><strong>&nbsp;C&Ocirc;NG TY TƯ VẤN Đ&Agrave;O TẠO TIẾP THỊ TRỰC TUYẾN VINA (VINA M.O.S)</strong></span></span></p>    <p style="text-align: center;"><span style="color:#FFF0F5;"><strong><span style="font-size:16px;"><span style="font-family: Arial;"><span style="line-height: 20px;">D66 Đường số 6 - Khu D&acirc;n Cư Him Lam&nbsp;</span>&nbsp;- Q.7&nbsp;- TP.HCM&nbsp;</span></span></strong></span></p>    <p style="text-align: center;"><span style="color:#FFF0F5;"><strong><span style="font-size:16px;"><span style="font-family: Arial;">Hotline: 0909.140.539</span></span></strong></span></p>
<br />
Developed by <a href="http://smartsoftware.vn" target="_blank">SmartSoftware</a>
</div>

<!-- End Piwik Code --></div>
</body>
</html>