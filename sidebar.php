<div id="sidebar1" class="sidebar m-all t-1of3 d-2of7 last-col cf" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar1' ); ?>

		<div class="widget badges">
	    <h2 class="widget-header">Making your shopping easy</h2>
	    <a href='http://www.ebates.com/rf.do?referrerid=4G6sn%2FOAxiTD1BWHKGOU5A%3D%3D' target='_blank' rel='nofollow'><img src='http://www.ebates.com/referral/2012/global_files/images/ebates_logo.png' alt='Ebates Coupons and Cash Back' height='31' width='171' border='0'/></a>
	  </div>

		<div class="widget badges">
			<h2 class="widget-header">Featured:</h2>
			<a class="centered" id="roadkill-rescue" href="http://roadkillrescue.net/2012/02/tree-stump-table/"><img src="http://roadkillrescue.net/buttonImages/Rescuer.png" target="_blank"/></a>
		</div>

	<?php else : ?>

		<?php
			/*
			 * This content shows up if there are no widgets defined in the backend.
			*/
		?>

		<div class="no-widgets">
			<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
		</div>

	<?php endif; ?>

</div>