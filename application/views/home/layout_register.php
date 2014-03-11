
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
</div><!--end #-->
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
  <li><a href="http://gamebank.vn/"><div class="menu" style="width: 100px">Trang Chủ</div></a></li>

    <li><a href="http://pay.gamebank.vn/"><div class="menu" style="width: 100px">Nạp tiền</div></a>
      <ul class='MenuDropDown'>
          <li><a href="<?php echo base_url();?>thanh-vien/card">&nbsp;Nạp tiền</a></li>
        <li><a href="#">&nbsp;Chuyển tiền</a></li>
      </ul>
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
                <div class="block">
  <div class="breadcumb">
    <a href="http://id.gamebank.vn">Gamebank id</a> &gt; <span>Đăng ký</span>
  </div>
  <div class="title-block">
    <div class="title-block-left"><h2>Đăng ký tài khoản</h2></div>
    <div class="title-block-right">&nbsp;</div>
    <div class="clear"></div>
  </div>
  <div class="body-block" id="body-block">
  <form id="frmRegister" name="frmRegister" method="post">
  <?php 
  //Create Form
      $username = array(
        'name'    => 'username',
        'id'    => 'username',
        'value' => set_value('username'),
        'maxlength'    => $this->config->item('username_max_length', 'tank_auth'),
        'size'    => 30,
        'required'=>'',
        'pattern'=>"[a-zA-Z0-9\_\.]{6,24}",
        'oninput'=>"check_valid_input(this,'showname')",
        "oninvalid"=>"check_valid_input(this,'showname')",
        "title"=>"Tên đăng nhập sử dụng chữ cái, chữ số, gạch dưới và dấu chấm. Chiều dài từ 6-24 ký tự.",
        "class"=>"txt-input txt_260 txtfiealdregister",
        "id"=>"sUserName"
    );
    $displayname = array(
    'name'    => 'displayname',
    'id'    => 'displayname',
    'value'    => set_value('displayname'),
    'maxlength'    => 80,
    'size'    => 30,
    'required'=>'',
    'pattern'=>"[a-zA-Z0-9\_\.]{6,24}",
    'oninput'=>"check_valid_input(this,'showname')",
    "oninvalid"=>"check_valid_input(this,'showname')",
    "title"=>"Tên hiển thị sử dụng chữ cái, chữ số, gạch dưới và dấu chấm. Chiều dài từ 6-24 ký tự.",
     "class"=>"txt-input txt_260 txtfiealdregister",
     "id"=>"sShowName");
     $password = array(
    'name'    => 'sPassWord1',
    'type'=>'password',
    'id'    => 'sPassWord1',
    'value' => set_value('sPassWord1'),
    'maxlength'    => $this->config->item('password_max_length', 'tank_auth'),
    'size'    => 30,
    'required'=>'',
    'pattern'=>"[a-zA-Z0-9\_\.]{6,24}",
    'oninput'=>"check_valid_input(this,'pass1')",
    "oninvalid"=>"check_valid_input(this,'pass1')",
     "class"=>"txt-input txt_260 txtfiealdregister",
    );
    $confirm_password = array(
        'name'    => 'sConfirm_PassWord1',
        'type'=>'password',
        'value' => set_value('sConfirm_PassWord1'),
        'maxlength'    => $this->config->item('password_max_length', 'tank_auth'),
        'size'    => 30,
        'required'=>'',
        'pattern'=>"[a-zA-Z0-9\_\.]{6,24}",
        'oninput'=>"check_valid_input(this,'re_pass1')",
        "oninvalid"=>"check_valid_input(this,'re_pass1')",
         "class"=>"txt-input txt_260 txtfiealdregister",
         "id"=>"sConfirm_PassWord1"
    );
    $email = array(
    'name'    => 'sEmail',
    'id'    => 'sEmail',
    'value'    => set_value('sEmail'),
    'maxlength'    => 80,
    'size'    => 30,
    'required'=>'',
    'oninput'=>"check_valid_input(this,'email')",
    "oninvalid"=>"check_valid_input(this,'email')",
     "class"=>"txt-input txt_260 txtfiealdregister",
     "id"=>"sEmail");
  ?>
    <p style="font-size: 16px; margin: 5px 0px 0px 20px;">Chào Bạn! Chỉ cần vài bước đơn giản là bạn sẽ có ngay một tài khoản Gamebank.</p>
    <div class="note_label" style="margin: 10px 0px 0px 20px;">(<span class="note_text">*</span>) Thông tin bắt buộc nhập</div>
    <div class="message"></div>
    <div class="title-body-block-left"><h3>Thông tin tài khoản</h3></div>
    <div class="title-body-block-right">&nbsp;</div>
    <div class="clear"></div>
    <div class="div-pro">
      <div class="label-pro" style='color: #199914;'>Tài khoản đăng nhập <span class="note_text">*</span></div>
      <div class="content-pro">
        <?php echo form_input($username); ?>
      </div>
      <div class="field-error" id="username-error"></div>
      <div class="field-success" id="username-success"></div>
      <div class="field-error" id="username_error"></div>
      <div class="clear"></div>
    </div>
    <div class='note' id='note_username'>
      <img src="<?php echo base_url();?>template/ezwebvietnam/home/libs/images/bg_arrow.gif" />
      - <strong>Tài khoản đăng nhập</strong> này bạn có thể sử dụng cho tất cả các sản phẩm của Gamebank.<br />
      - Bạn có thể sử dụng chữ cái, chữ số, gạch dưới và dấu chấm. Chiều dài từ 6-24 ký tự.<br />
      <span><strong>Lưu ý:</strong> Tài khoản đăng nhập không được trùng với tên hiển thị.</span>
    </div>
    <div class="div-pro">
      <div class="label-pro">Tên hiển thị <span class="note_text">*</span></div>
      <div class="content-pro">
       <?php echo form_input($displayname); ?> 
      </div>
      <div class="field-error" id="showname-error"></div>
      <div class="field-success" id="showname-success"></div>
      <div class="clear"></div>
    </div>
    <div class='note' id='note_showname'>
      <img src="<?php echo base_url();?>template/ezwebvietnam/home/libs/images/bg_arrow.gif" />
      - <strong>Tên hiển thị</strong> này bạn sử dụng để bảo mật tài khoản của bạn tại Gamebank.<br />
      - Bạn có thể sử dụng chữ cái, chữ số, gạch dưới và dấu chấm. Chiều dài từ 6-24 ký tự.<br />
      <span><strong>Lưu ý:</strong> Tên hiển thị và tên đăng nhập là khác nhau.</span>
    </div>
    <div class="div-pro">
      <div class="label-pro">Mật khẩu cấp 1 <span class="note_text">*</span></div>
      <div class="content-pro">
        <?php echo form_input($password); ?>
      </div>
      <div class="stronglevel">
        <div class="text_pass">&nbsp;Mức độ bảo mật</div>
        <div class="meter" id="meta1"></div>
        <div class="meter" id="meta2"></div>
        <div class="meter" id="meta3"></div>
        <div class="meter" id="meta4"></div>
      </div>
      <div class="clear"></div>
    </div>
    <div class='note' id='note_pass1'>
      <img src="<?php echo base_url();?>template/ezwebvietnam/home/libs/images/bg_arrow.gif" />
      - Để mật khẩu an toàn hơn, bạn nên sử dụng: chữ cái, số, hoa và thường lẫn lộn, ký tự đặc biệt (*,%,...).<br />
      - Không gõ tiếng việt có dấu. Phải từ 6-32 ký tự và không được trùng với mật khẩu cấp 2.
    </div>
    <div class="div-pro">
      <div class="label-pro">Xác nhận mật khẩu cấp 1 <span class="note_text">*</span></div>
      <div class="content-pro">
        <?php echo form_input($confirm_password); ?>
      </div>
      <div class="clear"></div>
    </div>
        <div class="title-body-block-left"><h3>Thông tin bảo mật</h3></div>
    <div class="title-body-block-right">&nbsp;</div>
    <div class="clear"></div>
    <div class="div-pro">
      <div class="label-pro">Email <span class="note_text">*</span></div>
      <div class="content-pro">
        <?php echo form_input($email); ?> 
      </div>
      <div class="field-error" id="email-error"></div>
      <div class="field-success" id="email-success"></div>
      <div class="clear"></div>
    </div>
    <div class='note' id='note_email'>
      <img src="<?php echo base_url();?>template/ezwebvietnam/home/libs/images/bg_arrow.gif" />
      - Chúng tôi sẽ gửi thư tới địa chỉ email này trong trường hợp bạn quên mật khẩu. <br />
      - <strong>Email</strong> phải chưa từng đăng ký với Gamebank.
    </div>
    <div class="div-pro">
      <div class="label-pro">Ngày/Tháng/Năm Sinh <span class="note_text">*</span></div>
      <div class="content-pro">
        <select style='width:80px;'  onselect="check_valid_input(this,'date');" oninvalid="check_valid_input(this,'date');" class="select-input txtfiealdregister" name="dName" id="dName">
          <option value="">[-Ngày-]</option>
                      <option value="1" >1 </option>
                      <option value="2" >2 </option>
                      <option value="3" >3 </option>
                      <option value="4" >4 </option>
                      <option value="5" >5 </option>
                      <option value="6" >6 </option>
                      <option value="7" >7 </option>
                      <option value="8" >8 </option>
                      <option value="9" >9 </option>
                      <option value="10" >10 </option>
                      <option value="11" >11 </option>
                      <option value="12" >12 </option>
                      <option value="13" >13 </option>
                      <option value="14" >14 </option>
                      <option value="15" >15 </option>
                      <option value="16" >16 </option>
                      <option value="17" >17 </option>
                      <option value="18" >18 </option>
                      <option value="19" >19 </option>
                      <option value="20" >20 </option>
                      <option value="21" >21 </option>
                      <option value="22" >22 </option>
                      <option value="23" >23 </option>
                      <option value="24" >24 </option>
                      <option value="25" >25 </option>
                      <option value="26" >26 </option>
                      <option value="27" >27 </option>
                      <option value="28" >28 </option>
                      <option value="29" >29 </option>
                      <option value="30" >30 </option>
                      <option value="31" >31 </option>
                 </select>

        <select style='width:80px;'  onselect="check_valid_input(this,'month');" oninvalid="check_valid_input(this,'month');" class="select-input select_100 txtfiealdregister" id="mName" name="mName">
          <option value="">[-Tháng-]</option>
                      <option value="1" >Tháng 1</option>
                      <option value="2" >Tháng 2</option>
                      <option value="3" >Tháng 3</option>
                      <option value="4" >Tháng 4</option>
                      <option value="5" >Tháng 5</option>
                      <option value="6" >Tháng 6</option>
                      <option value="7" >Tháng 7</option>
                      <option value="8" >Tháng 8</option>
                      <option value="9" >Tháng 9</option>
                      <option value="10" >Tháng 10</option>
                      <option value="11" >Tháng 11</option>
                      <option value="12" >Tháng 12</option>
                  </select>

        <select style='width:80px;'  onselect="check_valid_input(this,'year');" oninvalid="check_valid_input(this,'year');" class="select-input txtfiealdregister" name="yName" id="yName">
          <option value="">[-Năm-]</option>
                      <option value="2014" >2014</option>
                      <option value="2013" >2013</option>
                      <option value="2012" >2012</option>
                      <option value="2011" >2011</option>
                      <option value="2010" >2010</option>
                      <option value="2009" >2009</option>
                      <option value="2008" >2008</option>
                      <option value="2007" >2007</option>
                      <option value="2006" >2006</option>
                      <option value="2005" >2005</option>
                      <option value="2004" >2004</option>
                      <option value="2003" >2003</option>
                      <option value="2002" >2002</option>
                      <option value="2001" >2001</option>
                      <option value="2000" >2000</option>
                      <option value="1999" >1999</option>
                      <option value="1998" >1998</option>
                      <option value="1997" >1997</option>
                      <option value="1996" >1996</option>
                      <option value="1995" >1995</option>
                      <option value="1994" >1994</option>
                      <option value="1993" >1993</option>
                      <option value="1992" >1992</option>
                      <option value="1991" >1991</option>
                      <option value="1990" >1990</option>
                      <option value="1989" >1989</option>
                      <option value="1988" >1988</option>
                      <option value="1987" >1987</option>
                      <option value="1986" >1986</option>
                      <option value="1985" >1985</option>
                      <option value="1984" >1984</option>
                      <option value="1983" >1983</option>
                      <option value="1982" >1982</option>
                      <option value="1981" >1981</option>
                      <option value="1980" >1980</option>
                      <option value="1979" >1979</option>
                      <option value="1978" >1978</option>
                      <option value="1977" >1977</option>
                      <option value="1976" >1976</option>
                      <option value="1975" >1975</option>
                      <option value="1974" >1974</option>
                      <option value="1973" >1973</option>
                      <option value="1972" >1972</option>
                      <option value="1971" >1971</option>
                      <option value="1970" >1970</option>
                      <option value="1969" >1969</option>
                      <option value="1968" >1968</option>
                      <option value="1967" >1967</option>
                      <option value="1966" >1966</option>
                      <option value="1965" >1965</option>
                      <option value="1964" >1964</option>
                      <option value="1963" >1963</option>
                      <option value="1962" >1962</option>
                      <option value="1961" >1961</option>
                      <option value="1960" >1960</option>
                      <option value="1959" >1959</option>
                      <option value="1958" >1958</option>
                      <option value="1957" >1957</option>
                      <option value="1956" >1956</option>
                      <option value="1955" >1955</option>
                      <option value="1954" >1954</option>
                      <option value="1953" >1953</option>
                      <option value="1952" >1952</option>
                      <option value="1951" >1951</option>
                      <option value="1950" >1950</option>
                      <option value="1949" >1949</option>
                      <option value="1948" >1948</option>
                      <option value="1947" >1947</option>
                      <option value="1946" >1946</option>
                      <option value="1945" >1945</option>
                      <option value="1944" >1944</option>
                      <option value="1943" >1943</option>
                      <option value="1942" >1942</option>
                      <option value="1941" >1941</option>
                      <option value="1940" >1940</option>
                      <option value="1939" >1939</option>
                      <option value="1938" >1938</option>
                      <option value="1937" >1937</option>
                      <option value="1936" >1936</option>
                      <option value="1935" >1935</option>
                      <option value="1934" >1934</option>
                      <option value="1933" >1933</option>
                      <option value="1932" >1932</option>
                      <option value="1931" >1931</option>
                      <option value="1930" >1930</option>
                      <option value="1929" >1929</option>
                      <option value="1928" >1928</option>
                      <option value="1927" >1927</option>
                      <option value="1926" >1926</option>
                      <option value="1925" >1925</option>
                      <option value="1924" >1924</option>
                      <option value="1923" >1923</option>
                      <option value="1922" >1922</option>
                      <option value="1921" >1921</option>
                      <option value="1920" >1920</option>
                      <option value="1919" >1919</option>
                      <option value="1918" >1918</option>
                      <option value="1917" >1917</option>
                      <option value="1916" >1916</option>
                      <option value="1915" >1915</option>
                 </select>
      </div>
      <div class="clear"></div>
    </div>
    <div class="title-body-block-left"><h3>Thông tin chứng thực</h3></div>
    <div class="title-body-block-right">&nbsp;</div>
    <div class="clear"></div>
   
    <div class='note' id='note_phone'>
      <img src="<?php echo base_url();?>template/ezwebvietnam/home/libs/images/bg_arrow.gif" />
      - Chỉ nhập số <b>Di động</b> để nhận SMS.<br />
      - Số này cần phải chưa đăng ký với Gamebank. <br />
      - Chúng tôi sẽ gửi thông tin xác thực tới số điện thoại này.
    </div>
    <div class="div-pro">
      <div class="label-pro">Mã kiểm tra </div>
      <div class="content-pro">
        <img id="siimage" class="captcha-img" src="http://id.gamebank.vn/libs/securimage/securimage_show.php" alt="CAPTCHA Image" align="left">
        <a style="border-style: none;" href="#" title="Refresh Image" onclick="document.getElementById('siimage').src = 'http://id.gamebank.vn/libs/securimage/securimage_show.php?sid=' + Math.random(); this.blur(); return false"><img src="http://id.gamebank.vn/libs/securimage/images/refresh.png" alt="Reload Image" align="bottom" border="0"></a><br />
      </div>
      <div class="clear"></div>
    </div>
    <div class="div-pro">
      <div class="label-pro">Nhập mã kiểm tra <span class="note_text">*</span></div>
      <div class="content-pro">
        <input required oninput="check_valid_input(this,'VerifyCode');" oninvalid="check_valid_input(this,'VerifyCode');" class="txt-input txt_260" id="sVerifyCode"  maxlength="6" name="sVerifyCode">
      </div>
      <div class="clear"></div>
    </div>
    <div class='note' id='note_captcha'>
      <img src="<?php echo base_url();?>template/ezwebvietnam/home/libs/images/bg_arrow.gif" />
      Khi nhập vào mã này, bạn sẽ giúp Gamebank ngăn chặn những đăng ký giả mạo.
    </div>
    <div style="text-align: center; margin: 15px 0px 30px 0px;">
      <input type="checkbox" name="app_policy" required oninput="check_valid_input(this,'policy');" oninvalid="check_valid_input(this,'policy');" />
      <strong>
        Tôi đã đọc và đồng ý với <span style="color: #FF0000;"><a target="_blank" href="http://id.gamebank.vn/policy" style="color: #ee0000;">Thỏa thuận sử dụng Gamebank.</a>span>
      </strong>
    </div>
    <div style="display: none;">
      <input type='text' name="code_security" id="code_security" value="" />
    </div>
    <div class="div-pro">
      <div class="label-pro">&nbsp;</div>
      <div class="content-pro">
        <input value="Đăng ký" name="btnReg" class="submit-input"  type="submit">
        <input class="submit-input" value="Hủy Bỏ" onclick="window.location='http://id.gamebank.vn'"  type="button">
      </div>
      <div class="clear"></div>
    </div>
    </form>
  </div>
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
</div><!--end #left-footer-->

</div>

</body>
</html>
