<?php
	$baseUri = $prefixUri;
	$postsUri = "posts/";
	$postUri = $prefixUri."post.php";

	$pathInfo = $_SERVER['PATH_INFO'];

	// The fully formed URL to the problem file.
	// Special Cloudflare logic to detect forwarded SSL  2015Feb25 Brockman
	$httpSecure = false;
	if ( ! empty($_SERVER['HTTPS']) ) { $httpSecure = true; }
	if ( ! empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' ) { $httpSecure = true; }

	$baseUrl = ( $httpSecure ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $baseUri;
	$postFile = $pathInfo;
	$postUrl = ( $httpSecure ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $postUri . $pathInfo;
	$basePostUrl = ( $httpSecure ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $postUri;

	$posts = array();
	$dir = new DirectoryIterator($postsUri);
	foreach ($dir as $fileinfo) {
	    if (!$fileinfo->isDot()) {
	        $string = file_get_contents($postsUri.$fileinfo->getFilename());
	        $json_data = json_decode($string,true);
	        $json_data["file"] = $fileinfo->getFilename();
	        array_push($posts, $json_data);
	    }
	}

	// sort by date
	date_default_timezone_set("America/New_York");
	function sortFunction( $a, $b ) {
    	return  strtotime($b["date"]) - strtotime($a["date"]);
	}
	usort($posts, "sortFunction");

	// // read the title value
	// $title = $jfo->result->title;
	// // copy the posts array to a php var
	// $posts = $jfo->result->posts;
?>