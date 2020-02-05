<style>
.bplus{
	background-image: linear-gradient(to bottom,#337ab7 0,#265a88 100%);
	background-repeat: repeat-x;
border-color: #245580;
text-shadow: 0 -1px 0 rgba(0,0,0,.2);
box-shadow: inset 0 1px 0 rgba(255,255,255,.15),0 1px 1px rgba(0,0,0,.075);
padding: 5px 10px;
font-size: 12px;
line-height: 1.5;
border-radius: 3px;
color: #fff;
display: inline-block;

font-weight: 400;
text-align: center;
white-space: nowrap;
vertical-align: middle;

touch-action: manipulation;
cursor: pointer;

border: 1px solid transparent;
width: 30px;
user-select: none;
}
.bminus{
	background-image: linear-gradient(to bottom,#fff 0,#e0e0e0 100%);
	background-repeat: repeat-x;
border-color: #ccc !important;
text-shadow: 0 1px 0 #fff;
box-shadow: inset 0 1px 0 rgba(255,255,255,.15),0 1px 1px rgba(0,0,0,.075);
padding: 5px 10px;
font-size: 12px;
line-height: 1.5;
border-radius: 3px;
color:#333;
background-color:
#fff;
display: inline-block;

font-weight: 400;
text-align: center;
white-space: nowrap;
vertical-align: middle;

touch-action: manipulation;
cursor: pointer;

border: 1px solid transparent;
width: 30px;
user-select: none;

}
.valss{
	
border-color:
#c8c8c8;
border-style: solid;
border-width: 1px;
padding: 2px 6px 4px 4px;
margin-left: 5px;
margin-right: 2px;
}


.butlines{
	margin-top: .25rem;
margin-bottom: .25rem;
cursor: pointer;
color:#007bff;
border-color:#007bff;
display: inline-block;
font-weight: 100 !important;
text-align: center;
vertical-align: middle;
user-select: none;
background-color: transparent;
border-style:solid;
border-width: 1px; 	
padding: .375rem .75rem;
font-size: 1.8rem;
line-height: 1.5;
border-radius: .25rem;
transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
-webkit-appearance: button;
text-transform: none;
overflow: visible;

box-sizing: border-box;
padding:10px 5px 10px 5px;
}
.butlines2{
	margin-top: .25rem;
margin-bottom: .25rem;
cursor: pointer;
color:#17a2b8;
border-color:#17a2b8;
display: inline-block;
font-weight: 100 !important;
text-align: center;
vertical-align: middle;
user-select: none;
background-color: transparent;
border-style:solid;
border-width: 1px; 	
padding: .375rem .75rem;
font-size: 1.8rem;
line-height: 1.5;
border-radius: .25rem;
transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
-webkit-appearance: button;
text-transform: none;
overflow: visible;

box-sizing: border-box;
padding:10px 5px 10px 5px;
}
.butlinesPick{
	margin-top: .25rem;
margin-bottom: .25rem;
cursor: pointer;
color:white;
border-color:#007bff;
display: inline-block;
font-weight: 100 !important;
text-align: center;
vertical-align: middle;
user-select: none;
background-color:#007bff;
border-style:solid;
border-width: 1px; 	
padding: .375rem .75rem;
font-size: 1.8rem;
line-height: 1.5;
border-radius: .25rem;
transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
-webkit-appearance: button;
text-transform: none;
overflow: visible;

box-sizing: border-box;
padding:10px 5px 10px 5px;
}
.butlines2Pick{
	margin-top: .25rem;
margin-bottom: .25rem;
cursor: pointer;
color:white;
border-color:#17a2b8;
display: inline-block;
font-weight: 100 !important;
text-align: center;
vertical-align: middle;
user-select: none;
background-color:#17a2b8;
border-style:solid;
border-width: 1px; 	
padding: .375rem .75rem;
font-size: 1.8rem;
line-height: 1.5;
border-radius: .25rem;
transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
-webkit-appearance: button;
text-transform: none;
overflow: visible;

box-sizing: border-box;
padding:10px 5px 10px 5px;
}
.butSum{
	margin-top: .25rem;
margin-bottom: .25rem;
cursor: pointer;
color:white;
border-color:#5cb85c;
display: inline-block;
font-weight: 700 !important;
text-align: center;
vertical-align: middle;
user-select: none;
background-color:#5cb85c;
border-style:solid;
border-width: 1px; 	
padding: .375rem .75rem;
font-size: 3rem;
line-height: 1.5;
border-radius: .25rem;
transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
-webkit-appearance: button;
text-transform: none;
overflow: visible;

box-sizing: border-box;
padding:10px 5px 10px 5px;

}
.loader {
  border: 5px solid #f3f3f3; /* Light grey */
  border-top: 6px solid #007bff; /* Blue */
  border-radius: 50%;
  width: 30px;
  height: 30px;
  animation: spin 0.4s linear infinite;
  margin-left: auto;
margin-right: auto;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
.bb{
	min-height: 0px !important;
	margin-bottom: 70px;
border-bottom: 1px solid
rgba(0, 0, 0, 0.05);
padding-bottom: 20px;
}
</style>
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
			
			<div id="content" class="site-content blog-site-content">

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
				<section class="about-us " id="aboutus">
	
	<div class="container">

		<!-- SECTION HEADER -->

		<div class="section-header">

			
		</div><!-- / END SECTION HEADER -->

		<!-- 3 COLUMNS OF ABOUT US-->

		<div class="row">

			<!-- COLUMN 1 - BIG MESSAGE ABOUT THE COMPANY-->

		
	</div> <!-- / END 3 COLUMNS OF ABOUT US-->

	<!-- CLIENTS -->
	
	</div> <!-- / END CONTAINER -->

	
</section>
<section class="separator-one" id="ribbon_bottom"><div class="color-overlay"><h3 class="container text" data-scrollreveal="enter left after 0s over 1s" data-sr-init="true" data-sr-complete="true">Change this text in BottomButton Ribbon</h3></div></section>
			</div>
			<?php
	


get_footer(); ?>

