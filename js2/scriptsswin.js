window.onload = function() {
	jQuery('#phonenumber').val('');
	jQuery('#emailclient').val('');
	jQuery('#clientname').val('');
	jQuery('#localisation').val('');
	jQuery('#exampleCheck1').prop('checked', false);
	jQuery('#phonenumber').keyup(function(){

		//check_form_email();
		check_one_source_contact();

	});
	
	jQuery('#phonenumber').focusout(function(){

		if((!check_form_phone(jQuery(this).val())) && (jQuery(this).val().length>0)){
			jQuery('.warning-phone').css('display','block');
			jQuery(this).addClass('form-contro_error');
		}else{
			jQuery('.warning-phone').css('display','none');
			jQuery(this).removeClass('form-contro_error');
		}
		check_one_source_contact();

	})
	jQuery('#emailclient').keyup(function(){

		check_one_source_contact();
		if(check_form_email(jQuery(this).val())){
		
		
		}
		

	});
	
	jQuery('#emailclient').focusout(function(){

		if((!check_form_email(jQuery(this).val())) && (jQuery(this).val().length>0)){
			jQuery('.warning-email').css('display','block');
			jQuery(this).addClass('form-contro_error');
		}else{
			jQuery('.warning-email').css('display','none');
			jQuery(this).removeClass('form-contro_error');
		}
		check_one_source_contact();

	})
	jQuery('#exampleCheck1').click(function(){
	
		check_one_source_contact();
	
	});
	check_one_source_contact();
		
	//$('.inputDisabled').prop("disabled", false);
	
	
};
function item_haas_be_sel(){

	var el_keypad = parseInt(jQuery('#el_keypad').text());
	var el_pir    = parseInt(jQuery('#el_pir').text());
	var el_openk  = parseInt(jQuery('#el_openk').text());
	var el_gas    = parseInt(jQuery('#el_gas').text());
	var el_smoke  = parseInt(jQuery('#el_smoke').text());
	var el_glass  = parseInt(jQuery('#el_glass').text());
	var el_siren  = parseInt(jQuery('#el_siren').text());
	var el_panic  = parseInt(jQuery('#el_panic').text());
	var el_pirout = parseInt(jQuery('#el_pirout').text());
	
	var el_sum = el_keypad+el_pir+el_openk+el_gas+el_smoke+el_glass+el_siren+el_panic+el_pirout;
	if(el_sum){
		return true;
	}
}
function check_one_source_contact(){
	var check_box = jQuery('#exampleCheck1').is(":checked");
	if( ( (check_form_email(jQuery('#emailclient').val())) || (check_form_phone(jQuery('#phonenumber').val())) ) && (check_box) && (item_haas_be_sel())){
		jQuery('#send_config_button').prop("disabled", false);
		jQuery('#send_config_button').removeClass('disabled_b');
	}else{
		jQuery('#send_config_button').attr('disabled','disabled');
		jQuery('#send_config_button').addClass('disabled_b');
	}
	
	if(( (check_form_email(jQuery('#emailclient').val())) || (check_form_phone(jQuery('#phonenumber').val())) )){
		jQuery('#check_source_contact').removeClass('acceptoff');
	}else{
		jQuery('#check_source_contact').addClass('acceptoff');
	}
	if(check_box){
		jQuery('#check_agree').removeClass('acceptoff');
	}else{
		jQuery('#check_agree').addClass('acceptoff');
	}
	if(item_haas_be_sel()){
		jQuery('#check_el_sys').removeClass('acceptoff');
	}else{
		jQuery('#check_el_sys').addClass('acceptoff');
	}

}

function cont1(){
	jQuery('.bg_mail_load').css('display','none');
	jQuery('.cont_loader3').css('display','block');
	jQuery('.info_after_send').css('display','none');
	jQuery('.info_alert').css('display','none');
	location.reload(); 
}
function check_form_email(email){
	
	 var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
	
}
function check_form_phone(phone){
	
	 var re = /^[0-9\+-]{8,13}$/;
    return re.test(String(phone).toLowerCase());
	
}



function sendFormCalc(){
		
		var el_keypad = jQuery('#el_keypad').text();
		var el_pir    = jQuery('#el_pir').text();
		var el_openk  = jQuery('#el_openk').text();
		var el_gas    = jQuery('#el_gas').text();
		var el_smoke  = jQuery('#el_smoke').text();
		var el_glass  = jQuery('#el_glass').text();
		var el_siren  = jQuery('#el_siren').text();
		var el_panic  = jQuery('#el_panic').text();
		var el_pirout = jQuery('#el_pirout').text();
		
		var emailclient 	= jQuery('#emailclient').val();
		var phonenumber 	= jQuery('#phonenumber').val();
		var clientname  	= jQuery('#clientname').val();
		var localisation 	= jQuery('#localisation').val();
		var agre1 			= jQuery('#agre1').val();
		
		var feature12 = 0;
		
		var feature3 = 0;
		
		if(document.getElementById('feature1').className=="butlinesPick"){
			feature12 = 1;
		}
		if(document.getElementById('feature2').className=="butlinesPick"){
			feature12 = 2;
		}
		if(document.getElementById('feature3').className=="butlinesPick"){
			feature3 = 1;
		}
		
		
		var vat = 0;
		
		if(document.getElementById('vat8').className=="butlines2Pick"){
			vat=8;
		}
		if(document.getElementById('vat23').className=="butlines2Pick"){
			vat=23;
		}
		
		jQuery.ajax({
        url:'http://mkumosz2.vot.pl/wp-content/themes/zerif-lite/calc_send_form.php',
        type: 'POST',
              
        data: {el_keypad		:el_keypad,
			   el_pir   		:el_pir,
			   el_openk 		:el_openk ,
			   el_gas   		:el_gas   ,
			   el_smoke			:el_smoke ,
			   el_glass 		:el_glass ,
			   el_siren 		:el_siren ,
			   el_panic 		:el_panic ,
			   el_pirout		:el_pirout,
			   f_bezprz 		:feature12,
			   f_app			:feature3 ,
			   vat				:vat,
			   emailclient		:emailclient,
			   clientname		:clientname,
			   phonenumber		:phonenumber,
			   localisation		:localisation
   
        },
        dataType:"html",
        
        beforeSend: function() {
			
            jQuery('.bg_mail_load').css('display','block');
			//alert('before');
			
        }
       
        
		}).done(function(json){
			if(json=="1"){
				jQuery('.cont_loader3').css('display','none');
				jQuery('.info_after_send').css('display','block');
			}else{
				jQuery('.cont_loader3').css('display','none');
				jQuery('.info_alert').css('display','block');
			}
			console.log(json);
			

    
		});	
	

}



function calsum(){

var el_keypad = jQuery('#el_keypad').text();
var el_pir    = jQuery('#el_pir').text();
var el_openk  = jQuery('#el_openk').text();
var el_gas    = jQuery('#el_gas').text();
var el_smoke	  = jQuery('#el_smoke').text();
var el_glass  = jQuery('#el_glass').text();
var el_siren  = jQuery('#el_siren').text();
var el_panic  = jQuery('#el_panic').text();
var el_pirout = jQuery('#el_pirout').text();

var feature12 = 0;

var feature3 = 0;

if(document.getElementById('feature1').className=="butlinesPick"){
	feature12 = 1;
}
if(document.getElementById('feature2').className=="butlinesPick"){
	feature12 = 2;
}
if(document.getElementById('feature3').className=="butlinesPick"){
	feature3 = 1;
}
 

var vat = 0;

if(document.getElementById('vat8').className=="butlines2Pick"){
	vat=8;
}
if(document.getElementById('vat23').className=="butlines2Pick"){
	vat=23;
}

jQuery.ajax({
        url:'http://mkumosz2.vot.pl/wp-content/themes/zerif-lite/cal.php',
        type: 'POST',
              
        data: {el_keypad:el_keypad,
			   el_pir   :el_pir,
			   el_openk :el_openk ,
			   el_gas   :el_gas   ,
			   el_smoke	:el_smoke ,
			   el_glass :el_glass ,
			   el_siren :el_siren ,
			   el_panic :el_panic ,
			   el_pirout:el_pirout,
			   f_bezprz :feature12,
			   f_app	:feature3 ,
			   vat		:vat
   
        },
        dataType:"html",
        
        beforeSend: function() {
            jQuery('#suma1').html('<div class="loader"></div>');
			
			
        }
       
        
    }).done(function(json){
        
		jQuery('#suma1').html(json);
    
     });	
jQuery.ajax({
        url:'http://mkumosz2.vot.pl/wp-content/themes/zerif-lite/calc_sswin_summary.php',
        type: 'POST',
              
        data: {el_keypad:el_keypad,
			   el_pir   :el_pir,
			   el_openk :el_openk ,
			   el_gas   :el_gas   ,
			   el_smoke	:el_smoke ,
			   el_glass :el_glass ,
			   el_siren :el_siren ,
			   el_panic :el_panic ,
			   el_pirout:el_pirout,
			   f_bezprz :feature12,
			   f_app	:feature3 ,
			   vat		:vat
   
        },
        dataType:"html",
        
        beforeSend: function() {
       
			jQuery('#summary_cont').html("<div class=\"section-header\" style=\"padding-bottom: 100px;\"><div class=\"loader2\"></div></div>");
			
        }
       
        
    }).done(function(json){
        
		jQuery('#summary_cont').html(json);
		console.log(json);
 });	

}



	

	

function activeBorder(e){

	var ev= e.parentElement.parentElement.parentElement;
	ev.setAttribute("style", "border-color: #007bff;"); 
}

function deactiveBorder(e){

	var ev= e.parentElement.parentElement.parentElement;
	ev.setAttribute("style", "border-color: #ddd;"); 
}

function bplus(e) {
  
    var ev=e.previousElementSibling;
    var val=ev.innerText;
	
	ev.innerText=parseInt(val)+1;
	
	if(parseInt(ev.innerText)>0){
		activeBorder(e);
	}
	calsum();
    check_one_source_contact();
  
}
function bminus(e) {
  
    
	var ev=e.nextElementSibling;
    var val=ev.innerText;
	if(parseInt(val)>0)
	{
		ev.innerText=parseInt(val)-1;
	
		if(parseInt(ev.innerText)==0)
		{
		deactiveBorder(e);
		}
		calsum();
	}
	check_one_source_contact();
  
}

function feature1(e){
	
	console.log(e);
	if(e.className=="butlines"){
		e.className="butlinesPick";
		
		document.getElementById('feature2').className="butlines";
		calsum();
	}
	
}

function feature2(e){
	
	console.log(e);
	if(e.className=="butlines"){
		e.className="butlinesPick";
		
		document.getElementById('feature1').className="butlines";
		calsum();
	}
	
}

function feature3(e){
	
	console.log(e);
	if(e.className=="butlines"){
		e.className="butlinesPick";
		calsum();
	}else{
		e.className="butlines";
		calsum();
	}
	
}
function vat8(e){
	
	if(e.className=="butlines2"){
		e.className="butlines2Pick";
		
		document.getElementById('vat23').className="butlines2";
		calsum();
	}
	
}
function vat23(e){
	
	if(e.className=="butlines2"){
		e.className="butlines2Pick";
		
		document.getElementById('vat8').className="butlines2";
		calsum();
	}
	
}

