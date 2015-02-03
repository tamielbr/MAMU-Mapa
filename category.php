<?php get_header(); ?>

<?php jeo_featured(); ?>

<div class="section-title">
	<div class="container">
		<div class="twelve columns">
			<h2>
				<?php single_cat_title(); ?>
				<!--Adds the logo to each page, to the right of the page title-->
				<a href="http://www.mamu.net.br"><img class="smallicon" src="mamu.png"></a>
			</h2>
		</div>
	</div>
</div>
<?php get_template_part('loop'); ?>

<?php get_footer(); ?>