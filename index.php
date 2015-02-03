<?php get_header(); ?>

<?php
if(is_front_page()) {
	$options = jeo_get_options();
	if(!$options || (isset($options['front_page']) && $options['front_page']['front_page_map'] == 'latest'))
		jeo_featured();
	else
		get_template_part('content', 'featured');
} else {
	jeo_featured();
}
?>

<!--<div class="section-title">-->
	<div class="container">		
		<div class="twelve columns">
			
			<!--
			Substitutes "Lastest articles" for the site logo
			<h2><?php _e('Latest articles', 'jeo'); ?></H2>
			-->
		</div>
	</div>
<!--</div>-->
	<header id="masthead">
			<div id="masthead-nav">
					<div class="clearfix">
						<!--Create the menu and search-->
						<nav id="main-nav">
							<?php wp_nav_menu(array('theme_location' => 'header_menu')); ?>
						</nav>
						<?php get_search_form(); ?>
					</div>
				</div>
		<div class="container">
			<div class="four columns">
				<a href="http://www.mamu.net.br"><img src="mamu.png"></a>
				<!--Commenting out to remove the header blog name and description-->
				<!--<div class="site-meta">
					<h1>
						<a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('name'); ?>">
							<?php bloginfo('name'); ?>
						</a>
					</h1>}
					<h2><?php bloginfo('description'); ?></h2>
				</div>-->
			</div>
			<div class="eight columns">
			</div>
		</div>
	
<?php get_template_part('loop'); ?>

<?php get_footer(); ?>