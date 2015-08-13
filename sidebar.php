<div id="sidebar1" class="sidebar m-all t-1of3 d-2of7 last-col cf" role="complementary">

	<div class="widget">
		<h4 class="widgettitle">Who are we?</h4>
		<p>1825 Steps is an attempt by 2 engineers to log everything we love, to mention a few: cooking, gardening. Who are we
Preeti: Dreamer, Rookie cook/baker, Sudoku addict
Zulu, aka L: Youtube Evangelist, a pretty awesome cook (added by Peetu ;) )
<a href="/about" title="click here for more">more..</a></p>
	</div>

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar1' ); ?>

		<div class="widget" id="pinterest-profile">
			<a data-pin-do="embedUser" href="http://www.pinterest.com/1825steps/" data-pin-scale-width="80" data-pin-scale-height="320" data-pin-board-width="336">Visit Preeti's profile on Pinterest.</a>
	<!-- Please call pinit.js only once per page -->
			<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
		</div>

		<div class="widget badges">
	    <h4 class="widgettitle">Making your shopping easy:</h4>
	    <a href='http://www.ebates.com/rf.do?referrerid=4G6sn%2FOAxiTD1BWHKGOU5A%3D%3D' target='_blank' rel='nofollow'><img src='http://www.ebates.com/referral/2012/global_files/images/ebates_logo.png' alt='Ebates Coupons and Cash Back' height='31' width='171' border='0'/></a>
	  </div>

		<div class="widget badges">
			<h4 class="widgettitle">Featured:</h4>
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
