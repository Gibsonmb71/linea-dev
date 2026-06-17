<?php
/**
 * Title: Section card row
 * Slug: weekly-wildcat/homepage-section-card-row
 * Categories: weekly-wildcat-homepage, weekly-wildcat-sections
 * Description: A three-column section row for sports, student life, features, or other newsroom desks.
 */
?>
<!-- wp:group {"align":"wide","className":"ww-section-card-row","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ww-section-card-row" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"className":"ww-section-teaser ww-section-teaser-green","layout":{"type":"constrained"}} -->
	<div class="wp-block-group ww-section-teaser ww-section-teaser-green">
		<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"className":"ww-section-heading","level":2} -->
			<h2 class="wp-block-heading ww-section-heading">Sports</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"ww-view-all","fontSize":"x-small"} -->
			<p class="ww-view-all has-x-small-font-size">View all</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":8,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"ww-section-teaser-query"} -->
		<div class="wp-block-query ww-section-teaser-query">
			<!-- wp:post-template -->
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
				<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"medium"} /-->
				<!-- wp:group {"className":"ww-byline-row","layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group ww-byline-row">
					<!-- wp:post-author-name {"fontSize":"x-small"} /-->
					<!-- wp:post-date {"fontSize":"x-small"} /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"ww-section-teaser ww-section-teaser-purple","layout":{"type":"constrained"}} -->
	<div class="wp-block-group ww-section-teaser ww-section-teaser-purple">
		<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"className":"ww-section-heading","level":2} -->
			<h2 class="wp-block-heading ww-section-heading">Student Life</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"ww-view-all","fontSize":"x-small"} -->
			<p class="ww-view-all has-x-small-font-size">View all</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":9,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"ww-section-teaser-query"} -->
		<div class="wp-block-query ww-section-teaser-query">
			<!-- wp:post-template -->
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
				<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"medium"} /-->
				<!-- wp:group {"className":"ww-byline-row","layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group ww-byline-row">
					<!-- wp:post-author-name {"fontSize":"x-small"} /-->
					<!-- wp:post-date {"fontSize":"x-small"} /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"ww-section-teaser ww-section-teaser-blue","layout":{"type":"constrained"}} -->
	<div class="wp-block-group ww-section-teaser ww-section-teaser-blue">
		<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"className":"ww-section-heading","level":2} -->
			<h2 class="wp-block-heading ww-section-heading">Features</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"ww-view-all","fontSize":"x-small"} -->
			<p class="ww-view-all has-x-small-font-size">View all</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":10,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"ww-section-teaser-query"} -->
		<div class="wp-block-query ww-section-teaser-query">
			<!-- wp:post-template -->
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
				<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"medium"} /-->
				<!-- wp:group {"className":"ww-byline-row","layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group ww-byline-row">
					<!-- wp:post-author-name {"fontSize":"x-small"} /-->
					<!-- wp:post-date {"fontSize":"x-small"} /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
