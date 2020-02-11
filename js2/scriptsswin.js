function sendFormCalc(){
		
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
        url:'http://mkumosz2.vot.pl/wp-content/themes/zerif-lite/calc_send_form.php',
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
			
            //jQuery('#suma1').html('<div class="loader"></div>');
			alert('before');
			
        }
       
        
		}).done(function(json){
        
			alert('before222');
    
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

