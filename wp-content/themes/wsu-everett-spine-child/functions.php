<?php

add_action( 'wp_head', 'wsu_everett_ga_script' );
function wsu_everett_ga_script() {
	?><!-- ANALYTICS --><script id="tracker_agent" src="http://images.wsu.edu/javascripts/tracking/bootstrap_v3.js?gacode=UA-48539105-2&loading=element_v2&domainName=everett.wsu.edu" type="text/javascript"></script><?php
}