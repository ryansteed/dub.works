<?php
	$baseUri     = $prefixUri;

	$pathInfo = $_SERVER['PATH_INFO'];

	// The fully formed URL to the problem file.
	// Special Cloudflare logic to detect forwarded SSL  2015Feb25 Brockman
	$httpSecure = false;
	if ( ! empty($_SERVER['HTTPS']) ) { $httpSecure = true; }
	if ( ! empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' ) { $httpSecure = true; }

	$baseUrl = ( $httpSecure ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $baseUri;
?>