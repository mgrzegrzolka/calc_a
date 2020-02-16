<link rel="stylesheet" id="zerif_font_all-css" href="http://mkumosz2.vot.pl/wp-content/themes/zerif-lite/calc.css" type="text/css" >
<link rel="stylesheet" id="zerif_font_all-css" href="http://mkumosz2.vot.pl/wp-content/themes/zerif-lite/css/bootstrap.css" type="text/css" >
<script type="text/javascript" src="http://mkumosz2.vot.pl/wp-content/themes/zerif-lite/js2/scriptsswin.js"></script>
<?php 
/*
Template Name: SSWIN Calculator
*/
get_header();


		// For new users. Display the correct WordPress content.
		if ( ! zerif_check_if_old_version_of_theme() ) {

			$blog_header_title    = get_theme_mod( 'zerif_blog_header_title', esc_html__( 'Blog', 'zerif-lite' ) );
			$blog_header_subtitle = get_theme_mod( 'zerif_blog_header_subtitle', esc_html__( 'Zerif supports a custom frontpage', 'zerif-lite' ) );
/*
			if ( ! empty( $blog_header_title ) || ! empty( $blog_header_subtitle ) ) {

				echo '<div class="blog-header-wrap">';
					echo '<div class="blog-header-content-wrap">';
				if ( ! empty( $blog_header_title ) ) {
					echo '<h1 class="intro-text">' . esc_html( $blog_header_title ) . '</h1>';
				}
				if ( ! empty( $blog_header_subtitle ) ) {
					echo '<p class="blog-header-subtitle">' . esc_html( $blog_header_subtitle ) . '</p>';
				}
					echo '</div>';
				echo '</div>';
			}
*/
echo '<div class="blog-header-wrap"><div class="blog-header-content-wrap"><h1 class="intro-text" style="font-weight: 100 !important;">Skonfiguruj swój własny</h1><h2 class="intro-text">system alarmowy</h2></div></div>';
		
		}
		?>
			<div class="clear"></div>
			</header> <!-- / END HOME SECTION  -->
			<?php zerif_after_header_trigger(); ?>
			
			<div id="content" class="site-content blog-site-content" style="background:none;">
			<section class="contact-us " id="contact" style="background-color: white !important; padding-top: 0px;padding-bottom: 0px;">
			<div class="container">
				<div class="container bb" style="">
				
				<div class="content-left-wrap col-md-12">

						<div id="primary" class="content-area">

							<main id="main" class="site-main" itemscope itemtype="http://schema.org/Blog">
								<article id="post-85"  class="post-85 page type-page status-publish hentry" style="padding-bottom: 0px; !important" itemtype="http://schema.org/BlogPosting">
									<div class="listpost-content-wrap-full">
									<div class="list-post-top">

									<header class="entry-header">

										<h1 class="entry-title"><a href="http://mkumosz2.vot.pl/kalkulator/" rel="bookmark">Kalkulator</a></h1>

		
									</header><!-- .entry-header -->

									<div class="entry-content">
									<p>Dobierz elementy i funkcjonalności dla swojego systemu alarmowego.</p>
									<footer class="entry-footer">

		
									</footer><!-- .entry-footer -->

									</div><!-- .entry-content --><!-- .entry-summary -->

									</div><!-- .list-post-top -->

								</div><!-- .listpost-content-wrap -->

</article>
							</main><!-- #main -->

						</div><!-- #primary -->

					</div><!-- .content-left-wrap -->

				<div class="content-left-wrap col-md-3" style="padding-top: 0px !important;">
					<div class="row" style="border-bottom: 1px solid rgba(0, 0, 0, 0.05);">
					<p style="margin-bottom: 0.5em;font-size: 2rem;">Rodzaj systemu</p>
					</div>
					<div class="row" style="margin-top:20px;">
					<button type="button" id="feature1" class="butlinesPick" style="width: 80%;" onclick="feature1(this)">bezprzewodowy</button>
					<button type="button" id="feature2" class="butlines" style="width: 80%;" onclick="feature2(this)">przewodowy</button>
					</div>
					<div class="row" style="margin-top:50px;border-bottom: 1px solid rgba(0, 0, 0, 0.05);">
					<p style="margin-bottom: 0.5em;font-size: 2rem;">Dodatkowe funkcje</p>
					</div>
					<div class="row" style="margin-top:20px;">
					<button type="button"  id="feature3" class="butlines" style="width: 80%;font-size:14px;" onclick="feature3(this)">Aplikacja na smartfona</button>
					</div>
					<div class="row" style="margin-top:50px;border-bottom: 1px solid rgba(0, 0, 0, 0.05);">
					<p style="margin-bottom: 0.5em;font-size: 2rem;">Stawka VAT</p>
					</div>
					<div class="row" style="margin-top:20px;">
					<button type="button" id="vat8" class="butlines2Pick" style="width: 80%;font-size:14px; " onclick="vat8(this)">8 %</button>
					<button type="button" id="vat23" class="butlines2" style="width: 80%;font-size:14px; " onclick="vat23(this)">23 %</button>
					</div>
					<div class="row" style="margin-top:50px;border-bottom: 1px solid rgba(0, 0, 0, 0.05);">
					<p style="margin-bottom: 0.5em;font-size: 2rem;"><b>Podsumowanie</b></p>
					</div>
					<div class="row" style="margin-top:20px;">
					<div type="button" class="butSum"  style="width: 80%;font-size:23px; border-radius:5px;"><div id="suma1">0 zł brutto</div> </div>
					<p style="text-align: left;margin-top: 15px;">Ceny netto zawierają zryczałtowany koszt montażu i okablowania.</p>
					</div>
				
				
				</div>
				<div class="content-left-wrap sidebar-wrap  col-md-9" style="border-left: 1px solid rgba(0, 0, 0, 0.05); margin-top: 0px;">
				

<div class="row"> 					
  <div class="col-md-4">
	<div class="col-md">
		<div class="thumbnail">
		  <div style="min-height:120px;"><img style="margin-top: 30px;" src="http://mkumosz2.vot.pl/wp-content/themes/zerif-lite/images/keyb.jpg" alt="..."></div>
		  <div class="caption">
			<p>Klawiatura</p>
			<p>
				<a  class="btn btn-default bminus" role="button" onclick="bminus(this)">-</a>
				<span class="valss" id="el_keypad" >0</span>
				<a  class="btn btn-primary bplus" role="button" name="keypad" onclick="bplus(this)">+</a>
			</p>
		  </div>
		</div>
	  </div>
  </div>
  <div class="col-md-4">
	<div class="col-md">
		<div class="thumbnail">
		  <img src="http://mkumosz2.vot.pl/wp-content/uploads/2020/01/nv511.jpg" alt="...">
		  <div class="caption">
			<p>Czujnik ruchu wewnętrzny</p>
			<p>
				<a  class="btn btn-default bminus" role="button" onclick="bminus(this)">-</a>
				<span class="valss" id="el_pir" >0</span> 
				<a  class="btn btn-primary bplus" role="button" name="pir" onclick="bplus(this)">+</a>
			</p>
		  </div>
		</div>
	  </div>
  </div>
 <div class="col-md-4">
	<div class="col-md">
		<div class="thumbnail">
		  <img src="http://mkumosz2.vot.pl/wp-content/uploads/2020/01/nv511.jpg" alt="...">
		  <div class="caption">
			<p>Czujnik otwarcia (okna, drzwi)</p>
			<p>
				<a  class="btn btn-default bminus" role="button" onclick="bminus(this)">-</a>
				<span class="valss" id="el_openk" >0</span> 
				<a  class="btn btn-primary bplus" role="button" name="pir" onclick="bplus(this)">+</a>
			</p>
		  </div>
		</div>
	  </div>
  </div>
  
</div>  
<div class="row"> 					
  <div class="col-md-4">
	<div class="col-md">
		<div class="thumbnail">
		  <img src="http://mkumosz2.vot.pl/wp-content/uploads/2020/01/nv511.jpg" alt="...">
		  <div class="caption">
			<p>Czujnik gazu</p>
			<p>
				<a  class="btn btn-default bminus" role="button" onclick="bminus(this)">-</a>
				<span class="valss" id="el_gas" >0</span> 
				<a  class="btn btn-primary bplus" role="button" name="gas" onclick="bplus(this)">+</a>
			</p>
		  </div>
		</div>
	  </div>
  </div>
  <div class="col-md-4">
		
	  <div class="col-md">
		<div class="thumbnail">
		  <img src="http://mkumosz2.vot.pl/wp-content/uploads/2020/01/nv511.jpg" alt="...">
		  <div class="caption">
			<p>Czujnik dymu</p>
			<p>
				<a  class="btn btn-default bminus" role="button" onclick="bminus(this)">-</a>
				<span class="valss" id="el_smoke" >0</span> 
				<a  class="btn btn-primary bplus" role="button" name="smoke" onclick="bplus(this)">+</a>
			</p>		  
		  </div>
		</div>
	  </div>
	
  </div>
  <div class="col-md-4">
	<div class="col-md">
		<div class="thumbnail">
		  <img src="http://mkumosz2.vot.pl/wp-content/uploads/2020/01/nv511.jpg" alt="...">
		  <div class="caption">
			<p>Czujnik zbicia szyb</p>
			<p>
				<a  class="btn btn-default bminus" role="button" onclick="bminus(this)">-</a>
				<span class="valss" id="el_glass" >0</span> 
				<a  class="btn btn-primary bplus" role="button" name="glass" onclick="bplus(this)">+</a>
			</p>		  
		  </div>
		</div>
	  </div>
  </div>
 
</div>  
<div class="row"> 					
  
  <div class="col-md-4">
		
	  <div class="col-md">
		<div class="thumbnail">
		  <img src="http://mkumosz2.vot.pl/wp-content/themes/zerif-lite/images/siren.jpg" alt="...">
		  <div class="caption">
			<p>Sygnalizator</p>
			<p>
				<a  class="btn btn-default bminus" role="button" onclick="bminus(this)">-</a>
				<span class="valss" id="el_siren" >0</span> 
				<a  class="btn btn-primary bplus" role="button" name="siren" onclick="bplus(this)">+</a>
			</p>		  
		  </div>
		</div>
	  </div>
	
  </div>
  <div class="col-md-4">
	<div class="col-md">
		<div class="thumbnail">
		  <img src="http://mkumosz2.vot.pl/wp-content/uploads/2020/01/nv511.jpg" alt="...">
		  <div class="caption">
			<p>Pilot napadowy</p>
			<p>
				<a  class="btn btn-default bminus" role="button" onclick="bminus(this)">-</a>
				<span class="valss" id="el_panic" >0</span> 
				<a  class="btn btn-primary bplus" role="button" name="panic" onclick="bplus(this)">+</a>
			</p>		  
		  </div>
		</div>
	  </div>
  </div>
  <div class="col-md-4">
	<div class="col-md">
		<div class="thumbnail">
		  <img src="http://mkumosz2.vot.pl/wp-content/uploads/2020/01/nv511.jpg" alt="...">
		  <div class="caption">
			<p>Czujnik ruchu zewnętrzny</p>
			<p>
				<a  class="btn btn-default bminus" role="button" onclick="bminus(this)">-</a>
				<span class="valss" id="el_pirout" >0</span> 
				<a  class="btn btn-primary bplus" role="button" name="pirout" onclick="bplus(this)">+</a>
			</p>		  
		  </div>
		</div>
	  </div>
  </div>
</div>              

						
					
</div>

</div><!-- .container -->
</div> 

</section>
<section class="about-us " id="summary">
	
<div class="container" id="summary_cont">

	<div class="section-header" style="padding-bottom: 50px;">
		<h2 class="white-text">Podsumowanie</h2>
		<div class="white-text section-legend">Skonfiguruj swój system <span style="color:red;">alarmowy</span>.</div>
		<div class="white-text section-legend" style="font-size: 50px; color: #ffd83f; padding-bottom: 50px;">Cena brutto: <b style="font-size: 60px !important;">0 zł </b></div>
	</div>
	
</div>

	
</section>
<section class="contact-us " id="contact" style="background: rgba(255, 255, 255, 0.84);">
	<div class="container">
	
			<div class="section-header">
				<h2 class="dark-text">Wypęłnij formularz kontaktowy</h2>
				<div class="section-legend" style="color: #5d5d5e;">Wysłanie wstępnej konfiguracji jest darmowe i nie oznacza zamówienia usługi, pozwoli jedynie na przygotowanie kompletnej oferty.</div>
			
			</div>
		

<div>

	<div class="row" >
		<div class="col-md-6" style="margin-bottom: 10px;">
			<!--<label for="exampleInputEmail1" style="font-size: 2rem;margin-bottom: .5rem;">Imię</label>-->
			<input type="text" class="form-control23" id="clientname" placeholder="Imię" style="">
		</div>
		<div class="col-md-6" style="margin-bottom: 10px;">
			<!--<label for="exampleInputEmail1" style="font-size: 2rem;margin-bottom: .5rem;">Miejscowość lub kod pocztowy</label>-->
			<input type="text" class="form-control23" id="localisation" placeholder="Miejscowość" style="">
		</div>
	</div>
	<div class="row" style="margin-bottom: 10px;">
		
		
		<div class="col-md-6" style="margin-bottom: 10px;">
			<!--<label for="exampleInputEmail1" style="font-size: 2rem;margin-bottom: .5rem;">Email</label>-->
			<input type="email" class="form-control23" id="emailclient" placeholder="Adres emailowy" style="">
		</div>
		<div class="col-md-6" style="margin-bottom: 10px;">
			<!--<label for="exampleInputEmail1" style="font-size: 2rem;margin-bottom: .5rem;">Telefon</label>-->
			<input type="phone" class="form-control23" id="phonenumber" placeholder="Numer telefonu" style="">
		</div>
  </div>
   <div class="row" style="margin-top: 18px;">
		<div class="col-md-1">
			<input type="checkbox" class="form-check-input" id="exampleCheck1">
		</div>
		<div class="col-md-11">
			<label class="form-check-label" for="Check1" id="agre1" style="text-align: left;"><small id="emailHelp" class="form-text text-muted" style="color: #575757;">Wyrażam zgodę na przetwarzanie moich danych osobowych w postaci imienia, nazwiska, firmy, nr telefonu kontaktowego dla potrzeb prowadzenia marketingu bezpośredniego z wykorzystaniem połączeń telefonicznych przez Konsalnet Holding S.A. zgodnie z Rozporządzeniem Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016r.</small></label>
		</div>
  </div>
 
  <button onclick="sendFormCalc()" class="btn22" >Wyślij konfigurację</button>

</div>



	</div> 

</section>
</div>
			<?php
	


get_footer(); ?>
<div class="bg_mail_load">
	<div class="contener_loading_send">
		<div class="cont_loader3">
			<div class="loader3"></div>
			<div>
				<p style="color:white;margin-top: 1%;font-size: 20px;">Proszę czekać...<br/><span style="font-size:14px;color:#96c9ff">Twoja konfiguracja już prawie do nas dotarła.</span>
				</p>
			</div>
		</div>
		<div class="info_after_send">
			<p style="font-size: 30px;margin-bottom: 0.9em;">Konfiguracja zostałą przesłana prawidłowo.<br><span style="font-size:14px;color:#96c9ff">W ciągu tygodnia ...</span></p>
			<button onclick="cont1()" class="btn23" >kontynuuj</button>
		</div>
	</div>
</div>
