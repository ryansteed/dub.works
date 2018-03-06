<?php
	$baseUri = $prefixUri;
	$postsUri = $postsPath;
	
	$blogUri = "blog";
	$blogPath = $postsPath."/".$blogUri;
	$blogImgUri = $blogUri."/";

	$eventsUri = "events";
	$eventsPath = $postsPath."/".$eventsUri;
	$eventImgUri = $imgUri.$eventsUri."/";

	$projectsUri = "projects";
	$projectsPath = $postsPath."/".$projectsUri;
	$projectImgUri = $imgUri.$projectsUri."/";
	
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
	$baseImageUrl = ( $httpSecure ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $imgUri;

	$posts = array();
	$dir = new DirectoryIterator($blogPath);
	foreach ($dir as $fileinfo) {
	    if (!$fileinfo->isDot()) {
	    	$filename = $fileinfo->getFilename();
	        $string = file_get_contents($blogPath."/".$filename);
	        $json_data = json_decode($string,true);
	        $data = array(
	        	"file" => $blogUri."/".$filename,
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