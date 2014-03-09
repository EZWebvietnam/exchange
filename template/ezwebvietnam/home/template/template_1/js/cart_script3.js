
function LoadPagging(pi, ps, url, total_page,urlext) {
    
    var sep = '/';
    if (url.indexOf('?') > 0) {
        sep = '&pi=';
        if (url.indexOf(sep) > 0) {
            url = url.substring(0, url.indexOf(sep));
        }
    }

    var content = '';
    
    var offset = 10;
    
    var offhalf = 5;
    var pos = pi - 1; // position in array

    if (ps <= 1 || pi < 1 || pi > ps) {
        return false;
    }
    // array

    // ps > 1
    // previous
    if(total_page!=1)
    {
    if (pi == 1) {
        content += '<li><a href="javascript:void(0)" style="cursor:default;">&laquo;</a></li>';
    } else {
        if (pi == 2) {
            content += '<li class="back"><a rel="prev" href="' + url + '">&laquo;</a></li>';
        } else {
            
            content += '<li class="back"><a rel="prev" href="' + url + sep+'page/'+ (pi - 1) + '">&laquo;</a></li>';
        }
    }

    // Length Pagging
    var from = 1;
    var to = offset;

    if (ps <= offset) {
        to = ps;
    } else if (ps > offset) {
        
        var left = pi - offhalf;
        if(left<0)
        {
            left=1;
        }
        var right = pi + offhalf;
        if(right>=total_page)
        {
            
            right=total_page;
        }
       
        if (left < 1) {
            from = 1;
            to = total_page;
            
        } else if (right > ps) {
            to = ps;
            from = ps - offset + 1;
        } else {
            from = left;
            to = right;
            
        }
    }
   
    for (var i = from; i <= to; i++) {
        var activeLi = '';
        var active = '';
        if (pi == i) {
            content += '<li class="actived"><a href="javascript:void(0)" >' + i + '</a></li>';
        } else {
            var rel = ' rel="next" ';
            if (i < pi) {
                rel = ' rel="prev" ';
            }
            if (i == 1) {
               
                content += '<li><a href="' + url + '" ' + active + ' ' + rel + '>' + i + '</a></li>';
            } else {
                 
                content += '<li><a href="' + url + sep +'page/'+ i + '" ' + active + ' ' + rel + '>' + i + '</a></li>';
            }
        }
    }

    // Next
    if (pi == total_page) {
        content += '<li><a rel="next" href="javascript:void(0)" style="cursor:default;">&raquo;</a></li>';
    } else {
        content += '<li class="forward"><a rel="next" href="' + url + sep +'page/'+(pi + 1) + '">&raquo;</a></li>';
    }
    }
    return content;
}

function order_process(app_main_url){
	
	 if( $("#o_realname").val() == ""){
		alert("Vui lòng nhập họ tên!");
		$("#o_realname").focus();
	}else if( $("#o_address").val() == ""){
		alert("Vui lòng nhập địa chỉ!");
		$("#o_address").focus();
	}else if( $("#o_phone").val() == ""){
		alert("Vui lòng nhập điện thoại!");
		$("#o_phone").focus();
	}else if( $("#o_email").val() == ""){
		alert("Vui lòng nhập email!");
		$("#o_email").focus();
	} else {
		try{
			$("#o_content").css("display","none");
			$("#o_email_form_content_loading").css("display","");
			$.ajax({
				url: app_main_url + 'home/product/check_out',
				type: 'POST',
				dataType: "html",
				data: {
				
					userurl : my_url,
					realname : $("#o_realname").val(),
					address : $("#o_address").val(),
					phone : $("#o_phone").val(),
					email : $("#o_email").val(),
					yahoo : $("#o_yahoo").val(),
					sercuritycode : $("#o_sercuritycode").val(),
				},
				success: function (response){
					$("#o_email_form_content_loading").css("display","none");
					if(response=="data"){
						$("#o_content").css("display","");
						alert("Vui lòng nhập đầy đủ thông tin!");
					}else if(response=="product"){
						$("#o_content").css("display","");
						alert("Vui lòng chọn sản phẩm trước!");
					}else{
						$("#o_content_result").css("display","");
						
					}
                    delete_cart(app_main_url);
				},
				error: function(XMLHttpRequest, textStatus, exception) { alert("Ajax failure\n"); },
				async: true
			});
		}catch(e){
			alert(e)
		}
	}
    
}
function set_url(){
	//luu UL moi vao
	setCookie("userurl",my_curent_page);
}
function show_order_form(){
	// show form dat hang
	$("#hide_content").css("display","");
	$("#show_cart_form").css("display","none");
	$("#show_order_form").css("display","");
	$("#show_order_form").draggable();
}
function close_show_order_form(){
	// hide form dat hang
	$("#o_content_result").css("display","none");
	$("#o_content").css("display","");
	$("#hide_content").css("display","none");
	$("#show_order_form").css("display","none");
}
function show_cart(app_main_url){
	//Show san pham trong gio hang
	var c_string = getCookie("nccart");
	$("#hide_content").css("display","");
	$("#show_cart_form").css("display","");
	$("#show_cart_form").draggable();
	$("#cart_content").html("<img src='" + app_main_url + "template/ezwebvietnam/home/images/loading.gif' />");
	try{
		$.ajax({
			url: app_main_url + 'home/product/ajax_show_cart',
			type: 'POST',
			dataType: "html",
			data: {
				data_string : c_string
			},
			success: function (response){
				$("#cart_content").html(response);
			},
			error: function(XMLHttpRequest, textStatus, exception) { alert("Ajax failure\n"); },
			async: true
		});
	}catch(e){
		alert(e)
	}
}
function checkvaliemail() {
	//script form nhap email luc khach moi vao
	var useremail = $("#useremail").val();
	var userphone = $("#userphone").val();
	var userrealname = $("#userrealname").val();
	var sercuritycode = $("#sercuritycode").val();
	var rs = new RegExp("([A-Za-z0-9_.-]){2,}@([A-Za-z0-9_.-]){2,}.([A-Za-z0-9_.-]){2,}");
	if(useremail==""){
		$("#email_e").html("X");
		$("#useremail").focus();
	}else if(userphone==""){
		$("#userphone_e").html("X");
		$("#userphone").focus();
	}else if(userrealname==""){
		$("#userrealname_e").html("X");
		$("#userrealname").focus();
	}else if(sercuritycode==""){
		$("#sercuritycode_e").html("X");
		$("#sercuritycode").focus();
	}else{
		$("#email_e").html("");
		$("#sercuritycode_e").html("");
		if(useremail.match(rs) == null){
			$("#email_e").html("X");
			$("#useremail").focus();
		}else{
			try{
				var useremail2 = $("#useremail").val();
				var userphone2 = $("#userphone").val();
				var userrealname2 = $("#userrealname").val();
				var sercuritycode2 = $("#sercuritycode").val();
				$("#email_form_content_table").css("display","none");
				$("#email_form_content_loading").css("display","");
				$.ajax({
					url: app_main_url + '/ajax/' + my_safecode + '/cus_log_by_mail' + app_ext,
					type: 'POST',
					dataType: "html",
					data: {
						useremail : useremail2,
						userphone : userphone2,
						userrealname : userrealname2,
						userurl : my_url,
						sercuritycode : sercuritycode2
					},
					success: function (response){
						$("#email_form_content_table").css("display","");
						$("#email_form_content_loading").css("display","none");
						if(response=="email"){
							$("#email_e").html("X");
							$("#email_e").focus();
						}else if(response=="sercuritycode"){
							$("#sercuritycode_e").html("X");
							$("#sercuritycode").focus();
						}else{
							setCookie("user_mail",response);
							$("#email_form_content").html(new_reg_success);
						}
					},
					error: function(XMLHttpRequest, textStatus, exception) { alert("Ajax failure\n" + errortext); },
					async: true
				});
			}catch(e){
				alert(e)
			}
		}
	}
	return false;
}
function close_form(){
	$("#emailform").css("display","none");
	$("#hide_content").css("display","none");
	setCookie("closeform","true");
	set_url();
}
function setCookie(c_name,value){
	var expiredays=1;
	var exdate=new Date();
	exdate.setDate(exdate.getDate()+expiredays);
	document.cookie=c_name+ "=" +escape(value)+((expiredays==null) ? "" : ";expires="+exdate.toGMTString()+";path=/");
}
function getCookie(c_name){
	var i,x,y,ARRcookies=document.cookie.split(";");
	for (i=0;i<ARRcookies.length;i++){
		x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
		y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
		x=x.replace(/^\s+|\s+$/g,"");
		if (x==c_name){
			return unescape(y);
		}
	}
}
function add_to_card_form(product_id,price){
	$("#hide_content").css("display","");
	$("#cart_form").css("display","");
	$("#cart_form").draggable();
	curent_price = price;
	curent_product_id = product_id;
	$("#cash").html(curent_price);
	$("#price_u").html(price_unit);
	$("#product_num").val(1);
}
function add_to_cart(){
	var c_string = getCookie("nccart");
	var ck_str= curent_product_id + "|" + $("#product_num").val();
	if(c_string=="" || c_string=="undefined"){
		setCookie("nccart",ck_str);
	}else{
		var n1=c_string.split("-");
		var n2=[];
		var check=0;
		for (var i=0; i<n1.length; i++){
			n2 = n1[i].split("|");
			if(curent_product_id==n2[0]){
				check=1;
			}
		}
		var set_string="";
		if(check==1){
			//neu san pham da ton tai, tao lai chuoi va luu
			for (var i=0; i<n1.length; i++){
				n2 = n1[i].split("|");
				if(curent_product_id==n2[0]){
					if(set_string==""){
						set_string = curent_product_id + "|" + $("#product_num").val();
					}else{
						set_string = set_string + "-" + curent_product_id + "|" + $("#product_num").val();
					}
				}else{
					if(set_string==""){
						set_string = n2[0] + "|" + n2[1];
					}else{
						set_string = set_string + "-" + n2[0] + "|" + n2[1];
					}
				}
			}
		}else{
			set_string = c_string + "-" + ck_str;
		}
		setCookie("nccart",set_string);
	}
	$("#add_to_cart_form_div").css("display","none");
	$("#add_to_cart_form_result").css("display","block");
	count_product_quantity();
	return false;
}
function count_product_quantity(){
	var c_string="";
	try{
		c_string = getCookie("nccart");
	}catch (e){
		setCookie("nccart","");
	}
	try{
		if(c_string == undefined ){
			setCookie("nccart","");
		}else{
			if(c_string==""){
				$("#product_number").html("0");
			}else{
				var n1=c_string.split("-");
				$("#product_number").html(n1.length);
			}
		}
	}catch (e){
		setCookie("nccart","");
	}
}
function close_add_to_card_form(){
	$("#add_to_cart_form_result").css("display","none");
	$("#add_to_cart_form_div").css("display","");
	$("#hide_content").css("display","none");
	$("#cart_form").css("display","none");
}
function close_show_cart_form(){
	$("#hide_content").css("display","none");
	$("#show_cart_form").css("display","none");
}
function cal_price_value(){
	var product_num_value = $("#product_num").val();
	if(!isNaN(product_num_value)){
		$("#cash").html(curent_price*product_num_value);
	}else{
		$("#product_num").val(1);
		$("#cash").html(curent_price);
	}
}
function add_to_cart2(product_quality,product_id){
	var c_string = getCookie("nccart");
	var set_string="";
	var n1=c_string.split("-");
	var n2=[];
	//tao lai chuoi va luu
	for (var i=0; i<n1.length; i++){
		n2 = n1[i].split("|");
		if(product_id==n2[0]){
			if(set_string==""){
				set_string = product_id + "|" + product_quality;
			}else{
				set_string = set_string + "-" + product_id + "|" + product_quality;
			}
		}else{
			if(set_string==""){
				set_string = n2[0] + "|" + n2[1];
			}else{
				set_string = set_string + "-" + n2[0] + "|" + n2[1];
			}
		}
	}
	setCookie("nccart",set_string);
	count_product_quantity();
}
function delete_card_item(product_id){
	var c_string = getCookie("nccart");
	var set_string="";
	var n1=c_string.split("-");
	var n2=[];
	//tao lai chuoi va luu
	for (var i=0; i<n1.length; i++){
		n2 = n1[i].split("|");
		if(product_id==n2[0]){
		}else{
			if(n2[0]>0){
				if(set_string==""){
					set_string = n2[0] + "|" + n2[1];
				}else{
					set_string = set_string + "-" + n2[0] + "|" + n2[1];
				}
			}
		}
	}
	setCookie("nccart",set_string);
	$("#pro_" + product_id).css("display","none");
	count_product_quantity();
}
function cal_price_value2(contenter,price,product_id){
	var product_quantity = $("#" + contenter).val();
	if(!isNaN(product_quantity)){
		$("#total_one_item_" + product_id).html(price*product_quantity);
	}else{
		$("#" + contenter).val(1);
		$("#total_one_item_" + product_id).html(price);
	}
	add_to_cart2(product_quantity,product_id);
	cal_total_value();
}
function cal_total_value(){
	var c_string = getCookie("nccart");
	var set_string=0;
	var n1=c_string.split("-");
	var n2=[];
	//tao lai chuoi va luu
	for (var i=0; i<n1.length; i++){
		n2 = n1[i].split("|");
		set_string = set_string + parseInt($("#total_one_item_" + n2[0]).html());
	}
	$("#total_price").html(set_string);
}
function clear_cart(){
	setCookie("nccart","");
	$("#cart_content").html("");
	count_product_quantity();
}
function add_to_cart_db(productid,url)
{
    var product_num = $('#product_num').val();
    var id_ref = $('#id_ref').val();
    $.ajax({          
        type: "POST",
        url: url+'home/product/add_to_cart',
        async:false,
        cache: false,
        dataType: "json",
        data:{productid: productid,quantity:product_num,id_ref:id_ref},
        success: function(data){
            if(data.msg  == true)
            {
                add_to_cart();
            }
        }
    });
}
function delete_product(id,base_url)
{
    $.ajax({          
        type: "POST",
        url: base_url+'home/product/delete_from_cart',
        async:false,
        cache: false,
        dataType: "json",
        data:{productid: id},
        success: function(data){
            if(data.msg  == true)
            {
                close_show_cart_form();
                show_cart(base_url);
            }
        }
    });
}
function delete_cart(base_url)
{
    $.ajax({          
        type: "POST",
        url: base_url+'home/product/delete_cart',
        async:false,
        cache: false,
        dataType: "json",
        
        success: function(data){
            if(data.msg  == true)
            {
                close_show_cart_form();
                show_cart(base_url);
            }
        }
    });
}