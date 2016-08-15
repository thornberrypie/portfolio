<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'custom' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	</header>
	<div class="page-posts clearfix">
		<?php the_excerpt('...'); ?>
		<p class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></p>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'custom' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div>
	<footer class="article-links clearfix"><?php
		$categories_list = get_the_category_list( __( ', ', 'custom' ) );
		$author = ucfirst(get_the_author()); ?>
		<span class="cat-links"><?php
			print 'von <a href="">'.$author.'</a> am '.get_the_date();
			printf( __( '<span class="%1$s"> in the category</span> %2$s', 'custom' ), 'category-links', $categories_list ); ?>
		</span><?php
		if (comments_open()) : ?>
			<span class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Comments (0)', 'custom' ) . '</span>', __( 'Comment (1)', 'custom' ), __( 'Comments (%)', 'custom' ) ); ?>
			</span><?php
		endif; // End if comments_open() ?>
	</footer>
</article>
