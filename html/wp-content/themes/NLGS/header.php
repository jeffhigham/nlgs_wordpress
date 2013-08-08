<?php
/**
 * Header
 *
 * Setup the header for our theme
 *
 * @package WordPress
 * @subpackage NLGS Foundation Template
 * @since NLGS Foundation Template 4.0
 */
?>

<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width" />

<title><?php wp_title(); ?></title>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div class="row">
		
		<div class="large-3 columns">
			
			<div class="row">
				<img src="wp-content/themes/NLGS/img/nlglogo_big.png" />
			</div>
			<div class="row hide-for-small" style="color:#ffffff; letter-spacing:1px" >
				<strong>National Lawn & Garden Show<br /> 
				<em>Not your typical tradeshow since 1995</em>
				</strong>
			</div>

		</div>
		
		<div class="large-6 columns">
			
			<div class="row hide-for-small" style="color:#ffffff;  text-align:center; margin-top:10px;">
		 	  <span style="font-size:200%;">
		 	  	<strong>National Lawn & Garden Show</strong>
		 	  </span><p>
			  <span style="font-size:110%;">
			  	<strong>
			  		20th Annual NLGS • Crowne Plaza • Denver International Airport
			  	</strong>
			  </span><br />
			  <em>Tuesday - Thursday, June 10th - 12th, 2014</em></p>
			</div>
<!--
			<div class="row hide-for-small" style="font-weight: bold; font-family:Arial; font-size:12px; color:#FFFFFF;">
				Join Our Mailing List
				<form name="ccoptin" action="http://visitor.r20.constantcontact.com/d.jsp" target="_blank" method="post" style="margin-bottom:2;">
				<input type="hidden" name="llr" value="dtcdaziab">
				<input type="hidden" name="m" value="1108940524131">
				<input type="hidden" name="p" value="oi">
				 <input type="text" name="ea" size="20" value="" style="font-size:10pt; border:1px solid #999999;">
				<input type="submit" name="go" value="Go" class="submit" style="font-family:Verdana,Geneva,Arial,Helvetica,sans-serif; font-size:10pt;">
				</form>
				<img src="https://imgssl.constantcontact.com/ui/images1/safe_subscribe_logo.gif" border="0" width="168" height="14" alt=""/>
			</div>
-->
		
		</div>

		<div class="large-2 large-offset-1 columns">
			<div class="row hide-for-small">
			 <img src="wp-content/themes/NLGS/img/expanded_pet_products.png" />
			</div>
		</div>
	</div><p/>

	<div class="row">
		<div class="large-12 columns">
			<nav class="top-bar"> 
				<ul class="title-area">
					<li class="name"><h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Home</a></h1></li>
					<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
				</ul> 
				<section class="top-bar-section">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'center', 'container' => '', 'fallback_cb' => 'foundation_page_menu', 'walker' => new foundation_navigation() ) ); ?>
				</section>
			</nav>
		</div>
	</div>


	<?php $header =  get_header_textcolor();
	if ( $header !== "blank" ) : ?>
	<header class="site-header" <?php $header_image = get_header_image(); if ( ! empty( $header_image ) ) : ?> style="background:url('<?php echo esc_url( $header_image ); ?>');" <?php endif; ?>>
		<div class="row">
			<div class="large-12 columns">
				<h2><a style="color:#<?php header_textcolor(); ?>;" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a></h2>
			</div>
		</div>
	</header>
	<?php endif; ?>

<!-- Begin Page -->
<div class="row" style="background-color: #fff">