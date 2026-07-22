<?php get_header(); ?>
<main class="post-page">
	<section class="section-post-title">
		<div class="container">
			<div class="post-title-wr">
				<div class="return-cat">
					<?php 
					$category = get_the_category(); 
					if ($category) {
						$category_link = get_category_link($category[0]->term_id);
						echo '<a href="' . esc_url($category_link) . '">חזרה' . esc_html($category[0]->name) . '</a>';
					}
					?>
				</div>
				<h1 class="post-title"><?php the_title(); ?></h1>
				<div class="post-date">
					<?php
					setlocale(LC_TIME, 'he_IL.UTF-8'); // Устанавливаем локаль на иврит
					echo strftime('%d %B %Y', get_the_time('U'));
					?>
				</div>
			</div>  
		</div>
	</section>

	<section class="section-post-content">
		<div class="container">
			<div class="post-img">
			<?php 
			if (has_post_thumbnail()) { 
				the_post_thumbnail('full'); 
			} 
			?>
			</div>
			<div class="post-content-wr">
				<div class="post-content">
				<?php
				while ( have_posts() ) :
				the_post();
				the_content();
				endwhile;
				?>
				</div>
				<div class="post-share">
					<div class="post-share-title">שתף את המאמר</div>
					<div class="post-share-link">
						<?php
						$post_url = urlencode(get_permalink());
						$post_title = urlencode(get_the_title());

						// Facebook
						$facebook_url = "https://www.facebook.com/sharer/sharer.php?u=$post_url";

						// Twitter (X)
						$twitter_url = "https://twitter.com/intent/tweet?url=$post_url&text=$post_title";

						// LinkedIn
						$linkedin_url = "https://www.linkedin.com/shareArticle?mini=true&url=$post_url&title=$post_title";
						?>
						<div class="share-buttons">
							<a href="<?php echo esc_url($facebook_url); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon/facebook.svg" alt="Facebook"></a>
							<a href="<?php echo esc_url($twitter_url); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon/twitter.svg" alt="Twitter"></a>
							<a href="<?php echo esc_url($linkedin_url); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon/linkedin.svg" alt="LinkedIn"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="section-latest-posts">
		<div class="container">

			<?php
			$current_post_id = get_the_ID(); // Получаем ID текущего поста

			$args = array(
				'post_type'      => 'post', // Тип записи (обычные статьи)
				'posts_per_page' => 3, // Количество постов в цикле
				'post__not_in'   => array($current_post_id), // Исключаем текущий пост
				'orderby'        => 'date', // Сортировка по дате
				'order'          => 'DESC' // От новых к старым
			);

			$query = new WP_Query($args);

			if ($query->have_posts()) : ?>

			<div class="latest-posts">
				<h2 class="latest-posts-h2">מאמרים אחרונים</h2>
				<div class="latest-posts-list">
					<?php while ($query->have_posts()) : $query->the_post(); ?>
						<article class="latest-post">
							<a href="<?php the_permalink(); ?>">
								<?php if (has_post_thumbnail()) : ?>
									<div class="latest-post-img">
										<?php the_post_thumbnail('medium'); ?>
									</div>
								<?php endif; ?>
							</a>
							<div class="latest-post-content">
								<h3 class="latest-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p class="latest-post-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20, '  ...'); ?></p>
								<div class="latest-post-content-btm">
									<a href="<?php the_permalink(); ?>" class="latest-post-btn">
										<img src="<?php bloginfo('template_url'); ?>/images/icon/arrow-post.svg" alt="">
									</a>
									<span class="latest-post-date">
									<?php
									setlocale(LC_TIME, 'he_IL.UTF-8');
									echo strftime('%d %B %Y', get_the_time('U'));
									?>
									</span>
								</div>
							</div>
						</article>
					<?php endwhile; ?>
				</div>
			</div>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>


			
		</div>
	</section>
</main>
<?php get_template_part('template-parts/pre-footer'); ?>
<?php get_footer(); ?>


















