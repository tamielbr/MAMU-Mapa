<?php get_header(); ?>

<?php if(have_posts()) : the_post(); ?>
	<section id="content" class="single-post">
		<header class="single-post-header">
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
				<a href="http://www.mamu.net.br"><img src="mamu.png" class="largeicon"></a>
				<div class="twelve columns">
					<h1>
						<?php the_title(); ?>
						<!--Adds the logo to each page, to the right of the page title-->
						<!--Update the address and the file location accordingly-->
					</h1>
				</div>
			</div>
		</header>
		<div class="container">
			
			<div class="eight columns">
				<?php the_content(); ?>
				<?php
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'jeo' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
				?>
			</div>
			<div class="three columns offset-by-one">
				<aside id="sidebar">
					<ul class="widgets">
						<?php dynamic_sidebar('general'); ?>
					</ul>
				</aside>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php get_footer(); ?>