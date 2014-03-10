// JavaScript Document

$(document).ready(function(){
	
	//$('#loginform').removeNode(true);
	
	$('div.menu').hover(function(){
		$(this).css('background-image','url(../template/ezwebvietnam/home/images/bgmenu_og.png)');},
	function(){
		$(this).css('background-image','');}
	);
	
	$('div.submenu').hover(function(){
		$(this).css('background-color','#3968D7');},
	function(){
		$(this).css('background-color','');}
	);
	
	$('div.submenu').hover(function(){
		$(this).css('color','#FFF');},
	function(){
		$(this).css('color','#3968D7');}
	);
	
	$("input[type='password'], input[type='text'], textarea").each(function(){
		$(this).one('focus',function(){
			$(this).val("");
		});
	});


	 $("#BankSelect").change(function() {
          var bankid = $("#BankSelect option:selected").val();
		  if(bankid!=0){
          $("#BankSelect option:selected").each(function () {
			  	//alert("dcvm");
                loadBank(bankid);
              });
		  }
      })
      .trigger('change');

});

function LoginGamebank(){
u=$('#username').val();
p=$('#password').val();
s="pay";
loginLoad(u,p,s);
}

function loginLoad(u,p,s)
{
	//url=url.replace('#page','');
	p = calcMD5(p);
	
	$('#Loginloading').css('visibility','visible');

	$.ajax({
		type: "POST",
		url: "ajaxload/loginprocess.php",
		data: 'username='+u+'&password='+p+'&s='+s,
		dataType: "html",
		success: function(msg){
			//alert(parseInt(msg));
			n = parseInt(msg);
			if(n>=1&&n<=10)
			{
				//$('#pageContent').removeData();
				$('#pageContent').removeData();
				$('#pageContent').html("Sai Username hoặc mật khẩu ! "+n);
				$('#pageContent').css('color','red');
				$('#Loginloading').css('visibility','hidden');
			} else if(parseInt(msg)==12){
				$('#pageContent').removeData();		
				$('#pageContent').html("Chưa nhập Username hoặc mật khẩu !");
				$('#pageContent').css('color','red');
				$('#Loginloading').css('visibility','hidden');
			} else if(parseInt(msg)==11){
				$('#pageContent').removeData();		
				$('#pageContent').html("Đăng nhập sai 5 lần liên tiếp !");
				$('#pageContent').css('color','red');
				$('#Loginloading').css('visibility','hidden');
			} else if(parseInt(msg)==13){
				$('#pageContent').removeData();		
				$('#pageContent').html("Tài khoản đang bị khoá !");
				$('#pageContent').css('color','red');
				$('#Loginloading').css('visibility','hidden');
			} else {
				$('#loginContainer').html(msg).fadeIn(50);
				$('#Loginloading').css('visibility','hidden');
			}

		}
		
	});

}

function loadBank(bankid)
{
	$('#bankloading').css('visibility','visible');
	$.ajax({
		type: "POST",
		url: "ajaxload/loadbank.php",
		data: 'bankid='+bankid,
		dataType: "html",
		success: function(msg){
			//alert(parseInt(msg));
			n = parseInt(msg)
			if(n!=0)
			{
				$('div#AccGamebankBank').removeData();
				$('div#AccGamebankBank').html(msg);
				$('#bankloading').css('visibility','hidden');
			}
		}
		
	});
}

function ConvertNumeric(me)
    {
        txt= me.firstChild;
        var arr=new Array();
        var strPass = txt.value;

        var strLength = strPass.length;
        var Achar = strPass.charAt((strLength) - 1); 
        var cCode = CalcKeyCode(Achar);
        if (cCode < 48 || cCode > 57 ) 
        {
        var myNumber = txt.value.substring(0, (strLength) - 1);
        txt.value = myNumber; 
        return;
        } 
                
        arr=strPass.split("."); 
        var numeric='';
        for(var i=0;i<arr.length;i++)
        {
        numeric+=arr[i];
        }      

        txt.value=numberFormat(numeric) ; 
        }
        function CalcKeyCode(aChar) 
        {
        var character = aChar.substring(0,1);
        var code = aChar.charCodeAt(0);
        return code;
        }

        function numberFormat(nStr)
        {
        nStr += '';
        x = nStr.split(',');
        x1 = x[0];
        x2 = x.length > 1 ? ',' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1))
        x1 = x1.replace(rgx, '$1' + '.' + '$2');
        return x1 + x2;
}

function handleTimer() {
  if(count <= 0) {
    clearInterval(timer);
	$('#count_num').html(count);
	$('#waiting').remove();
    endCountdown();
  } else {
    $('#count_num').html(count);
    count--;
  }
}

function Comma(number) {
	number = '' + number;
	if (number.length > 3) 
	{
		var mod = number.length % 3;
		var output = (mod > 0 ? (number.substring(0,mod)) : '');
		for (i=0 ; i < Math.floor(number.length / 3); i++) 
		{
			if ((mod == 0) && (i == 0))
				output += number.substring(mod+ 3 * i, mod + 3 * i + 3);
			else
				output+= '.' + number.substring(mod + 3 * i, mod + 3 * i + 3);
		}
		
		return (output);
	}
	else return number;
}