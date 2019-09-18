<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>
<div id="mainTopBar" class="grid-container">
	<div class="grid-x align-center-middle set-height">
		<div class="cell tablet-12 align-center text-center show-for-tablet">
			<div class="cell location-logo">
				<a class="main-logo" href="<?php echo home_url(); ?>">
					<img class="main-logo-clear" src="https://s3.amazonaws.com/outlawdirtymoney/wp-content/uploads/2019/09/06171725/ODM-logo-white-1.png" alt="outlaw dirty money logo" srcset="https://s3.amazonaws.com/outlawdirtymoney/wp-content/uploads/2019/09/06171725/ODM-logo-white-1.png 2x"/>
				</a>
			</div>
		</div>
			<div class="top-bar" id="top-bar-menu">
				<div class="show-for-tablet">
					<nav class="menu" role="navigation" aria-label="<?php _e( 'Menu', 'jointswp' ); ?>">
						<?php joints_top_nav(); ?>
					</nav>
				</div>
				<div class="top-bar-right float-right hide-for-tablet">
					<a class="mobile-logo" style="max-width:145px" href="<?php echo home_url(); ?>">
						<img src="https://s3.amazonaws.com/outlawdirtymoney/wp-content/uploads/2019/09/06172049/ODM-Logo-for-black-bkgrnd.png" alt="mobile outlaw dirty money logo" srcset="https://s3.amazonaws.com/outlawdirtymoney/wp-content/uploads/2019/09/06172049/ODM-Logo-for-black-bkgrnd.png 2x"/>
					</a>
					<nav class="menu align-right" role="navigation" aria-label="<?php _e( 'Menu', 'jointswp' ); ?>">
					<a data-toggle="off-canvas" class="menu-button" id="menuButton"><?php ( 'jointswp' ); ?>
							<span class="menu-text">Menu</span>
                            <span class="burger-icon" aria-hidden="true"></span>
                        </a>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
