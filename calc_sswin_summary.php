<?php

require 'calc_init.php';


if($sum_el==0){
	?>


<div class="section-header" style="padding-bottom: 50px;">
		<h2 class="white-text">Podsumowanie</h2>
		<div class="white-text section-legend">Skonfiguruj swój system <span style="color:red;">alarmowy</span>.</div>
		<div class="white-text section-legend" style="font-size: 50px; color: #ffd83f; padding-bottom: 50px;">Cena brutto: <b style="font-size: 60px !important;">0 zł </b></div>
</div>


	<?php
}else{
?>	


		<!-- SECTION HEADER -->

	<div class="section-header" style="padding-bottom: 50px;">
		<h2 class="white-text">Podsumowanie</h2>
		
		<div class="white-text section-legend">
		<?php 
		if($bezprz==2){
			echo '<span style="color:#007bff;">Przewodowy</span>';
		}
		if($bezprz==1){
			echo '<span style="color:#5cb85c;">Bezprzewodowy</span>';
		}
		?>
		 system 
		<span style="color:red;">alarmowy</span>
		<?php 
		if($app==1){
			echo '<span >z aplikacją mobilną.</span>';
		}else{
			echo '<span >.</span>';
		
		}
		
		?>
		</div>
		
		<div class="white-text section-legend" style="font-size: 50px; color: #ffd83f;border-bottom: 1px solid rgba(255, 255, 255, 0.05); padding-bottom: 50px;">Cena brutto: <b style="font-size: 60px !important;"><?php echo number_format($val_sum,2,',','')." zł"; ?></b></div>
	</div><!-- / END SECTION HEADER -->

		<!-- 3 COLUMNS OF ABOUT US-->

	<div class="row" style="margin-bottom: 50px;border-bottom: 1px solid rgba(255, 255, 255, 0.05);">
	<div class="panel panel-default panelp" style="margin-bottom: 50px;"> 
		<div class="panel-heading" style="color:white;background-color: #171717;border-color:#393939;font-size: 2.2rem;">Urządzenia</div> 
		<table class="table_list_sswin" style="color: white;margin-bottom: 0px !important;border-bottom: 0px solid #ededed;"> 
			<tbody>
				<tr> 
					
					<th style="padding: 8px 8px 8px 20px !important;border-top: 1px solid #3c3c3c;">Opis</th> 
					<th style="padding: 8px 8px 8px 8px !important;border-top: 1px solid #3c3c3c;">Ilość</th> 
					<th style="padding: 8px 8px 8px 8px !important;border-top: 1px solid #3c3c3c;width: 20%;">Cena netto</th> 
				</tr> 
				<?php
				if($el_keypad){
				?>
				<tr> 
					<td style="padding: 8px 8px 8px 20px !important;border-top: 1px solid #3c3c3c;" >Klawiatura</th> 
					<td style="padding: 8px 8px 8px 8px !important;border-top: 1px solid #3c3c3c;"><?php echo $el_keypad; ?></td> 
					<td style="padding: 8px 8px 8px 8px !important;border-top: 1px solid #3c3c3c;width: 20%;font-weight: bold;font-size: 18px;color:#ffd83f;"><?php echo number_format($val_keypad,2,',','')." zł netto"; ?></td> 
				</tr> 
				<?php
				}
				if($el_pir){
				?>
				<tr> 
					<td style="padding: 8px 8px 8px 20px !important;border-top: 1px solid #3c3c3c;" >Czujnik ruchu wewnętrzny</th> 
					<td style="padding: 8px 8px 8px 8px !important;border-top: 1px solid #3c3c3c;"><?php echo $el_pir; ?></td> 
					<td style="padding: 8px 8px 8px 8px !important;border-top: 1px solid #3c3c3c;width: 20%;font-weight: bold;font-size: 18px;color:#ffd83f;"><?php echo number_format($val_pir,2,',','')." zł netto"; ?></td> 
				</tr> 
				<?php
				}
				if($el_openk){
				?>
				<tr> 
					<td style="padding: 8px 8px 8px 20px !important;border-top: 1px solid #3c3c3c;" >Czujnik otwarcia (okna, drzwi)</th> 
					<td style="padding: 8px 8px 8px 8px !important;border-top: 1px solid #3c3c3c;"><?php echo $el_openk; ?></td> 
					<td style="padding: 8px 8px 8px 8px !important;border-top: 1px solid #3c3c3c;width: 20%;font-weight: bold;font-size: 18px;color:#ffd83f;"><?php echo number_format($val_openk,2,',','')." zł netto"; ?></td> 
				</tr> 
				<?php
				}
				if($el_gas){
				?>
				<tr> 
					<td style="padding: 8px 8px 8px 20px !important;border-top: 1px solid #3c3c3c;" >Czujnik gazu</th> 
					<td style="padding: 8px 8px 8px 8px !important;border-top: 1px solid #3c3c3c;"><?php echo $el_gas; ?></td> 
					<td style="padding: 8px 8px 8px 8px !important;border-top: 1px solid #3c3c3c;width: 20%;font-weight: bold;font-size: 18px;color:#ffd83f;"><?php echo number_format($val_gas,2,',','')." zł netto"; ?></td> 
				</tr> 
				<?php
				}
				if($el_smoke){
				?>
				<tr> 
					<td style="padding: 8px 8px 8px 20px !important;border-top: 1px solid #3c3c3c;" >Czujnik dymu</th> 
					<td style="padding: 8px 8px 8px 8px !important;border-top: 1px solid #3c3c3c;"><?php echo $el_smoke; ?></td> 
					<td style="padding: 8px 8px 8px 8px !important;border-top: 1px solid #3c3c3c;width: 20%;font-weight: bold;font-size: 18px;color:#ffd83f;"><?php echo number_format($val_smoke,2,',','')." zł netto"; ?></td> 
				</tr> 
				<?php
				}
				if($el_glass){
				?>
				<tr> 
					<td style="padding: 8px 8px 8px 20px !important;border-top: 1px solid #3c3c3c;" >Czujnik zbicia szyb</th> 
					<td style="padding: 8px 8px 8px 8px !important;border-top: 1px solid #3c3c3c;"><?php echo $el_glass; ?></td> 
					<td style="padding: 8px 8px 8px 8px !important;border-top: 1px solid #3c3c3c;width: 20%;font-weight: bold;font-size: 18px;color:#ffd83f;"><?php echo number_format($val_glass,2,',','')." zł netto"; ?></td> 
				</tr> 
				<?php
				}
				if($el_siren){
				?>
				<tr> 
					<td style="padding: 8px 8px 8px 20px !important;border-top: 1px solid #3c3c3c;" >Sygnalizator</th> 
					<td style="padding: 8px 8px 8px 8px !important;border-top: 1px solid #3c3c3c;"><?php echo $el_siren; ?></td> 
					<td style="padding: 8px 8px 8px 8px !important;border-top: 1px solid #3c3c3c;width: 20%;font-weight: bold;font-size: 18px;color:#ffd83f;"><?php echo number_format($val_siren,2,',','')." zł netto"; ?></td> 
				</tr> 
				<?php
				}
				if($el_panic){
				?>
				<tr> 
					<td style="padding: 8px 8px 8px 20px !important;border-top: 1px solid #3c3c3c;" >Pilot napadowy</th> 
					<td style="padding: 8px 8px 8px 8px !important;border-top: 1px solid #3c3c3c;"><?php echo $el_panic; ?></td> 
					<td style="padding: 8px 8px 8px 8px !important;border-top: 1px solid #3c3c3c;width: 20%;font-weight: bold;font-size: 18px;color:#ffd83f;"><?php echo number_format($val_panic,2,',','')." zł netto"; ?></td> 
				</tr> 
				<?php
				}
				if($el_pirout){
				?>
				<tr> 
					<td style="padding: 8px 8px 8px 20px !important;border-top: 1px solid #3c3c3c;" >Czujnik ruchu zewnętrzny</th> 
					<td style="padding: 8px 8px 8px 8px !important;border-top: 1px solid #3c3c3c;"><?php echo $el_pirout; ?></td> 
					<td style="padding: 8px 8px 8px 8px !important;border-top: 1px solid #3c3c3c;width: 20%;font-weight: bold;font-size: 18px;color:#ffd83f;"><?php echo number_format($val_pirout,2,',','')." zł netto"; ?></td> 
				</tr> 
				<?php
				}

				?>
				
			</tbody> 
		</table> 
		</div>
			

		
	</div>

	
	
<?php
}
?>

