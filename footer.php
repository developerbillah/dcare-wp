    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
            	<?php dynamic_sidebar('footer_sidebar1');?>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
            	<?php dynamic_sidebar('footer_sidebar2');?>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
            	<?php dynamic_sidebar('footer_sidebar3');?>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
            	<?php dynamic_sidebar('footer_sidebar4');?>
            </div>
          </div>
        </div>
        <div class="row">
		
		<?php 
			$config = get_option('dcare_options');
		?>
		
          <div class="col-md-12 text-center">

            <p><?php echo $config['footer_text'];?></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
	<?php wp_footer();?>
  </body>
</html>