<?php
/**
 * Title: Featured school newspaper homepage
 * Slug: weekly-wildcat/homepage-featured
 * Categories: weekly-wildcat-homepage
 * Description: A starter featured-story section for a student newspaper homepage.
 */
?>
<!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|ink","width":"3px"}},"spacing":{"padding":{"top":"1rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--ink);border-top-width:3px;padding-top:1rem">
	<!-- wp:heading {"fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-x-large-font-size">Featured Story</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"66.66%"} -->
		<div class="wp-block-column" style="flex-basis:66.66%">
			<!-- wp:image {"aspectRatio":"16/9","scale":"cover"} -->
			<figure class="wp-block-image"><img alt="" style="aspect-ratio:16/9;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%">
			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size">Add a headline here</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Use this section for the biggest story of the week, a staff editorial, or a major school event.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Read more</a></div><!-- /wp:button --></div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
