<?php /* Template Name:Home*/ ?>
<?php get_header(); ?>
<?php 
$marketing_text = get_field('marketing_text');
$marketing_list1 = get_field('marketing_list_1');
$marketing_list2 = get_field('marketing_list_2');
$marketing_list3 = get_field('marketing_list_3');
$resource_text = get_field('resource_text');
$resource_list1 = get_field('resource_list_1');
$resource_list2 = get_field('resource_list_2');
$resource_list3 = get_field('resource_list_3');
$strategy_text = get_field('strategy_text');
$strategy_list1 = get_field('strategy_list_1');
$strategy_list2 = get_field('strategy_list_2');
$strategy_list3 = get_field('strategy_list_3');
$about_image1 = get_field('about_image_1');
$about_image2 = get_field('about_image_2');
$about_image3 = get_field('about_image_3');
$about_image4 = get_field('about_image_4');
$video_url = get_field('video_url');
$services_title = get_field('service_title');
$services_text = get_field('service_text');
$teamtitle = get_field('team_title');
$teamtext = get_field('team_text');
$contacttitle = get_field('contact_title');
$contacttext = get_field('contact_text');
$contactcode = get_field('contact_code');
?>

<div id="fh5co-about" data-section="about">
			<div class="fh5co-2col">
				
				<div class="fh5co-2col-inner left">
						
						<div class="fh5co-tabs-container">
							<ul class="fh5co-tabs fh5co-three">
								<li class="active"><a href="#" data-tab="marketing">Marketing</a></li>
								<li><a href="#" data-tab="analysis">Resources</a></li>
								<li><a href="#" data-tab="strategy">Strategy</a></li>
							</ul>
							<div class="fh5co-tab-content active" data-tab-content="marketing">
								<?php echo $marketing_text; ?>
								<ul class="checked">
									<li><?php echo $marketing_list1 ; ?></li>
									<li><?php echo $marketing_list2 ; ?></li>
									<li><?php echo $marketing_list3 ; ?></li>
								</ul>
								<p><a href="#" class="btn btn-primary btn-outline">Get In Touch</a></p>
							</div>

							<div class="fh5co-tab-content" data-tab-content="analysis">
								<?php echo $resource_text ; ?>
								<ul class="checked">
									<li><?php echo $resource_list1 ; ?></li>
									<li><?php echo $resource_list2 ; ?></li>
									<li><?php echo $resource_list3 ; ?></li>
								</ul>
								<p><a href="#" class="btn btn-primary btn-outline">Get In Touch</a></p>
							</div>

							<div class="fh5co-tab-content" data-tab-content="strategy">
								<?php echo $strategy_text ; ?>
								<ul class="checked">
									<li><?php echo $strategy_list1 ; ?></li>
									<li><?php echo $strategy_list2 ; ?></li>
									<li><?php echo $strategy_list3 ; ?></li>
								</ul>
								<p><a href="#" class="btn btn-primary btn-outline">Get In Touch</a></p>
							</div>

						</div>

				</div>

			</div>
			<div class="fh5co-2col fh5co-text">
				<div class="fh5co-grid">
					<div class="fh5co-grid-item" style="background-image: url(<?php echo $about_image1['url']; ?>);"></div>
					<div class="fh5co-grid-item" style="background-image: url(<?php echo $about_image2['url']; ?>);"></div>
					<div class="fh5co-grid-item" style="background-image: url(<?php echo $about_image3['url']; ?>);"></div>
					<div class="fh5co-grid-item" style="background-image: url(<?php echo $about_image4['url']; ?>);"></div>
				</div>
			</div>
		</div> <!-- END fh5co-about -->

		<div id="fh5co-services" data-section="services">
			<div class="fh5co-video"><a href="<?php echo $video_url; ?>" class="popup-vimeo"><i class="icon-play2"></i></a></div>
			<div class="container">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $services_title ?></h2>
					<p><?php echo $services_text?></p>
				</div>
				<?php $loop = new WP_Query(array('post_type' => 'services', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
				<?php while($loop->have_posts()) : $loop->the_post(); ?>
				<div class="col-md-4">
					<div class="service">
						<div class="icon"><i class="<?php the_field('service_icon'); ?>"></i></div>
						<h3><?php the_field('service_title'); ?></h3>
						<p><?php the_field('service_text'); ?></p>
					</div>
				</div>
			<?php endwhile; wp_reset_query(); ?>
				
				
				
				
				
				<div class="col-md-12 text-center">
					<p><a href="#" class="btn btn-primary btn-outline">Get In Touch</a></p>
				</div>

			</div>

		</div> <!-- END fh5co-services -->
		
		<div id="fh5co-gallery">
			<?php $loop = new WP_Query(array('post_type' => 'gallary', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
				<?php while($loop->have_posts()) : $loop->the_post(); ?>
					<?php 
					$gimg = get_field('gallary_image');
					?>
			<a href="<?php echo $gimg['url']; ?>" class="fh5co-item image-popup" style="background-image: url(<?php echo $gimg['url']; ?>)">
				<div class="fh5co-overlay"></div>
				<div class="fh5co-copy">
					<div class="fh5co-copy-inner">
						<h2><?php the_field('gallary_title'); ?></h2>
						<h3><?php the_field('gallary_category'); ?></h3>
					</div>
				</div>
			</a>
			<?php endwhile; wp_reset_query(); ?>
			
			
			
			
		</div> <!-- END fh5co-gallery -->

		<div id="fh5co-team" data-section="team">
			<div class="container">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $teamtitle; ?></h2>
					<p><?php echo $teamtext; ?></p>
				</div>

				<?php $loop = new WP_Query(array('post_type' => 'team', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
				<?php while($loop->have_posts()) : $loop->the_post(); ?>
					<?php 
					$empimg = get_field('employee_image');
					?>
				
				<div class="col-md-4">
					<div class="person">
						<img src="<?php echo $empimg['url']; ?>" alt="" class="img-responsive">
						<h3><?php the_field('employee_name'); ?></h3>
						<h4><?php the_field('employee_job'); ?></h4>
						<p><?php the_field('employee_text'); ?></p>
						<ul class="social">
							<li><a href="<?php the_field('employee_facebook'); ?>"><i class="icon-facebook"></i></a></li>
							<li><a href="<?php the_field('employee_twitter'); ?>"><i class="icon-twitter"></i></a></li>
							<li><a href="<?php the_field('employee_behance'); ?>"><i class="icon-behance"></i></a></li>
							<li><a href="<?php the_field('employee_intagram'); ?>"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<?php endwhile; wp_reset_query(); ?>
			</div>
		</div> <!-- END fh5co-team -->

		<div id="fh5co-contact" data-section="contact">
			<div class="container">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $contacttitle; ?></h2>
					<p><?php echo $contacttext; ?></p>
				</div>
				<form action="#" method="post">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Your name">
							</div>		
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Your email">
							</div>		
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Your message"></textarea>
							</div>		
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" name="submit" value="Send message" class="btn btn-primary btn-outline">
							</div>
						</div>
					</div>
					
				</form>



<?php get_footer(); ?>