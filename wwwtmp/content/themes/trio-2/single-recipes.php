<?php get_header(); ?>

<div id="primary">
	<div id="content" class="recipes" role="main">

		<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="recipe-content">
			<div class="entry-content">
				<h1>Featured Recipe</h1>
				<h2><?php the_title(); ?></h2>
				<span>Yield:</span> <?php echo get_post_meta($post->ID, 'ecpt_yield', true); ?>
				<?php echo get_post_meta($post->ID, 'ecpt_ingredients', true); ?>
				<?php echo get_post_meta($post->ID, 'ecpt_directions', true); ?>
				<span>Chef's Tip:</span> <?php echo get_post_meta($post->ID, 'ecpt_chefstip', true); ?>
				<?php the_content(); ?>
				<p style="font-size: 18px; margin-top: 1em;">For more inspiring recipe ideas, please visit <a href="http://www.nestleprofessional.com/united-states/en/Landing/Pages/RecipesFinder.aspx?FacetItem2=TRIO%C2%AE">NestleProfessional.com</a></p>
			</div>
		</article>
		<?php endwhile; // End the loop ?>
	</div>

	<?php the_post_thumbnail('large', array( 'class' => "recipe-image attachment-post-thumbnail")); ?>

	<div id="recipe-list">
		<h3>Previous Recipes</h3>
		<ul>
		<?php $loop = new WP_Query( array( 'post_type' => 'recipes', 'posts_per_page' => 12 ) ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</li>
		<?php endwhile; ?>
		</ul>
	</div>

</div><!-- #primary -->

<?php get_footer(); ?>