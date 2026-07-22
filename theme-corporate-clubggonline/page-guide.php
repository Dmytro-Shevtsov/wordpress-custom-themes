<?php /* Template Name: Guide */ ?>
<?php get_header(); ?>

<section class="guide-page hero-guide" >
	<div class="container">
    <div class="guide-page-wr">
		<div class="hero-guide-in hero-guide-title">
			<h1 class="title-h2"><?php the_title(); ?></h1>
		</div> 
		<div class="hero-guide-in hero-guide-img">
			<?php the_post_thumbnail(); ?>
		</div> 
    </div>  
	</div>
</section>

<section class="guide-content">
	<div class="container">
		<div class="guide-content-main-wr">

<div class="guide-content-wr">
<?php
$step_1 = get_field('step_1');
if( $step_1 ): ?>
			
	<div class="guide-content-in guide-content-title"><?php echo esc_attr( $step_1['1_step_large_headline'] ); ?></div> 
	<div class="guide-content-in guide-content-subtitle"><?php echo esc_attr( $step_1['1_step_small_text'] ); ?></div> 
	<?php if ( !empty($step_1['1_step_small_headline']) ): ?>
	<div class="guide-content-in guide-content-subtitle-sub">
	<?php echo esc_attr( $step_1['1_step_small_headline'] ); ?>
	</div> 
	<?php endif; ?>				
		
	<div class="guide-content-in guide-content-img">				
		<?php if ( !empty($step_1['link_1']) ): ?>
		<a target="_blank" href="<?php echo esc_attr( $step_1['link_1'] ); ?>"><img src="<?php echo esc_url( $step_1['1_step_picture_1']['url'] ); ?>" alt="" /></a>
		<?php endif; ?>
		<?php if ( !empty($step_1['link_2']) ): ?>
		<a target="_blank" href="<?php echo esc_attr( $step_1['link_2'] ); ?>"><img src="<?php echo esc_url( $step_1['1_step_picture_2']['url'] ); ?>" alt="" /></a>
		<?php endif; ?>
		<?php if ( !empty($step_1['link_3']) ): ?>
		<a target="_blank" href="<?php echo esc_attr( $step_1['link_3'] ); ?>"><img src="<?php echo esc_url( $step_1['1_step_picture_3']['url'] ); ?>" alt="" /></a>
		<?php endif; ?>	
	</div> 
		
<?php endif; ?>
</div>

<div class="guide-content-wr">
<?php
$step_2 = get_field('step_2');
if( $step_2 ): ?>
			
	<div class="guide-content-in guide-content-title"><?php echo esc_attr( $step_2['2_step_large_headline'] ); ?></div> 
	<div class="guide-content-in guide-content-subtitle"><?php echo esc_attr( $step_2['2_step_small_text'] ); ?></div> 
	<?php if ( !empty($step_2['2_step_small_headline']) ): ?>
	<div class="guide-content-in guide-content-subtitle-sub">
	<?php echo esc_attr( $step_2['2_step_small_headline'] ); ?>
	</div> 
	<?php endif; ?>				
				
	<div class="guide-content-in guide-content-img">				
	<?php if ( !empty($step_2['2_step_picture_1']) ): ?>
	<img src="<?php echo esc_url( $step_2['2_step_picture_1']['url'] ); ?>" alt="" />
	<?php endif; ?>
	<?php if ( !empty($step_2['2_step_picture_2']) ): ?>
	<img src="<?php echo esc_url( $step_2['2_step_picture_2']['url'] ); ?>" alt="" />
	<?php endif; ?>
	<?php if ( !empty($step_2['2_step_picture_3']) ): ?>
	<img src="<?php echo esc_url( $step_2['2_step_picture_3']['url'] ); ?>" alt="" />
	<?php endif; ?>					
	</div> 
				
<?php endif; ?>
</div>

<div class="guide-content-wr">
<?php
$step_3 = get_field('step_3');
if( $step_3 ): ?>
			
	<div class="guide-content-in guide-content-title"><?php echo esc_attr( $step_3['large_headline'] ); ?></div> 
	<div class="guide-content-in guide-content-subtitle"><?php echo esc_attr( $step_3['small_text'] ); ?></div> 
	<?php if ( !empty($step_3['small_headline']) ): ?>
	<div class="guide-content-in guide-content-subtitle-sub">
	<?php echo esc_attr( $step_3['small_headline'] ); ?>
	</div> 
	<?php endif; ?>				
				
	<div class="guide-content-in guide-content-img">				
	<?php if ( !empty($step_3['picture_1']) ): ?>
	<img src="<?php echo esc_url( $step_3['picture_1']['url'] ); ?>" alt="" />
	<?php endif; ?>
	<?php if ( !empty($step_3['picture_2']) ): ?>
	<img src="<?php echo esc_url( $step_3['picture_2']['url'] ); ?>" alt="" />
	<?php endif; ?>
	<?php if ( !empty($step_3['picture_3']) ): ?>
	<img src="<?php echo esc_url( $step_3['picture_3']['url'] ); ?>" alt="" />
	<?php endif; ?>					
	</div> 
				
<?php endif; ?>
</div>

<div class="guide-content-wr">
<?php
$step_4 = get_field('step_4');
if( $step_4 ): ?>
			
	<div class="guide-content-in guide-content-title"><?php echo esc_attr( $step_4['large_headline'] ); ?></div> 
	<div class="guide-content-in guide-content-subtitle"><?php echo esc_attr( $step_4['small_text'] ); ?></div> 
	<?php if ( !empty($step_4['small_headline']) ): ?>
	<div class="guide-content-in guide-content-subtitle-sub">
	<?php echo esc_attr( $step_4['small_headline'] ); ?>
	</div> 
	<?php endif; ?>				
				
	<div class="guide-content-in guide-content-img">				
	<?php if ( !empty($step_4['picture_1']) ): ?>
	<img src="<?php echo esc_url( $step_4['picture_1']['url'] ); ?>" alt="" />
	<?php endif; ?>
	<?php if ( !empty($step_4['picture_2']) ): ?>
	<img src="<?php echo esc_url( $step_4['picture_2']['url'] ); ?>" alt="" />
	<?php endif; ?>
	<?php if ( !empty($step_4['picture_3']) ): ?>
	<img src="<?php echo esc_url( $step_4['picture_3']['url'] ); ?>" alt="" />
	<?php endif; ?>					
	</div> 
				
<?php endif; ?>
</div>

<div class="guide-content-wr">
<?php
$step_5 = get_field('step_5');
if( $step_5 ): ?>
			
	<div class="guide-content-in guide-content-title"><?php echo esc_attr( $step_5['large_headline'] ); ?></div> 
	<div class="guide-content-in guide-content-subtitle"><?php echo esc_attr( $step_5['small_text'] ); ?></div> 
	<?php if ( !empty($step_5['small_headline']) ): ?>
	<div class="guide-content-in guide-content-subtitle-sub">
	<?php echo esc_attr( $step_5['small_headline'] ); ?>
	</div> 
	<?php endif; ?>				
				
	<div class="guide-content-in guide-content-img">				
	<?php if ( !empty($step_5['picture_1']) ): ?>
	<img src="<?php echo esc_url( $step_5['picture_1']['url'] ); ?>" alt="" />
	<?php endif; ?>
	<?php if ( !empty($step_5['picture_2']) ): ?>
	<img src="<?php echo esc_url( $step_5['picture_2']['url'] ); ?>" alt="" />
	<?php endif; ?>
	<?php if ( !empty($step_5['picture_3']) ): ?>
	<img src="<?php echo esc_url( $step_5['picture_3']['url'] ); ?>" alt="" />
	<?php endif; ?>					
	</div> 
				
<?php endif; ?>
</div>

<div class="guide-content-wr">
<?php
$step_6 = get_field('step_6');
if( $step_6 ): ?>
			
	<div class="guide-content-in guide-content-title"><?php echo esc_attr( $step_6['large_headline'] ); ?></div> 
	<div class="guide-content-in guide-content-subtitle"><?php echo wp_kses_post( $step_6['small_text'] ); ?></div> 
	<?php if ( !empty($step_6['small_headline']) ): ?>
	<div class="guide-content-in guide-content-subtitle-sub">
	<?php echo esc_attr( $step_6['small_headline'] ); ?>
	</div> 
	<?php endif; ?>				
				
	<div class="guide-content-in guide-content-img">				
	<?php if ( !empty($step_6['picture_1']) ): ?>
	<img src="<?php echo esc_url( $step_6['picture_1']['url'] ); ?>" alt="" />
	<?php endif; ?>
	<?php if ( !empty($step_6['picture_2']) ): ?>
	<img src="<?php echo esc_url( $step_6['picture_2']['url'] ); ?>" alt="" />
	<?php endif; ?>
	<?php if ( !empty($step_6['picture_3']) ): ?>
	<img src="<?php echo esc_url( $step_6['picture_3']['url'] ); ?>" alt="" />
	<?php endif; ?>					
	</div> 
				
<?php endif; ?>
</div>

<div class="guide-content-wr">
<?php
$step_7 = get_field('step_7');
if( $step_7 ): ?>
			
	<div class="guide-content-in guide-content-title"><?php echo esc_attr( $step_7['large_headline'] ); ?></div> 
	<div class="guide-content-in guide-content-subtitle"><?php echo esc_attr( $step_7['small_text'] ); ?></div> 
	<?php if ( !empty($step_7['small_headline']) ): ?>
	<div class="guide-content-in guide-content-subtitle-sub">
	<?php echo esc_attr( $step_7['small_headline'] ); ?>
	</div> 
	<?php endif; ?>				
				
	<div class="guide-content-in guide-content-img">				
	<?php if ( !empty($step_7['picture_1']) ): ?>
	<img src="<?php echo esc_url( $step_7['picture_1']['url'] ); ?>" alt="" />
	<?php endif; ?>
	<?php if ( !empty($step_7['picture_2']) ): ?>
	<img src="<?php echo esc_url( $step_7['picture_2']['url'] ); ?>" alt="" />
	<?php endif; ?>
	<?php if ( !empty($step_7['picture_3']) ): ?>
	<img src="<?php echo esc_url( $step_7['picture_3']['url'] ); ?>" alt="" />
	<?php endif; ?>	
	<?php if ( !empty($step_7['picture_4']) ): ?>
	<img src="<?php echo esc_url( $step_7['picture_4']['url'] ); ?>" alt="" />
	<?php endif; ?>		
	</div> 
				
<?php endif; ?>
</div>

		</div>
	</div>
</section>

<section class="guide-pre-footer">
	<div class="container">
		<div class="guide-pre-footer-container">
			<div class="separate-block separate-block-prefut"></div>
			<div class="guide-pre-footer-wr">
			<?php
			$ht_pre_footer = get_field('ht_pre_footer');
			if( $ht_pre_footer ): ?>	
				<div class="guide-pre-footer-in guide-pre-footer-title"><?php echo esc_attr( $ht_pre_footer['title_pre_footer'] ); ?><img src="<?php echo esc_url( $ht_pre_footer['image_pre_footer']['url'] ); ?>" alt="" /></div>
				<div class="guide-pre-footer-in guide-pre-footer-desc">
				<?php echo esc_attr( $ht_pre_footer['description_pre_footer'] ); ?>
				</div>
				<div class="guide-pre-footer-in guide-pre-footer-text">
					<?php echo wp_kses_post( $ht_pre_footer['text_pre_footer'] ); ?>
				</div>
			<?php endif; ?>
			</div>
			<div class="separate-block separate-block-prefut"></div>
		</div>
	</div>
</section>






<?php get_footer(); ?>