<?php
	$baseUri = $prefixUri;
	$postsUri = $postsPath."/";
	$postUri = $prefixUri."post.php";
	$imgUri = "img/";
	$blogImgUri = $imgUri."blog/";


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
	    	$filename = $fileinfo->getFilename();
	        $string = file_get_contents($postsUri.$filename);
	        $json_data = json_decode($string,true);
	        $data = array(
	        	"file" => $filename,
	        	"author" => $json_data["author"],
	        	"date" => $json_data["date"],
	        	"title" => $json_data["title"],
	        	"blog" => $json_data["blog"],
	        );
	        array_push($posts,$data);
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

	// Finding files on server
	// Look for the fiel on disk, now senstiive to symlinks
	$jsonFile =  $postsPath.$pathInfo;
	if ( ! file_exists ( $jsonFile ) ) {
	   if ( ! is_link( $jsonFile ) ) { 
	    die("No Such File or Link: " . $jsonFile);
	   }
	} else {
	    $string = file_get_contents($jsonFile);
	    $json_data = json_decode($string,true);
	}
?>