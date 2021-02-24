<?php
/*
Template Name: Home
*/
get_header();?>
    
    <section class="home-slider owl-carousel">
	
	<?php 
		   $args = array(
               'post_type' => 'sliders',
               'posts_per_page' => 3
            );
            $query = new WP_Query($args);
            while($query -> have_posts()){
               $query -> the_post();

               $heading_highlighter = get_field('heading_highlighter');
			   $heading_normal = get_field('heading_normal');
			   $description = get_field('description');
               $btn_text = get_field('button_text');
               $btn_link = get_field('button_url');
	?>
	
      <div class="slider-item" style="background-image:url('<?php the_post_thumbnail_url();?>');" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 text ftco-animate">
            <h1 class="mb-4"><?php echo $heading_highlighter;?> <span> <?php echo $heading_normal;?></span></h1>
            <h3 class="subheading"><?php echo $description;?></h3>
            <p><a href="<?php echo $btn_link;?>" class="btn btn-secondary px-4 py-3 mt-3"><?php echo $btn_text;?></a></p>
          </div>
        </div>
        </div>
      </div>

	<?php 
		}
		wp_reset_postdata();
	?>		

    </section>
	
	<?php 
		$config = get_option('dcare_options');
	?>

    <section class="ftco-services ftco-no-pb">
			<div class="container">
				<div class="row no-gutters">
				
				<?php 
					$args = array(
						'post_type' => 'services',
						'posts_per_page' => 4,
						'orderby' => 'menu_order',
						'order' => 'ASC'
					);
					$query = new WP_Query($args);
					
					while($query -> have_posts()){
						$query -> the_post();
						$service_icon = get_field('service_icon');
				?>				
				
				  <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
					<div class="media block-6 d-block text-center">
					  <div class="icon d-flex justify-content-center align-items-center">
							<span><?php echo $service_icon;?></span>
					  </div>
					  <div class="media-body p-2 mt-3">
						<h3 class="heading"><?php the_title();?> </h3>
						<?php the_content();?>
					  </div>
					</div>      
				  </div>
				  
				<?php 
					}
				?>
				</div>
			</div>
		</section>
		

		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
							
				<?php 
					$args = array(
						'post_type' => 'about',
						'posts_per_page' => 1,
					);
					$query = new WP_Query($args);
					
					while($query -> have_posts()){
						$query -> the_post();
						$about_des = get_field('about_des');
				?>		
			
				<div class="row no-gutters">
					<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(<?php the_post_thumbnail_url();?>);">
					</div>
					<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
	          <div class="heading-section mb-5">
	          	<div class="pl-md-5 ml-md-5">
		          	<span class="subheading">About Dr.care</span>
		            <h2 class="mb-4" style="font-size: 28px;"><?php the_title();?></h2>
	            </div>
	          </div>
	          <div class="pl-md-5 ml-md-5 mb-5">
							<p><?php echo $about_des;?></p>
							<div class="row mt-5 pt-2">
							<?php
								 $about_features = $config['about_fe_lists'];
								 if($about_features){
					
						   
								   foreach($about_features as $about_feature)
								   {
									
							?>
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span><i class="<?php echo $about_feature['about_fe_icon'];?>"></i></span></div>
										<div class="text">
											<h3><?php echo $about_feature['about_fe_title'];?></h3>
											<p><?php echo $about_feature['about_fe_des'];?></p>
										</div>
									</div>
								</div>
								
							<?php 
								}
							}	
							?>

							</div>
						</div>
					</div>
				</div>
				
				<?php 
					}
				?>
			</div>
		</section>
		
		<section class="ftco-intro" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h2><?php echo $config['cta_title'];?></h2>
						<p class="mb-0"><?php echo $config['cta_subtitle'];?></p>
						<p></p>
					</div>
					<div class="col-md-3 d-flex align-items-center">
						<p class="mb-0"><a href="<?php echo $config['cta_btn_url'];?>" class="btn btn-secondary px-4 py-3"><?php echo $config['cta_btn_txt'];?></a></p>
					</div>
				</div>
			</div>
		</section>
		
	<?php 
		$config = get_option('dcare_options');
	?>	

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading"><?php echo $config['deapartment_sec_subtitle'];?></span>
            <h2 class="mb-4"><?php echo $config['depart_sec_title'];?></h2>
            <p><?php echo $config['department_sec_des'];?></p>
          </div>
        </div>
    		<div class="ftco-departments">
					<div class="row">
            <div class="col-md-12 nav-link-wrap">
	            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	              <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Neurology</a>

	              <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Surgical</a>

	              <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Dental</a>

	              <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Ophthalmology</a>

	              <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Cardiology</a>

	            </div>
	          </div>
	          <div class="col-md-12 tab-wrap">
	            
	            <div class="tab-content bg-light p-4 p-md-5 ftco-animate" id="v-pills-tabContent">

	              <div class="tab-pane py-2 fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
				  							<?php 
												   $args = array(
													   'post_type' => 'features',
													   'posts_per_page' => 1,
													   'tax_query' => array(
															array(
																'taxonomy' => 'featured-cat',
																'field'    => 'slug',
																'terms'    => 'neurological',
															),
													   )
													);
													$query = new WP_Query($args);
													while($query -> have_posts()){
													   $query -> the_post();
													   $title = get_field('title');
													   $fetured_description = get_field('fetured_description');
													   $featured_icon = get_field('featured_icon');
							?>
	              	<div class="row departments">
	              		<div class="col-lg-4 order-lg-last d-flex align-items-stretch">
	              			<div class="img d-flex align-self-stretch" style="background-image: url('<?php the_post_thumbnail_url();?>');"></div>
	              		</div>
	              		<div class="col-lg-8">
	
	              			<h2><?php the_title();?></h2>
	              			<p><?php the_content();?></p>
								<div class="row mt-5 pt-2">
							<?php
								 $nuro_features = $config['nuro_featured_lists'];
								 if($nuro_features){
					
						   
								   foreach($nuro_features as $nuro_feature)
								   {
									
							?>
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span><i class="<?php echo $nuro_feature['nuro_featured_icon'];?>"></i></span></div>
										<div class="text">
											<h3><?php echo $nuro_feature['nuro_featured_title'];?></h3>
											<p><?php echo $nuro_feature['nuro_featured_des'];?></p>
										</div>
									</div>
								</div>
								
							<?php 
								}
							}	
							?>
								</div>
									
	              		</div>
	              	</div>
							 <?php 
								}
								wp_reset_postdata();
							?>					
	              </div>

	              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
				  							<?php 
												   $args = array(
													   'post_type' => 'features',
													   'posts_per_page' => 1,
													   'tax_query' => array(
															array(
																'taxonomy' => 'featured-cat',
																'field'    => 'slug',
																'terms'    => 'surgical',
															),
													   )
													);
													$query = new WP_Query($args);
													while($query -> have_posts()){
													   $query -> the_post();
													   $title = get_field('title');
													   $fetured_description = get_field('fetured_description');
													   $featured_icon = get_field('featured_icon');
							?>
	              	<div class="row departments">
	              		<div class="col-lg-4 order-lg-last d-flex align-items-stretch">
	              			<div class="img d-flex align-self-stretch" style="background-image: url('<?php the_post_thumbnail_url();?>');"></div>
	              		</div>
	              		<div class="col-lg-8">
	
	              			<h2><?php the_title();?></h2>
	              			<p><?php the_content();?></p>
								<div class="row mt-5 pt-2">
							<?php
								 $surgical_features = $config['surgical_featured_lists'];
								 if($surgical_features){
					
						   
								   foreach($surgical_features as $surgical_feature)
								   {
									
							?>
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span><i class="<?php echo $surgical_feature['surgical_featured_icon'];?>"></i></span></div>
										<div class="text">
											<h3><?php echo $surgical_feature['surgical_featured_title'];?></h3>
											<p><?php echo $surgical_feature['surgical_featured_des'];?></p>
										</div>
									</div>
								</div>
								
							<?php 
								}
							}	
							?>
								</div>
									
	              		</div>
	              	</div>
							 <?php 
								}
								wp_reset_postdata();
							?>					
	              </div>
				  
				  
	              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
				  							<?php 
												   $args = array(
													   'post_type' => 'features',
													   'posts_per_page' => 1,
													   'tax_query' => array(
															array(
																'taxonomy' => 'featured-cat',
																'field'    => 'slug',
																'terms'    => 'dental',
															),
													   )
													);
													$query = new WP_Query($args);
													while($query -> have_posts()){
													   $query -> the_post();
													   $title = get_field('title');
													   $fetured_description = get_field('fetured_description');
													   $featured_icon = get_field('featured_icon');
							?>
	              	<div class="row departments">
	              		<div class="col-lg-4 order-lg-last d-flex align-items-stretch">
	              			<div class="img d-flex align-self-stretch" style="background-image: url('<?php the_post_thumbnail_url();?>');"></div>
	              		</div>
	              		<div class="col-lg-8">
	
	              			<h2><?php the_title();?></h2>
	              			<p><?php the_content();?></p>
								<div class="row mt-5 pt-2">
							<?php
								 $dental_features = $config['dental_featured_lists'];
								 if($dental_features){
					
						   
								   foreach($dental_features as $dental_feature)
								   {
									
							?>
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span><i class="<?php echo $dental_feature['dental_featured_icon'];?>"></i></span></div>
										<div class="text">
											<h3><?php echo $dental_feature['dental_featured_title'];?></h3>
											<p><?php echo $dental_feature['dental_featured_des'];?></p>
										</div>
									</div>
								</div>
								
							<?php 
								}
							}	
							?>
								</div>
									
	              		</div>
	              	</div>
							 <?php 
								}
								wp_reset_postdata();
							?>	
	              </div>

	              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
				  							<?php 
												   $args = array(
													   'post_type' => 'features',
													   'posts_per_page' => 1,
													   'tax_query' => array(
															array(
																'taxonomy' => 'featured-cat',
																'field'    => 'slug',
																'terms'    => 'ophthalmology',
															),
													   )
													);
													$query = new WP_Query($args);
													while($query -> have_posts()){
													   $query -> the_post();
													   $title = get_field('title');
													   $fetured_description = get_field('fetured_description');
													   $featured_icon = get_field('featured_icon');
							?>
	              	<div class="row departments">
	              		<div class="col-lg-4 order-lg-last d-flex align-items-stretch">
	              			<div class="img d-flex align-self-stretch" style="background-image: url('<?php the_post_thumbnail_url();?>');"></div>
	              		</div>
	              		<div class="col-lg-8">
	
	              			<h2><?php the_title();?></h2>
	              			<p><?php the_content();?></p>
								<div class="row mt-5 pt-2">
							<?php
								 $oph_features = $config['oph_featured_lists'];
								 if($oph_features){
					
						   
								   foreach($oph_features as $oph_feature)
								   {
									
							?>
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span><i class="<?php echo $oph_feature['oph_featured_icon'];?>"></i></span></div>
										<div class="text">
											<h3><?php echo $oph_feature['oph_featured_title'];?></h3>
											<p><?php echo $oph_feature['oph_featured_des'];?></p>
										</div>
									</div>
								</div>
								
							<?php 
								}
							}	
							?>
								</div>
									
	              		</div>
	              	</div>
							 <?php 
								}
								wp_reset_postdata();
							?>	
	              </div>

	              <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-day-5-tab">
				  							<?php 
												   $args = array(
													   'post_type' => 'features',
													   'posts_per_page' => 1,
													   'tax_query' => array(
															array(
																'taxonomy' => 'featured-cat',
																'field'    => 'slug',
																'terms'    => 'cardiology',
															),
													   )
													);
													$query = new WP_Query($args);
													while($query -> have_posts()){
													   $query -> the_post();
													   $title = get_field('title');
													   $fetured_description = get_field('fetured_description');
													   $featured_icon = get_field('featured_icon');
							?>
	              	<div class="row departments">
	              		<div class="col-lg-4 order-lg-last d-flex align-items-stretch">
	              			<div class="img d-flex align-self-stretch" style="background-image: url('<?php the_post_thumbnail_url();?>');"></div>
	              		</div>
	              		<div class="col-lg-8">
	
	              			<h2><?php the_title();?></h2>
	              			<p><?php the_content();?></p>
								<div class="row mt-5 pt-2">
							<?php
								 $cardiology_features = $config['cardiology_featured_lists'];
								 if($cardiology_features){
					
						   
								   foreach($cardiology_features as $cardiology_feature)
								   {
									
							?>
								<div class="col-lg-6">
									<div class="services-2 d-flex">
										<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span><i class="<?php echo $cardiology_feature['cardiology_featured_icon'];?>"></i></span></div>
										<div class="text">
											<h3><?php echo $cardiology_feature['cardiology_featured_title'];?></h3>
											<p><?php echo $cardiology_feature['cardiology_featured_des'];?></p>
										</div>
									</div>
								</div>
								
							<?php 
								}
							}	
							?>
								</div>
									
	              		</div>
	              	</div>
							 <?php 
								}
								wp_reset_postdata();
							?>	
						  
						</div>
					  </div>
					</div>
				</div>
				</div>
			</section>
		
		<section class="ftco-section ftco-no-pt">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading"><?php echo $config['team_sec_subtitle'];?></span>
            <h2 class="mb-4"><?php echo $config['team_sec_title'];?></h2>
            <p><?php echo $config['team_sec_des'];?></p>
          </div>
        </div>	
				<div class="row">
				
					<?php 
					   $args = array(
						   'post_type' => 'teams',
						   'posts_per_page' => 4
						);
						$query = new WP_Query($args);
						while($query -> have_posts()){
						   $query -> the_post();

						   $doctor_name = get_field('doctor_name');
						   $designation = get_field('designation');
						   $doctors_bio = get_field('doctor_s_bio');
						   $twitter = get_field('twitter');
						   $facebook = get_field('twitter');
						   $instagram = get_field('instagram');
					?>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url('<?php the_post_thumbnail_url();?>');"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3><?php echo $doctor_name;?></h3>
								<span class="position mb-2"><?php echo $designation;?></span>
								<div class="faded">
								   <p><?php echo $doctors_bio;?></p>
								   <ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="<?php echo $twitter;?>"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="<?php echo $facebook;?>"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="<?php echo $instagram;?>"><span class="icon-instagram"></span></a></li>
								  </ul>
							   </div>
							</div>
						</div>
					</div>
				<?php 
						}
				?>

				</div>
			</div>
		</section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
		<?php 
			$config['testimonials_options'];
		?>
			
			<div class="col-md-8 text-center heading-section ftco-animate">
				<span class="subheading"><?php echo $config['testimonials_sec_subtitle'];?></span>
				<h2 class="mb-4"><?php echo $config['testimonials_sec_title'];?></h2>
				<p><?php echo $config['testimonials_sec_des'];?></p>
			</div>


          
		  
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-8">
            <div class="carousel-testimony owl-carousel">
			
			   <?php
				$args = array(
				   'post_type' => 'testimonials',
				   'posts_per_page' => -1
				);
				$query = new WP_Query($args);
				while($query -> have_posts()){
				   $query -> the_post();

				   $review = get_field('review');
				   $name = get_field('name');
				   $designation = get_field('designation');
				?>

  
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url('<?php the_post_thumbnail_url();?>')">
                  </div>
                  <div class="text ml-2 bg-light">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p><?php echo $review;?></p>
                    <p class="name"><?php echo $name;?></p>
                    <span class="position"><?php echo $designation;?></span>
                  </div>
                </div>
              </div>
			  <?php 
				}
				wp_reset_postdata();
			  ;?>	
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 py-5 pr-md-5">
	          <div class="heading-section heading-section-white ftco-animate mb-5">
	          	<span class="subheading">Consultation</span>
	            <h2 class="mb-4">Free Consultation</h2>
	            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	          </div>
	          <form action="#" class="appointment-form ftco-animate">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="First Name">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Last Name">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		    					<div class="form-field">
          					<div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                      	<option value="">Select Your Services</option>
                        <option value="">Neurology</option>
                        <option value="">Cardiology</option>
                        <option value="">Dental</option>
                        <option value="">Ophthalmology</option>
                        <option value="">Other Services</option>
                      </select>
                    </div>
		              </div>
		    				</div>
	    					<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Phone">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-md-calendar"></span></div>
		            		<input type="text" class="form-control appointment_date" placeholder="Date">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-ios-clock"></span></div>
		            		<input type="text" class="form-control appointment_time" placeholder="Time">
	            		</div>
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		              <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
		            </div>
		            <div class="form-group ml-md-4">
		              <input type="submit" value="Appointment" class="btn btn-secondary py-3 px-4">
		            </div>
	    				</div>
	    			</form>
    			</div>
    			<div class="col-lg-6 p-5 bg-counter aside-stretch">
						<h3 class="vr">About Dr.Care Facts</h3>
    				<div class="row pt-4 mt-1">
					
				  <?php
					 $counters = $config['counter_lists'];
					 if($counters){
		
               
					   foreach($counters as $counter)
					   {
						
					?>
					
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 p-5 bg-light">
		              <div class="text">
		                <strong class="number" data-number="<?php echo $counter['counter_number'];?>">0</strong>
		                <span><?php echo $counter['counter_title'];?></span>
		              </div>
		            </div>
		          </div>
				  
					  <?php
				   }
				}
				?>
				
	          </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading"><?php echo $config['pricing_sec_subtitle'];?></span>
            <h2 class="mb-4"><?php echo $config['pricing_sec_title'];?></h2>
            <p><?php echo $config['pricing_sec_des'];?></p>
          </div>
        </div>
    		<div class="row">
			
			
			<?php
				$args = array(
				   'post_type' => 'package',
				   'posts_per_page' => 4
				);
				$query = new WP_Query($args);
				while($query -> have_posts()){
				   $query -> the_post();

				   $package_price = get_field('package_price');
				   $duration = get_field('duration');
				   $package_featured = get_field('package_featured');
			
				   $button_text = get_field('button_text');
				   $button_url = get_field('button_url');
				   $button_url = get_field('button_url');
            ?>
			
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
        			<div>
	        			<h3 class="mb-4"><?php the_title();?></h3>
	        			<p><span class="price">$<?php echo $package_price;?>  </span> <span class="per">/ <?php echo $duration;?></span></p>
	        		</div>
        			<ul>
        				<li><?php echo $package_featured['feature_one'];?> </li>
        				<li><?php echo $package_featured['feature_two'];?> </li>
        				<li><?php echo $package_featured['featured_three'];?> </li>
        				<li><?php echo $package_featured['featured_four'];?> </li>
        				<li><?php echo $package_featured['featured_five'];?> </li>
        				<li><?php echo $package_featured['featured_six'];?> </li>
        			</ul>
        			<p class="button text-center"><a href="<?php echo $button_url;?>" class="btn btn-primary px-4 py-3"><?php echo $button_text;?></a></p>
        		</div>
        	</div>
			<?php 
				}
				wp_reset_postdata();
			?>	

        </div>
    	</div>
    </section>

		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
					<div class="col-md-8 text-center heading-section ftco-animate">
						<span class="subheading"><?php echo $config['blog_sec_subtitle'];?></span>
						<h2 class="mb-4"><?php echo $config['blog_sec_title'];?></h2>
						<p><?php echo $config['blog_sec_des'];?></p>
					</div>
				</div>
				<div class="row">
					<?php
						$args = array(
						   'post_type' => 'post',
						   'posts_per_page' => 3
						);
						$query = new WP_Query($args);
						while($query -> have_posts()){
						   $query -> the_post();
					?>
				  <div class="col-md-4 ftco-animate">
					<div class="blog-entry">
					  <a href="blog-single.html" class="block-20" style="background-image: url('<?php the_post_thumbnail_url();?>');">
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
								<a href="#" class="meta-chat"><span class="icon-chat"></span><?php comments_popup_link('0','1','% comment','style-comment','Comment Disabled');?></a>
							</p>
						</div>
					  </div>
					</div>
				  </div>
				  <?php 
						}
				  ;?>

				</div>
			</div>
		</section>

		
<?php get_footer();?>