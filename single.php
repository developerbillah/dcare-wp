<?php get_header();?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread"><?php the_title();?></h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo site_url();?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><?php the_title();?></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
			<div class="container">
				<div class="row">
          <div class="col-lg-8 ftco-animate">
		  
		  <?php while(have_posts()){
			  the_post();?>
			  
			<h2 class="mb-3"><?php the_title()?></h2>
              <?php the_post_thumbnail();?>
            <p>
				<?php the_content();?>
            </p>
			  
		  <?php 	  
		  }
		  ?>

            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="<?php the_permalink();?>"><?php the_tags();?></a>
              </div>
            </div>



            <div class="pt-5 mt-5">
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <form action="#" class="p-5 bg-light">
					<?php comments_template();?>
                </form>
              </div>
            </div>
          </div> <!-- .col-md-8 -->

          <div class="col-lg-4 sidebar ftco-animate">
		  
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
			
            <?php dynamic_sidebar('blog_single_sidebar');?>

          </div><!-- END COL -->
        </div>
			</div>
		</section>

<?php get_footer();?>