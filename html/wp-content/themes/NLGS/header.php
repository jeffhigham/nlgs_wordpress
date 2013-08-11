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
<p/>
	<div class="row">
		
		<div class="large-3 columns">
			
			<div class="row">
				<a href="/"><img src="/wp-content/themes/NLGS/img/nlglogo_big.png" /></a>
			</div>
			<div style="color: #fff; letter-spacing:1px; font-size:14px;font-family: Helvetica, Arial, FreeSans, sans-serif" class="row hide-for-small" >
				<strong>National Lawn &amp; Garden Show<br/>Not your typical tradeshow since 1995</strong>
			</div>

		</div>
		
		<div class="large-6 columns">
			
			<div class="row hide-for-small" style="color:#ffffff;  text-align:center; margin-top:10px;">
		 	  <span style="font-size:200%;">
		 	  	<strong>National Lawn &amp; Garden Show</strong>
		 	  </span>
				<?php
					$front_page_header_event_Details = get_post(237);
			  		echo $front_page_header_event_Details->post_content;
			    	show_edit_link(237);
			  	?>
			</div>

			<div class="row  hide-for-small" >
				<form id="email_subscribe" class="custom" action="http://visitor.r20.constantcontact.com/d.jsp" target="_blank" method="post">
				<div class="row collapse">
					<div class="large-7 columns" >
						<input type="hidden" name="llr" value="dtcdaziab" />
						<input type="hidden" name="m" value="1108940524131" />
						<input type="hidden" name="p" value="oi" />
						<input style="background-color: #fff; border: 2px solid #999" type="text" name="ea" placeholder="you@youremail.com" />
					</div>
					<div class="large-5 columns">
						<a href="javascript:$('#email_subscribe').submit()" class="radius button postfix" style="color: #fff; background: #000; border: 2px solid #999">Join Our Mailing List!<i class="foundicon-mail" ></i></a>
					</div>
				</div>
				</form>
				<!-- <img src="https://imgssl.constantcontact.com/ui/images1/safe_subscribe_logo.gif" border="0" width="168" height="14" alt=""/> -->
			</div>
		
		</div>

		<div class="large-2 large-offset-1 columns">
			<div class="row hide-for-small" style="color: #fff; text-align:center;">
			 <img src="/wp-content/themes/NLGS/img/expanded_pet_products.png" />
			 <em>Expanded Pet Products Division.</em>
			</div>
		</div>
	</div><p/>

	<div class="row">
		<div class="large-10 large-centered columns">
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