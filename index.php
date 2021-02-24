<?php get_header();?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo get_template_directory_uri();?>/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread"><?php the_title();?></h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo site_url();?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span><?php the_title();?> <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section bg-light">
			<div class="container">
			<div class="row">
			<?php while(have_posts()): the_post();?>
			  <div class="col-md-4 ftco-animate">
				<div class="blog-entry">
				  <a href="<?php the_permalink();?>" class="block-20" style="background-image: url('<?php the_post_thumbnail_url();?>');">
					<div class="meta-date text-center p-2">
					  <span class="day"><?php the_time('j');?></span>
					  <span class="mos"><?php the_time('F');?></span>
					  <span class="yr"><?php the_time('Y');?></span>
					</div>
				  </a>
				  <div class="text bg-white p-4">
					<h3 class="heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
					<p><?php the_excerpt();?></p>
					<div class="d-flex align-items-center mt-4">
						<p class="mb-0"><a href="<?php the_permalink();?>" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
						<p class="ml-auto mb-0">
							<a href="#" class="mr-2"><?php the_author();?></a>
							<a href="<?php the_permalink();?>" class="meta-chat"><span class="icon-chat"></span><?php comments_popup_link('0','1','% comment','style-comment','Comment Disabled');?></a>
						</p>
					</div>
				  </div>
				</div>
			  </div>
			<?php endwhile;?>  
			
			</div>
        <div class="row no-gutters my-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
			</div>
		</section>

<?php get_footer();?>