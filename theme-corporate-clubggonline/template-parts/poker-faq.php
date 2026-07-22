<section class="poker-faq">
	<div class="container">

	<?php
		$faq = get_field('faq');
		if( $faq ): ?>
	
		<div class="poker-faq-title"><h2 class="title-h2">שאלות נפוצות</h2></div>
		<div class="faq">
		
		
		
			<?php if ( !empty($faq['question_1']) ): ?>
			<div class="faq-item">
				<button class="faq-question">
					<span class="faq-title"><?php echo esc_attr( $faq['question_1'] ); ?></span>
					<span class="span-faq-icon"></span>
				</button>
				<div class="faq-answer">
					<?php echo wp_kses_post( $faq['answer_1'] ); ?>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if ( !empty($faq['question_2']) ): ?>
			<div class="faq-item">
				<button class="faq-question">
					<span class="faq-title"><?php echo esc_attr( $faq['question_2'] ); ?></span>
					<span class="span-faq-icon"></span>
				</button>
				<div class="faq-answer">
					<?php echo wp_kses_post( $faq['answer_2'] ); ?>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if ( !empty($faq['question_3']) ): ?>
			<div class="faq-item">
				<button class="faq-question">
					<span class="faq-title"><?php echo esc_attr( $faq['question_3'] ); ?></span>
					<span class="span-faq-icon"></span>
				</button>
				<div class="faq-answer">
					<?php echo wp_kses_post( $faq['answer_3'] ); ?>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if ( !empty($faq['question_4']) ): ?>
			<div class="faq-item">
				<button class="faq-question">
					<span class="faq-title"><?php echo esc_attr( $faq['question_4'] ); ?></span>
					<span class="span-faq-icon"></span>
				</button>
				<div class="faq-answer">
					<?php echo wp_kses_post( $faq['answer_4'] ); ?>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if ( !empty($faq['question_5']) ): ?>
			<div class="faq-item">
				<button class="faq-question">
					<span class="faq-title"><?php echo esc_attr( $faq['question_5'] ); ?></span>
					<span class="span-faq-icon"></span>
				</button>
				<div class="faq-answer">
					<?php echo wp_kses_post( $faq['answer_5'] ); ?>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if ( !empty($faq['question_6']) ): ?>
			<div class="faq-item">
				<button class="faq-question">
					<span class="faq-title"><?php echo esc_attr( $faq['question_6'] ); ?></span>
					<span class="span-faq-icon"></span>
				</button>
				<div class="faq-answer">
					<?php echo wp_kses_post( $faq['answer_6'] ); ?>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if ( !empty($faq['question_7']) ): ?>
			<div class="faq-item">
				<button class="faq-question">
					<span class="faq-title"><?php echo esc_attr( $faq['question_7'] ); ?></span>
					<span class="span-faq-icon"></span>
				</button>
				<div class="faq-answer">
					<?php echo wp_kses_post( $faq['answer_7'] ); ?>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if ( !empty($faq['question_8']) ): ?>
			<div class="faq-item">
				<button class="faq-question">
					<span class="faq-title"><?php echo esc_attr( $faq['question_8'] ); ?></span>
					<span class="span-faq-icon"></span>
				</button>
				<div class="faq-answer">
					<?php echo wp_kses_post( $faq['answer_8'] ); ?>
				</div>
			</div>
			<?php endif; ?>

			



	
		</div>		
		
	<?php endif; ?>		
	</div>
</section>

