<?php
if (is_front_page()) {
    get_template_part('template-parts/header', 'home');
} elseif (is_category()) {
    get_template_part('template-parts/header', 'category');
} else {
    get_template_part('template-parts/header');
}
?>

<div class="container">
	<main class="main-content">
		<div class="content-wr">
			<section class="posts-list-blocks-noviny">
				<?php
				$args = array(
					'cat' => 2,
					'posts_per_page' => 6,
					'post_status' => 'publish',
				);

				$query = new WP_Query($args);

				if ($query->have_posts()) {
					echo '<div class="posts-list-title">';
					echo '<h2>' . get_cat_name(2) . '</h2>';
					echo '<a class="a-end" href="' . esc_url(get_category_link(2)) . '">Дивитись все</a>';
					echo '</div>';

					// Открываем контейнер для всех постов (вынесли из цикла)
					echo '<div class="posts-list list-noviny">';

					while ($query->have_posts()) {
						$query->the_post();
						?>
						<article class="post">
							<a class="post-tmb" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
							</a>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="block-link">
								<span><?php the_time('d F Y'); ?></span>
								<a class="a-end" href="<?php the_permalink(); ?>">Читати</a>
							</div>
						</article>
						<?php
					}

					// Закрываем контейнер
					echo '</div>';
				}
				wp_reset_postdata();
				?>
			</section>
			<aside class="sidebar">
				<?php get_template_part('sidebar-blocks/ostann-vipusk'); ?>
				<?php get_template_part('sidebar-blocks/gotuetsya'); ?>
				<?php get_template_part('sidebar-blocks/calendar'); ?>
			</aside>
		</div>

		<!-- Блок с рекламой и подпиской на соцсети -->
		<section class="subscribe-section">
			<?php get_template_part('template-parts/reklama'); ?>
		</section>

		<div class="content-wr">
			<div class="posts-list-blocks-wr">
			
<section class="posts-list-blocks"><!-- 1 Сорев. в Украине -->
	<?php
	$args = array(
		'cat' => 16,
		'posts_per_page' => 2,
		'post_status' => 'publish',
	);

	$query = new WP_Query($args);

	if ($query->have_posts()) {
		echo '<div class="posts-list-title">';
		echo '<h2>' . get_cat_name(16) . '</h2>';
		echo '<a class="a-end" href="' . esc_url(get_category_link(16)) . '">Дивитись все</a>';
		echo '</div>';

		// Открываем контейнер для всех постов (вынесли из цикла)
		echo '<div class="posts-list">';

		while ($query->have_posts()) {
			$query->the_post();
			?>
			<article class="post">
				<a class="post-tmb" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<div class="block-link">
					<span><?php the_time('d F Y'); ?></span>
					<a class="a-end" href="<?php the_permalink(); ?>">Читати</a>
				</div>
			</article>
			<?php
		}
		// Закрываем контейнер
		echo '</div>';
	}
	wp_reset_postdata();
	?>
</section><!-- //1 Сорев. в Украине -->

<section class="posts-list-blocks"><!-- 2 Вести с рег. -->
	<?php
	$args = array(
		'cat' => 24,
		'posts_per_page' => 2,
		'post_status' => 'publish',
	);

	$query = new WP_Query($args);

	if ($query->have_posts()) {
		echo '<div class="posts-list-title">';
		echo '<h2>' . get_cat_name(24) . '</h2>';
		echo '<a class="a-end" href="' . esc_url(get_category_link(24)) . '">Дивитись все</a>';
		echo '</div>';

		// Открываем контейнер для всех постов (вынесли из цикла)
		echo '<div class="posts-list">';

		while ($query->have_posts()) {
			$query->the_post();
			?>
			<article class="post">
				<a class="post-tmb" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<div class="block-link">
					<span><?php the_time('d F Y'); ?></span>
					<a class="a-end" href="<?php the_permalink(); ?>">Читати</a>
				</div>
			</article>
			<?php
		}
		// Закрываем контейнер
		echo '</div>';
	}
	wp_reset_postdata();
	?>
</section><!-- //2 Вести с рег. -->

<section class="posts-list-blocks"><!-- 3 Олимпиады и ВКИ -->
	<?php
	$args = array(
		'cat' => 18,
		'posts_per_page' => 2,
		'post_status' => 'publish',
	);

	$query = new WP_Query($args);

	if ($query->have_posts()) {
		echo '<div class="posts-list-title">';
		echo '<h2>' . get_cat_name(18) . '</h2>';
		echo '<a class="a-end" href="' . esc_url(get_category_link(18)) . '">Дивитись все</a>';
		echo '</div>';

		// Открываем контейнер для всех постов (вынесли из цикла)
		echo '<div class="posts-list">';

		while ($query->have_posts()) {
			$query->the_post();
			?>
			<article class="post">
				<a class="post-tmb" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<div class="block-link">
					<span><?php the_time('d F Y'); ?></span>
					<a class="a-end" href="<?php the_permalink(); ?>">Читати</a>
				</div>
			</article>
			<?php
		}
		// Закрываем контейнер
		echo '</div>';
	}
	wp_reset_postdata();
	?>
</section><!-- //3 Олимпиады и ВКИ --> 

<section class="posts-list-blocks"><!-- 4 Україна на між. змаг. -->
	<?php
	$args = array(
		'cat' => 17,
		'posts_per_page' => 2,
		'post_status' => 'publish',
	);

	$query = new WP_Query($args);

	if ($query->have_posts()) {
		echo '<div class="posts-list-title">';
		echo '<h2>' . get_cat_name(17) . '</h2>';
		echo '<a class="a-end" href="' . esc_url(get_category_link(17)) . '">Дивитись все</a>';
		echo '</div>';

		// Открываем контейнер для всех постов (вынесли из цикла)
		echo '<div class="posts-list">';

		while ($query->have_posts()) {
			$query->the_post();
			?>
			<article class="post">
				<a class="post-tmb" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<div class="block-link">
					<span><?php the_time('d F Y'); ?></span>
					<a class="a-end" href="<?php the_permalink(); ?>">Читати</a>
				</div>
			</article>
			<?php
		}
		// Закрываем контейнер
		echo '</div>';
	}
	wp_reset_postdata();
	?>
</section><!-- //4 Україна на між. змаг. -->

<section class="posts-list-blocks"><!-- 5 Теория -->
	<?php
	$args = array(
		'cat' => 46,
		'posts_per_page' => 2,
		'post_status' => 'publish',
	);

	$query = new WP_Query($args);

	if ($query->have_posts()) {
		echo '<div class="posts-list-title">';
		echo '<h2>' . get_cat_name(46) . '</h2>';
		echo '<a class="a-end" href="' . esc_url(get_category_link(46)) . '">Дивитись все</a>';
		echo '</div>';

		// Открываем контейнер для всех постов (вынесли из цикла)
		echo '<div class="posts-list">';

		while ($query->have_posts()) {
			$query->the_post();
			?>
			<article class="post">
				<a class="post-tmb" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<div class="block-link">
					<span><?php the_time('d F Y'); ?></span>
					<a class="a-end" href="<?php the_permalink(); ?>">Читати</a>
				</div>
			</article>
			<?php
		}
		// Закрываем контейнер
		echo '</div>';
	}
	wp_reset_postdata();
	?>
</section><!-- //5 Теория -->

<section class="posts-list-blocks"><!-- 6 Ветеринарія -->
	<?php
	$args = array(
		'cat' => 30,
		'posts_per_page' => 2,
		'post_status' => 'publish',
	);

	$query = new WP_Query($args);

	if ($query->have_posts()) {
		echo '<div class="posts-list-title">';
		echo '<h2>' . get_cat_name(30) . '</h2>';
		echo '<a class="a-end" href="' . esc_url(get_category_link(30)) . '">Дивитись все</a>';
		echo '</div>';

		// Открываем контейнер для всех постов (вынесли из цикла)
		echo '<div class="posts-list">';

		while ($query->have_posts()) {
			$query->the_post();
			?>
			<article class="post">
				<a class="post-tmb" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<div class="block-link">
					<span><?php the_time('d F Y'); ?></span>
					<a class="a-end" href="<?php the_permalink(); ?>">Читати</a>
				</div>
			</article>
			<?php
		}
		// Закрываем контейнер
		echo '</div>';
	}
	wp_reset_postdata();
	?>
</section><!-- //6 Ветеринарія -->

<section class="posts-list-blocks"><!-- 7 Теорія кінного спорту -->
	<?php
	$args = array(
		'cat' => 26,
		'posts_per_page' => 2,
		'post_status' => 'publish',
	);

	$query = new WP_Query($args);

	if ($query->have_posts()) {
		echo '<div class="posts-list-title">';
		echo '<h2>' . get_cat_name(26) . '</h2>';
		echo '<a class="a-end" href="' . esc_url(get_category_link(26)) . '">Дивитись все</a>';
		echo '</div>';

		// Открываем контейнер для всех постов (вынесли из цикла)
		echo '<div class="posts-list">';

		while ($query->have_posts()) {
			$query->the_post();
			?>
			<article class="post">
				<a class="post-tmb" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<div class="block-link">
					<span><?php the_time('d F Y'); ?></span>
					<a class="a-end" href="<?php the_permalink(); ?>">Читати</a>
				</div>
			</article>
			<?php
		}
		// Закрываем контейнер
		echo '</div>';
	}
	wp_reset_postdata();
	?>
</section><!-- //7 Теорія кінного спорту -->
			</div>
			<aside class="sidebar">
				<?php get_template_part('sidebar-blocks/sidebar-img'); ?>
				<?php get_template_part('sidebar-blocks/sidebar-video'); ?>
				<?php get_template_part('sidebar-blocks/sidebar-transl'); ?>				
				<?php get_template_part('sidebar-blocks/sponsori'); ?>				
				<?php get_template_part('sidebar-blocks/vesti-regions'); ?>
				<?php get_template_part('sidebar-blocks/tehrezultati'); ?>				
				<?php get_template_part('sidebar-blocks/foto-video-dnya'); ?>				
				<?php get_template_part('sidebar-blocks/kolegiya-sudey'); ?>
				<!-- <?php get_template_part('sidebar-blocks/personalii'); ?> -->
			</aside>
		</div>
	</main>
</div>

<?php get_template_part('template-parts/prefooter-magazine'); ?>

<?php get_footer(); ?>