<?php get_header(); ?>

<?php jeo_featured(); ?>

<div class="section-title">
	<div class="container">
		<div class="twelve columns">
			<!--Retorna o número de posts-->
			<h1><?php echo  $wp_query->found_posts; _e(' '); _e('resultados para ', 'jeo'); echo $_GET['s']; ?></h1>
		</div>
	</div>
</div>
<?php get_template_part('loop'); ?>

<?php get_footer(); ?>