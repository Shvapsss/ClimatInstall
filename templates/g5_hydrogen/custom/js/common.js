/*
function ax2SenD(_id) {
var err='';
if (_id !=4){ 
	if(!validate($("#mh"+_id).val(), 'email')) {err = "<p>E-mail введен не верно</p>";}
	if ($("#mh"+_id).val().length == 0) {err = "<p>Нужно заполнить e-mail</p>";}
}

if ($("#ph"+_id).val().length == 0) {err = "<p>Нужно заполнить телефон</p>";}
if ($("#nm"+_id).val().length == 0) {err = "<p>Нужно заполнить имя</p>";}

if (err != '') {
	if (_id !='4'){
		$('.ordercall_padded2').css('display','block');
		$('.ordercall-block2').css('display','block');
		$('.ordercall-block2 .form2').html(err);
	} else {
		$('.error').html(err);

	}
}

else {
	if (_id !='4'){
	var formData = {
		"type": "1",
		"name":$("#nm"+_id).val(),
		"phone":$("#ph"+_id).val(),
		"meil":$("#mh"+_id).val()
		}
	} else {
		var formData = {
			"type": "2",
			"name":$("#nm"+_id).val(),
			"phone":$("#ph"+_id).val()
		}
	}



	$.ajax({
		url:'/dpr.php',
		type:'POST',
		data:'jsonData=' + $.toJSON(formData),
		success: function(res) {
			if (_id =='4'){ 
				$('.ordercall_padded ').css('display','none');
				$('.ordercall-block').css('display','none');
			}
			$('.ordercall_padded2').css('display','block');
			$('.ordercall-block2').css('display','block');
			$('.ordercall-block2 .form2').html('<p>Заявка успешно отправлена</p>');
		}
	});
	return false;
}
	
}
*/

jQuery(document).ready(function(){	
/*
	$('.ordercall_padded, .close').bind('click',function(){
		$('.ordercall_padded ').css('display','none');
		$('.ordercall-block').css('display','none');
		return false;
	});
	$(".more_pholio").click(function(){
		$('.ordercall_padded').css('display','block');
		$('.ordercall-block').css('display','block');
	});
	
	$(".conf-data").click(function(){
		$('.orderconf_padded').css('display','block');
		$('.orderconf-block').css('display','block');
	});
	$('.orderconf_padded, #w2').bind('click',function(){
		$('.orderconf_padded').css('display','none');
		$('.orderconf-block').css('display','none');
		return false;
	});

	$(".order").click(function(){
		$('.order_padded').css('display','block');
		$('.order-block').css('display','block');
		if ($(this).attr('id')=="o1") {
			$('.to3').html('Заказ по тарифу "СТАРТОВЫЙ"');
			$('#tarif').val('СТАРТОВЫЙ');
			$('.order-block form').attr("action","data/freeappl3.php");
		} 
		else if ($(this).attr('id')=="o2") {
			$('.to3').html('Заказ по тарифу "ОПТИМАЛЬНЫЙ"');
			$('#tarif').val('ОПТИМАЛЬНЫЙ');
			$('.order-block form').attr('action', 'data/freeappl4.php');
		} 
		else if ($(this).attr('id')=="o3") {
			$('.to3').html('Заказ по тарифу "БЕЗЗАБОТНЫЙ"');
			$('#tarif').val('БЕЗЗАБОТНЫЙ');
			$('.order-block form').attr('action', 'data/freeappl5.php');
		}
	});
	$('.order_padded, #w3').bind('click',function(){
		$('.order_padded').css('display','none');
		$('.order-block').css('display','none');
		return false;
	});

	$("#prototype_free").click(function(){
		$('.order_padded2').css('display','block');
		$('.order-block2').css('display','block');
		$('#pos').val('#2');
		$('.order-block2 form').attr("action","data/freeappl6.php");

	});
	$('.order_padded2, #w4').bind('click',function(){
		$('.order_padded2').css('display','none');
		$('.order-block2').css('display','none');
		return false;
	});

	$(".order_footer").click(function(){
		$('.order_padded2').css('display','block');
		$('.order-block2').css('display','block');
		$('#pos').val('с футера');
		$('.order-block2 form').attr("action","data/freeappl8.php");

	});
	$('.order_padded2, #w4').bind('click',function(){
		$('.order_padded2').css('display','none');
		$('.order-block2').css('display','none');
		return false;
	});

	
	
	
	
// Hover item portfel
$('.va-item, .va-item img').bind('mouseover',function(){
	$(this).find('img').animate({opacity: 1,}, 500 );
	$(this).find('a').css('width','200px');
});
$('.va-item, .va-item img').bind('mouseleave',function(){
	$(this).find('img').animate({opacity: .3,}, 500 );
	$(this).find('a').css('width','130px');
});
$('.carousel-feature img, .slide img, .order, #prototype_free, .sbm, .order_footer, .sbmt').bind('mouseover',function(){
	$(this).animate({opacity: .7,}, 500 );
});
$('.carousel-feature img, .slide img, .order, #prototype_free, .sbm, .order_footer, .sbmt').bind('mouseleave',function(){
	$(this).animate({opacity: 1,}, 500 );
});
*/

jQuery('.etapo_ul_top_info li, .etapo_ul li').bind('click',function(){

	var a = jQuery('.etapo_ul_top_info .select').attr('rel');
	var b = jQuery(this).attr('rel');
	if (a!=b) {
		jQuery('#th_'+a).removeClass('select');
		jQuery('#td_'+a).removeClass('color_celect');
		jQuery('#tb_'+a).removeClass('active-b');
		jQuery('#th_'+b).addClass('select');
		jQuery('#td_'+b).addClass('color_celect');
		jQuery('#tb_'+b).addClass('active-b');
		
	}
	
	
});




});





















