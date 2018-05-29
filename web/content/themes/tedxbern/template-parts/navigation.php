<nav class="main-navigation">
	<a class="menu-toggle">
		<?php /* ?> <span class="label"><?php _e( 'menu', 'atomic' ); ?></span> <?php */ ?>
		<span class="hamburger">
			<span class="bar"></span>
			<span class="bar"></span>
			<span class="bar"></span>
		</span>
	</a>
	<div class="nav-drawer">
		<div class="navigation-tools">
			<?php if ( defined( 'POLYLANG_VERSION' ) ): 
		 		if(count(pll_languages_list()) > 1): ?>
					<ul class="multilang-dropdown">
                        <li><a href=""><?php echo pll_current_language(); ?></a>
                            <span class="dropdown-container">
                                <ul>
                                    <?php pll_the_languages(); ?>
                                </ul>
                            </span>
                        </li>
                    </ul>

				<?php endif; ?>
			<?php endif; ?>
			<?php /* ?>
		    <div class="search-bar">
		        <div class="search-and-submit">
		        	<?php get_search_form(); ?>
		        </div>
		    </div>
	    	<a href="javascript:void(0)" class="sign-up">Sign Up</a>
			<?php */ ?>
		</div>
		<?php
			wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => '', 'depth' => 1 ) );
         ?>	
	</div>
</nav><!-- main-navigation -->