<?php

/*
 * Template Name: Home Page Template
 */

get_header(); ?>
<!-- Begin Page -->
<div class="row">
	<div class="large-12 columns">
		<ul data-orbit style="background-color: #000">
			<li><img class="image_rounded" alt="" src="wp-content/themes/NLGS/img/slide-2.png" /></li>
			<li><img class="image_rounded" alt="" src="wp-content/themes/NLGS/img/slide-1.png" /></li>
			<li><img class="image_rounded" alt="" src="wp-content/themes/NLGS/img/slide-3.png" /></li>
		</ul>
	</div>
</div>

<div class="row hide-for-small">
  <div class="large-12 large-centered columns">
  <div class="radius panel" style="background-color: #000; border 2px solid #fff">
		<h2 style="color: #fff; text-align: center; font-family: "Arial Black", Gadget, sans-serif; letter-spacing:3px">Guaranteed Appointments. Guaranteed Results.</h2>
	</div>
</div>
</div>
<p/>

<!-- Three-up Content Blocks -->
<?php 
	$buyer_post = get_post(224);
	$vendor_post = get_post(226);
	$overview_post = get_post(229);
?> 
<div class="row main-content-blocks">
	<div class="large-4 columns">
  <a href="/?page_id=18"><img class="image_rounded" src="wp-content/themes/NLGS/img/overview_main_block.png" /></a>
  <h4>Overview</h4><hr/>
  <?php 
  	echo 
    $overview_post->post_content;
    show_edit_link(229);
  ?>
</div>

<div class="large-4 columns main-content-blocks">
  <a href="/?page_id=51"><img class="image_rounded" src="wp-content/themes/NLGS/img/buyer_main_block.png" /></a>
  <h4>Buyers</h4><hr/>
  <?php 
    echo $buyer_post->post_content;
    show_edit_link(224);
 ?>
</div>

<div class="large-4 columns main-content-blocks">
  <a href="/?page_id=86"><img class="image_rounded" src="wp-content/themes/NLGS/img/vendor_main_block.png" /></a>
  <h4>Vendors</h4><hr/>
  <?php 
    echo $vendor_post->post_content;
  	show_edit_link(226);
 ?>
</div>

</div>
<!-- End Page -->

<?php get_footer(); ?>