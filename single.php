<?php get_header(); ?>

<?php if(have_posts()) : the_post(); ?>

	<?php jeo_map(); ?>

	<article id="content" class="single-post">
		
		<header class="single-post-header" class="clearfix">
	
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
		</header>
		<div class="container">
			<!--Logo, change accordingly-->
			<a href="http://www.mamu.net.br"><img src="mamu.png" class="largecon"></a>
			<div class="four columns">
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
		</header>
			
		<div class="container">
			<div class="four columns">
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
			<div class="container">
				<div class="eight columns">
					<h1><?php the_title(); ?></h1>
					<p class="author"><?php _e('Por ', 'jeo'); ?><?php the_author(); ?> em <?php the_date(); ?></p>
					Categorias: <?php the_category( ', '); ?><br>
					<?php the_tags('<p class="tags"><span class="lsf">&#xE128;</span> ', ', ', '</p>'); ?>
					
					<p class="date">
						<!--<span class="lsf">&#xE12b;</span>-->
						
						<?php the_date(); ?></p>
						
				</div>
				<div class="three columns offset-by-one">
					<div class="post-meta">
					</div>
				</div>
				</div>
			</div>
		</header>
		<section class="content">
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
					<?php comments_template(); ?>
				</div>
				<div class="three columns offset-by-one">
					<aside id="sidebar">
						<ul class="widgets">
							<?php dynamic_sidebar('post'); ?>
						</ul>
					</aside>
				</div>
			</div>
		</section>
	</article>

<?php endif; ?>

<?php get_footer(); ?>