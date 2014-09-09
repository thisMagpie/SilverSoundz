			<footer class="footer" role="contentinfo">
			
				<div id="inner-footer" class="wrap clearfix">
					
					<nav role="navigation">
    					<?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
	        </nav>
             		
					<p class="attribution">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Built by <a href="http://thismagpie.com">This Magpie</a></p>

         <!-- </div>  end #header-top -->
			</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		</div> <!-- end #container -->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
	</body>
</html> <!-- end page. what a ride! -->
